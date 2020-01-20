<?php 
  header("Content-type: image/jpeg");  // 注意:這一行前不能有空行或其它文字	      
  $ImageFile=$_GET['ImageFile'];
  $ImageType=$_GET['ImageType'];
  $ImageWidth=$_GET['ImageWidth'];
  $ImageHeight=$_GET['ImageHeight']; 

  if (file_exists($ImageFile))
  {					  
	 switch ($ImageType)
     {
	   case 'JPEG':
	     $SrcImageID = imagecreatefromjpeg($ImageFile); 
	     $TargetImageID = imagecreatetruecolor($ImageWidth, $ImageHeight);	
	     imagecopy($TargetImageID, $SrcImageID, 0, 0, 0, 0, $ImageWidth, $ImageHeight);   
	     imagejpeg($TargetImageID);    // 將圖形顯示在 broswer
	     break;   	  
       case 'GIF': 
	     $SrcImageID = imagecreatefromgif($ImageFile); 
		 $TargetImageID = imagecreatetruecolor($ImageWidth, $ImageHeight);	
		 imagecopy($TargetImageID, $SrcImageID, 0, 0, 0, 0, $ImageWidth, $ImageHeight);   
	     imagegif($TargetImageID);     // 將圖形顯示在 broswer
	     break; 
     } 
	 imagedestroy($SrcImageID); 
	 imagedestroy($TargetImageID); 
  }	 
?> 