<html>
<title> 靜態變數 - 使用 static </title> 
<body>    
  <?php
    function get_nextid()
    {
      static $id=0;  // 注意前面加了 static
      $id++;      
      echo "\$id=$id <br>";      
    }
    get_nextid();
    get_nextid();
    get_nextid();
  ?>     
</body>
</html>
