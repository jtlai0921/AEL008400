<html>
<title> �}�C�B��l-�p�� </title> 
<body>    
  <?php   
    $a = array("a" => "apple" , "c" => "cherry", "p" => "pear");
    $b = array("c" => "citron", "p" => "peach" , "k" => "Kiwifruit");
    $c = $a + $b; // Union of $a and $b
    echo "\$a �P \$b ���p��:  \n";
    print_r($c);
    echo "<hr>";
    $d = $b + $a; // Union of $b and $a
    echo "\$b �P \$a ���p��:  \n";
    print_r($d);  
  ?>
</body>
</html>