<?php

// display filter badges
function displayBadges($link, $connection){

    $arrayFilters = array("HalfHourService", "HourService", "ExpressService", "FastLinkService", "LYMMOService", "Airports", "DisneyLakeBuenaVista", "Downtown", "SunRail", "Universal", "UniversityColleges", "WinterPark");

    $mysql = "SELECT * FROM 'filters' WHERE LinkNumber = $link";

    $result = mysqli_query($connection, $mysql);

    if ($result === FALSE) {
        echo "<p>FALSE</p>";
        echo $mysql;
    }

    while($route = mysqli_fetch_array($result)){
        if ($route['LYMMO'] = -1){
            echo "<p>true</p>";
        }
    }
    
}

// display routes list
function displayRoutes(){

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
        echo "<a href='./route-detail-pages/link" . $link . ".php' class='ml-auto'><i class='fas fa-arrow-right fa-lg pr-2'></i></a></div>";

        // display route details collapsible section
        echo "<div class='route-details collapse' id='route-" . $link . "-collapseDetails'>
            <div class='route-detail-area ml-5 p-3 mb-3 mr-2'>";

            /*
            <div class='route-detail-area ml-5 p-3 mb-3'><div class='custom-control custom-switch p-0'>
            <div class='d-flex justify-content-center align-items-star'>
                <label class='inbound-label'>Inbound</label>
                <input type='checkbox' class='custom-control-input' id='link" . $link . "-toggle'><label class='custom-control-label' for='link" . $link . "-toggle'>Outbound</label>
            </div>
            </div>"; */ 

            echo "<h4 class='stops-header'>Stops</h4>";

                echo "<div class='d-flex justify-content-center mb-1'><a class='btn btn-light mr-2' data-toggle='collapse' href='#collapse-inbound-" . $link . "' role='button' aria-expanded='false' aria-controls='collapse-inbound-" . $link . "'>Display Inbound</a>";

                echo "<a class='btn btn-light' data-toggle='collapse' href='#collapse-outbound-" . $link . "' role='button' aria-expanded='false' aria-controls='collapse-outbound-" . $link . "'>Display Outbound</a></div>";

                // query select for routes list
                $sql2 = "SELECT Stop FROM stops_list WHERE LinkNumber = $link";
            
                // run query
                $result2 = mysqli_query($connection, $sql2);
            
                echo mysqli_error($connection);
            
                if ($result2 === FALSE) {
                   echo "<p>FALSE</p>";
                   echo mysqli_error($sql2);
                }
                
                // inbound stops 
                echo "<div id='collapse-inbound-" . $link . "' class='stop-list collapse show'><h5>Inbound</h5>";
                while ($route = mysqli_fetch_assoc($result2)){
                    echo "<p>" . $route['Stop'] . "</p>";
                } 
                echo "</div>";

                $result3 = mysqli_query($connection, $sql2);
            
                echo mysqli_error($connection);
            
                if ($result3 === FALSE) {
                   echo "<p>FALSE</p>";
                   echo mysqli_error($sql2);
                }
                
                // outbound stops
                echo "<div id='collapse-outbound-" . $link . "' class='stops-list'><h5>Outbound</h5>";
                while ($route = mysqli_fetch_array($result3)){
                    /** NOT WORKING? */
                    $reverse = array_reverse($route, true);
                    foreach ($reverse as $value){
                        echo "<p>" . $value . "</p>";
                    }
                }

                echo "</div>
                </div>
                <a class='route-detail-button btn btn-dark mb-4' href='./route-detail-pages/link" . $link . ".php'>View Route Details</a>
            </div>
        </div>";
    } 

    echo "</div>"; 

    if (!$result) {
        echo "ERROR: Could not execute $sql. " . "<br><br>" .  mysqli_error($connection);
    }

} 

// display link number and name
function displayDetailsPageHeader($link){

    global $connection;

    // query select for routes list
    $sql = "SELECT LinkNumber, Name FROM routes_list WHERE LinkNumber = $link";

    // run query
    $result = mysqli_query($connection, $sql);

    if ($result === FALSE) {
        echo "<p>FALSE</p>";
        echo mysqli_error($sql);
    }
    while ($route = mysqli_fetch_assoc($result)){
        $link = $route['LinkNumber'];
        $name = $route['Name'];

        echo "<h2>Link&nbsp" . $link . "</h2><h3>" . $name . "</h3>";
    }
}

function displayDetailsPageStops($link){

    global $connection;

    // query select for routes list
    $sql = "SELECT LinkNumber, Name FROM routes_list WHERE LinkNumber = $link";

    // run query
    $result = mysqli_query($connection, $sql);

    if ($result === FALSE) {
        echo "<p>FALSE</p>";
        echo mysqli_error($sql);
    }
    while ($route = mysqli_fetch_assoc($result)){
        
        // helper variables
        $link = $route['LinkNumber'];
        $name = $route['Name'];

        echo "<div class='route-detail-area p-3 mb-3 mr-2'>

            <h4 class='stops-header'>Stops</h4>";

                echo "<div class='d-flex justify-content-center mb-1'><a class='btn btn-light mr-2' data-toggle='collapse' href='#collapse-inbound-" . $link . "' role='button' aria-expanded='false' aria-controls='collapse-inbound-" . $link . "'>Display Inbound</a>";

                echo "<a class='btn btn-light' data-toggle='collapse' href='#collapse-outbound-" . $link . "' role='button' aria-expanded='false' aria-controls='collapse-outbound-" . $link . "'>Display Outbound</a></div>";

                /* query select for routes list
                $sql2 = "SELECT Name FROM stops_list WHERE LinkNumber = $link ORDER BY StopNumber ASC";

                // run query
                $result2 = mysqli_query($connection, $sql2);
            
                echo mysqli_error($connection);
            
                if ($result2 === FALSE) {
                   echo "<p>FALSE</p>";
                   echo mysqli_error($sql2);
                } */
                
                echo "<div id='collapse-inbound-" . $link . "' class='stop-list collapse'><h5>Inbound</h5>";
                while ($route = mysqli_fetch_assoc($result2)){
                    echo "<p>" . $route['Name'] . "</p>";
                } 
                echo "</div>";

                /* query select for routes list
                $sql3 = "SELECT * FROM stops_list WHERE LinkNumber = $link ORDER BY StopNumber DESC";

                $result3 = mysqli_query($connection, $sql3);
            
                echo mysqli_error($connection);
            
                if ($result3 === FALSE) {
                   echo "<p>FALSE</p>";
                   echo mysqli_error($sql3);
                } */
                
                echo "<div id='collapse-outbound-" . $link . "' class='stops-list collapse'><h5>Outbound</h5>";
                while ($route = mysqli_fetch_assoc($result3)){
                        echo "<p>" . $route['Name'] . "</p>";
                    }

                echo "</div>
                </div>
        </div>";
    }

}
?>
