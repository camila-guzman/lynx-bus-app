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
        
include('./functions/functions.php');
include('./functions/routelistfunction.php') ?>

<!--Insert Content Here-->
<h1 class="display-4 my-2">Search</h1>
<p>Search for a route or stop.</p>
<p>Work in progress</p>

<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
<button class="w-100 btn btn-lg btn-primary my-5 sort" data-sort="name">Search</button>

<div id="routesSearch">
  
  <?php /*openDatabase();
    
    global $connection;

    $sql = "SELECT * FROM routes_list";

    $result = mysqli_query($connection, $sql);

    echo mysqli_error($connection);

    if ($result === FALSE) {
        echo "<p>FALSE</p>";
        echo mysqli_error($sql);
    }
    echo "<div class='list'>";
    while ($route = mysqli_fetch_assoc($result)){

      $link = $route['LinkNumber'];
      $route_name = $route['Name'];

      echo "<div class='route-group'><div class='d-flex align-items-baseline' type='button' data-bs-toggle='collapse' data-bs-target='#route-" . $link . "-collapseDetails' aria-expanded='false' aria-controls='route-" . $link . "-collapseDetails'>";

      // display link number, name, and arrow with link
      echo "<b class='link'>Link&nbsp;" . $link . ":&nbsp;</b><p class='name'>" . $route_name . "</p>"; 

      /* link with arrow
      echo "<a href='./route-detail-pages/link" . $link . ".php' class='ml-auto'><i class='fas fa-arrow-right fa-lg pr-2'></i></a></div>"; */
      
      /* link with dropdown icon
      echo "<a href='./route-detail-pages/link" . $link . ".php' class='ml-auto'><i class='fas fa-sort-down pr-2'></i></a></div>";

      // display route details collapsible section
      echo "<div class='route-details collapse ml-5' id='route-" . $link . "-collapseDetails'>";

          // filter badges
          echo "<div class='filter-badges mb-3'>";
          displayBadges($connection, $link);
          echo "</div>";

          // in and outbound stops
          displayStops($connection, $link);

          //button style
          echo "<a class='w-100 btn btn-lg btn-primary mb-4' href='./route-detail-pages/link" . $link . ".php'>View Route Details</a>";
          
          /*arrow style 
          echo "<div class='d-flex justify-content-end align-items-baseline'><a class='mb-4 view-route-details' href='./route-detail-pages/link" . $link . ".php'>View Route Details</a><i class='fas fa-arrow-right fa-lg pr-2 ml-2'></i></div>"; */
      /*
      echo "</div></div>";
      closeDatabase();
    }*/ ?>
</div>


<!--
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/list.js/1.5.0/list.min.js" type="text/javascript"></script>

<script>

// Create the List
var options = {
  valueNames: [ 'link', 'name']
};

// Run the list with default sort
var routes = new List('routesSearch', options);


</script> -->

<!--include the footer with logo and hours-->
<?php include('templates/footer.php'); ?>
</html>