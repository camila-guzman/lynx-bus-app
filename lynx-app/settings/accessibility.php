<!--include head section and navbar-->
<?php
session_start();
if (isset($_SESSION["loggedin"])) {
            include '../templates/headerinfolderloggedin.php';
        } else { 
            include '../templates/headerinfolderloggedout.php';
        }
        ?>
<style>
  
  </style>

<!--Insert Content Here-->
<div type="container-fluid">
<h1> Languages </h1>
<ul>
    
<h3>Larger Font</h3>
<label class="switch">
  <input type="checkbox">
  <span class="slider round"></span>
</label>
</ul>
<ul>
<h3>Text To Speech</h3>
<label class="switch">
  <input type="checkbox">
  <span class="slider round"></span>
</label>
</ul>
<ul>
<h3>Dark Mode</h3>
<label class="switch">
  <input type="checkbox">
  <span class="slider round"></span>
</label>
</ul>
</div>

<!--include the footer with logo and hours-->
<?php include('../templates/footer.php'); ?>