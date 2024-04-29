<?php
// Database configuration
$host = "localhost"; // Host name
$username = "root"; // MySQL username
$password = ""; // MySQL password
$database = "sales_forms"; // Database name
$port = 3307; // MySQL port (if different from default)

// Create a new MySQLi object
$con = new mysqli($host, $username, $password, $database, $port);

// Check connection
if ($con->connect_errno) {
    echo "Failed to connect to MySQL: " . $con->connect_error;
    exit();
}
?>
