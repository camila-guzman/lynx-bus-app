<!--include head section and navbar-->
<?php
session_start();
if (isset($_SESSION["loggedin"])) {
            include './templates/headerloggedin.php';
        } else { 
            include './templates/headerloggedout.php';
        }
        ?>
<?php
$start = $end = $extraStop = "";
$startError = $endError = "";

if (isset($_POST['submit'])){
    if (empty($_POST['start'])){
        $startError = "Starting location is required";
    } 
    if (empty($_POST['end'])){
        $endError = "End location is required";
    }
    if (isset($_POST['add-stop'])){
        echo "<div class='form-group'>
        <label for='inputStopLocation'></label>
          <span class='error ml-2' >* <?php echo $endError;?></span>
          <input type='text' class='form-control' id='inputStopLocation' placeholder='Add a Stop' name='stop' value='<?php echo $end; ?>'>
        </div>";
    }
}

?>

<!--Insert Content Here-->
<h1 class="display-4 my-2">Trip Planner</h1>
<p>Work in progress</p>

<form class="trip-planner-form mt-4" method="post" action="tripplanner.php">
  <div class="form-group">
    <label for="inputStartLocation">Start</label>
    <span class="error ml-2" >* <?php echo $startError;?></span>
    <input type="text" class="form-control" id="inputStartLocation" placeholder="Add Starting Location" name="start value="<?php echo $start;?>">
  </div>

   <div class="form-group collapse" id="collapseStop">
       <div class="d-flex justify-content-between align-items-baseline">
        <label for="inputStop">Stop</label>
        <a class="add-stop-button" data-toggle="collapse" href="#collapseStop" role="button" aria-expanded="false" aria-controls="collapseStop">Remove</a>
       </div>
          <input type="text" class="form-control" id="inputStop" placeholder="Add a Stop" name="stop" value="<?php echo $end; ?>">
    </div>

  <div class="form-group">
  <label for="inputEndLocation">End</label>
    <span class="error ml-2" >* <?php echo $endError;?></span>
    <input type="text" class="form-control" id="inputEndLocation" placeholder="Add End Location" name="end" value="<?php echo $end; ?>">
  </div>

  <div class='my-4'>
  <a class="btn btn-dark" data-toggle="collapse" href="#collapseStop" role="button" aria-expanded="false" aria-controls="collapseStop"><span style="color: white;"><i class="fas fa-plus mr-2 add-stop-i"></i></span>Add a Stop</a>
  </div>
  <button type="submit" name="submit" class="w-100 btn btn-lg btn-primary mt-2">Begin Trip</button>
</form>


<!--include the footer with logo and hours-->
<?php include('templates/footer.php'); ?>