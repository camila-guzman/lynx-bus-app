<?php

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
        echo "<div class='route-group'><div class='d-flex align-items-baseline' type='button' data-bs-toggle='collapse' data-bs-target='#route-" . $route['LinkNumber'] . "-collapseDetails' aria-expanded='false' aria-controls='route-" . $route['LinkNumber'] . "-collapseDetails'>";

        // display link number, name, and arrow with link
        echo "<b>Link" . $route['LinkNumber'] . ":&nbsp;</b><p>" . $route['Name'] . "</p>"; 
        echo "<a href='./route-detail-pages/link" . $route['LinkNumber'] . ".php' class='ml-auto'><i class='fas fa-arrow-right fa-lg pr-2'></i></a></div>";

        // display route details collapsible section
        echo "<div class='route-details collapse' id='route-" . $route['LinkNumber'] . "-collapseDetails'>
        <div class='route-detail-area ml-5 p-3 mb-3'><div class='custom-control custom-switch p-0'>
        <div class='d-flex justify-content-center align-items-star'>
        <label class='inbound-label'>Inbound</label>
        <input type='checkbox' class='custom-control-input' id='link" . $route['LinkNumber'] . "-toggle'><label class='custom-control-label' for='link" . $route['LinkNumber'] . "-toggle'>Outbound</label>
        </div></div><p> this worked :'), need to work on getting the info to change on toggle</p></div></div></div>";
    }

    echo "</div>";

    if (!$result) {
        echo "ERROR: Could not execute $sql. " . "<br><br>" .  mysqli_error($connection);
    }

} 
?>