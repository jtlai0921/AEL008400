<?php
  function orderdrink($type,$cups=1)
  {    
    echo "我要 $cups 杯 $type. <br>";
  }	
?>    
<html>
<title> 設定函數的參數預設值 </title> 
<body>    
  <?php
    $cup=5;
    $type="Cappuccino";    
    echo orderdrink($type, $cup);
    echo orderdrink("Espresso");  // 使用預設值
    echo orderdrink("汽水",3);
  ?> 
</body>
</html>