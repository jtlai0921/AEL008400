<?php 
  define (GREETING_MSG,"Bonjour, ");
  define (THANKS_MSG,"Merci, ",1);
  define (PI, 3.14159); 
?>
<html>
<title> ¦Û­q±`¼Æ </title> 
<body>    
  <?php   
    function MsgFunction()  
    {          	     
      echo GREETING_MSG . "Jacqueline" . ". <br>"; 
      echo Greeting_MSG . "Jean Paul" . ". <br>"; 
      echo THANKS_MSG . "Jean Paul" . ". <br>"; 
      echo Thanks_MSG . "Jean Paul" . ". <br>";   
      echo PI * 5 . "<br>";    
      if (defined('GREETING_MSG'))
        echo 'GREETING_MSG is already defined as ' . '"'. GREETING_MSG . '"'. '<br>' ;
      echo "All constats are as below: <br>";        
      print_r(get_defined_constants(true));      
    } 
    MsgFunction();  
  ?>  
</body>
</html>