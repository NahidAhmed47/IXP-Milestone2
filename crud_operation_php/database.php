<?php 

$connection = new mysqli("localhost", "root", "", "myfirstdatabase");

if(!$connection){
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>