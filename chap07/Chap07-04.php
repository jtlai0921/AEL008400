<html>
<title> �޿�B��l </title> 
<body>    
  <?php
   // 1. !(not)
    $a=false; 
    echo "!\$a=". !$a . "<br>";      
   // 2. and, &&
    // �U����ԭz�����|�h���� myfunc()���
    $a=(false && myfunc("2-1"));
    $b=(false and myfunc("2-1"));    
    // �U����ԭz���|�h���� myfunc()���
    $a=(true && myfunc("2-2"));    
    $b=(true and myfunc("2-2"));   
    echo "\$a=". $a . "<br>";
    echo "\$b=". $b . "<br>";       
   // 3. or, ||
    // �U����ԭz�����|�h���� myfunc()���
    $c=(true || myfunc("3-1"));
    $d=(true or myfunc("3-1"));
   // �U����ԭz���|�h���� myfunc()���
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