<!DOCTYPE html>
<html>

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
    
<div class="container-fluid p-0">
 <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d14013.758076085678!2d-81.21883469999999!3d28.586588599999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sus!4v1636326390353!5m2!1sen!2sus" style="border:0; position:relative; left:0; top:0; height:90vh; width:100%; overflow:hidden;" allowfullscreen="" loading="lazy"></iframe>
</div>


<!--include the footer with logo and hours-->
<?php include('templates/footer.php'); ?>

</html>