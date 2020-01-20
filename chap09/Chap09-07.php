<html>
<title> break </title> 
<body>      
  <?php  
    $i = 0;
    while (++$i<10) {
      switch ($i) {
        case 3:        
          break 1;  // 離開 switch
        case 7:         
          break 2; // 離開 while 
        default:
          echo "\$i=$i <br>";
          break;
      }    
    } 
    echo "這是while 的下一行"
  ?>
</body>
</html>