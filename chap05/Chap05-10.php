<?php
  class cup
  {
    var $color;  // �����ܼ�
    var $size;   // �����ܼ�   
    
    function set_color_size($new_color,$new_size)
    {
      $this->color = $new_color;  
      $this->size = $new_size;    
    }	
    
    function show_color_size()    // �����禡
    {
      echo "Color is ". $this->color . ", Size is ". $this->size. "<br>";    
    }	  
  }  
?>

<html>
<title> ���O�P����  </title> 
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
