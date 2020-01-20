<html>
<title> 遞增和遞減運算子 </title> 
<body>    
  <?php
    $a = 5;
    // 前遞增
    echo "++\$a=" . ++$a . " 先遞增再顯示 <br>";
    echo "\$a=$a" . "<hr>";
    // 後遞增
    echo "\$a++=" . $a++ . " 先顯示再遞增<br>";
    echo "\$a=$a" . "<hr>";    
    // 前遞減
    echo "--\$a=" . --$a . " 先遞減再顯示 <br>";
    echo "\$a=$a" . "<hr>";  
    // 後遞減
    echo "\$a--=" . $a-- . " 先顯示再遞減<br>";
    echo "\$a=$a" . "<hr>";                 
  ?>
</body>
</html>