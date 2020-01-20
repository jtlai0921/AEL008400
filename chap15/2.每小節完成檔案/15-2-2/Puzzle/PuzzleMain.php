<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>拼圖遊戲-PHP & JavaScript</title>
</head>
<body> 
  <div id=All>
    <form action="<?php echo $_SERVER["PHP_SELF"]?>" method="post" enctype="multipart/form-data" name="form1" id="form1">
      <p align="center"><br>
        <label>選取要做拼圖的圖檔</label> 
        <input type="file" name="uploadfile_OriginalImage" id="uploadfile_OriginalImage">
        <input name="MAX_FILE_SIZE" type="hidden" id="MAX_FILE_SIZE" value="14000000">        
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
        &nbsp;&nbsp;&nbsp;<input name="btnCheck" type="button" value="我完成拼圖了,檢查看看" >	
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
          }					
        ?>	                    
      </table> 		
      </div>
   </form>	
  </div>
</body>
</html>