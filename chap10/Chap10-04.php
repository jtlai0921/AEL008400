<?php
  function orderdrink($type,$cups=1)
  {    
    echo "�ڭn $cups �M $type. <br>";
  }	
?>    
<html>
<title> �]�w��ƪ��Ѽƹw�]�� </title> 
<body>    
  <?php
    $cup=5;
    $type="Cappuccino";    
    echo orderdrink($type, $cup);
    echo orderdrink("Espresso");  // �ϥιw�]��
    echo orderdrink("�T��",3);
  ?> 
</body>
</html>