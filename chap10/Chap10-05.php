<?php
  function orderdrink($cups=1, $type)
  {    
    echo "我要 $cups 杯 $type. <br>";
  }	
?>    
<html>
<title> 設定函數的參數預設值-錯誤的用法 </title> 
<body>    
  <?php
    $cup=5;
    $type="Cappuccino";    
    echo orderdrink("Cappuccino");
  ?> 
</body>
</html>