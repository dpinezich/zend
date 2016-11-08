<?php
echo "<h2>gettype</h2>";
$test_var; // Declares the $test_var variable without initializing it
echo gettype( $test_var ) . "<br />"; // Displays "NULL"
$test_var = 15;
echo gettype( $test_var ) . "<br />"; // Displays "integer"
$test_var = 8.23;
echo gettype( $test_var ) . "<br />"; // Displays "double"
$test_var = "Hello, world!";
echo gettype( $test_var ) . "<br />"; // Displays "string"

echo "<br /><hr><br />";
echo "<h2>Settype</h2>";
$test_var = 8.23;
echo $test_var . "<br />";         // Displays "8.23"
settype( $test_var, "string" );
echo $test_var . "<br />";         // Displays "8.23"
settype( $test_var, "integer" );
echo $test_var . "<br />";         // Displays "8"
settype( $test_var, "float" );
echo $test_var . "<br />";         // Displays "8"
settype( $test_var, "boolean" );
echo $test_var . "<br />";         // Displays "1"

echo "<br /><hr><br />";
echo "<h2>Casting</h2>";
$test_var = 8.23;
echo $test_var . "<br />";             // Displays "8.23"
echo (string) $test_var . "<br />";    // Displays "8.23"
echo (int) $test_var . "<br />";       // Displays "8"
echo (float) $test_var . "<br />";     // Displays "8.23"
echo (boolean) $test_var . "<br />";   // Displays "1"
