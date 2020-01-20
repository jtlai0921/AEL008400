<?php
  function bad_words()
  {      	
    $arg_list = func_get_args();
    $para_cnt=count($arg_list);
    echo "$para_cnt 把计だ琌 <br>";
    foreach($arg_list as $key=>$value)	
      echo "材". ($key+1) ."把计琌: \$arg_list($key):". $value. "<br>";
    echo "<hr>";    
  }  
?>    
<html>
<title> func_get_args ㄧ计ノ猭 </title> 
<body>    
  <?php
    bad_words("lazy","greedy","dirty","ugly");
    bad_words("sick","fat");            
  ?> 
</body>
</html>