<!DOCTYPE html>
<html>
    <!--include head section and navbar-->
<?php include('../templates/headerinfolder.php'); 
include('../functions/functions.php');
include('../functions/routelistfunction.php');
displayBackButton('../routes.php');

openDatabase();

displayDetailsPageHeader($connection, 7);

closeDatabase();

?>

<!-- Map -->
<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d14013.758076085678!2d-81.21883469999999!3d28.586588599999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sus!4v1636326390353!5m2!1sen!2sus" style="border:0; position:relative; left:0; top:0; height:50vh; width:100%; overflow:hidden;" allowfullscreen="" loading="lazy"></iframe>

<h4>Route details</h4>

<?php 
openDatabase();

echo "<div class='filter-badges mb-3'>";
displayBadges($connection, 7);
echo "</div>";

displayStops($connection, 7);

closeDatabase();
    
?>

<h4>Inbound</h4>
<p>Florida Mall SuperStop to LYNX Central Station: 4:05am – 11:31pm Weekdays, 5:05am – 12:30pm Saturday, 6:00am – 8:34pm Sunday and holidays.
</p>


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
            <td>4:05am – 11:31pm</td>
            <td rowspan="3">Florida Mall SuperStop</td>
            <td rowspan="3">LYNX Central Station</td>
            
        </tr>
        <tr>
            <th scope="row">Saturday</th>
            <td>5:05am – 12:30pm</td>
        </tr>
        <tr>
            <th scope="row">Sundays</th>
            <td>6:00am – 8:34pm</td>
        </tr>
    </tbody>
</table>
</div>

<h5 class="mt-2">Outbound</h4>
<p>LYNX Central Station to Florida Mall SuperStop: 5:05am – 11:49pm Weekdays, 5:05am – 11:46pm Saturday, 5:15am – 7:53pm Sunday and holidays.
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
            <td>5:05am – 11:49pm</td>
            <td rowspan="3">LYNX Central Station</td>
            <td rowspan="3">Florida Mall SuperStop</td>
            
        </tr>
        <tr>
            <th scope="row">Saturday</th>
            <td>5:05am – 11:46pm</td>
        </tr>
        <tr>
            <th scope="row">Sundays</th>
            <td>5:15am – 7:53pm</td>
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

<div class="alert alert-warning mt-2" role="alert">
    <b class="alert-heading">Florida Mall Closure</b>
    <p class='mb-0'>Planned Reroute</p>
    <p>Thu, August 27 2:57pm to Wed, December 31 7:00pm</p>
</div>

<!--include the footer-->
<?php include('../templates/footer.php'); ?>