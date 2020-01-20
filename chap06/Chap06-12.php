<html>
<title> ㄏノ settype ㄧ计眏锣传篈 </title> 
<body>    
  <?php
    // 1. 眏锣传Θ俱计
    $a=25.34;
    echo "锣传玡 \$a=$a, 篈琌: ".gettype($a);     
    settype($a, int);
    echo "<br>锣传 \$a=$a,  篈琌: ".gettype($a)."<hr>";   
    // 2. 眏锣传Θ疊翴计
    $a="55.7 degrees";
    echo "锣传玡 \$a=$a, 篈琌: ".gettype($a);    
    settype ($a, double);
    echo "<br>锣传 \$a=$a,  篈琌: ".gettype($a)."<hr>";    
    // 3. 眏锣传Θ﹃
    $a=89.234;
    echo "锣传玡 \$a=$a, 篈琌: ".gettype($a);  
    settype ($a, string);
    echo "<br>锣传 \$a=$a,  篈琌: ".gettype($a)."<hr>";      
  ?>   
</body>
</html>
