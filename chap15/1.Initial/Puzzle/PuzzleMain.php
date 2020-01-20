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
        <br>
        <label>選擇拼圖列數</label> 
        <select name="RowNum" id="RowNum" >       
        </select>	
        <label>選擇拼圖欄數</label> 	
        <select name="ColumnNum" id="ColumnNum">
        </select>  
      <p align="center">
        <input name="btnStart" type="submit" value="開始拼圖遊戲">   	 		
        &nbsp;&nbsp;&nbsp;<input name="btnCheck" type="button" value="我完成拼圖了,檢查看看" >	
      </p>    
      <div id="DivPuzzle" position="right" >	             			
      <table align=center border=1 cellpadding=0 cellspacing=0>	                              
      </table> 		
      </div>
   </form>	
  </div>
</body>
</html>