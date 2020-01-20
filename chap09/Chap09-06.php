<html>
<title> foreach °j°é </title> 
<body>      
  <?php 
   $a=array(
        array(1,3,5,7,9),
        array(2,4,6),
        array(11,13,15,17),
        array(12,14,16,18,20)
      );
   foreach($a as $k1=>$a1)
   { 
     foreach($a1 as $k2=>$a2)
       echo " \$a[$k1][$k2]=" . $a[$k1][$k2]; 
     echo "<br>"; 	       
   }   
  ?>
</body>
</html>