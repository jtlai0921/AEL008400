<html>
<title> array_sum 函數 - 計算陣列元素加總 </title> 
<body>    
  <?php     
    // 1. 計算同學每週運動的時數總和
    $a=array(3, 2.5, 1, 8, 0);
    $cnt_a=count($a);
    echo "1. 共有 ". $cnt_a . " 個同學 <br>" ;  
    echo "   同學每週運動的時數總和 : " . array_sum($a) . "<br>";  
    // 2. 計算同學的平均身高
    $b=array(170.8, 160.6, 158, 165.2, 167, 153.7, 163);
    $cnt_b=count($b);
    echo "2.共有 ". $cnt_b . " 個同學 <br>" ; 
    echo "同學的身高總和 : " . array_sum($b). "<br>";     
    echo "同學的平均身高 : " . round(array_sum($b)/$cnt_b, 1). "<br>";             
  ?>
</body>
</html>