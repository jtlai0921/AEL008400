<html>
<title> foreach 函數 - 陣列元素 </title> 
<body>    
  <?php   
    function display_array($a){
      foreach ($a as $key=>$value) 
        echo "[$key] : NT $ $value ";    
      echo "<br>";       	
    }    
    // 1. 顯示每個陣列元素
    $fruits=array("Apple"=>56,"Peach"=>38,"Orange"=>11,"Lemon"=>5);
    echo "水果每公斤售價: ". "<br>";     
    display_array($fruits);     
    // 2. 改變每個陣列元素的值
    foreach ($fruits as &$value) 
      $value = $value * 2;
    unset($value); // break the reference with the last element  
    display_array($fruits);        
    // 3. 顯示二維陣列元素  
    echo "二維陣列: ". "<br>";     
    $arr=array
        ( 0=> array("a"=>37,"c"=>14,"f"=>19),
          2=> array("b"=>14,"d"=>34,"g"=>81),
          7=> array("c"=>9,"g"=>63,"a"=>77,"h"=>36)      
        ); 
    foreach ($arr as $key1=>$value1) {
      echo "[$key1] : ";	
      foreach ($value1 as $key2=>$value2) 
        echo "[$key2] => $value2 ";
      echo "<br>";  
    }  
  ?>
</body>
</html>