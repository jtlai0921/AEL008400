<html>
<title> 陣列的初始化-array 函數設定(二維陣列) </title> 
<body>    
<?php   
  // 二維陣列   
  $city_US=array
          (
             'CA'=> array             
                  (  'AB'  => 'Alberta',
                     'BC'  => 'British Columbia',
                     'MB'  => 'Manitoba',
                     'NB'  => 'New Brunswick',
                     'NL'  => 'Newfoundland/Labrador'
                   ),                      
              'AL'=> array             
                    ( 'Avon',
                      'Benton',
                      'Belk'
                     ), 
             'AK'=> array             
                    ( 'Anchorage',
                      'Buckland',
                       'Golovin' 
                    )                                      
           );     
      echo "\$city_US['CA']['NB']=" . $city_US['CA']['NB'] . "<br>";
      echo "\$city_US['AL'][1]=" . $city_US['AL'][1]. "<br>";
      echo "\$city_US['AK'][0]=" . $city_US['AK'][0]. "<br>";          
      echo "Cities of US: ";        
      print_r($city_US);                    
  ?>
</body>
</html>