<?php require_once('Connections/dbconn_movieshop.php'); ?>
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

if ((isset($_GET['ID'])) && ($_GET['ID'] != "") && (isset($_POST['Delete']))) {
  $deleteSQL = sprintf("DELETE FROM movie WHERE id=%s",
                       GetSQLValueString($_GET['ID'], "int"));

  mysql_select_db($database_dbconn_movieshop, $dbconn_movieshop);
  $Result1 = mysql_query($deleteSQL, $dbconn_movieshop) or die(mysql_error());

  $deleteGoTo = "index.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $deleteGoTo .= (strpos($deleteGoTo, '?')) ? "&" : "?";
    $deleteGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $deleteGoTo));
}

$colname_rs_delete = "-1";
if (isset($_GET['ID'])) {
  $colname_rs_delete = $_GET['ID'];
}
mysql_select_db($database_dbconn_movieshop, $dbconn_movieshop);
$query_rs_delete = sprintf("SELECT * FROM movie WHERE id = %s", GetSQLValueString($colname_rs_delete, "int"));
$rs_delete = mysql_query($query_rs_delete, $dbconn_movieshop) or die(mysql_error());
$row_rs_delete = mysql_fetch_assoc($rs_delete);
$totalRows_rs_delete = mysql_num_rows($rs_delete);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>福爾摩莎影片出租店</title>
<style type="text/css">
<!--
.hline {	color: #408080;
}
.hline {	color: #808080;
}
.hline {	color: #00FF80;
}
.hline {	color: #000;
}
.hline {	color: #408080;
}
.webtitle {	color: #000;
}
.webtitle em {
	color: #008080;
}
.webtitle em {
	color: #004080;
}
-->
</style>
</head>

<body bgcolor="#FFFF99">
<h2 align="center" class="webtitle"><em>福爾摩莎影片出租店</em><br />
*****************************</h2>
<form id="form1" name="form1" method="post" action="">
  <table width="278" border="1" align="center">
    <tr>
      <td height="24">編號</td>
      <td><label for="id"></label>
      <input name="id" type="text" id="id" value="<?php echo $row_rs_delete['id']; ?>" readonly="readonly" /></td>
    </tr>
    <tr>
      <td width="98" height="24">片名</td>
      <td width="164"><label>
        <input name="title" type="text" id="title" value="<?php echo $row_rs_delete['title']; ?>" readonly="readonly" />
      </label></td>
    </tr>
    <tr>
      <td>導演</td>
      <td><label>
        <input name="director" type="text" id="director" value="<?php echo $row_rs_delete['director']; ?>" readonly="readonly" />
      </label></td>
    </tr>
    <tr>
      <td>演員</td>
      <td><label>
        <input name="actor" type="text" id="actor" value="<?php echo $row_rs_delete['actor']; ?>" readonly="readonly" />
      </label></td>
    </tr>
    <tr>
      <td>國家</td>
      <td><label>
        <input name="country" type="text" id="country" value="<?php echo $row_rs_delete['country']; ?>" readonly="readonly" />
      </label></td>
    </tr>
    <tr>
      <td>影片分級</td>
      <td><label>
        <input name="category" type="text" id="category" value="<?php echo $row_rs_delete['category']; ?>" readonly="readonly" />
      </label></td>
    </tr>
    <tr>
      <td>影片類型</td>
      <td><label>
        <input name="movietype" type="text" id="movietype" value="<?php echo $row_rs_delete['movietype']; ?>" readonly="readonly" />
      </label></td>
    </tr>
    <tr>
      <td>格式</td>
      <td><label>
        <input name="storetype" type="text" id="storetype" value="<?php echo $row_rs_delete['storetype']; ?>" readonly="readonly" />
      </label></td>
    </tr>
    <tr>
      <td>新舊片</td>
      <td><label>
        <input name="oldnewtype" type="text" id="oldnewtype" value="<?php echo $row_rs_delete['oldnewtype']; ?>" readonly="readonly" />
      </label></td>
    </tr>
    <tr>
      <td>發行日期 </td>
      <td><label>
        <input name="issuedate" type="text" id="issuedate" value="<?php echo $row_rs_delete['issuedate']; ?>" readonly="readonly" />
      </label></td>
    </tr>
    <tr>
      <td>片長</td>
      <td><label>
        <input name="lengthmin" type="text" id="lengthmin" value="<?php echo $row_rs_delete['lengthmin']; ?>" readonly="readonly" />
      </label></td>
    </tr>
  </table>
  <p align="center">
    <input type="submit" name="Delete" id="Delete" value="刪除" />
  </p>
</form>
<p align="center">&nbsp;</p>
</body>
</html>
<?php
mysql_free_result($rs_delete);
?>
