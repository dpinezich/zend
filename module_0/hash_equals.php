<?php
$erwartet  = crypt('12345', '$2a$07$benutzeeinenlangenstringalssalt$');
$korrekt   = crypt('12345', '$2a$07$benutzeeinenlangenstringalssalt$');
$inkorrekt = crypt('1234',  '$2a$07$benutzeeinenlangenstringalssalt$');

var_dump(hash_equals($erwartet, $korrekt));
var_dump(hash_equals($erwartet, $inkorrekt));
?>