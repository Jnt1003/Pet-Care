<?php

$server = "localhost";
$user = "root";
$pass = "";
$database = "pet_car_system";

$conn = mysqli_connect($server, $user, $pass, $database);

if(!$conn){
    echo "connection failed";
}

?>
