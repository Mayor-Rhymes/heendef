<?php 
$hostname = "localhost";
$username = "root";
$password = "";
$database = "heendef";

// Create a connection to the database
$conn = new mysqli($hostname, $username, $password, $database);

// Check if the connection was successful
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
 ?>