<!--include head section and navbar-->
<?php include('templates/header.php'); ?>

<!--Insert Content Here-->
<div class="container">
    <h2 class="my-2">Routes</h2>
    <?php 
    
    openDatabase();
    
    displayRoutes();
    
    closeDatabase();
    ?>
</div>

<!--include the footer with logo and hours-->
<?php include('templates/footer.php'); ?>