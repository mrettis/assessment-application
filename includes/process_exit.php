<?php
// Include the database configuration file
require_once 'C:\xampp\htdocs\sales-process\db\config.php';

// Check if form is submitted

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

// Define the table names
$table_names = ['company_info', 'risk_assessment', 'trade_compliance', 'customer_code'];

sleep(3);

// Delete all rows from each table
foreach ($table_names as $table_name) {
    $sql = "DELETE FROM $table_name";
    if (!mysqli_query($con, $sql)) {
        echo "Error deleting records from $table_name: " . mysqli_error($con);
        exit(); // Exit if deletion fails
    }
}

// Close the database connection
mysqli_close($con);

// Redirect back to index.php
header("Location: index.php");
exit();

?>
