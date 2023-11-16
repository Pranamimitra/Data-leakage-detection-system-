<?php

// Database configuration
$host = "localhost"; // Replace with your database server hostname
$dbusername = "pranamimitra"; // Replace with your database username
$dbpassword = ""; // Replace with your database password
$dbname = "security_db"; // Replace with your database name

// Create a new MySQLi object for database connection
$conn = new mysqli($host, $dbusername, $dbpassword, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>
