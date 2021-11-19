<!DOCTYPE html>
<html>
    <!--include head section and navbar-->
<?php include('../templates/headerinfolder.php'); 
include('../functions/functions.php');
include('../functions/routelistfunction.php');
displayBackButton('../routes.php');

openDatabase();

displayDetailsPageHeader($connection, 1);

closeDatabase();

?>

<!-- Map -->
<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d14013.758076085678!2d-81.21883469999999!3d28.586588599999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sus!4v1636326390353!5m2!1sen!2sus" style="border:0; position:relative; left:0; top:0; height:50vh; width:100%; overflow:hidden;" allowfullscreen="" loading="lazy"></iframe>

<h4>Route details</h4>

<?php 
openDatabase();

echo "<div class='filter-badges mb-3'>";
displayBadges($connection, 1);
echo "</div>";

displayStops($connection, 1);

closeDatabase();
    
?>

<h4>Inbound</h4>
<p>Weekdays: First stop is Winter Park SunRail from 6:15am to 9:50pm.</p>
<p>Saturdays: First stop is Webster Avenue from 6:40am to 9:14pm.</p>
<p>No service on Sundays and holidays.</p>

<a class="mb-4 collapse-button" data-toggle="collapse" href="#inboundTableLink1" role="button" aria-expanded="false" aria-controls="inboundTableLink1"> View as table</a>

<div class="collapse" id="inboundTableLink1">

<table class="table my-3">
    <thead class='thead-dark'>
        <th scope="col">Day</th>
        <th scope="col">Time</th>
        <th scope="col">First Stop</th>
        <th scope="col">Last Stop</th>
        
    </thead>
    <tbody>
        <tr>
            <th scope="row">Weekdays</th>
            <td>6:15am - 9:50pm</td>
            <td>Winter Park SunRail</td>
            <td>Altamonte Mall</td>
        </tr>
        <tr>
            <th scope="row">Saturday</th>
            <td>6:40am – 9:14pm</td>
            <td>Webster Avenue</td>
            <td>Altamonte Mall</td>
        </tr>
        <tr>
            <th scope="row">Sundays</th>
            <td>-</td>
            <td>-</td>
            <td>-</td>
        </tr>
    </tbody>
</table>
</div>

<h5 class="mt-2">Outbound</h4>
<p>Weekdays: Last stop is Winter Park SunRail from 6:20am to 9:56pm.</p>
<p>Saturdays: Last stop is Webster Avenue and Denning Drive from 6:25am to 10:02pm.</p>
<p>No service on Sundays and holidays.</p>

<a class="mb-4 collapse-button" data-toggle="collapse" href="#outboundTableLink1" role="button" aria-expanded="false" aria-controls="outboundTableLink1"> View as table</a>

<div class="collapse" id="outboundTableLink1">
<table class="table my-3">
    <thead class='thead-dark'>
        <th scope="col">Day</th>
        <th scope="col">Time</th>
        <th scope="col">First Stop</th>
        <th scope="col">Last Stop</th>
    </thead>
    <tbody>
        <tr>
            <th scope="row">Weekdays</th>
            <td>6:20am - 9:56pm</td>
            <td>Altamonte Mall</td>
            <td>Winter Park SunRail</td>
        </tr>
        <tr>
            <th scope="row">Saturday</th>
            <td>6:25am - 10:02pm</td>
            <td>Altamonte Mall</td>
            <td>Webster Avenue</td>
            
        </tr>
        <tr>
            <th scope="row">Sundays</th>
            <td>-</td>
            <td>-</td>
            <td>-</td>
        </tr>
    </tbody>
</table>
</div>

<h5 class="mt-2">Alerts</h4>
<p>No alerts at this time.</p>

<!--include the footer-->
<?php include('../templates/footer.php'); ?>