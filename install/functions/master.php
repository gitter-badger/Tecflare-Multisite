<?php
function passwordcheck($passworda)
{
$r1='/[A-Z]/';  //Uppercase
    $r2='/[a-z]/';  //lowercase
    $r3='/[!@#$%^&*()-_=+{};:,<.>]/';
    $r4='/[0-9]/';  //numbers

if (!preg_match_all($r4, odbc_result($rs,$passworda))) {
    return false;
}

if (!preg_match_all($r2, odbc_result($rs,$passworda))) {
    return false;
}
if (!preg_match_all($r1, odbc_result($rs,$passworda))) {
    return false;
}
return true;
}
?>