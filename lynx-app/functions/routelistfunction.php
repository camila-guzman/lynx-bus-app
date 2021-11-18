<?php

function displayBadges($connection, $link){

    $sqlBadges = "SELECT * FROM filters WHERE LinkNumber = $link";

    $badgesResult = mysqli_query($connection, $sqlBadges);

    if ($badgesResult === FALSE) {
        echo "<p>FALSE</p>";
        echo $sqlBadges;
    }

    // array contains the filter with corresponding badge text
    $arrayFiltersBadges = array(
        array("HalfHourService", "Every 30 minutes or better"), 
        array("HourService", "Every 60 minutes"), 
        array("ExpressService", "Express Service"), 
        array("FastLinkService", "FastLink Service"), 
        array("LYMMOService", "LYMMO Service"), 
        array("Airports", "Airports"), 
        array("DisneyLakeBuenaVista", "Disney World - LakeBuenaVista"), 
        array("Downtown", "Downtown Orlando"), 
        array("SunRail", "SunRail Connections"), 
        array("Universal", "Universal Studios - International Drive"), 
        array("UniversityColleges", "University and Colleges"), 
        array("WinterPark", "Winter Park")
    );

    // setting number of filters
    $numfilters = 12;

    while($badges = mysqli_fetch_array($badgesResult)){
        for ($i = 0; $i < $numfilters;  $i++){
            if ($badges[$arrayFiltersBadges[$i][0]] === '-1'){
                echo "<span class='badge badge-primary ml-2 mt-2'>" . $arrayFiltersBadges[$i][1] . "</span>";
            }
        }
        
    }    

}

function displayStops($connection, $link){

    echo "<div class='route-detail-area p-3 mb-3 mr-2'>";

    echo "<h4 class='stops-header'>Stops</h4>";
    echo "<div class='d-flex justify-content-center mb-1'><a class='btn btn-light mr-2' data-toggle='collapse' href='#collapse-inbound-" . $link . "' role='button' aria-expanded='false' aria-controls='collapse-inbound-" . $link . "'>Display Inbound</a>";

    echo "<a class='btn btn-light' data-toggle='collapse' href='#collapse-outbound-" . $link . "' role='button' aria-expanded='false' aria-controls='collapse-outbound-" . $link . "'>Display Outbound</a>
            
    </div>";

    /*********************************************************************************** */

    // query to display inbound stops
    $sqlStopsInbound = "SELECT Name FROM stops_list WHERE LinkNumber = $link";

    $inboundResult = mysqli_query($connection, $sqlStopsInbound);

    if ($inboundResult === FALSE){
        echo "<p>not connected</p>";
    }

    // printing inbound stops
    echo "<div id='collapse-inbound-" . $link . "' class='stop-list collapse'>
    <h5>Inbound</h5><ul>";
    while ($inboundStops = mysqli_fetch_assoc($inboundResult)){
        echo "<li class='mb-2'>" . $inboundStops['Name'] . "</li>";
    }
    echo "</ul></div>";

    /************************************************************************************ */

    // query to display outbound stops
    $sqlStopsOutbound = "SELECT * FROM stops_list WHERE LinkNumber = $link ORDER BY stops_list.StopNumber DESC";

    $outboundResult = mysqli_query($connection, $sqlStopsOutbound);

    if ($outboundResult === FALSE){
        echo "<p>not connected</p>";
    }

    // printing inbound stops
    echo "<div id='collapse-outbound-" . $link . "' class='stop-list collapse'>
        <h5>Outbound</h5><ul>";
        while ($outboundStops = mysqli_fetch_array($outboundResult)){
            echo "<li class='mb-2'>" . $outboundStops['Name'] . "</li>";
        }
        echo "</ul></div></div>";

    /************************************************************************************ */

}


function displayRouteList(){

    global $connection;

    // query select for routes list
    $sql = "SELECT * FROM routes_list";

    // run query
    $result = mysqli_query($connection, $sql);

    echo mysqli_error($connection);

    if ($result === FALSE) {
        echo "<p>FALSE</p>";
        echo mysqli_error($sql);
    }

    echo "<div class='route-list'>";
    while ($route = mysqli_fetch_assoc($result)){

        // helper variables
        $link = $route['LinkNumber'];
        $route_name = $route['Name'];

        echo "<div class='route-group'><div class='d-flex align-items-baseline' type='button' data-bs-toggle='collapse' data-bs-target='#route-" . $link . "-collapseDetails' aria-expanded='false' aria-controls='route-" . $link . "-collapseDetails'>";

        // display link number, name, and arrow with link
        echo "<b>Link&nbsp;" . $link . ":&nbsp;</b><p>" . $route_name . "</p>"; 

        // link with arrow
        echo "<a href='./route-detail-pages/link" . $link . ".php' class='ml-auto'><i class='fas fa-arrow-right fa-lg pr-2'></i></a></div>";

        // display route details collapsible section
        echo "<div class='route-details collapse ml-5' id='route-" . $link . "-collapseDetails'>";

            // filter badges
            echo "<div class='filter-badges mb-3'>";
            displayBadges($connection, $link);
            echo "</div>";

            // in and outbound stops
            displayStops($connection, $link);

            echo "<a class='route-detail-button btn btn-primary mb-4' href='./route-detail-pages/link" . $link . ".php'>View Route Details</a>";
  
        echo "</div>
    </div>";

    }


}

?>
