<!--include head section and navbar-->
<?php
session_start();
if (isset($_SESSION["loggedin"])) {
            include '../templates/headerinfolderloggedin.php';
        } else { 
            include '../templates/headerinfolderloggedout.php';
        }
        ?>

<!--Insert Content Here-->
<h1 class="display-4 my-2">Language Settings</h1>

<div style="padding: 40px;">
<div class="d-flex justify-content-between mb-2">
<p>English</p>
<label class="switch">
  <input type="checkbox">
  <span class="slider round"></span>
</label>
</div>
<div class="d-flex justify-content-between mb-2">
<p>Spanish</p>
<label class="switch">
  <input type="checkbox">
  <span class="slider round"></span>
</label>
</div>
<div class="d-flex justify-content-between mb-2">
<p>Creole</p>
<label class="switch">
  <input type="checkbox">
  <span class="slider round"></span>
</label>
</div>
<div class="d-flex justify-content-between mb-2">
<p>Portugese</p>
<label class="switch">
  <input type="checkbox">
  <span class="slider round"></span>
</label>
</div>
<div class="d-flex justify-content-between mb-2">
<p>Arabic</p>
<label class="switch">
  <input type="checkbox">
  <span class="slider round"></span>
</label>
</div>
</div>
<!--include the footer with logo and hours-->
<?php include('../templates/footer.php'); ?>