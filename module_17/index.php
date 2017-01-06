<?php



$myImage = imagecreate( 440, 150 );

$myGreen = imagecolorallocate( $myImage, 51, 153, 51 );
$myBlack = imagecolorallocate( $myImage, 0, 0, 0 );
$myBlue = imagecolorallocate( $myImage, 0, 0, 255);


imageline( $myImage, 15, 35, 120, 60, $myBlack );
imagerectangle( $myImage, 15, 35, 120, 60, $myBlack );
imageellipse( $myImage, 90, 60, 160, 50, $myBlack );
imagearc( $myImage, 90, 60, 160, 50, 45, 200, $myBlack );

$myPoints = array( 20, 20, 185, 55, 70, 80 );
imagepolygon( $myImage, $myPoints, 3, $myBlue );


header( "Content-type: image/jpeg" );
imagejpeg( $myImage, null, 100 );
// name, savename, quality
// imagejpeg( $myImage, "myimage.jpg", 60);
imagedestroy( $myImage );


?>