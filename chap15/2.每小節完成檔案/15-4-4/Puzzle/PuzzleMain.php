<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>拼圖遊戲-PHP & JavaScript</title>
</head>
<body onMouseUp="MouseUpProcess(); return false;" onMouseMove="return false;"> 
  <script type="text/JavaScript">
     var TotalColumnNum, TotalRowNum;		  
  	 var BlankImagePos;
  	 var MouseDownX, MouseDownY, MouseDownImagePos, MouseDownRowIdx, MouseDownColIdx;   // MouseDown
  	 var MouseUpX,   MouseUpY,   MouseUpImagePos,   MouseUpRowIdx,   MouseUpColIdx;     // MouseUp
	 
     // 在文字前補 0
     function PaddingLeft(str,len)
     {
        if(str.length >= len)
          return str;
        else
          return PaddingLeft("0" +str,len);
     }  	 	 
	     
     // 檢查拼圖是否已完成, 若未完成, 則顯示有幾個位置正確   
     function CheckPuzzleFinished()
     {     	 	        
        TotalRowNum=document.getElementById('RowNum').value;
        TotalColumnNum=document.getElementById('ColumnNum').value;            
     
        PuzzleFinish="True";
        CorrectCount=0;
        for (i=0;i<TotalRowNum;i++)  //列
        {
	        for (j=0;j<TotalColumnNum;j++)  //欄
	        {
	          ImagePos=i*TotalColumnNum+j;	      		        
	       	  if (ImagePos!=BlankImagePos)
	      	  {
	             ImageName="Image"+PaddingLeft(ImagePos.toString(),2);	      	
	             eval("ImageSrc = document.images['"+ImageName+"'].src");	 
	             DotPos=ImageSrc.lastIndexOf(".");   // 取得檔名中最後一個 . 的位置
	             SrcImageNo=ImageSrc.substring(DotPos-2,DotPos);  // 取檔案中 . 的前兩碼		 	                    
	             if (ImagePos==SrcImageNo)            
	               CorrectCount++;
	             else 
	               PuzzleFinish="False"; 
	          }
	        }   	      	       
        } 
        if (PuzzleFinish=="True")
          alert("恭喜您!拼圖完成了");	      
        else 	      
          alert("拼圖不正確, 目前位置正確的區塊有"+CorrectCount+ "個, 請繼續"); 
     } 		 
		 
	 // 當按下滑鼠左鍵時, 取得按下時所在 X, Y 座標
     function MouseDownProcess(pos)
     {
        TotalColumnNum=document.getElementById('ColumnNum').value;
        MouseDownX = event.clientX;
        MouseDownY = event.clientY;
        MouseDownImagePos = pos;
        MouseDownRowIdx = Math.floor(pos/TotalColumnNum);
        MouseDownColIdx = pos%TotalColumnNum; 
     }	 
	 
	 // 當釋放滑鼠左鍵時, 取得釋放時所在 X, Y 座標, 並判斷滑鼠拖曳方向做處理
     function MouseUpProcess()
     {  		
     	var X_Movement, Y_Movement; 
     	  	
        MouseUpX = event.clientX;
        MouseUpY = event.clientY;
			 		 		 			 
        // 1. 取得水平/垂直方向的位移
        X_Movement = Math.abs(MouseDownX-MouseUpX);
        Y_Movement = Math.abs(MouseDownY-MouseUpY);	
	
        // 2. 判斷滑鼠拖曳的方向:上/下/左/右	
        MoveDirection="NoMove";         
        if (MouseUpY<MouseDownY)       // Move Upwards
        {
          if (Y_Movement>X_Movement) 
            MoveDirection="UP";         	
          else if(MouseUpX<MouseDownX)   // Move to Left/Right direction           
            MoveDirection="LEFT";            // Move to Left   
          else    
            MoveDirection="RIGHT";           // Move to Right   
        }
        else if (MouseUpY>MouseDownY)     // Move Downwards 
        {	
           if (Y_Movement>X_Movement) 
             MoveDirection="DOWN";         	
           else if(MouseUpX<MouseDownX) // Move to Left/Right direction                 
             MoveDirection="LEFT";            // Move to Right   
           else    
             MoveDirection="RIGHT";           // Move to Left  
        }      
   
        // 3. 根據之前 MouseDown 所在的圖片位置, 與滑鼠拖曳方向, 算出應將圖片移至哪個位置         
        if (MoveDirection=="LEFT")
        {
           MouseUpRowIdx = MouseDownRowIdx;
           MouseUpColIdx = MouseDownColIdx - 1;				 
        }
        else if (MoveDirection=="RIGHT")
        {		
           MouseUpRowIdx = MouseDownRowIdx;
           MouseUpColIdx = MouseDownColIdx + 1;				 
        }	 
        else if (MoveDirection=="UP") 
        {			
           MouseUpRowIdx = MouseDownRowIdx - 1;
           MouseUpColIdx = MouseDownColIdx;
        }  
        else if (MoveDirection=="DOWN")
        {	
           MouseUpRowIdx = MouseDownRowIdx + 1;
           MouseUpColIdx = MouseDownColIdx;
        }		

        // 4. 若會將圖片移至拼圖區域範圍之外, 則不做任何事, 中斷執行
        TotalColumnNum=document.getElementById('ColumnNum').value;		
        if ((MouseUpRowIdx<0)||(MouseUpRowIdx>=TotalRowNum)||(MouseUpColIdx<0)||(MouseUpColIdx>=TotalColumnNum))
           return false;	
        MouseUpImagePos = MouseUpRowIdx * TotalColumnNum + MouseUpColIdx;	 		  
        		  		
        // 5. 若根據 MouseDown 的位置與滑鼠拖曳的方向, 會將圖片移至緊鄰空白圖區域的話 
        //     => 將 MouseDown 區域和空白圖區域顯示的圖對調, 做出移動圖到空白圖區域的效果   	    	    	   
        BlankImagePos=document.getElementById('BlankImagePos_Hidden').value;
        if (MouseUpImagePos==BlankImagePos)
        {       			    	      		        
           BlankImageName="Image"+PaddingLeft(BlankImagePos.toString(),2);
           MouseDownImageName="Image"+PaddingLeft(MouseDownImagePos.toString(),2);
        
           // MouseDown 區塊的圖片與空白圖區域顯示的圖來源相互對調
           eval("TmpImageSrc = document.images[\'" + BlankImageName +"\'].src");  
           eval("document.images[\'" + BlankImageName +"\'].src = document.images[\'" + MouseDownImageName +"\'].src"); 
           eval("document.images[\'" + MouseDownImageName +"\'].src = TmpImageSrc"); 		   		   

           BlankImagePos=MouseDownImagePos; 
           document.getElementById('BlankImagePos_Hidden').value=BlankImagePos; 	    		    		    	     
        }	
     }		 	 
  </script>	 
  <div id=All>
    <form action="<?php echo $_SERVER["PHP_SELF"]?>" method="post" enctype="multipart/form-data" name="form1" id="form1">
      <p align="center"><br>
        <label>選取要做拼圖的圖檔</label> 
        <input type="file" name="uploadfile_OriginalImage" id="uploadfile_OriginalImage">
        <input name="MAX_FILE_SIZE" type="hidden" id="MAX_FILE_SIZE" value="14000000">        
        <input type="hidden" name="BlankImagePos_Hidden" id="BlankImagePos_Hidden">
        <br>            
        <label>選擇拼圖列數</label> 
        <select name="RowNum" id="RowNum">
          <option value="2" <?php if($_POST['RowNum']=="2") echo "selected"; ?>> 2 </option>
          <option value="3" <?php if($_POST['RowNum']=="3") echo "selected"; ?>> 3 </option>
          <option value="4" <?php if($_POST['RowNum']=="4") echo "selected"; ?>> 4 </option>
          <option value="5" <?php if($_POST['RowNum']=="5") echo "selected"; ?>> 5 </option>
          <option value="6" <?php if($_POST['RowNum']=="6") echo "selected"; ?>> 6 </option>
          <option value="7" <?php if($_POST['RowNum']=="7") echo "selected"; ?>> 7 </option>
          <option value="8" <?php if($_POST['RowNum']=="8") echo "selected"; ?>> 8 </option>
          <option value="9" <?php if($_POST['RowNum']=="9") echo "selected"; ?>> 9 </option>          
        </select>	
        <label>選擇拼圖欄數</label> 	
        <select name="ColumnNum" id="ColumnNum">
          <option value="2" <?php if($_POST['ColumnNum']=="2") echo "selected"; ?>> 2 </option>
          <option value="3" <?php if($_POST['ColumnNum']=="3") echo "selected"; ?>> 3 </option>
          <option value="4" <?php if($_POST['ColumnNum']=="4") echo "selected"; ?>> 4 </option>
          <option value="5" <?php if($_POST['ColumnNum']=="5") echo "selected"; ?>> 5 </option>
          <option value="6" <?php if($_POST['ColumnNum']=="6") echo "selected"; ?>> 6 </option>
          <option value="7" <?php if($_POST['ColumnNum']=="7") echo "selected"; ?>> 7 </option>
          <option value="8" <?php if($_POST['ColumnNum']=="8") echo "selected"; ?>> 8 </option>
          <option value="9" <?php if($_POST['ColumnNum']=="9") echo "selected"; ?>> 9 </option>
        </select>  
      <p align="center">
        <input name="btnStart" type="submit" value="開始拼圖遊戲">   	 		
        &nbsp;&nbsp;&nbsp;<input name="btnCheck" type="button" value="我完成拼圖了,檢查看看" onClick="javascript:CheckPuzzleFinished();">	
      </p>    
      <div id="DivPuzzle" position="right" >	             			
      <table align=center border=1 cellpadding=0 cellspacing=0>	           
        <?php	 
          include("PuzzleLib.php");		  		  
          
          $MaxLength=500;
          $OriginalImagedir="OriginalImage";
          $PuzzleImagedir="PuzzleImage";
          $PuzzleBlockImagedir="PuzzleBlockImage";
		  
          $srcFile=$_FILES['uploadfile_OriginalImage']['name'];			
          if ($srcFile<>"")  // 有選取檔案		  
          {	 
             DeleteDirFiles($OriginalImagedir);
             DeleteDirFiles($PuzzleImagedir);
             DeleteDirFiles($PuzzleBlockImagedir);
			 
             $TotalRowNum=$_POST['RowNum'];         // 取得按下"開始拼圖遊戲"按鈕前所設定的列數
             $TotalColumnNum=$_POST['ColumnNum'];   // 取得按下"開始拼圖遊戲"按鈕前所設定的欄數			 
             if ($TotalRowNum * $TotalColumnNum > 80) 
                die("拼圖區塊數太大(>80),請重設");
				 
             // 1. 上傳使用者選取的圖檔至 Server, 並完成縮圖  
             $Puzzle_Filename=Upload_Resize_File('uploadfile_OriginalImage', $OriginalImagedir, $PuzzleImagedir, $MaxLength);
             if ($Puzzle_Filename=="檔案上傳失敗")
                die("檔案上傳失敗");
				
             // 2. 取得拼圖圖檔資訊
             // 2.1 取得拼圖圖檔格式/寬度/高度
             $ImageType=GetImageTypeName($Puzzle_Filename);
             $ImageWidth=GetImageWidth($Puzzle_Filename, $ImageType);
             $ImageHeight=GetImageHeight($Puzzle_Filename, $ImageType);	

             // 2.2  計算欲產生的拼圖區塊圖檔寬度/高度				
             $UnitWidth=floor($ImageWidth/$TotalColumnNum);     	
             $UnitHeight=floor($ImageHeight/$TotalRowNum);	
					
             // 3. 產生所有拼圖區塊圖檔 & 空白圖檔
             $BlankImageFile="BlankImage." . $ImageType;             										  
             Generate_PuzzleBlockFiles($PuzzleBlockImagedir, $TotalRowNum, $TotalColumnNum, $UnitWidth, $UnitHeight, $ImageType, $Puzzle_Filename , $BlankImageFile);		
			 
			 // 4. 在表格邊以不規則順序呈現所有拼圖區塊			 			           
             echo "<tr align=center height=40 bgcolor=#FFCC99><th >完成以下拼圖</th><th>參考拼圖成品</th></tr>";	 
             echo "<tr>";
             echo "<td>";
             Show_PuzzleBlocks($PuzzleBlockImagedir, $TotalRowNum, $TotalColumnNum, $UnitWidth, $UnitHeight, $ImageType, $BlankImageFile); 
             echo "</td>";	
			 
             // 5. 在表格右邊顯示完整拼圖供參考			
             $JustifiedWidth =  $UnitWidth * $TotalColumnNum;
             $JustifiedHeight = $UnitHeight * $TotalRowNum;								
             echo "<td>";
             echo "<img src=GetImage.php?ImageFile=$Puzzle_Filename&ImageType=$ImageType&ImageWidth=$JustifiedWidth&ImageHeight=$JustifiedHeight></img>";
             echo "</td>";
             echo "</tr>";					 	   			 			
          }					
        ?>	                    
      </table> 		
      </div>
   </form>	
  </div>
</body>
</html>