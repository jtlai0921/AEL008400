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

$currentPage = $_SERVER["PHP_SELF"];

$maxRows_rs_movie = 10;
$pageNum_rs_movie = 0;
if (isset($_GET['pageNum_rs_movie'])) {
  $pageNum_rs_movie = $_GET['pageNum_rs_movie'];
}
$startRow_rs_movie = $pageNum_rs_movie * $maxRows_rs_movie;

mysql_select_db($database_dbconn_movieshop, $dbconn_movieshop);
$query_rs_movie = "SELECT id, title, director, actor, oldnewtype, issuedate, lengthmin FROM movie ORDER BY issuedate DESC";
$query_limit_rs_movie = sprintf("%s LIMIT %d, %d", $query_rs_movie, $startRow_rs_movie, $maxRows_rs_movie);
$rs_movie = mysql_query($query_limit_rs_movie, $dbconn_movieshop) or die(mysql_error());
$row_rs_movie = mysql_fetch_assoc($rs_movie);

if (isset($_GET['totalRows_rs_movie'])) {
  $totalRows_rs_movie = $_GET['totalRows_rs_movie'];
} else {
  $all_rs_movie = mysql_query($query_rs_movie);
  $totalRows_rs_movie = mysql_num_rows($all_rs_movie);
}
$totalPages_rs_movie = ceil($totalRows_rs_movie/$maxRows_rs_movie)-1;

$queryString_rs_movie = "";
if (!empty($_SERVER['QUERY_STRING'])) {
  $params = explode("&", $_SERVER['QUERY_STRING']);
  $newParams = array();
  foreach ($params as $param) {
    if (stristr($param, "pageNum_rs_movie") == false && 
        stristr($param, "totalRows_rs_movie") == false) {
      array_push($newParams, $param);
    }
  }
  if (count($newParams) != 0) {
    $queryString_rs_movie = "&" . htmlentities(implode("&", $newParams));
  }
}
$queryString_rs_movie = sprintf("&totalRows_rs_movie=%d%s", $totalRows_rs_movie, $queryString_rs_movie);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>福爾摩莎影片出租店</title>
<style type="text/css">
<!--
.title {
	color: #000;
}
.webtitle {
	color: #000;
}
.webtitle em {
	color: #0000A0;
}
.hline {
	color: #408080;
}
.hline {
	color: #808080;
}
.webtitle em {
	color: #8080C0;
}
.webtitle em {
	color: #004080;
}
.hline {
	color: #00FF80;
}
.hline {
	color: #000;
}
.hline {
	color: #408080;
}
.columntitle {
	color: #000;
}
.columntitle td {
	color: #00F;
}
-->
</style>
</head>

<body bgcolor="#FFFF99" alink="#996600">
<h2 align="center" class="webtitle"><em>福爾摩莎影片出租店</em><br />
*****************************</h2>
<p align="center">共有<?php echo $totalRows_rs_movie ?> 筆記錄, 目前顯示第<?php echo ($startRow_rs_movie + 1) ?>到第<?php echo min($startRow_rs_movie + $maxRows_rs_movie, $totalRows_rs_movie) ?>筆記錄</p>
<table width="796" border="1" align="center" cellpadding="1" cellspacing="1">
  <tr class="columntitle">
    <td width="95" align="center"><strong>片名</strong></td>
    <td width="121" align="center"><strong>導演</strong></td>
    <td width="144" align="center"><strong>演員</strong></td>
    <td width="144" align="center" class="columntitle"><strong>新舊片</strong></td>
    <td width="129" align="center"><strong>發行日期</strong></td>
    <td width="130" align="center"><strong>片長</strong></td>
  </tr>
  <?php do { ?>
      <?php if ($totalRows_rs_movie > 0) { // Show if recordset not empty ?>
        <tr>
          <td><?php echo $row_rs_movie['title']; ?></td>
          <td><?php echo $row_rs_movie['director']; ?></td>
          <td align="left"><?php echo $row_rs_movie['actor']; ?></td>
          <td><?php echo $row_rs_movie['oldnewtype']; ?></td>
          <td><?php echo $row_rs_movie['issuedate']; ?></td>
          <td align="left"><?php echo $row_rs_movie['lengthmin']; ?></td>
        </tr>
        <?php } // Show if recordset not empty ?>
<?php } while ($row_rs_movie = mysql_fetch_assoc($rs_movie)); ?>
</table>
<p align="center">
  <?php if ($pageNum_rs_movie > 0) { // Show if not first page ?>
    <a href="<?php printf("%s?pageNum_rs_movie=%d%s", $currentPage, 0, $queryString_rs_movie); ?>">&lt;第一頁&gt;</a>
    <?php } // Show if not first page ?>
  <?php if ($pageNum_rs_movie > 0) { // Show if not first page ?>
    <a href="<?php printf("%s?pageNum_rs_movie=%d%s", $currentPage, max(0, $pageNum_rs_movie - 1), $queryString_rs_movie); ?>">&lt;上一頁&gt;</a>
    <?php } // Show if not first page ?>
  <?php if ($pageNum_rs_movie < $totalPages_rs_movie) { // Show if not last page ?>
    <a href="<?php printf("%s?pageNum_rs_movie=%d%s", $currentPage, min($totalPages_rs_movie, $pageNum_rs_movie + 1), $queryString_rs_movie); ?>">&lt;下一頁&gt;</a>
    <?php } // Show if not last page ?>
  <?php if ($pageNum_rs_movie < $totalPages_rs_movie) { // Show if not last page ?>
    <a href="<?php printf("%s?pageNum_rs_movie=%d%s", $currentPage, $totalPages_rs_movie, $queryString_rs_movie); ?>">&lt;最後一頁&gt;</a>
    <?php } // Show if not last page ?>
</p>
<p align="center">
  <?php if ($pageNum_rs_movie == 0 and $totalRows_rs_movie<>0) { // Show if first page ?>
    您已到達第一頁！
  <?php } // Show if first page ?>
  <?php if ($pageNum_rs_movie >= $totalPages_rs_movie and $totalRows_rs_movie<>0) { // Show if last page ?>
    您已到達最後一頁！
  <?php } // Show if last page ?>
</p>
<?php if ($totalRows_rs_movie == 0) { // Show if recordset empty ?>
  <p align="center">沒有符合的資料！</p>
  <?php } // Show if recordset empty ?>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>
</body>
</html>
<?php
mysql_free_result($rs_movie);
?>
