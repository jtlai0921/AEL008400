<html>
<title> �B��l���u������ </title> 
<body>    
  <?php
    $chinese=80;
    $english=58;
    if (($chinese>=60) and ($english>=60))
      echo "����,�q�q�ή�! <br>";
    else
      echo "�ܤ֦��@�줣�ή�, �ǳƸɦ�! <br>";      
    $weighted_score=$chinese*0.4+$english*0.6;
    echo "�[�v����: $weighted_score " . " <br>";     
    $pass=($weighted_score>=60) ? true: false;    
    if ($pass)
      echo "����,�[�v���Ƥή�! <br>"; 
    else
      echo "�[�v���Ƥ��ή�, �ǳƸɦ�! <br>";   
  ?>
</body>
</html>