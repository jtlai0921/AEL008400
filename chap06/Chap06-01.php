<html>
<title> 傳值設定 </title>
<body>    
  <?php
    $a=10;
    $b=$a;      // 傳值設定
    echo "\$a=$a, \$b=$b <br>" ; 
    $a=$a+10;   // $a 變數改變值, 不會影響 $b
    echo "\$a=$a, \$b=$b <br>" ;    
    $b=$b/2;     // $b 變數改變值, 不會影響 $a
    echo "\$a=$a, \$b=$b <br>" ;    
  ?>
</body>
</html>

