<html>
<title> 全域變數 - 使用 global </title> 
<body>    
  <?php
    $a=10; 
    function TestFunction()   // 自訂函數
    {   
      global $a;    // 使用 global 變數 $a
      echo "印出 \$a 的值 (TestFunction) <br>";  
      echo "$a <br>"; 
      $a=20;   // 注意這一行
    } 
    TestFunction();
    echo "印出 \$a 的值 (主程式) <br>";  
    echo "$a <br>"; 
  ?>
</body>
</html>
