<html>
<title> �R�A�ܼ� - �ϥ� static </title> 
<body>    
  <?php
    function get_nextid()
    {
      static $id=0;  // �`�N�e���[�F static
      $id++;      
      echo "\$id=$id <br>";      
    }
    get_nextid();
    get_nextid();
    get_nextid();
  ?>     
</body>
</html>
