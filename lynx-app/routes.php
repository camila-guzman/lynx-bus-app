<!DOCTYPE html>
<html>
    <!--include head section and navbar-->
<?php include('templates/header.php');
include ('functions/functions.php');
include ('functions/routelistfunction.php');?>

<!--Insert Content Here-->
<div class="d-flex align-items-baseline">
    <h2 class="my-2 flex-grow-1">Routes</h2>
    <div class="filter-button d-inline-flex align-items-center">
        <!--<i class="fas fa-filter"></i>-->
        <a href="filter.php">
        <ion-icon name="options-outline" class="mr-2"></ion-icon>Filters</a>
    </div>
</div>
    <?php 
    
    openDatabase();
    
    displayRoutes();
    
    closeDatabase();
    ?>

<!--include the footer with logo and hours-->
<?php include('templates/footer.php'); ?>