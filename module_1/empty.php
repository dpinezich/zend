<?php
function fun()
{
    return false;
}
if (empty(fun()))
{
    echo "False value returned.<br />";
}
if (empty(true))
{
    echo "True.<br />";
}

echo "weeehee empty works now also for arbitrary expressions!";
?>