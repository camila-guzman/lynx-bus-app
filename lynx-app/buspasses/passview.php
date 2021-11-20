<!--include head section and navbar-->
<?php
session_start();
if (isset($_SESSION["loggedin"])) {
            include '../templates/headerinfolderloggedin.php';
        } else { 
            include '../templates/headerinfolderloggedout.php';
        } ?>
<style>
    .btn-primary{
        background-color: #d60c8c;
        border-color: #d60c8c;
    }
    .btn-primary:hover{
        background-color: #ce5ba4;
        border-color: #ce5ba4;
    }
    </style>
<!--Insert Content Here-->
<div class="container py-3">
  <header>
   

    <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
      <h1 class="display-4 fw-normal">Pass Pricing</h1>
      <p class="fs-5 text-muted">Choose between two seperate Pricing Plans.</p>
    </div>
  </header>

  <main>
    <div class="row row-cols-1 row-cols-md-2 mb-2 text-center">
      
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">Single Ride</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">$2&nbsp<small class="text-muted fw-light">Per Ride</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>Good for 1 Single Ride on the Lynx Bus System</li>
            
            </ul>
            <form action="./passcheckoutsingleride.php">
            <button type="submit" class="w-100 btn btn-lg btn-primary">Purchase Now</button>
  </form>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">Day Ride</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">$5&nbsp<small class="text-muted fw-light">Per Day</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>Good for 1 Day Ride on the Lynx Bus System</li>
            
            </ul>
            <form action="./passcheckoutdayride.php">
            <button type="submit" class="w-100 btn btn-lg btn-primary">Purchase Now</button>
  </form>
          </div>
        </div>
      </div>
      
      </div>
    </div>

    

  
  </main>

<!--include the footer with logo and hours-->
<?php include('../templates/footer.php'); ?>