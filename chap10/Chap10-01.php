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
<title> �ۭq���-�S���^�ǭ� </title> 
<body>    
  <?php
    $a=array(79,61,78,82,98);
    array_display("�үZ",$a);
    $b=array(82,58,92,96,77);
    array_display("�A�Z",$b);   
  ?>
</body>
</html>