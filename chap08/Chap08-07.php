<html>
<title> array_sum ��� - �p��}�C�����[�` </title> 
<body>    
  <?php     
    // 1. �p��P�ǨC�g�B�ʪ��ɼ��`�M
    $a=array(3, 2.5, 1, 8, 0);
    $cnt_a=count($a);
    echo "1. �@�� ". $cnt_a . " �ӦP�� <br>" ;  
    echo "   �P�ǨC�g�B�ʪ��ɼ��`�M : " . array_sum($a) . "<br>";  
    // 2. �p��P�Ǫ���������
    $b=array(170.8, 160.6, 158, 165.2, 167, 153.7, 163);
    $cnt_b=count($b);
    echo "2.�@�� ". $cnt_b . " �ӦP�� <br>" ; 
    echo "�P�Ǫ������`�M : " . array_sum($b). "<br>";     
    echo "�P�Ǫ��������� : " . round(array_sum($b)/$cnt_b, 1). "<br>";             
  ?>
</body>
</html>