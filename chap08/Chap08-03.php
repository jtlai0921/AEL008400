<html>
<title> �}�C����l��-array ��Ƴ]�w(�G���}�C) </title> 
<body>    
<?php   
  // �G���}�C   
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