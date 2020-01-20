<html>
<title> 傳址設定 </title>
<body>    
  <?php
    $a=10;
    $b=$a;      // $a 傳值設定給 $b
    $c=&$a;     // $a 傳址設定給 $c
    echo "1. 改變 \$a 的值之前 ....<br>";
    echo "\$a=$a, \$b=$b, \$c=$c <br><br>" ;   
    
    $a=20;
    echo "2. 改變 \$a 的值之後 ....<br>";
    echo "\$a=$a, \$b=$b, \$c=$c <br><br>" ;      
    
    $b=30;
    echo "3. 改變 \$b 的值之後 ....<br>";
    echo "\$a=$a, \$b=$b, \$c=$c <br><br>" ; 
    
    $c=40;
    echo "4. 改變 \$c 的值之後 ....<br>";
    echo "\$a=$a, \$b=$b, \$c=$c <br><br>" ;      
  ?>
</body>
</html>
