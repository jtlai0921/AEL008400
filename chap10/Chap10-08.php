<?php
  function bad_words()
  {      	
    $arg_list = func_get_args();
    $para_cnt=count($arg_list);
    echo "$para_cnt �ӰѼƤ��O�O�G <br>";
    foreach($arg_list as $key=>$value)	
      echo "��". ($key+1) ."�ӰѼƬO: \$arg_list($key):". $value. "<br>";
    echo "<hr>";    
  }  
?>    
<html>
<title> func_get_args ��ƪ��Ϊk </title> 
<body>    
  <?php
    bad_words("lazy","greedy","dirty","ugly");
    bad_words("sick","fat");            
  ?> 
</body>
</html>