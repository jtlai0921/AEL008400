<html>
<title> sort/asort/rsort/arsort ��� - �Ƨǰ}�C </title> 
<body>    
<?php   
    function show_array($arr){
      foreach ($arr as $key=>$value) 
        echo "[$key] => $value ";    
     echo "<br>";       	
    }       
    // 1. sort 
    $colors=array(3=>"yellow", 7=>"black", 5=>"white", 1=>"blue");
    echo "sort �Ƨǫe <br>";   show_array($colors);
    sort($colors);
    echo "sort �Ƨǫ� <br>";   show_array($colors);  echo "<hr>";
     // 2. asort 
     $fruits = array("l"=>"lemon","o"=>"orange","b"=>"banana","a"=>"apple");
    echo "asort �Ƨǫe <br>";  show_array($fruits); 
    asort($fruits);
    echo "asort �Ƨǫ� <br>";  show_array($fruits);  echo "<hr>";  
    // 3. rsort
    $animals=array("ab"=>"dog","ky"=>"deer","cz"=>"elephant","zp"=>"tiger");
    echo "rsort �Ƨǫe <br>";  show_array($animals); 
    rsort($animals);
    echo "rsort �Ƨǫ� <br>";  show_array($animals); echo "<hr>";   
     // 4. arsort
    $tools=array("n"=>"napkin","f"=>"fork","t"=>"teaspoon","b"=>"bowl");
    echo "arsort �Ƨǫe <br>"; show_array($tools);
    arsort($tools);
     echo "arsort �Ƨǫ� <br>"; show_array($tools); echo "<hr>";          
   ?>
</body>
</html>