<html>
<title> if-elseif-else 條件判斷 </title> 
<body>    
  <?php 
     if (empty($_GET["username"])) {
  ?>
  <form action=<?php echo $_SERVER["PHP_SELF"]?> method="get">
  我的名字叫做:<input type=text name=username><br>
  我是:<br>
  <input type=radio name=sex value=1>男生<br>
  <input type=radio name=sex value=2>女生<br>
  <input type=submit value="送出">
  <input type=reset  value="重填">
  </form>
  <?php
     } 
     else 
     {       
       if ($_GET["sex"]==1)
          echo $_GET["username"] ."先生您好";
       elseif ($_GET["sex"]==2)
          echo $_GET["username"] ."小姐您好";                
       else
        {
          echo "尚未選擇你的性別 <br>";  
          echo "請重新選取 <br>";     
        }  
     }
 ?>
</body>
</html>