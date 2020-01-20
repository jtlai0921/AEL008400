<html>
<title> 陣列的初始化-array 函數設定(一維陣列) </title> 
<body>    
  <?php   
    // 1. 整數型態的陣列元素
    $numlist=array(5,10,1,2,8);    
    for ($i=0;$i<5;$i++)
      echo "\$numlist[$i]=$numlist[$i]  <br>"; 
    echo "<hr>";  
    // 2. 字串型態的陣列元素
    $seasons=array("April","Summer","Autumn","Winter");    
    for ($i=0;$i<4;$i++)
      echo "\$seasons[$i]=$seasons[$i]  <br>"; 
    echo "<hr>";          
    // 3. 使用鍵值=>元素值
    $namelist=array("Sam","Mary",5=>"Helen",1=>"Tom","Michael","Jeremy");   
    print_r($namelist);   
    echo "<hr>";          
    // 4. 鍵值可以是字串   
    $workdays=array
             (
               'Mon'  => '星期一',
               'Tue'  => '星期二',
               'Wed'  => '星期三',
               'THU'  => '星期四',
               'FRI'  => '星期五',
             );     
    echo "The working days are: ";        
    print_r($workdays);                    
  ?>
</body>
</html>