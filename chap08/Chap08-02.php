<html>
<title> �}�C����l��-array ��Ƴ]�w(�@���}�C) </title> 
<body>    
  <?php   
    // 1. ��ƫ��A���}�C����
    $numlist=array(5,10,1,2,8);    
    for ($i=0;$i<5;$i++)
      echo "\$numlist[$i]=$numlist[$i]  <br>"; 
    echo "<hr>";  
    // 2. �r�ꫬ�A���}�C����
    $seasons=array("April","Summer","Autumn","Winter");    
    for ($i=0;$i<4;$i++)
      echo "\$seasons[$i]=$seasons[$i]  <br>"; 
    echo "<hr>";          
    // 3. �ϥ����=>������
    $namelist=array("Sam","Mary",5=>"Helen",1=>"Tom","Michael","Jeremy");   
    print_r($namelist);   
    echo "<hr>";          
    // 4. ��ȥi�H�O�r��   
    $workdays=array
             (
               'Mon'  => '�P���@',
               'Tue'  => '�P���G',
               'Wed'  => '�P���T',
               'THU'  => '�P���|',
               'FRI'  => '�P����',
             );     
    echo "The working days are: ";        
    print_r($workdays);                    
  ?>
</body>
</html>