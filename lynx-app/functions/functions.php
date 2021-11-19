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

// display button
function displayBackButton($previousPage){
    echo "<div class='back-button d-inline-flex align-items-center my-2'>
        <i class='fas fa-arrow-left mr-2'></i><a href='" . $previousPage . "'>Back</a>
    </div>";
}
