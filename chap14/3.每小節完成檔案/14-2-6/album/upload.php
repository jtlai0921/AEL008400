<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>上載檔案報告</title>
</head>
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
?>
<body>
<table width="350" border="1" align="center">
  <tr>
    <td width="97">檔案名稱</td>
    <td width="237"><?php echo $_FILES['uploadfile']['name']; ?></td>
  </tr>
  <tr>
    <td>註解</td>
    <td><?php echo $_POST['comment']; ?></td>
  </tr>
  <tr>
    <td>檔案大小</td>
    <td><?php echo $_FILES['uploadfile']['size'] . " Bytes"; ?></td>
  </tr>
  <tr>
    <td>檔案格式</td>
    <td><?php echo $_FILES['uploadfile']['type']; ?></td>
  </tr>
  <tr>
    <td>暫存檔名稱</td>
    <td><?php echo $_FILES['uploadfile']['tmp_name']; ?></td>
  </tr>
  <tr>
    <td>錯誤代碼</td>
    <td>
      <?php
      // 1. 先判斷上傳至網站的暫存目錄是否有錯誤
      if ($_FILES['uploadfile']['error']>0)
      {
        switch ($_FILES['uploadfile']["error"])
        {
          case 1: die('ErrCode: 1 檔案大小超出 php.ini:upload_max_filesize 限制'); break;
          case 2: die('ErrCode: 2 檔案大小超出 max_file_size 限制'); break;
          case 3: die('ErrCode: 3 檔案僅被部份上傳,上傳不完整');  break;
          case 4: die('ErrCode: 4 檔案未被上傳'); break;
          case 6: die('ErrCode: 6 暫存目錄不存在');  break;
          case 7: die('ErrCode: 7 無法寫入到檔案'); break;
          case 8: die('ErrCode: 8 上傳停止'); break;
        }
      }
      // 2. 前面 1. 成功, 再將上傳至網站的暫存檔案搬至到另個目錄, 並存成不同檔名
      if(is_uploaded_file($_FILES['uploadfile']['tmp_name']))
      {
        $chkImg=getimagesize($_FILES['uploadfile']['tmp_name']);
        if (!$chkImg)
          die("不是圖檔");
	      $DestDir ="files";
        if(!is_dir($DestDir) || !is_writeable($DestDir))
          die("目錄不存在或無法寫入");
        $tmp_filename=$_FILES['uploadfile']['tmp_name'];
        $originalfilename = $_FILES['uploadfile']['name']; 
        $Server_filename = $DestDir. "/". date("YmdHis") . "-" . $originalfilename; 
        if (move_uploaded_file($tmp_filename, $Server_filename))
        {
          echo $originalfilename ." 檔案上傳成功";
          require_once('Connections/dbconn_album.php'); 
          $insertSQL = sprintf("INSERT INTO album (LocalName, ServName, FileSize, FileType, Comment) VALUES (%s, %s, %s, %s, %s)",
          GetSQLValueString($originalfilename, "text"),
          GetSQLValueString($Server_filename, "text"),
          GetSQLValueString($_FILES['uploadfile']['size'], "text"),
          GetSQLValueString($_FILES['uploadfile']['type'], "text"),
          GetSQLValueString($_POST['comment'], "text") );   			                               
          mysql_select_db($database_dbconn_album, $dbconn_album);
          $Result1 = mysql_query($insertSQL, $dbconn_album) or  
          die(mysql_error());
        }  
        else
          die("檔案上傳失敗");        
      }
      ?>
    </td>
  </tr>
</table>
<p align="center">&nbsp;</p>
<p>&nbsp;</p>
</body>
</html>