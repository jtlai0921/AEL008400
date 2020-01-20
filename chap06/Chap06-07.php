<html>
<title> 靜態變數 - 未用 static </title> 
<body>    
  <?php
    function get_nextid()
    {
      $id=0;
      $id++;      
      echo "\$id=$id <br>";      
    }
    get_nextid();
    get_nextid();
    get_nextid();
  ?>     
</body>
</html>
