<?php 
  function Upload_Resize_File($UploadfileID, $OriginalDir, $ThumbnailDir, $MaxLen)
  {	 
     // 1. 先判斷上傳至網站的暫存目錄是否有錯誤 
     if ($_FILES[$UploadfileID]['error']>0)
     {
        switch($_FILES[$UploadfileID]['error']>0)
        {
          case 1: die("ErrCode: 1 檔案大小超出 php.ini:upload_max_filesize 限制"); break;
          case 2: die("ErrCode: 2 檔案大小超出 max_file_size 限制"); break;
          case 3: die("ErrCode: 3 檔案僅被部份上傳,上傳不完整");	 break;		
          case 4: die("ErrCode: 4 檔案未被上傳");   break;
          case 6: die("ErrCode: 6 暫存目錄不存在"); break;
          case 7: die("ErrCode: 7 無法寫入到檔案"); break;
          case 8: die("ErrCode: 8 上傳停止");	 break;		
        }  
     }   
     // 2. 前面 1. 成功, 再將上傳至網站的暫存檔案搬至到另個目錄, 並存成不同檔名
     if(is_uploaded_file($_FILES[$UploadfileID]['tmp_name']))
     { 		   
        // 檢查是否為圖檔  
        $chkImg=getimagesize($_FILES[$UploadfileID]['tmp_name']);
        if (!$chkImg)
        {
           $return_msg="檔案上傳失敗";
           die("不是圖檔");	         		 
        }
        if(!is_dir($ThumbnailDir) || !is_writeable($ThumbnailDir))
        {
           $return_msg="檔案上傳失敗";
           die("目錄不存在或無法寫入");	         		 
        }
        $originalfilename = $_FILES[$UploadfileID]['name']; 
        $strTimeStamp = date("YmdHis");
        $server_filename = $OriginalDir. "/" . $strTimeStamp . "-". $originalfilename;      
        if (move_uploaded_file($_FILES[$UploadfileID]['tmp_name'], $server_filename))
        {		  		         
           $puzzle_filename= $ThumbnailDir . "/" . $strTimeStamp . "-" . $originalfilename;
           imageResize($server_filename, $puzzle_filename, $MaxLen); 	
           return $puzzle_filename;   // 回傳最後壓縮後的圖檔路徑
        }	
        else
           return "檔案上傳失敗";       
     }	   
  }  
  
  // 產生所有拼圖區塊圖檔 & 空白圖檔
  function Generate_PuzzleBlockFiles($PuzzleBlockImagedir, $TotalRowNum, $TotalColumnNum, $UnitWidth, $UnitHeight, $ImageType,	$Puzzle_Filename, $BlankImageFile)
  {	   	
    // 1. 先清除拼圖區塊目錄下所有檔案
    DeleteDirFiles($PuzzleBlockImagedir);
		
    // 2. 讀取完整拼圖縮圖圖檔, 產生拼圖不同區塊的圖檔	
    if (file_exists($Puzzle_Filename)) 
    {		  	  
	  // 2.1 讀取完整拼圖縮圖圖檔內容至記憶體, 將該記憶體位置存入資源變數
      switch ($ImageType)
      {  
         case 'GIF': $SrcImageID = imagecreatefromgif($Puzzle_Filename);  break;
         case 'JPEG': $SrcImageID = imagecreatefromjpeg($Puzzle_Filename); break;
      }       	
  	  // 2.2 計算每個拼圖區塊在完整拼圖縮圖圖檔中的座標  
      $RegionCount = $TotalRowNum * $TotalColumnNum;    	      		  
      $Array_Region = array();   
      for ($ImageNo = 0; $ImageNo < $RegionCount; $ImageNo++)
      {
      	$ImageNoStr = sprintf("%02d", $ImageNo);
        $Top = $UnitHeight * floor($ImageNo / $TotalColumnNum);
        $Left = $UnitWidth * ($ImageNo % $TotalColumnNum);
        $Array_Region[$ImageNo] = array('ImageNoStr'=>$ImageNoStr, 'top'=>$Top, 'left'=>$Left,);             
      }   	 	
	  
      // 2.3  將每個拼圖區塊寫到不同圖檔     
      foreach($Array_Region as $Region)
      {   
      	$ImageNoStr=$Region['ImageNoStr'];      
      	$SourceLeft=$Region['left'];
      	$SourceTop=$Region['top'];      	
      	// 2.3.1 配置用來放置拼圖區塊的記憶體空間, 截去無法整除的右邊和下面區域	
      	$TargetImageID = imagecreatetruecolor($UnitWidth, $UnitHeight);	
        // 2.3.2 將每個拼圖區塊逐一寫到圖檔          	    	
        imagecopy($TargetImageID, $SrcImageID, 0, 0, $SourceLeft, $SourceTop, $UnitWidth, $UnitHeight);      
        switch ($ImageType)
        {  	        
	       case 'GIF': imagegif($TargetImageID,  $PuzzleBlockImagedir . "/" . "Image".$ImageNoStr.".". $ImageType, 100);  break;
	       case 'JPEG': imagejpeg($TargetImageID, $PuzzleBlockImagedir . "/" . "Image".$ImageNoStr.".". $ImageType, 100);  break;
        }          
        imagedestroy($TargetImageID);
      }
      // 2.3.3. 釋放完整拼圖縮圖記憶體空間              
      imagedestroy($SrcImageID); 
	  
      // 3. 最後, 產生黑底白的字空白拼圖區塊, 寫到 BlankImage.XXX 
      $TargetImageID = imagecreatetruecolor($UnitWidth, $UnitHeight);	
      $WhiteColorID = imagecolorallocate($TargetImageID, 255, 255, 255);    //  取得純白色的色彩代碼  
      $Top=floor($UnitHeight/2);      
      imagestring($TargetImageID, 2, 10, $Top, "Move Picture Here", $WhiteColorID);  // 在圖形裡寫字
      switch ($ImageType)
      {  	        
        case 'GIF': imagegif($TargetImageID,  $PuzzleBlockImagedir . "/" . $BlankImageFile, 100);  break;
        case 'JPEG': imagejpeg($TargetImageID, $PuzzleBlockImagedir . "/" . $BlankImageFile, 100);  break;
      }   
    }
  }  
  
  // 以不規則順序排列所有拼圖區塊, 並顯示在表格中
  function Show_PuzzleBlocks($PuzzleBlockImagedir, $TotalRowNum, $TotalColumnNum, $UnitWidth, $UnitHeight, $ImageType, $BlankImageFile)
  {
    // 1. 產生錯亂的拼圖區塊位置     	  		  	
    $RegionCount = $TotalRowNum * $TotalColumnNum;          	
    $Array_ImageNo = array();
	  for ($i = 0; $i < $RegionCount; $i++)
	     $Array_ImageNo[$i] = $i;       
    shuffle($Array_ImageNo);   //將陣列內容錯亂, 以產生拼圖效果        
                        
    // 2. 以亂數選擇一個位置以顯示空白圖      	               
    $BlankImagePos = rand(0, $RegionCount-1);	
    echo "<script language='javascript'>\n";
    echo "  document.getElementById('BlankImagePos_Hidden').value =" . $BlankImagePos . ";";
    echo "</script>\n";
	    	                                     
    // 3. 將位置錯亂的拼圖以 HTML 表格顯示出來
    echo "<table>";
    for ($i = 0; $i < $TotalRowNum; $i++)  //列
    {
       echo "<tr>"; 
       for ($j = 0; $j < $TotalColumnNum; $j++)  //欄
       {
          $Pos=$i * $TotalColumnNum + $j;
          $PosStr = sprintf("%02d", $Pos);  
          $ImageNo = $Array_ImageNo[$Pos];	// 取出亂數產生的值, 做為要顯示的圖檔編號	        
          $ImageName = "Image" . sprintf("%02d", $ImageNo);
          if ($BlankImagePos<>$Pos)
             echo "<td><a href=\"#\"> <img width=\"$UnitWidth\" height=\"$UnitHeight\" src=\"$PuzzleBlockImagedir/".$ImageName.".".$ImageType."\" id=\"Image".$PosStr."\" onMouseDown=\"MouseDownProcess(".$Pos."); return false;\"> </img></a></td>";	        	     	   	              	     	   	
          else
             echo "<td><a href=\"#\"> <img width=\"$UnitWidth\" height=\"$UnitHeight\" src=\"$PuzzleBlockImagedir/$BlankImageFile\" id=\"Image".$PosStr."\" onMouseDown=\"MouseDownProcess(".$Pos."); return false;\"> </img></a></td>";	               	     	   	              	     	   	       	          	            
       }
       echo "</tr>";		  
    }
    echo "</table>";
  }
    
  // 將來源圖檔按照長寬比例產生縮圖
  function imageResize($srcfile, $destfile, $MaxLen)   // 縮圖 
  {
     if(file_exists($srcfile) && isset($destfile))
     {
        // 1. 取得來源圖檔資訊
        $srcSize=getimagesize($srcfile);
        $srcExtension=$srcSize[2];
        $srcW=$srcSize[0];
        $srcH=$srcSize[1];	
        // 2. 計算調整後的寬度與高度
        $srcRatio=$srcW/$srcH; 		
        if($srcRatio>1)  
        {
           $destW=$MaxLen;
           $destH=$destW/$srcRatio;   // 寬>高
        }
        else
        {
           $destH=$MaxLen;            // 高>=寬 
           $destW=$destH*$srcRatio;	 
        }  	 	 
     }
     // 3. 建立存放目的影像的記憶體空間
     $destImage=imagecreatetruecolor($destW, $destH);
     // 4. 建立存放來源影像的記憶體空間
     switch ($srcExtension)
     {  
        case IMAGETYPE_GIF: $srcImage=imagecreatefromgif($srcfile);  break;
        case IMAGETYPE_JPEG: $srcImage=imagecreatefromjpeg($srcfile); break;
     }
     // 5. 從來源影像的記憶體內容將影像依指定長寬按比例複製到目的影像的記憶體內容
     imagecopyresampled($destImage,$srcImage, 0,0,0,0, $destW, $destH, imagesx($srcImage), imagesy($srcImage));
     // 6. 將目的影像的記憶體內容寫到目的圖檔
     switch($srcExtension)
     { 
       case IMAGETYPE_GIF:imagegif($destImage, $destfile); break;
       case IMAGETYPE_JPEG:imagejpeg($destImage, $destfile, 85); break;
     }
     imagedestroy($srcImage); 
     imagedestroy($destImage); 
  }
  
  // 刪除目錄下的所有檔案
  function DeleteDirFiles($DirName)
  {
    if (is_dir($DirName))
    {
  	   $FileList = array();
       $FileList = scandir($DirName);
	     
  	   foreach($FileList as $FileName)        
  	     if ($FileName<>"." and $FileName<>".." and !(is_dir($FileName)))   
  	       @unlink($DirName . "/" . $FileName);              
     }
  }
  
  //讀取圖檔格式
  function GetImageTypeName($ImageFile)  //讀取圖檔格式	
  {
    $ImageFile=iconv("utf-8", "big5", $ImageFile);  
    $ImageSize=getimagesize($ImageFile); 
    $ImageExtension=$ImageSize[2];
			
   	// 1.2 判斷來源圖檔格式	
    switch ($ImageExtension)
    {  
       case 1: $ImageTypeName='GIF';  break;
       case 2: $ImageTypeName='JPEG';  break;
       default: { die('無法處理'); }
    }
    return $ImageTypeName;
  } 
  
  //讀取圖檔寬度	
  function GetImageWidth($ImageFile, $ImageType)  
  {
     if (file_exists($ImageFile)) 
     {		  	  
        switch ($ImageType)
        {  
           case 'GIF': $ImageID = imagecreatefromgif($ImageFile);  break;
           case 'JPEG': $ImageID = imagecreatefromjpeg($ImageFile); break;
		   default: return 0;
        }		 
     }      
     $ImageWidth = ImageSX($ImageID);
     imagedestroy($ImageID);
     return $ImageWidth;	  
  }
  
  //讀取圖檔高度	
  function GetImageHeight($ImageFile, $ImageType)  
  {
     if (file_exists($ImageFile)) 
     {		  	  
        switch ($ImageType)
        {  
           case 'GIF': $ImageID = imagecreatefromgif($ImageFile);  break;
           case 'JPEG': $ImageID = imagecreatefromjpeg($ImageFile); break;
           default: return 0;
        }		 
     }      
     $ImageHeight = ImageSY($ImageID);
     imagedestroy($ImageID);
     return $ImageHeight;	  
  }  
?>