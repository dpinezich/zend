<?php

echo '<h1>Chapter 16</h1>';

echo '<h2>Current Timestamp:</h2>';
echo '<code>time();</code><br />';
echo time();

echo '<br /><br />';

echo '<h2>Time:</h2>';
echo '<code>local time: mktime( 14, 32, 12, 1, 6, 1972 );</code><br />';
echo mktime( 14, 32, 12, 1, 6, 1972 );
echo '<br /><br />';

echo '<code>gm time: gmmktime( 14, 32, 12, 1, 6, 1972 );</code><br />';
echo gmmktime( 14, 32, 12, 1, 6, 1972 );
echo '<br /><br />';

echo '<code>strtotime( \"15th September 2006 3:12pm\" );</code><br />';
echo strtotime( '15th September 2006 3:12pm' );
echo '<br /><br />';

echo '<code>getdate( strtotime( \"October 9, 1940\" ) );</code><br />';
$johnLennonsBirthday = strtotime( 'October 9, 1940' );
$d = getdate( $johnLennonsBirthday );
var_dump($d);
echo '<br /><br />';

echo 'Set the current time zone to 5 hours behind GMT<br />';
echo '<code>date_default_timezone_set( \'America/Indiana/Indianapolis\' );</code><br />';
date_default_timezone_set( 'America/Indiana/Indianapolis' );
echo 'Set $d to the timestamp representing March 28, 2006 2:42 PM UTC<br />';
$d = strtotime( 'March 28, 2006 9:42am' );
echo '<code>date( \"F j, Y g:i A\", $d );</code><br />';
echo date( 'F j, Y g:i A', $d ) . '<br />';
echo '<code>gmdate( \"F j, Y g:i A\", $d );</code><br />';
echo gmdate( 'F j, Y g:i A', $d ) . '<br />';

echo '<h2>Microseconds:</h2>';
echo '<code>microtime( true );</code><br />';
echo microtime( true );
echo '<br /><code>microtime();</code><br />';
echo microtime( );
echo '<br /><br />';

echo '<h2>Server Info:</h2>';
echo "Your IP address is: " . $_SERVER["REMOTE_ADDR"];
echo "<pre>";
var_dump($_SERVER);
echo "</pre>";
echo '<br /><br />';

echo '<h2>Sending Email:</h2>';
if(isset($_GET['send']) && $_GET['send']) {
    mail( "david.pinezich@gmail.com", "Hello", "Hi Jim, how are you?" );
}
echo "<a href='index.php?send=true'>send mail</a>";

echo date('l \t\h\e jS');

?>