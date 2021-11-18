<!--include head section and navbar-->
<?php include('templates/header.php'); ?>

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