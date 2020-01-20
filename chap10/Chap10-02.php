<?php
  function array_total($arr)
  {
    $sum=0;
    foreach($arr as $value)
      $sum+= $value;
    return $sum;   // 注意有 return
  }
?>
<html>
<title> 自訂函數-有回傳值 </title> 
<body>    
  <?php
    $a=array(3,1,6,9,2);
    $total_a=array_total($a);    
    echo "陣列\$a 的總和是: $total_a <br>";
    $b=array(6,2,5,8,11);
    $total_b=array_total($b);
    echo "陣列\$b 的總和是: $total_b <br>";
  ?>
</body>
</html>