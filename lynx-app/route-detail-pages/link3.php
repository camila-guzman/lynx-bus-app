<!DOCTYPE html>
<html>
    <!--include head section and navbar-->
<?php include('../templates/headerinfolder.php'); 
include('../functions/functions.php');
include('../functions/routelistfunction.php');
displayBackButton('../routes.php');

openDatabase();

displayDetailsPageHeader($connection, 3);

closeDatabase();

?>

<!-- Map -->
<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d14013.758076085678!2d-81.21883469999999!3d28.586588599999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sus!4v1636326390353!5m2!1sen!2sus" style="border:0; position:relative; left:0; top:0; height:50vh; width:100%; overflow:hidden;" allowfullscreen="" loading="lazy"></iframe>

<h4>Route details</h4>

<?php 
openDatabase();

echo "<div class='filter-badges mb-3'>";
displayBadges($connection, 3);
echo "</div>";

displayStops($connection, 3);

closeDatabase();
    
?>

<h4>Inbound</h4>
<p>Service every day.</p>
<p>6:05a – 10:30pm Weekdays, 6:00a – 10:27pm Saturday, 5:50a – 8:12pm Sunday and holidays.</p>


<a class="mb-4 collapse-button" data-toggle="collapse" href="#inboundTableLink3" role="button" aria-expanded="false" aria-controls="inboundTableLink3"> View as table</a>

<div class="collapse" id="inboundTableLink3">

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
            <td>5:30am – 10:27pm</td>
            <td rowspan="3">LYNX Central Station</td>
            <td rowspan="3">Dixie Belle Dr. and Gatlin Ave.</td>
            
        </tr>
        <tr>
            <th scope="row">Saturday</th>
            <td>5:30am – 10:26pm</td>
        </tr>
        <tr>
            <th scope="row">Sundays</th>
            <td>5:15am – 7:30pm</td>
        </tr>
    </tbody>
</table>
</div>

<h5 class="mt-2">Outbound</h4>
<p>Service every day.</p>
<p>LYNX Central Station to Dixie Belle Drive and Gatlin Avenue: 5:30am – 10:27pm Weekdays, 5:30am – 10:26pm Saturday, 5:15am – 7:30pm Sunday and holidays.</p>

<p>Dixie Belle Drive and Gatlin Avenue to Dixie Belle Drive and Gatlin Avenue 5:22am -6:00am Weekdays, 5:25am – 5:56am Saturday. NO SERVICE ON HOLIDAYS AND SUNDAYS</p>

<a class="mb-4 collapse-button" data-toggle="collapse" href="#outboundTableLink3" role="button" aria-expanded="false" aria-controls="outboundTableLink3"> View as table</a>

<div class="collapse" id="outboundTableLink3">
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
            <td>6:05am – 10:30pm</td>
            <td rowspan="3">Dixie Belle Dr. and Gatlin Ave.</td>
            <td rowspan="3">LYNX Central Station</td>
            
        </tr>
        <tr>
            <th scope="row">Saturday</th>
            <td>6:00am – 10:27pm</td>
        </tr>
        <tr>
            <th scope="row">Sundays</th>
            <td>5:50am – 8:12pm</td>
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
            <td>5:22am -6:00am</td>
            <td rowspan="3">Dixie Belle Dr. and Gatlin Ave.</td>
            <td rowspan="3">Dixie Belle Dr. and Gatlin Ave.</td>
            
        </tr>
        <tr>
            <th scope="row">Saturday</th>
            <td>5:25am – 5:56am</td>
        </tr>
        <tr>
            <th scope="row">Sundays</th>
            <td>-</td>
        </tr>
    </tbody>
</table>
</div>

<h5 class="mt-2">Alerts</h4>
<div class="alert alert-warning" role="alert">
    <b class="alert-heading">Orange Avenue Weekend Closure</b>
    <p class='mb-0'>Planned Reroute</p>
    <p>Fri, March 5 9:00pm to Wed, December 31 7:00pm</p>
</div>

<!--include the footer-->
<?php include('../templates/footer.php'); ?>