<!--include head section and navbar-->
<?php
session_start();
if (isset($_SESSION["loggedin"])) {
            include '../templates/headerinfolderloggedin.php';
        } else { 
            include '../templates/headerinfolderloggedout.php';
        }
include('../functions/functions.php');
include('../functions/routelistfunction.php');

?>

<p>Route 9 detail example</p>

<!--include the footer-->
<?php include('../templates/footer.php'); ?>