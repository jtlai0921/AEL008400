<?php
  function blingbling()
  {    
    $para_cnt=func_num_args(); 	
    echo "總共有: $para_cnt 個參數 <br>";
  }	
?>    
<html>
<title> func_num_args 函數的用法 </title> 
<body>    
  <?php
    blingbling("I","want","to","go","home");
    blingbling(101,"Taipei");
    blingbling("What",2,"take");            
  ?> 
</body>
</html>