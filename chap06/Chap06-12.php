<html>
<title> �ϥ� settype ��Ʊj���ഫ���A </title> 
<body>    
  <?php
    // 1. �j���ഫ�����
    $a=25.34;
    echo "�ഫ�e \$a=$a, ���A�O: ".gettype($a);     
    settype($a, int);
    echo "<br>�ഫ�� \$a=$a,  ���A�O: ".gettype($a)."<hr>";   
    // 2. �j���ഫ���B�I��
    $a="55.7 degrees";
    echo "�ഫ�e \$a=$a, ���A�O: ".gettype($a);    
    settype ($a, double);
    echo "<br>�ഫ�� \$a=$a,  ���A�O: ".gettype($a)."<hr>";    
    // 3. �j���ഫ���r��
    $a=89.234;
    echo "�ഫ�e \$a=$a, ���A�O: ".gettype($a);  
    settype ($a, string);
    echo "<br>�ഫ�� \$a=$a,  ���A�O: ".gettype($a)."<hr>";      
  ?>   
</body>
</html>
