<!--include head section and navbar-->
<?php include('templates/header.php');
include ('functions/functions.php');
include ('functions/routelistfunction.php');?>

<!--Insert Content Here-->
    <h2 class="my-2">Routes</h2>
    <?php 
    
    openDatabase();
    
    displayRoutes();
    
    closeDatabase();
    ?>

<!--include the footer with logo and hours-->
<?php include('templates/footer.php'); ?>