<?php

$connection = null;

// Open Database
function openDatabase()
{
    global $connection;

    // open connection to database
    $connection = mysqli_connect("localhost", "root", "", "jo889461");

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
