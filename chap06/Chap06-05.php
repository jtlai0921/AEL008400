<html>
<title> 办跑计 - ㄏノ global </title> 
<body>    
  <?php
    $a=10; 
    function TestFunction()   // 璹ㄧ计
    {   
      global $a;    // ㄏノ global 跑计 $a
      echo " \$a  (TestFunction) <br>";  
      echo "$a <br>"; 
      $a=20;   // 猔種硂︽
    } 
    TestFunction();
    echo " \$a  (祘Α) <br>";  
    echo "$a <br>"; 
  ?>
</body>
</html>
