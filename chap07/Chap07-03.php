<html>
<title> ����B��l </title> 
<body>    
  <?php
    $a=5;
    $b=5;
    $c="5";
    $d=1;            
    if ($a==$b)
      echo "\$a �M \$b �Ȭ۵� <br>";
    else
      echo "\$a �M \$b �Ȥ��۵� <br>";            
    if ($a===$b)
      echo "\$a �M \$b �Ȭ۵�, �B���A�@�� <br>"; 
    else    
       echo "\$a �M \$b �������۵� <br>";   
    if (($a==$c) and ($a!==$c))
      echo "\$a �M \$c �Ȭ۵�, �����A���P <br>"; 
    if ($a<=$b)
      echo "\$a �p�󵥩� \$b <br>";  
    else     
      echo "\$a �j�� \$b <br>";                  
    if ($a>$d)
      echo "\$a �j�� \$d <br>";  
    else     
      echo "\$a �p�󵥩� \$d <br>";               
  ?>
</body>
</html>