<!DOCTYPE html>
<html>
    <!--include head section and navbar-->
<?php include('templates/header.php'); 
include('./functions/functions.php')?>

<!--Insert Content Here-->
<?php displayBackButton('routes.php'); ?>

<div class="d-flex align-items-center">
    <ion-icon name="options-outline" class="mr-2" size="large"></ion-icon>
    <h2 class="my-3">Filters</h2>
</div>

<form>

<div class="filter">
    <div class="filter-area d-flex" type="button" data-bs-toggle="collapse" data-bs-target="#service-areas-collapse" aria-expanded='false' aria-controls="">
        <p>Service Areas</p>
        <i class="fas fa-sort-down pr-2"></i>
    </div>
    
    <div class="filter-collapse collapse ml-5" id="service-areas-collapse">
        <div class="list-item d-flex form-group mb-0">
            <p>Airports</p>
            <div class="custom-control custom-switch ml-auto d-flex">
                <input type="checkbox" class="custom-control-input" id="filterSwitchAirport">
                <label class="custom-control-label" for="filterSwitchAirport">On</label>
            </div>
        </div>
        <div class="list-item d-flex form-group mb-0">
            <p>Downtown Orlando</p>
            <div class="custom-control custom-switch ml-auto d-flex">
                <input type="checkbox" class="custom-control-input" id="filterSwitchDowntown">
                <label class="custom-control-label" for="filterSwitchDowntown">On</label>
            </div>
        </div>
        <div class="list-item d-flex form-group mb-0">
            <p>Disney World - Lake Buena Vista</p>
            <div class="custom-control custom-switch ml-auto d-flex">
                <input type="checkbox" class="custom-control-input" id="filterSwitchDisney">
                <label class="custom-control-label" for="filterSwitchDisney">On</label>
            </div>
        </div>
        <div class="list-item d-flex form-group mb-0">
            <p>SunRail Connections</p>
            <div class="custom-control custom-switch ml-auto d-flex">
                <input type="checkbox" class="custom-control-input" id="filterSwitchSunRail">
                <label class="custom-control-label" for="filterSwitchSunRail">On</label>
            </div>
        </div>
        <div class="list-item d-flex form-group mb-0">
            <p>University + Colleges</p>
            <div class="custom-control custom-switch ml-auto d-flex">
                <input type="checkbox" class="custom-control-input" id="filterSwitchUCFValencia">
                <label class="custom-control-label" for="filterSwitchUCFValencia">On</label>
            </div>
        </div>
        <div class="list-item d-flex form-group mb-0">
            <p>Universal Studios - International Drive</p>
            <div class="custom-control custom-switch ml-auto d-flex">
                <input type="checkbox" class="custom-control-input" id="filterSwitchUniversal">
                <label class="custom-control-label" for="filterSwitchUniversal">On</label>
            </div>
        </div>
        <div class="last-list-item d-flex form-group mb-0">
            <p>Winter Park</p>
            <div class="custom-control custom-switch ml-auto d-flex">
                <input type="checkbox" class="custom-control-input" id="filterSwitchWinterPark">
                <label class="custom-control-label" for="filterSwitchWinterPark">On</label>
            </div>
        </div>
    </div>
</div>
<div class="filter">
    <div class="filter-area d-flex form-group mb-0" type="button" data-bs-toggle="collapse" data-bs-target="#bus-frequency-collapse" aria-expanded='false' aria-controls="">
        <p>Bus Frequency</p>
        <i class="fas fa-sort-down pr-2"></i>
    </div>
    
    <div class="filter-collapse collapse ml-5" id="bus-frequency-collapse">
        <div class="list-item d-flex form-group mb-0">
            <p>Every 30 minutes</p>
            <div class="custom-control custom-switch ml-auto d-flex">
                <input type="checkbox" class="custom-control-input" id="filterSwitchFrequency30">
                <label class="custom-control-label" for="filterSwitchFrequency30">On</label>
            </div>
        </div>
        <div class="last-list-item d-flex form-group mb-0">
            <p>Every 60 minutes</p>
            <div class="custom-control custom-switch ml-auto d-flex">
                <input type="checkbox" class="custom-control-input" id="filterSwitchFrequency60">
                <label class="custom-control-label" for="filterSwitchFrequency60">On</label>
            </div>
        </div>
    </div>
</div>
<div class="filter">
    <div class="filter-area d-flex form-group mb-0">
        <p>Express Service Only</p>
        <div class="custom-control custom-switch ml-auto d-flex ">
            <input type="checkbox" class="custom-control-input" id="filterSwitchExpress">
            <label class="custom-control-label" for="filterSwitchExpress">On</label>
        </div>
    </div>
</div>
<div class="filter">
    <div class="filter-area d-flex form-group mb-0">
        <p>FastLink Service Only</p>
        <div class="custom-control custom-switch ml-auto d-flex">
            <input type="checkbox" class="custom-control-input" id="filterSwitchFastLink">
            <label class="custom-control-label" for="filterSwitchFastLink">On</label>
        </div>
    </div>
</div>
<div class="filter">
    <div class="filter-area d-flex form-group mb-0">
        <p>LYMMO Service Only</p>
        <div class="custom-control custom-switch ml-auto d-flex">
            <input type="checkbox" class="custom-control-input" id="filterSwitchLYMMO">
            <label class="custom-control-label" for="filterSwitchLYMMO">On</label>
        </div>
    </div>
</div>
<button class="btn btn-primary mt-3" type="submit">Apply Filters</button>
</form>

<!--include the footer-->
<?php include('templates/footer.php'); ?>

</html>