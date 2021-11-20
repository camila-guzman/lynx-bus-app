<!DOCTYPE html>
<html>
    <!--include head section and navbar-->
    <?php
session_start();
if (isset($_SESSION["loggedin"])) {
            include './templates/headerloggedin.php';
        } else { 
            include './templates/headerloggedout.php';
        }
        
include ('functions/functions.php');
include ('functions/routelistfunction.php');?>

<!--Insert Content Here-->
<div class="d-flex align-items-baseline justify-content-between">
    <h1 class="display-4 flex-grow my-2">Routes</h1>
    </br>
    
    <div class="filter-button d-inline-flex align-items-center">
    
        <!--<i class="fas fa-filter"></i>-->
        <a data-toggle="collapse" href="#collapseFilters" role="button" aria-expanded="false" aria-controls="collapseExample">
        <ion-icon name="options-outline" class="mr-2"></ion-icon>Filters</a>
       
    </div>
    
</div>

<form action="" method="post">
<div class="collapse mb-4" id="collapseFilters">
    <h2 class='text-center'>Filters</h2>
    <div class='filter'>
        <div class="filter-area d-flex" type="button" data-bs-toggle="collapse" data-bs-target="#service-areas-collapse" aria-expanded='false' aria-controls="">
            <p>Service Areas</p>
            <i class="fas fa-sort-down pr-2"></i>
        </div>
        <div class="filter-collapse collapse ml-5" id="service-areas-collapse">
            <?php 
            filterSubmenu('Airports', 'Airports'); 
            filterSubmenu('Downtown Orlando', 'Downtown');
            filterSubmenu('Disney World - Lake Buena Vista', 'DisneyLakeBuenaVista');
            filterSubmenu('SunRail Connections', 'SunRail');
            filterSubmenu('University and Colleges', 'UniversityColleges');
            filterSubmenu('Universal Studios - International Drive', 'Universal');
            filterLastSubmenu('Winter Park', 'WinterPark');
            ?>
        </div>
    </div>
    <div class='filter'>
        <div class="filter-area d-flex" type="button" data-bs-toggle="collapse" data-bs-target="#bus-frequency-collapse" aria-expanded='false' aria-controls="">
            <p>Bus Frequency</p>
            <i class="fas fa-sort-down pr-2"></i>
        </div>
        <div class="filter-collapse collapse ml-5" id="bus-frequency-collapse">
            <?php 
            filterSubmenu('Every 30 minutes or better', 'HalfHourService'); 
            filterLastSubmenu('Every 60 minutes', 'HourService');
            ?>
        </div>
    </div>

    <div class="filter">
        <div class="filter-area d-flex form-group mb-0">
            <p>Express Service Only</p>
            <div class="custom-control custom-switch ml-auto d-flex ">
                <input type="checkbox" class="custom-control-input switch" id="filterSwitchExpress" name="filter[]" value="ExpressService">
                <label class="custom-control-label" for="filterSwitchExpress">On</label>
            </div>
        </div>
    </div>
    <div class="filter">
        <div class="filter-area d-flex form-group mb-0">
            <p>FastLink Service Only</p>
            <div class="custom-control custom-switch ml-auto d-flex">
                <input type="checkbox" class="custom-control-input" id="filterSwitchFastLink" name="filter[]" value="FastLinkService">
                <label class="custom-control-label" for="filterSwitchFastLink">On</label>
            </div>
        </div>
    </div>
    <div class="filter">
        <div class="filter-area d-flex form-group mb-0">
            <p>LYMMO Service Only</p>
            <div class="custom-control custom-switch ml-auto d-flex">
                <input type="checkbox" class="custom-control-input" id="filterSwitchLYMMO" name="filter[]" value="LYMMOService">
                <label class="custom-control-label" for="filterSwitchLYMMO">On</label>
            </div>
        </div>
    </div>
    <button class="btn btn-dark mt-3" name="clear">Clear All Filters</button>
    <button class="w-100 btn btn-lg btn-primary mt-3" type="submit" name="apply">Apply Filters</button>
</form>

</div>
    <?php 
    if(isset($_POST['apply'])){
        echo "<h2 class='text-center'>Results</h2>";


        if(empty($_POST['filter'])){
            echo "<div class='alert alert-secondary alert-dismissible fade show' role='alert'><strong>No filters selected.</strong> Turn filters on by clicking a switch and clicking 'Apply Filters' <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></div>";
            
        }
        else if (isset($_POST['clear'])){
            $_POST['filter'] = null;

        }
        else {
            /*foreach($_POST['filter'] as $value){
                
                displayBadgesFilters($value);
            } */

            $arrayFilterResult_LinkNumbers = array();  

            openDatabase();

                foreach($_POST['filter'] as $filter){
                    echo "<div class='filter-result-group'>";
                    displayBadgesFilters($filter);
                    displayMultFilterResult($filter, $arrayFilterResult_LinkNumbers);
                    echo "</div>";
                }
            closeDatabase();

        }
    } else {
    
    openDatabase();
    
    echo "<p> Only routes 1, 3, 6, 7, 8 have actual Route Detail pages. </p>";
    displayRouteList();
    
    closeDatabase();
    } ?>

<!--include the footer with logo and hours-->
<?php include('templates/footer.php'); ?>