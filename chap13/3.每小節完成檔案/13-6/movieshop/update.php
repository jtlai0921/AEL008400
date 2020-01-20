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

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_update"])) && ($_POST["MM_update"] == "form1")) {
  $updateSQL = sprintf("UPDATE movie SET title=%s, director=%s, actor=%s, country=%s, category=%s, movietype=%s, storetype=%s, oldnewtype=%s, issuedate=%s, lengthmin=%s WHERE id=%s",
                       GetSQLValueString($_POST['title'], "text"),
                       GetSQLValueString($_POST['director'], "text"),
                       GetSQLValueString($_POST['actor'], "text"),
                       GetSQLValueString($_POST['country'], "text"),
                       GetSQLValueString($_POST['category'], "text"),
                       GetSQLValueString($_POST['movietype'], "text"),
                       GetSQLValueString($_POST['storetype'], "text"),
                       GetSQLValueString($_POST['oldnewtype'], "text"),
                       GetSQLValueString($_POST['issuedate'], "date"),
                       GetSQLValueString($_POST['lengthmin'], "int"),
                       GetSQLValueString($_POST['id'], "int"));

  mysql_select_db($database_dbconn_movieshop, $dbconn_movieshop);
  $Result1 = mysql_query($updateSQL, $dbconn_movieshop) or die(mysql_error());

  $updateGoTo = "index.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $updateGoTo .= (strpos($updateGoTo, '?')) ? "&" : "?";
    $updateGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $updateGoTo));
}

$colname_rs_update = "-1";
if (isset($_GET['ID'])) {
  $colname_rs_update = $_GET['ID'];
}
mysql_select_db($database_dbconn_movieshop, $dbconn_movieshop);
$query_rs_update = sprintf("SELECT * FROM movie WHERE id = %s", GetSQLValueString($colname_rs_update, "int"));
$rs_update = mysql_query($query_rs_update, $dbconn_movieshop) or die(mysql_error());
$row_rs_update = mysql_fetch_assoc($rs_update);
$totalRows_rs_update = mysql_num_rows($rs_update);
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
<form action="<?php echo $editFormAction; ?>" id="form1" name="form1" method="POST">
  <table width="278" border="1" align="center">
    <tr>
      <td height="24">編號</td>
      <td><label for="id"></label>
      <input name="id" type="text" id="id" value="<?php echo $row_rs_update['id']; ?>" readonly="readonly" /></td>
    </tr>
    <tr>
      <td width="98" height="24">片名</td>
      <td width="164"><label>
        <input name="title" type="text" id="title" value="<?php echo $row_rs_update['title']; ?>" />
      </label></td>
    </tr>
    <tr>
      <td>導演</td>
      <td><label>
        <input name="director" type="text" id="director" value="<?php echo $row_rs_update['director']; ?>" />
      </label></td>
    </tr>
    <tr>
      <td>演員</td>
      <td><label>
        <input name="actor" type="text" id="actor" value="<?php echo $row_rs_update['actor']; ?>" />
      </label></td>
    </tr>
    <tr>
      <td>國家</td>
      <td><label>
        <input name="country" type="text" id="country" value="<?php echo $row_rs_update['country']; ?>" />
      </label></td>
    </tr>
    <tr>
      <td>影片分級</td>
      <td><label>
        <input name="category" type="text" id="category" value="<?php echo $row_rs_update['category']; ?>" />
      </label></td>
    </tr>
    <tr>
      <td>影片類型</td>
      <td><label>
        <input name="movietype" type="text" id="movietype" value="<?php echo $row_rs_update['movietype']; ?>" />
      </label></td>
    </tr>
    <tr>
      <td>格式</td>
      <td><label>
        <input name="storetype" type="text" id="storetype" value="<?php echo $row_rs_update['storetype']; ?>" />
      </label></td>
    </tr>
    <tr>
      <td>新舊片</td>
      <td><label>
        <input name="oldnewtype" type="text" id="oldnewtype" value="<?php echo $row_rs_update['oldnewtype']; ?>" />
      </label></td>
    </tr>
    <tr>
      <td>發行日期 </td>
      <td><label>
        <input name="issuedate" type="text" id="issuedate" value="<?php echo $row_rs_update['issuedate']; ?>" />
      </label></td>
    </tr>
    <tr>
      <td>片長</td>
      <td><label>
        <input name="lengthmin" type="text" id="lengthmin" value="<?php echo $row_rs_update['lengthmin']; ?>" />
      </label></td>
    </tr>
  </table>
  <p align="center">
    <input type="reset" name="button" id="button" value="重設" />
    <input type="submit" name="button2" id="button2" value="送出" />
  </p>
  <input type="hidden" name="MM_update" value="form1" />
</form>
<p>&nbsp;</p>
</body>
</html>
<?php
mysql_free_result($rs_update);
?>
