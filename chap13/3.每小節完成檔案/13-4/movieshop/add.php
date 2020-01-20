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

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "form1")) {
  $insertSQL = sprintf("INSERT INTO movie (title, director, actor, country, category, movietype, storetype, oldnewtype, issuedate, lengthmin) VALUES (%s, %s, %s, %s, %s, %s, %s, %s, %s, %s)",
                       GetSQLValueString($_POST['title'], "text"),
                       GetSQLValueString($_POST['director'], "text"),
                       GetSQLValueString($_POST['actor'], "text"),
                       GetSQLValueString($_POST['country'], "text"),
                       GetSQLValueString($_POST['category'], "text"),
                       GetSQLValueString($_POST['movietype'], "text"),
                       GetSQLValueString($_POST['storetype'], "text"),
                       GetSQLValueString($_POST['oldnewtype'], "text"),
                       GetSQLValueString($_POST['issuedate'], "date"),
                       GetSQLValueString($_POST['lengthmin'], "int"));

  mysql_select_db($database_dbconn_movieshop, $dbconn_movieshop);
  $Result1 = mysql_query($insertSQL, $dbconn_movieshop) or die(mysql_error());

  $insertGoTo = "index.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $insertGoTo));
}
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
<form id="form1" name="form1" method="POST" action="<?php echo $editFormAction; ?>">
  <table width="278" border="1" align="center">
    <tr>
      <td width="98" height="24">片名</td>
      <td width="164"><label>
        <input name="title" type="text" id="title" />
      </label></td>
    </tr>
    <tr>
      <td>導演</td>
      <td><label>
        <input type="text" name="director" id="director" />
      </label></td>
    </tr>
    <tr>
      <td>演員</td>
      <td><label>
        <input type="text" name="actor" id="actor" />
      </label></td>
    </tr>
    <tr>
      <td>國家</td>
      <td><label>
        <input type="text" name="country" id="country" />
      </label></td>
    </tr>
    <tr>
      <td>影片分級</td>
      <td><label>
        <input type="text" name="category" id="category" />
      </label></td>
    </tr>
    <tr>
      <td>影片類型</td>
      <td><label>
        <input type="text" name="movietype" id="movietype" />
      </label></td>
    </tr>
    <tr>
      <td>格式</td>
      <td><label>
        <input type="text" name="storetype" id="storetype" />
      </label></td>
    </tr>
    <tr>
      <td>新舊片</td>
      <td><label>
        <input type="text" name="oldnewtype" id="oldnewtype" />
      </label></td>
    </tr>
    <tr>
      <td>發行日期 </td>
      <td><label>
        <input type="text" name="issuedate" id="issuedate" />
      </label></td>
    </tr>
    <tr>
      <td>片長</td>
      <td><label>
        <input type="text" name="lengthmin" id="lengthmin" />
      </label></td>
    </tr>
  </table>
  <p align="center">
    <input type="reset" name="button" id="button" value="重設" />
    <input type="submit" name="button2" id="button2" value="送出" />
  </p>
  <input type="hidden" name="MM_insert" value="form1" />
</form>
</body>
</html>