<!DOCTYPE html>
<html>
    <!--include head section and navbar-->
<?php include('../templates/headerinfolder.php'); 
include('../functions/functions.php');
include('../functions/routelistfunction.php');
displayBackButton('../routes.php');

openDatabase();

displayDetailsPageHeader($connection, 6);

closeDatabase();

?>

<!-- Map -->
<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d14013.758076085678!2d-81.21883469999999!3d28.586588599999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sus!4v1636326390353!5m2!1sen!2sus" style="border:0; position:relative; left:0; top:0; height:50vh; width:100%; overflow:hidden;" allowfullscreen="" loading="lazy"></iframe>

<h4>Route details</h4>

<?php 
openDatabase();

echo "<div class='filter-badges mb-3'>";
displayBadges($connection, 6);
echo "</div>";

displayStops($connection, 6);

closeDatabase();
    
?>

<h4>Inbound</h4>
<p>Dixie Belle Dr. and Gatlin Ave. to Colonial Plaza SuperStop: 6:30am – 8:51pm Weekdays, 6:30am – 7:49pm Saturday, no service on Sunday and holidays.</p>


<a class="mb-4 collapse-button" data-toggle="collapse" href="#inboundTableLink6" role="button" aria-expanded="false" aria-controls="inboundTableLink6"> View as table</a>

<div class="collapse" id="inboundTableLink6">

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
            <td>6:30am – 8:51pm</td>
            <td rowspan="3">Dixie Belle Dr. and Gatlin Ave.</td>
            <td rowspan="3">Colonial Plaza SuperStop</td>
            
        </tr>
        <tr>
            <th scope="row">Saturday</th>
            <td>6:30am – 7:49pm</td>
        </tr>
        <tr>
            <th scope="row">Sundays</th>
            <td>-</td>
        </tr>
    </tbody>
</table>
</div>

<h5 class="mt-2">Outbound</h4>
<p>Colonial Plaza SuperStop to Dixie Belle Dr. and Gatlin Ave.: 6:00am – 8:23pm Weekdays, 6:05am – 7:24pm Saturday, no service on Sunday and holidays</p>

<a class="mb-4 collapse-button" data-toggle="collapse" href="#outboundTableLink6" role="button" aria-expanded="false" aria-controls="outboundTableLink6"> View as table</a>

<div class="collapse" id="outboundTableLink6">
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
            <td>6:30am – 8:51pm</td>
            <td rowspan="3">Dixie Belle Dr. and Gatlin Ave.</td>
            <td rowspan="3">Colonial Plaza SuperStop</td>
            
        </tr>
        <tr>
            <th scope="row">Saturday</th>
            <td>6:30am – 7:49pm</td>
        </tr>
        <tr>
            <th scope="row">Sundays</th>
            <td>-</td>
        </tr>
    </tbody>
</table>

</div>

<h5 class="mt-2">Alerts</h4>
<p>No alerts at this time.</p>

<!--include the footer-->
<?php include('../templates/footer.php'); ?>