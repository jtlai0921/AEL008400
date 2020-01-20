<?php
  class cup
  {
    var $color;  // 成員變數
    var $size;   // 成員變數   
    
    function set_color_size($new_color,$new_size)
    {
      $this->color = $new_color;  
      $this->size = $new_size;    
    }	
    
    function show_color_size()    // 成員函式
    {
      echo "Color is ". $this->color . ", Size is ". $this->size. "<br>";    
    }	  
  }  
?>

<html>
<title> 類別與物件  </title> 
<body>    
  <?php
     $cup1=new cup();
     $cup1->set_color_size("White","M");
     
     $cup2=new cup();
     $cup2->set_color_size("Yellow","L");
  
     $cup1->show_color_size();
     $cup2->show_color_size();
  ?>
</body>
</html>
