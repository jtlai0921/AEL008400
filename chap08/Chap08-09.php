<html>
<title> sort/asort/rsort/arsort 函數 - 排序陣列 </title> 
<body>    
<?php   
    function show_array($arr){
      foreach ($arr as $key=>$value) 
        echo "[$key] => $value ";    
     echo "<br>";       	
    }       
    // 1. sort 
    $colors=array(3=>"yellow", 7=>"black", 5=>"white", 1=>"blue");
    echo "sort 排序前 <br>";   show_array($colors);
    sort($colors);
    echo "sort 排序後 <br>";   show_array($colors);  echo "<hr>";
     // 2. asort 
     $fruits = array("l"=>"lemon","o"=>"orange","b"=>"banana","a"=>"apple");
    echo "asort 排序前 <br>";  show_array($fruits); 
    asort($fruits);
    echo "asort 排序後 <br>";  show_array($fruits);  echo "<hr>";  
    // 3. rsort
    $animals=array("ab"=>"dog","ky"=>"deer","cz"=>"elephant","zp"=>"tiger");
    echo "rsort 排序前 <br>";  show_array($animals); 
    rsort($animals);
    echo "rsort 排序後 <br>";  show_array($animals); echo "<hr>";   
     // 4. arsort
    $tools=array("n"=>"napkin","f"=>"fork","t"=>"teaspoon","b"=>"bowl");
    echo "arsort 排序前 <br>"; show_array($tools);
    arsort($tools);
     echo "arsort 排序後 <br>"; show_array($tools); echo "<hr>";          
   ?>
</body>
</html>