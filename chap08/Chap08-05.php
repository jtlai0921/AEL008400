<html>
<title> 陣列運算子-兩陣列的比較 </title> 
<body>    
<?php   
  // 1. 內容, 資料型態完全相同, 但次序不同
  $list1 = array("apple", "orange");
  $list2 = array( 1 => "orange", 0 => "apple");
  var_dump($list1 ==  $list2); // bool(true)
  var_dump($list1 === $list2); // bool(false)
  var_dump($list1 !=  $list2); // bool(false)
  var_dump($list1 <>  $list2); // bool(false)
  var_dump($list1 !== $list2); // bool(true)    
  echo "<hr>";  
  // 2. 內容相同, 資料型態不相同
  $list3 = array(100, 350);
  $list4 = array(1 => "350", 0 => "100");
  var_dump($list3 ==  $list4); // bool(true)
  var_dump($list3 === $list4); // bool(false)
  var_dump($list3 !=  $list4); // bool(false)
  var_dump($list3 <>  $list4); // bool(false)
  var_dump($list3 !== $list4); // bool(true)
  echo "<hr>";  
  // 3. 鍵值和內容的對應組合不同
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