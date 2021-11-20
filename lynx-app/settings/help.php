<!--include head section and navbar-->
<?php
session_start();
if (isset($_SESSION["loggedin"])) {
            include '../templates/headerinfolderloggedin.php';
        } else { 
            include '../templates/headerinfolderloggedout.php';
        }?>

<!--Insert Content Here-->
WIP<br/>
Adding a tutorial page</br>
Adding a Search Function to navigate pages and settings <br/>
<div class="modal modal-sheet position-static d-block bg-secondary py-5" tabindex="-1" role="dialog" id="modalSheet">
  <div class="modal-dialog" role="document">
    <div class="modal-content rounded-6 shadow">
      <div class="modal-header border-bottom-0">
        <h5 class="modal-title">Tutorial</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body py-0">
        <p>Eventually Something like this can be topggled over every page to show oyu how erach interaction works like a tutorial.</p>
      </div>
      <div class="modal-footer flex-column border-top-0">
        <button type="button" class="btn btn-lg btn-primary w-100 mx-0 mb-2">Next Page</button>
        <form action="../home.php">
        <button type="submit" class="btn btn-lg btn-light w-100 mx-0" data-bs-dismiss="modal">Home</button>
</form>  
    </div>
    </div>
  </div>
</div>

<!--include the footer with logo and hours-->
<?php include('../templates/footer.php'); ?>