<?php 

$host = "localhost";
$user = "root";
$password = "";
$database_name = "myfirstdatabase";
mysqli_connect($host, $user, $password, $database_name);
if(mysqli_connect_error()){
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
else{
    echo "Connected Successfully!";
}

?>