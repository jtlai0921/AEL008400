<html>
<title> 邏輯運算子 </title> 
<body>    
  <?php
   // 1. !(not)
    $a=false; 
    echo "!\$a=". !$a . "<br>";      
   // 2. and, &&
    // 下面兩敘述都不會去執行 myfunc()函數
    $a=(false && myfunc("2-1"));
    $b=(false and myfunc("2-1"));    
    // 下面兩敘述都會去執行 myfunc()函數
    $a=(true && myfunc("2-2"));    
    $b=(true and myfunc("2-2"));   
    echo "\$a=". $a . "<br>";
    echo "\$b=". $b . "<br>";       
   // 3. or, ||
    // 下面兩敘述都不會去執行 myfunc()函數
    $c=(true || myfunc("3-1"));
    $d=(true or myfunc("3-1"));
   // 下面兩敘述都會去執行 myfunc()函數
    $c=(false || myfunc("3-2"));
    $d=(false or myfunc("3-2"));  
    echo "\$c=". $c . "<br>";
    echo "\$d=". $d . "<br>";      
   // 4. xor
    $a=true; 
    $b=false;     
    echo "\$a xor \$b=" . ($a xor $b); 
   
    function myfunc($argstr)
    {
      echo "in myfunc ... " . $argstr . "<br>";
      return true;
    }
  ?>
</body>
</html>