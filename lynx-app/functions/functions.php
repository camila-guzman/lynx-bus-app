<?php

$connection = null;

// Open Database
function openDatabase()
{
    global $connection;

    // open connection to database
    $connection = mysqli_connect("localhost", "root", "", "lynx-app");

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

// display button
function displayBackButton($previousPage){
    echo "<div class='back-button d-inline-flex align-items-center mt-2'>
        <i class='fas fa-arrow-left mr-2'></i><a href='" . $previousPage . "'>Back</a>
    </div>";
}
