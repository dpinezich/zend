<?php

$text = "Our high-quality mouse mat is just $3.99,
while our keyboard covers sell for $4.99 and our
screen protectors for only $5.99.";

function addADollar( $matches ) {
return "$" . ( $matches[1] + 1 );
}


echo preg_replace_callback( "/\\$(\d+\.\d{2})/", "addADollar", $text );

