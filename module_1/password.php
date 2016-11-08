<?php

$password = ($_GET['password']) ?: '';
$checkHash = '$2y$10$UtDeUAD8Fdhq.nrn69QWJessybqhOf1ZxOGVtTlPLmiQhGs69PujS';

$passHash = password_hash('secret', PASSWORD_DEFAULT);

if (password_verify($password, $passHash))
{
    //Right Password
    echo "password is good, hash: " . $passHash;
    echo "<br />Some password_get_info: <br />";
    echo "<pre>" . print_r(password_get_info($passHash)) . "</pre>";
    echo "<br />needs rehash?<br />";
    echo password_needs_rehash($passHash, PASSWORD_BCRYPT) ? "yes" : "no";
    echo "<br />checkhash is also guud? " . password_verify($password, $checkHash);
}
else
{
    echo "password is bad";
    //Wrong password
}
?>