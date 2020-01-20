<html>
<title> 篈锣传笲衡じ眏篈锣传 </title> 
<body>    
  <?php
    // 1. 眏锣传Θ俱计
    $a=25.34;
    echo "锣传玡 \$a=$a, 篈琌 " . gettype($a) . "<br>"; 
    $a=(int)$a;
    echo "锣传 \$a=$a, 篈琌 " . gettype($a) . "<br><hr>"; 
    // 2. 眏锣传Θ疊翴计
    $a="55.7 degrees";
    echo "锣传玡 \$a=$a, 篈琌 " . gettype($a) . "<br>"; 
    $a=(double)$a;
    echo "锣传 \$a=$a, 篈琌 " . gettype($a) . "<br><hr>";     
    // 3. 眏锣传Θ﹃
    $a=89.234;
    echo "锣传玡 \$a=$a, 篈琌 " . gettype($a) . "<br>"; 
    $a=(string)$a;
    echo "锣传 \$a=$a, 篈琌 " . gettype($a) . "<br><hr>";           
  ?>   
</body>
</html>
