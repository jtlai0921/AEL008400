<?php require_once('Connections/dbconn_album.php'); ?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

$colname_rs_photo = "-1";
if (isset($_GET['ID'])) {
  $colname_rs_photo = $_GET['ID'];
}
mysql_select_db($database_dbconn_album, $dbconn_album);
$query_rs_photo = sprintf("SELECT * FROM album WHERE ID = %s", GetSQLValueString($colname_rs_photo, "int"));
$rs_photo = mysql_query($query_rs_photo, $dbconn_album) or die(mysql_error());
$row_rs_photo = mysql_fetch_assoc($rs_photo);
$totalRows_rs_photo = mysql_num_rows($rs_photo);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Cheese Cake 做法-相簿</title>
<style type="text/css">
<!--
body {
	background-color: #FC6;
}
-->
</style></head>

<body>
<table width="200" border="1" align="center">
  <tr>
    <td><div align="center"><img src="<?php echo $row_rs_photo['ServName']; ?>"/></div></td>
  </tr>
  <tr>
    <td><div align="center"><?php echo $row_rs_photo['FileType']; ?></div></td>
  </tr>
  <tr>
    <td><div align="center"><?php echo Round($row_rs_photo['FileSize']/1024,0) . "K"; ?></div></td>
  </tr>
  <tr>
    <td><div align="center"><?php echo $row_rs_photo['Comment']; ?></div></td>
  </tr>
</table>
<p>&nbsp;</p>
</body>
</html>
<?php
mysql_free_result($rs_photo);
?>
