<?php
header ("Content-type: image/png");
$engravingName = $_GET["engravingName"];
$engravingSymbols = $_GET["engravingSymbols"];

$handle = imagecreatefrompng( 'template.png' ); 
$brown = ImageColorAllocate ($handle, 84, 48, 26);
$lightBrown = ImageColorAllocate ($handle, 145, 116, 94);
$white = ImageColorAllocate ($handle, 255, 255, 255);
$peach = ImageColorAllocate ($handle, 238, 222, 200);

//line 1
ImageTTFText ($handle, 18, 0, 120, 35, $brown, "timesbd.ttf", $engravingName);
//line 2
ImageTTFText ($handle, 9, 0, 120, 50, $brown, "GOTHIC.TTF", $engravingSymbols);



//site url (exmple of how to center copy)
$fontSize = "12";
$width = "420";
$textWidth = $fontSize * strlen($siteUrl);
$position_center = $width / 2 - $textWidth / 2.6;
ImageTTFText ($handle, $fontSize, 0, $position_center, 240, $brown, "GOTHICB.TTF", $siteUrl);

imagealphablending( $handle, false );
imagesavealpha( $handle, true );
ImagePng ($handle);
imagedestroy( $handle );

?>