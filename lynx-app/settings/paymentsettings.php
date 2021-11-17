<!--include head section and navbar-->
<?php include('../templates/headerinfolder.php'); ?>

<!--Insert Content Here-->
<?php
        if (isset($_COOKIE["loggedin"])) {
            include 'loggedinpaysettings.php';
        } else { 
            include 'loggedoutpaysettings.php';
        }
        ?>

<!--include the footer with logo and hours-->
<?php include('../templates/footer.php'); ?>