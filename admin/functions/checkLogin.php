<?php
error_reporting(0);
session_start();
if (!isset(addslashes($_SESSION["usename"])))
{
    header("Location: index.php");
}
?>