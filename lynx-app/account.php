<!--include head section and navbar-->
<?php
session_start();
if (isset($_SESSION["loggedin"])) {
            include './templates/headerloggedin.php';
        } else { 
            include './templates/headerloggedout.php';
        }
        ?>

<!--Insert Content Here-->
<?php
        if (isset($_SESSION["loggedin"])) {
            include './account/accountloggedin.php';
        } else { 
            include './account/accountloggedout.php';
        }
        ?>

<!--include the footer with logo and hours-->
<?php include('templates/footer.php'); ?>