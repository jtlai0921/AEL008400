<html>
<title> �����ܼ� - �ϥ� global </title> 
<body>    
  <?php
    $a=10; 
    function TestFunction()   // �ۭq���
    {   
      global $a;    // �ϥ� global �ܼ� $a
      echo "�L�X \$a ���� (TestFunction) <br>";  
      echo "$a <br>"; 
      $a=20;   // �`�N�o�@��
    } 
    TestFunction();
    echo "�L�X \$a ���� (�D�{��) <br>";  
    echo "$a <br>"; 
  ?>
</body>
</html>
