<html>
<title> break </title> 
<body>      
  <?php  
    $i = 0;
    while (++$i<10) {
      switch ($i) {
        case 3:        
          break 1;  // ���} switch
        case 7:         
          break 2; // ���} while 
        default:
          echo "\$i=$i <br>";
          break;
      }    
    } 
    echo "�o�Owhile ���U�@��"
  ?>
</body>
</html>