<!--include head section and navbar-->
<?php
session_start();
if (isset($_SESSION["loggedin"])) {
            include './templates/headerloggedin.php';
        } else { 
            include './templates/headerloggedout.php';
        }
        
include('./functions/buspassfunction.php');
?>

<!--Insert Content Here-->
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
<header>   
    <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
      <h1 class="display-4 fw-normal">Active Passes</h1>
      
    </div>
  </header>

  <main>
    <div class="row row-cols-1 row-cols-md-2 mb-2 text-center">
      
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">Single Ride Passes</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title"><?php print($singleride); ?>&nbsp<small class="text-muted fw-light">Passes Remaining</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>Once Redeemed No Refunds</li>
            
            </ul>
            <form action="./home.php">
            <button type="submit" class="w-100 btn btn-lg btn-primary">Redeem Now</button>
            </form>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">Day Ride Passes</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title"><?php print($dayride); ?>&nbsp<!-- Add function to count passes --><small class="text-muted fw-light">Passes Remaining</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>Time Remaining 11.24.58 On Pass <!-- Add countdown timer  --> </li>
            
            </ul>
            <form action="./home.php">
            <button type="submit" class="w-100 btn btn-lg btn-primary">Redeem Now</button>
            </form>
          </div>
        </div>
      </div>
      <div class="col">
          <form action="./buspasses/passview.php">
      <button type="submit" class="w-100 btn btn-lg btn-primary">Purchase Passes Now</button>
</form>
      </div>
    </div>
    </div>

    

  
  </main>
<!--include the footer with logo and hours-->
<?php include('templates/footer.php'); ?>