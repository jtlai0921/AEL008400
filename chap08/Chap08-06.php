<html>
<title> count ��� - �p��}�C�����Ӽ� </title> 
<body>    
  <?php     
    // 1. �p��P�ǨC�g�B�ʪ��ɼ��`�M
    $a=array(3, 2.5, 1, 8, 0);
    $cnt_a=count($a);
    $sum_a=0;
    for ($i=0;$i<$cnt_a;$i++)
      $sum_a+=$a[$i];  
    echo "1. �@�� ". $cnt_a . " �ӦP�� <br>" ;  
    echo "   �P�ǨC�g�B�ʪ��ɼ��`�M : " . $sum_a . "<br>";
  
    // 2. �p��P�Ǫ���������
    $b=array(170.8, 160.6, 158, 165.2, 167, 153.7, 163);
    $cnt_b=count($b);
    $sum_b=0;
    for ($i=0;$i<$cnt_b;$i++)
      $sum_b+=$b[$i];  
    $avg_b=round($sum_b/$cnt_b, 1);
    echo "2.�@�� ". $cnt_b . " �ӦP�� <br>" ; 
    echo "�P�Ǫ������`�M : " . $sum_b . "<br>";     
    echo "�P�Ǫ��������� : " . $avg_b . "<br>";             
  ?>
</body>
</html>