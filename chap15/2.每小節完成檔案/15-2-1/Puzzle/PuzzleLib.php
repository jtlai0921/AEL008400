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
?>