<html>
<title> foreach ��� - �}�C���� </title> 
<body>    
  <?php   
    function display_array($a){
      foreach ($a as $key=>$value) 
        echo "[$key] : NT $ $value ";    
      echo "<br>";       	
    }    
    // 1. ��ܨC�Ӱ}�C����
    $fruits=array("Apple"=>56,"Peach"=>38,"Orange"=>11,"Lemon"=>5);
    echo "���G�C������: ". "<br>";     
    display_array($fruits);     
    // 2. ���ܨC�Ӱ}�C��������
    foreach ($fruits as &$value) 
      $value = $value * 2;
    unset($value); // break the reference with the last element  
    display_array($fruits);        
    // 3. ��ܤG���}�C����  
    echo "�G���}�C: ". "<br>";     
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