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
<h1> Languages </h1>
<h4> Work In Progress</h4>
<ul>
    
<h3>English</h3>
<label class="switch">
  <input type="checkbox">
  <span class="slider round"></span>
</label>
</ul>
<ul>
<h3>Spanish</h3>
<label class="switch">
  <input type="checkbox">
  <span class="slider round"></span>
</label>
</ul>
<ul>
<h3>Creole</h3>
<label class="switch">
  <input type="checkbox">
  <span class="slider round"></span>
</label>
</ul>
<ul>
<h3>Portugese</h3>
<label class="switch">
  <input type="checkbox">
  <span class="slider round"></span>
</label>
</ul>
<ul>
<h3>Arabic</h3>
<label class="switch">
  <input type="checkbox">
  <span class="slider round"></span>
</label>
</ul>
</div>
<!--include the footer with logo and hours-->
<?php include('../templates/footer.php'); ?>