location of the file index.php
# Include the file
<?php
include "phpstar/foobar.php";

# Option 1: directly prefix the class name with the namespace
$obj_foobar = new \phpstar\fooBar();
echo "<br />";

# Option 2: import the namespace
use phpstar\fooBar;
$obj_foobar = new fooBar();
echo "<br />";
# Option 2a: import & alias the namespace
use phpstar\fooBar as FB;
$obj_foobar = new FB();
echo "<br />";
# Access the properties and methods with regular way
$obj_foobar->foo();
$obj_foobar->bar();
?>