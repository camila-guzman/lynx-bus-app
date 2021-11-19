<?php

$connection = null;

// Open Database
function openDatabase()
{
    global $connection;

    // open connection to database
    $connection = mysqli_connect("localhost", "jo889461", "!Throwaway123", "jo889461");

    if (!$connection){
        echo "<p> not connecting</p>";
    }
}

// Close Database
function closeDatabase()
{

    global $connection;

    // close connection
    mysqli_close($connection);
}

/********************************************************************************* */
// display button
function displayBackButton($previousPage){
    echo "<div class='back-button d-inline-flex align-items-center my-2'>
        <i class='fas fa-arrow-left mr-2'></i><a href='" . $previousPage . "'>Back</a>
    </div>";
}

/********************************************************************************* */
// display filter in submenu
function filterSubmenu($filterName, $customId){

    echo "<div class='list-item d-flex form-group mb-0'>
       <p>" . $filterName . "</p>
         <div class='custom-control custom-switch ml-auto d-flex'>
            <input type='checkbox' class='custom-control-input' id='filterSwitch" . $customId ."' name='filter[]' value='" . $customId . "'>
            <label class='custom-control-label' for='filterSwitch" . $customId ."'>On</label>
        </div>
    </div>";
}

// display last filter in submenu
function filterLastSubmenu($filterName, $customId){

    echo "<div class='last-list-item d-flex form-group mb-0'>
       <p>" . $filterName . "</p>
         <div class='custom-control custom-switch ml-auto d-flex'>
            <input type='checkbox' class='custom-control-input' id='filterSwitch" . $customId ."' name='filter[]' value='" . $customId . "'>
            <label class='custom-control-label' for='filterSwitch" . $customId ."'>On</label>
        </div>
    </div>";
}

// display badges for filters
function displayBadgesFilters($filter){

    global $arrayFiltersBadges;

    $index = array_search($filter, array_column($arrayFiltersBadges, 0));

    echo "<span class='badge badge-primary mr-2 my-2'>" . $arrayFiltersBadges[$index][1] . "</span>";  

}

// create array of links with the filter that was selected
// display as results
function displayMultFilterResult($filter, $arrayFilterResult_LinkNumbers){

    global $connection;

    // query select routes with this filter
    $filtersql = "SELECT LinkNumber FROM filters WHERE $filter = -1";

    // run query
    $filterResult = mysqli_query($connection, $filtersql);

    echo mysqli_error($connection);

    if ($filterResult === FALSE) {
        echo "<p>FALSE</p>";
        echo mysqli_error($filtersql);
    }

    while ($route = mysqli_fetch_array($filterResult)){
        $link = $route['LinkNumber'];
        if (!in_array($link, $arrayFilterResult_LinkNumbers)){
            array_push($arrayFilterResult_LinkNumbers, $route['LinkNumber']);
        }
    }

    foreach($arrayFilterResult_LinkNumbers as $value){
        displayFilteredRouteList($value);
    }

}

