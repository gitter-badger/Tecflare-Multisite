<?php
include ("../config.php");
$con=mysqli_connect($hostname,$usename, $password, $database);
$sql = 'update Administrators set usename="' .$_POST["usename"] .'", password="' . md5($_POST["password"]) .'" where id=' . $_POST["synca"];
mysqli_query($con,$sql);
mysqli_close($con);
header("Location: account.php?error=1");
?>