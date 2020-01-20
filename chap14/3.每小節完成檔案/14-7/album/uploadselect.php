<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>選擇上載檔案</title>
</head>

<body>
<form action="upload.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
  <p align="center">請選擇欲上傳之相片檔案:
    <input name="MAX_FILE_SIZE" type="hidden" id="MAX_FILE_SIZE" value="3000000" />
    <label>
      <input type="file" name="uploadfile" id="uploadfile" />
    </label>
    <label>
      <input type="submit" name="button" id="button" value="送出" />
    </label>
  </p>
  <p align="center">相片註解:
    <label> </label>
    <label>
      <input type="text" name="comment" id="comment" />
    </label>
  </p>
</form>
</body>
</html>