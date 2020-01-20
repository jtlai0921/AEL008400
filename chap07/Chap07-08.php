<html>
<title> 笲衡纔抖 </title> 
<body>    
  <?php
    $chinese=80;
    $english=58;
    if (($chinese>=60) and ($english>=60))
      echo "尺,硄硄の! <br>";
    else
      echo "ぶΤぃの, 非称干σ! <br>";      
    $weighted_score=$chinese*0.4+$english*0.6;
    echo "舦だ计: $weighted_score " . " <br>";     
    $pass=($weighted_score>=60) ? true: false;    
    if ($pass)
      echo "尺,舦だ计の! <br>"; 
    else
      echo "舦だ计ぃの, 非称干σ! <br>";   
  ?>
</body>
</html>