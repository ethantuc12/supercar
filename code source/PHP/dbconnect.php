<?php
// Database connection parameters
$servername = "mysql-supercartuck.alwaysdata.net";
$username = "337676_ethan";
$password = "ctwqf43n";
$database_name = "supercartuck_supercar";

// Create connection
$conn = new mysqli($servername, $username, $password, $database_name);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
