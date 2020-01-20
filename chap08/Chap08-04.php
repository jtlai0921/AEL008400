<html>
<title> 陣列運算子-聯集 </title> 
<body>    
  <?php   
    $a = array("a" => "apple" , "c" => "cherry", "p" => "pear");
    $b = array("c" => "citron", "p" => "peach" , "k" => "Kiwifruit");
    $c = $a + $b; // Union of $a and $b
    echo "\$a 與 \$b 的聯集:  \n";
    print_r($c);
    echo "<hr>";
    $d = $b + $a; // Union of $b and $a
    echo "\$b 與 \$a 的聯集:  \n";
    print_r($d);  
  ?>
</body>
</html>