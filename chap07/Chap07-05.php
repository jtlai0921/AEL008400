<html>
<title> 位元運算子 </title> 
<body>    
  <?php
    $a=13;  // 001101
    $b=10;  // 001010
    echo "\$a=$a,\$b=$b <br>";    
    echo '1. $a&$b='; 
    echo $a&$b;
    echo "<br>";    
    echo '2. $a|$b='; 
    echo $a|$b;
    echo "<br>"; 
    echo '3. $a^$b='; 
    echo $a^$b;       
    echo "<br>";         
    echo '4. $a>>2='; 
    echo $a>>2;       
    echo "<br>"; 
    echo '5. $b<<2='; 
    echo $b<<2;       
    echo "<br>";                         
  ?>
</body>
</html>