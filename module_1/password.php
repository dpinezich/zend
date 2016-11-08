<?php

$password = ($_GET['password']) ?: '';

$passHash = password_hash('secret', PASSWORD_DEFAULT);

if (password_verify($password, $passHash))
{
    //Right Password
    echo "password is gud";
}
else
{
    echo "password is bad";
    //Wrong password
}
?>