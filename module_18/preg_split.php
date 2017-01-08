<?php

$text = "John Steinbeck, Franz Kafka and J.R.R. Tolkien";
$authors = preg_split( "/,\s*|\s+and\s+/", $text );
echo "<pre>";
print_r( $authors );
echo "</pre>";

?>