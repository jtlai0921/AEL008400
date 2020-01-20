<html>
<title> do-while °j°é </title> 
<body>      
  <?php 
   $a=array(1,3,5,7,9);
   $cnt=count($a);
   echo "do-while loop: <br>";
   $i=0; 
   do { 
     echo "\$a[$i]=$a[$i] <br>";        	      	
     $i++;
   } while ($i<$cnt);
 ?>
</body>
</html>