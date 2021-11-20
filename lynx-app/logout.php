<?php
session_start();

$_SESSION["loggedin"] = false;
$_SESSION["id"] = "";
$_SESSION["username"] = "";  

session_destroy();

header("location: index.php");

exit;
?>
