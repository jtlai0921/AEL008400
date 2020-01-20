<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_dbconn_album = "localhost";
$database_dbconn_album = "album";
$username_dbconn_album = "root";
$password_dbconn_album = "1234";
$dbconn_album = mysql_pconnect($hostname_dbconn_album, $username_dbconn_album, $password_dbconn_album) or trigger_error(mysql_error(),E_USER_ERROR); 
mysql_query ("SET NAMES 'UTF8'");
?>