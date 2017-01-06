<?php
header( "Content-type: image/png" );
$myImage2 = imagecreatefrompng( "search.png" );

imagealphablending($myImage2, true);
//imagesavealpha($myImage2, true);
//$myBlue = imagecolorallocate( $myImage2, 0, 0, 255);

$transparent = imagecolorallocatealpha( $myImage2, 0, 0, 0, 127 );
imagefill( $myImage2, 0, 0, $transparent );


imagealphablending ($myImage2, true);
$myBlue2 = imagecolorallocatealpha($myImage2, 0, 0, 255, 33);
$myPoints = array( 20, 20, 18, 55, 70, 80 );
imagepolygon( $myImage2, $myPoints, 3, $myBlue2 );


imagepng( $myImage2);
imagedestroy( $myImage2 );