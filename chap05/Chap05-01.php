// Sample PHP code to connect MySQL DB
<?php
//connect to the database server
  $db =  
      mysql_connect("mysql.nctu.edu.tw:port_number", 
      "user_name", "password");

   //report the connection failure or success
  if (!$db) {
     echo "there was a problem connecting to the database.";
     exit;
  }

  if ($db) {
     echo "Connection Success!";
  exit;
  }
?>
