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

$colname_rs_movie_dtl = "-1";
if (isset($_GET['ID'])) {
  $colname_rs_movie_dtl = $_GET['ID'];
}
mysql_select_db($database_dbconn_movieshop, $dbconn_movieshop);
$query_rs_movie_dtl = sprintf("SELECT * FROM movie WHERE id = %s", GetSQLValueString($colname_rs_movie_dtl, "int"));
$rs_movie_dtl = mysql_query($query_rs_movie_dtl, $dbconn_movieshop) or die(mysql_error());
$row_rs_movie_dtl = mysql_fetch_assoc($rs_movie_dtl);
$totalRows_rs_movie_dtl = mysql_num_rows($rs_movie_dtl);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>福爾摩莎影片出租</title>
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
	color: #004080;
}
.hline {
	color: #408080;
}
.columntitle {
	color: #00F;
}
.columntitle {
	color: #00F;
}
.columntitle {
	color: #00F;
}
.columntitle {
	color: #00F;
}
.columntitle {
	color: #00F;
}
.columntitle {
	color: #00F;
}
.columntitle {
	color: #00F;
}
.columntitle {
	color: #00F;
}
.columntitle {
	color: #00F;
}
.columntitle {
	color: #00F;
}
-->
</style>
</head>

<body bgcolor="#FFFF99">
<h2 align="center" class="webtitle"><em>福爾摩莎影片出租店</em><br />
*****************************</h2>
<p align="center"><a href="update.php?ID=<?php echo $row_rs_movie_dtl['id']; ?>">修改影片資料</a></p>
<table width="664" border="1" align="center">
  <tr>
    <td width="144"><strong class="columntitle">片名</strong></td>
    <td width="113"><strong class="columntitle">導演</strong></td>
    <td width="128"><strong class="columntitle">演員</strong></td>
    <td width="124"><strong class="columntitle">國家</strong></td>
    <td width="121"><strong class="columntitle">影片分級</strong></td>
  </tr>
  <tr>
    <td height="23"><?php echo $row_rs_movie_dtl['title']; ?></td>
    <td><?php echo $row_rs_movie_dtl['director']; ?></td>
    <td><?php echo $row_rs_movie_dtl['actor']; ?></td>
    <td><?php echo $row_rs_movie_dtl['country']; ?></td>
    <td><?php echo $row_rs_movie_dtl['category']; ?></td>
  </tr>
  <tr>
    <td><strong class="columntitle">影片類型</strong></td>
    <td><strong class="columntitle">格式</strong></td>
    <td><strong class="columntitle">新舊片</strong></td>
    <td><strong class="columntitle">發行日期</strong></td>
    <td><strong class="columntitle">片長</strong></td>
  </tr>
  <tr>
    <td><?php echo $row_rs_movie_dtl['movietype']; ?></td>
    <td><?php echo $row_rs_movie_dtl['storetype']; ?></td>
    <td><?php echo $row_rs_movie_dtl['oldnewtype']; ?></td>
    <td><?php echo $row_rs_movie_dtl['issuedate']; ?></td>
    <td><?php echo $row_rs_movie_dtl['lengthmin']; ?></td>
  </tr>
</table>
<p align="center">&nbsp;</p>
</body>
</html>
<?php
mysql_free_result($rs_movie_dtl);
?>
