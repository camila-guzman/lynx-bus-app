<!--include head section and navbar-->
<?php
session_start();
if (isset($_SESSION["loggedin"])) {
            include '../templates/headerinfolderloggedin.php';
        } else { 
            include '../templates/headerinfolderloggedout.php';
        }
        ?>

<!--Insert Content Here-->
<?php
        if (isset($_SESSION["loggedin"])) {
            include 'loggedinpaysettings.php';
        } else { 
            include 'loggedoutpaysettings.php';
        }
        ?>

<!--include the footer with logo and hours-->
<?php include('../templates/footer.php'); ?>