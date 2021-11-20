<!DOCTYPE html>
<html>
    <!--include head section and navbar-->
    <?php
session_start();
if (isset($_SESSION["loggedin"])) {
            include '../templates/headerinfolderloggedin.php';
        } else { 
            include '../templates/headerinfolderloggedout.php';
        }
include('../functions/functions.php');
include('../functions/routelistfunction.php');
displayBackButton('../routes.php');

openDatabase();

displayDetailsPageHeader($connection, 8);

closeDatabase();

?>

<!-- Map -->
<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d14013.758076085678!2d-81.21883469999999!3d28.586588599999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sus!4v1636326390353!5m2!1sen!2sus" style="border:0; position:relative; left:0; top:0; height:50vh; width:100%; overflow:hidden;" allowfullscreen="" loading="lazy"></iframe>

<h4>Route details</h4>

<?php 
openDatabase();

echo "<div class='filter-badges mb-3'>";
displayBadges($connection, 8);
echo "</div>";

displayStops($connection, 8);

closeDatabase();
    
?>

<h4>Inbound</h4>
<p>Service every day.</p>
<p>Orlando Premium Outlets to LYNX Central Station via International Dr.: 4:45am – 2:54am Weekdays, 5:23am – 1:16am Saturday, 5:29am – 10:54pm Sunday and holidays.</p>

<p>Orlando Premium Outlets to LYNX Central Station via Vineland Ave.: 4:44am – 2:54am Weekdays, 5:16am – 1:16am Saturday, 5:24am – 10:54pm Sunday and holidays.</p>


<a class="mb-4 collapse-button" data-toggle="collapse" href="#inboundTableLink7" role="button" aria-expanded="false" aria-controls="inboundTableLink7"> View as table</a>

<div class="collapse" id="inboundTableLink7">

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
            <td>4:45am – 2:54am</td>
            <td rowspan="3">Orlando Premium Outlets</td>
            <td rowspan="3">LYNX Central Station via International Drive</td>
            
        </tr>
        <tr>
            <th scope="row">Saturday</th>
            <td>5:23am – 1:16am</td>
        </tr>
        <tr>
            <th scope="row">Sundays</th>
            <td>5:29am – 10:54pm</td>
        </tr>
    </tbody>
</table>
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
            <td>4:44am – 2:54am</td>
            <td rowspan="3">Orlando Premium Outlets</td>
            <td rowspan="3">LYNX Central Station via Vineland Ave.</td>
            
        </tr>
        <tr>
            <th scope="row">Saturday</th>
            <td>5:24am – 10:54pm</td>
        </tr>
        <tr>
            <th scope="row">Sundays</th>
            <td>5:23am – 1:16am</td>
        </tr>
    </tbody>
</table>
</div>

<h5 class="mt-2">Outbound</h4>
<p>Service every day.</p>
<p>LYNX Central Station to Orlando Premium Outlets via Vineland Ave.: 4:45am – 1:28am Weekdays, 4:45am – 11:38pm Saturday, 4:45am – 9:12pm Sunday and holidays.
</p>

<a class="mb-4 collapse-button" data-toggle="collapse" href="#outboundTableLink7" role="button" aria-expanded="false" aria-controls="outboundTableLink7"> View as table</a>

<div class="collapse" id="outboundTableLink7">
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
            <td>4:45am – 1:28am</td>
            <td rowspan="3">LYNX Central Station</td>
            <td rowspan="3">Orlando Premium Outlets via Vineland Ave.</td>
            
        </tr>
        <tr>
            <th scope="row">Saturday</th>
            <td>5:23am – 1:16am</td>
        </tr>
        <tr>
            <th scope="row">Sundays</th>
            <td>4:45am – 9:12pm</td>
        </tr>
    </tbody>
</table>

</div>

<h5 class="mt-2">Alerts</h4>
<div class="alert alert-warning" role="alert">
    <b class="alert-heading">Central Florida Parkway Detour</b>
    <p class='mb-0'>Planned Reroute</p>
    <p>Tue, July 6 8:51am to Wed, December 31 7:00pm</p>
</div>

<div class="alert alert-warning" role="alert">
    <b class="alert-heading">Road Construction on Grand Street</b>
    <p class='mb-0'>Planned Reroute</p>
    <p>Thu, October 1 6:00pm to Wed, December 31 7:00pm</p>
</div>

<div class="alert alert-warning" role="alert">
    <b class="alert-heading">Holden Avenue Closure</b>
    <p class='mb-0'>Planned Reroute</p>
    <p>Fri, October 15 12:00am to Wed, December 31 7:00pm</p>
</div>

<div class="alert alert-warning mt-2" role="alert">
    <b class="alert-heading">I-4 Overpass at O.B.T.</b>
    <p class='mb-0'>Planned Reroute</p>
    <p>Wed, July 25 10:00pm to Wed, December 31 7:00pm</p>
</div>

<!--include the footer-->
<?php include('../templates/footer.php'); ?>