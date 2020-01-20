<html>
<title> count 函數 - 計算陣列元素個數 </title> 
<body>    
  <?php     
    // 1. 計算同學每週運動的時數總和
    $a=array(3, 2.5, 1, 8, 0);
    $cnt_a=count($a);
    $sum_a=0;
    for ($i=0;$i<$cnt_a;$i++)
      $sum_a+=$a[$i];  
    echo "1. 共有 ". $cnt_a . " 個同學 <br>" ;  
    echo "   同學每週運動的時數總和 : " . $sum_a . "<br>";
  
    // 2. 計算同學的平均身高
    $b=array(170.8, 160.6, 158, 165.2, 167, 153.7, 163);
    $cnt_b=count($b);
    $sum_b=0;
    for ($i=0;$i<$cnt_b;$i++)
      $sum_b+=$b[$i];  
    $avg_b=round($sum_b/$cnt_b, 1);
    echo "2.共有 ". $cnt_b . " 個同學 <br>" ; 
    echo "同學的身高總和 : " . $sum_b . "<br>";     
    echo "同學的平均身高 : " . $avg_b . "<br>";             
  ?>
</body>
</html>