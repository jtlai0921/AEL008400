<html>
<title> 設定運算子 </title>
<body>    
  <?php
    $a=10; $b=5;
    echo "\$a=$a, \$b=$b <br>";   
    $a=$b;
    echo "1. \$a=\$b => \$a=$a, \$b=$b <br>";     
    $a=10; $b=5;
    $a+=$b;
    echo "2. \$a+=\$b => \$a=$a, \$b=$b <br>";  
    $a=10; $b=5;
    $a-=$b;
    echo "3. \$a-=\$b => \$a=$a, \$b=$b <br>";  
    $a=10; $b=5;
    $a*=$b;
    echo "4. \$a*=\$b => \$a=$a, \$b=$b <br>"; 
    $a=10; $b=5;
    $a/=$b;
    echo "5. \$a/=\$b => \$a=$a, \$b=$b <br>";
    $a=10; $b=5;
    $a%=$b;
    echo "6. \$a%=\$b => \$a=$a, \$b=$b <br>";
    $c="Thanks,"; $d="Mary";
    $c.=$d;
    echo "7. \$c.=\$d => \$c=$c, \$d=$d <br>";                  
  ?>
</body>
</html>