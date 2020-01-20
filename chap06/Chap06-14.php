<html>
<title> 預設變數 </title>
<body>    
  <?php
   echo "\$_SERVER 變數 : ". "<p>";     
   echo "\$_SERVER['PHP_SELF']=" 
        . $_SERVER['PHP_SELF'] . "<br>";   
   echo "\$_SERVER['SERVER_ADDR']=" 
        . $_SERVER['SERVER_ADDR' ] . "<br>";    
   echo "\$_SERVER['SERVER_NAME']=" 
        . $_SERVER['SERVER_NAME'] . "<br>";
   echo "\$_SERVER['SERVER_PORT']=" 
        . $_SERVER['SERVER_PORT'] . "<br>";   
   echo "\$_SERVER['REMOTE_ADDR']=" 
        . $_SERVER['REMOTE_ADDR'] . "<br>";
   echo "\$_SERVER['SERVER_SOFTWARE']=" 
        . $_SERVER['SERVER_SOFTWARE']. "<br>";
   echo "\$_SERVER['REQUEST_METHOD']=" 
        . $_SERVER['REQUEST_METHOD']. "<br>";
   echo "\$_SERVER['DOCUMENT_ROOT']=" 
        . $_SERVER['DOCUMENT_ROOT']. "<br>"; 
   echo "\$_SERVER['HTTP_USER_AGENT']=" 
        . $_SERVER['HTTP_USER_AGENT']. "<br><hr>";       
   
   echo "\$_ENV 變數 :". "<p>";   
   echo "\$_ENV['USERNAME']=" 
        . $_ENV['USERNAME'] . "<br>";  
   echo "\$_ENV['OS']=" 
        . $_ENV['OS'] . "<br>";     
   echo "\$_ENV['COMPUTERNAME']=" 
        . $_ENV['COMPUTERNAME'] . "<br>"; 
   echo "\$_ENV['SystemRoot']="
        . $_ENV['SystemRoot'] . "<br>";     
  ?> 
</body>
</html>
