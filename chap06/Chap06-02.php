<html>
<title> �ǧ}�]�w </title>
<body>    
  <?php
    $a=10;
    $b=$a;      // $a �ǭȳ]�w�� $b
    $c=&$a;     // $a �ǧ}�]�w�� $c
    echo "1. ���� \$a ���Ȥ��e ....<br>";
    echo "\$a=$a, \$b=$b, \$c=$c <br><br>" ;   
    
    $a=20;
    echo "2. ���� \$a ���Ȥ��� ....<br>";
    echo "\$a=$a, \$b=$b, \$c=$c <br><br>" ;      
    
    $b=30;
    echo "3. ���� \$b ���Ȥ��� ....<br>";
    echo "\$a=$a, \$b=$b, \$c=$c <br><br>" ; 
    
    $c=40;
    echo "4. ���� \$c ���Ȥ��� ....<br>";
    echo "\$a=$a, \$b=$b, \$c=$c <br><br>" ;      
  ?>
</body>
</html>
