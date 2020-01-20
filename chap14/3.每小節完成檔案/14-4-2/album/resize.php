<?php 
  function imageResize($srcfile, $destfile, $MaxLen)
  {
    if(file_exists($srcfile) && isset($destfile))
	  {
      // 1. ���o�ӷ����ɸ�T
      $srcSize=getimagesize($srcfile); 
      $srcW=$srcSize[0];
      $srcH=$srcSize[1];	
      $srcExtension=$srcSize[2];
      // 2. �p��վ�᪺�e�׻P����
      $srcRatio=$srcW/$srcH; 		
      if($srcRatio>1)  
      {
        $destW=$MaxLen;
        $destH=$destW/$srcRatio;   // �e>��
      }
      else
	    {
	      $destH=$MaxLen;            // ��>=�e 
	      $destW=$destH*$srcRatio;	 
	    }  	 	 
	  }
    // 3. �إߥΨӦs��ت��v�����O����Ŷ�
    $destImage=imagecreatetruecolor($destW, $destH);
    // 4. �إߥΨӦs��ӷ��v�����O����Ŷ�
    switch ($srcExtension)
    {  
	    case 1: $srcImage=imagecreatefromgif($srcfile);  break;
	    case 2: $srcImage=imagecreatefromjpeg($srcfile); break;
	    case 3: $srcImage=imagecreatefrompng($srcfile);  break;  
    }
    // 5. �q�ӷ��v�����O���餺�e�N�v���̫��w���e����ҽƻs��ت��v�����O���餺�e
    imagecopyresampled($destImage,$srcImage, 0,0,0,0, $destW, $destH, imagesx($srcImage), imagesy($srcImage));
    // 6. �N�ت��v�����O���餺�e�g��ت�����
    switch($srcExtension)
    { 
	    case 1:imagegif($destImage, $destfile); break;
	    case 2:imagejpeg($destImage, $destfile, 85); break;
	    case 3:imagepng($destImage, $destfile); break; 
    }
  }
?>

