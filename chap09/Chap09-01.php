<html>
<title> if-elseif-else ����P�_ </title> 
<body>    
  <?php 
     if (empty($_GET["username"])) {
  ?>
  <form action=<?php echo $_SERVER["PHP_SELF"]?> method="get">
  �ڪ��W�r�s��:<input type=text name=username><br>
  �ڬO:<br>
  <input type=radio name=sex value=1>�k��<br>
  <input type=radio name=sex value=2>�k��<br>
  <input type=submit value="�e�X">
  <input type=reset  value="����">
  </form>
  <?php
     } 
     else 
     {       
       if ($_GET["sex"]==1)
          echo $_GET["username"] ."���ͱz�n";
       elseif ($_GET["sex"]==2)
          echo $_GET["username"] ."�p�j�z�n";                
       else
        {
          echo "�|����ܧA���ʧO <br>";  
          echo "�Э��s��� <br>";     
        }  
     }
 ?>
</body>
</html>