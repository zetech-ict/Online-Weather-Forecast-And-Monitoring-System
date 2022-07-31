<?php 
include 'includes/connection.php';

$towns = file_get_contents('files/towns.json');
$towns = json_decode($towns,true);

//Create the towns
foreach($towns as $town){
    $city = $town['city'];
    $lat = $town['lat'];
    $lng = $town['lng'];
    $query = "INSERT INTO locations(town,lat,lng) VALUES('$city','$lat','$lng')";
    $query_r = mysqli_query($connection,$query) or die("Error creating the towns");
}


die("Added towns.");