<?php
  function array_total($arr)
  {
    $sum=0;
    foreach($arr as $value)
      $sum+= $value;
    return $sum;   // �`�N�� return
  }
?>
<html>
<title> �ۭq���-���^�ǭ� </title> 
<body>    
  <?php
    $a=array(3,1,6,9,2);
    $total_a=array_total($a);    
    echo "�}�C\$a ���`�M�O: $total_a <br>";
    $b=array(6,2,5,8,11);
    $total_b=array_total($b);
    echo "�}�C\$b ���`�M�O: $total_b <br>";
  ?>
</body>
</html>