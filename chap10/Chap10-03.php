<?php
  function say_hello(&$id,$string)
  {
    $id++;	
    $string = 'Hello,' . $string;
    echo "In 'say_hello' function... <br>";
    echo "\$id=$id <br>";
    echo "\$string=$string <br>";
  }	
?>    
<html>
<title> 函數的參考傳遞 (Call by Reference) </title> 
<body>    
  <?php
    $seq=5;
    $greeting = 'Linda';
    say_hello($seq,$greeting);
    echo "In Main... <br>";
    echo "\$seq=$seq <br>";
    echo "\$greeting=$greeting <br>";
  ?> 
</body>
</html>