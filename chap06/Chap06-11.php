<html>
<title> �H���A�ഫ�B�⤸�j��A�ഫ </title> 
<body>    
  <?php
    // 1. �j���ഫ�����
    $a=25.34;
    echo "�ഫ�e \$a=$a, ���A�O " . gettype($a) . "<br>"; 
    $a=(int)$a;
    echo "�ഫ�� \$a=$a, ���A�O " . gettype($a) . "<br><hr>"; 
    // 2. �j���ഫ���B�I��
    $a="55.7 degrees";
    echo "�ഫ�e \$a=$a, ���A�O " . gettype($a) . "<br>"; 
    $a=(double)$a;
    echo "�ഫ�� \$a=$a, ���A�O " . gettype($a) . "<br><hr>";     
    // 3. �j���ഫ���r��
    $a=89.234;
    echo "�ഫ�e \$a=$a, ���A�O " . gettype($a) . "<br>"; 
    $a=(string)$a;
    echo "�ഫ�� \$a=$a, ���A�O " . gettype($a) . "<br><hr>";           
  ?>   
</body>
</html>
