<html>
<title> 全域變數 - 使用 $GLOBALS[]陣列 </title> 
<body>    
  <?php
    $a=3;
    $b=5;
    function Sum()
    {
    	$b=10;
      $GLOBALS['b'] = $GLOBALS['a'] + $GLOBALS['b'];
       echo "\$b=$b <br>";
    } 
    Sum();
    echo "\$a=$a, \$b=$b";
  ?>
</body>
</html>
