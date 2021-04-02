<?php 
 include 'phpqrcode/phpqrcode.php';
 $text = "JVLcode";
 $path = "images/";
 $filename = uniqid().'.png';
 $file = $path.$filename;
 fopen($_SERVER["DOCUMENT_ROOT"].'/qrcode/'.$file,"w");
 $ecc = "L";
 $pixel_size = "10";
 $frame_size = "10";
 QRcode::png($text,$file,$ecc,$pixel_size,$frame_size);
 // Displaying the stored QR code from directory 
echo "<center><img src='".$file."'></center>"; 

?>