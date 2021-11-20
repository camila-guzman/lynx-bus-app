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
<div type="container-fluid">
<h2> Languages </h2>
<h4> Work In Progress</h4>
<ul>
    
<h4>English</h4>
<label class="switch">
  <input type="checkbox">
  <span class="slider round"></span>
</label>
</ul>
<ul>
<h4>Spanish</h4>
<label class="switch">
  <input type="checkbox">
  <span class="slider round"></span>
</label>
</ul>
<ul>
<h4>Creole</h4>
<label class="switch">
  <input type="checkbox">
  <span class="slider round"></span>
</label>
</ul>
<ul>
<h4>Portugese</h4>
<label class="switch">
  <input type="checkbox">
  <span class="slider round"></span>
</label>
</ul>
<ul>
<h4>Arabic</h4>
<label class="switch">
  <input type="checkbox">
  <span class="slider round"></span>
</label>
</ul>
</div>
<!--include the footer with logo and hours-->
<?php include('../templates/footer.php'); ?>