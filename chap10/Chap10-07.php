<?php
  function positive_words()
  {    
    $para_cnt=func_num_args();
    echo "$para_cnt �ӰѼƤ��O�O�G <br>";
    if ($para_cnt>=1) {
       for($i=0;$i<$para_cnt;$i++)	
         echo "��". ($i+1) ."�ӰѼƬO func_get_arg($i):". func_get_arg($i). "<br>";
       echo "<hr>";  
    }	
  }  
?>    
<html>
<title> func_get_arg ��ƪ��Ϊk </title> 
<body>    
  <?php
    positive_words("excellent","lucky","amazing","fantastic");
    positive_words("outstanding","happy");            
  ?> 
</body>
</html>