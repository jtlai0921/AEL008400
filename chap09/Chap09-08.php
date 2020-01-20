<html>
<title> continue </title> 
<body>      
  <?php  
    $i=0;
    while (++$i<5) // Loop 1
    {
      $j=0;
      while (true)  // Loop 2
      {
        $j++;  
        $k=0; 
        while (true) // Loop 3
        {
          $k++; 	
          echo "\$i=$i \$j=$j \$k=$k <br>";           
          if ($k==2)
            continue 3;
        }
         echo "這行永遠不會執行 <br>";
      }   
    }
  ?>
</body>
</html>