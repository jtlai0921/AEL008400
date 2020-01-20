<?php
  function array_display($desc,$arr)
  {
    echo "$desc:";	
    foreach($arr as $key=>$value)
      echo "[$key] $value, ";   
    echo "<br>";	
  }	
?>    
<html>
<title> 自訂函數-沒有回傳值 </title> 
<body>    
  <?php
    $a=array(79,61,78,82,98);
    array_display("甲班",$a);
    $b=array(82,58,92,96,77);
    array_display("乙班",$b);   
  ?>
</body>
</html>