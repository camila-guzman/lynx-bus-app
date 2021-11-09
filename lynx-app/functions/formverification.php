
<?php 
//includes file where functions are located
include ('functions/functions.php');
//opens database
 openDatabase();
//connect to database
global $connection;
//query select for user info
$sql = "SELECT * FROM userinfo";

//run query
$result = mysqli_query($connection, $sql);

echo mysqli_error($connection);

if($result === FALSE){
    echo "<p>FALSE</p>";
    echo mysqli_error($sql);
}


?>