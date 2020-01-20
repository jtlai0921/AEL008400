<?php
  function positive_words()
  {    
    $para_cnt=func_num_args();
    echo "$para_cnt 把计だ琌 <br>";
    if ($para_cnt>=1) {
       for($i=0;$i<$para_cnt;$i++)	
         echo "材". ($i+1) ."把计琌 func_get_arg($i):". func_get_arg($i). "<br>";
       echo "<hr>";  
    }	
  }  
?>    
<html>
<title> func_get_arg ㄧ计ノ猭 </title> 
<body>    
  <?php
    positive_words("excellent","lucky","amazing","fantastic");
    positive_words("outstanding","happy");            
  ?> 
</body>
</html>