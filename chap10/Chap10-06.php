<?php
  function blingbling()
  {    
    $para_cnt=func_num_args(); 	
    echo "�`�@��: $para_cnt �ӰѼ� <br>";
  }	
?>    
<html>
<title> func_num_args ��ƪ��Ϊk </title> 
<body>    
  <?php
    blingbling("I","want","to","go","home");
    blingbling(101,"Taipei");
    blingbling("What",2,"take");            
  ?> 
</body>
</html>