<?php
// Database connection settings
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "appliance";

// Create a connection
$connection = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}
?>