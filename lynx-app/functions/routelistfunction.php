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

    echo "<div class='route-group'>";
    while ($route = mysqli_fetch_assoc($result)){
        echo "<div class='d-flex'><b>Link" . $route['LinkNumber'] . "::&nbsp;</b> <p>" . $route['Name'] . "</p></div>"; 
    }
    echo "</div>";

    if (!$result) {
        echo "ERROR: Could not execute $sql. " . "<br><br>" .  mysqli_error($connection);
    }

} 
?>