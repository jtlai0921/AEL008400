<html>
<title> �}�C�B��l-��}�C����� </title> 
<body>    
<?php   
  // 1. ���e, ��ƫ��A�����ۦP, �����Ǥ��P
  $list1 = array("apple", "orange");
  $list2 = array( 1 => "orange", 0 => "apple");
  var_dump($list1 ==  $list2); // bool(true)
  var_dump($list1 === $list2); // bool(false)
  var_dump($list1 !=  $list2); // bool(false)
  var_dump($list1 <>  $list2); // bool(false)
  var_dump($list1 !== $list2); // bool(true)    
  echo "<hr>";  
  // 2. ���e�ۦP, ��ƫ��A���ۦP
  $list3 = array(100, 350);
  $list4 = array(1 => "350", 0 => "100");
  var_dump($list3 ==  $list4); // bool(true)
  var_dump($list3 === $list4); // bool(false)
  var_dump($list3 !=  $list4); // bool(false)
  var_dump($list3 <>  $list4); // bool(false)
  var_dump($list3 !== $list4); // bool(true)
  echo "<hr>";  
  // 3. ��ȩM���e�������զX���P
  $list5 = array(10, 20, 30);
  $list6 = array(30, 20, 10);
  var_dump($list5 ==  $list6); // bool(false)
  var_dump($list5 === $list6); // bool(false)
  var_dump($list5 !=  $list6); // bool(true)
  var_dump($list5 <>  $list6); // bool(true)
  var_dump($list5 !== $list6); // bool(true)               
  ?>
</body>
</html>