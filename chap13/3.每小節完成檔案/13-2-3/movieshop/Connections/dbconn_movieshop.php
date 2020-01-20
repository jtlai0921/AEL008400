<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_dbconn_movieshop = "localhost";
$database_dbconn_movieshop = "movieshop";
$username_dbconn_movieshop = "root";
$password_dbconn_movieshop = "1234";
$dbconn_movieshop = mysql_pconnect($hostname_dbconn_movieshop, $username_dbconn_movieshop, $password_dbconn_movieshop) or trigger_error(mysql_error(),E_USER_ERROR); 
mysql_query ("SET NAMES 'UTF8'");
?>