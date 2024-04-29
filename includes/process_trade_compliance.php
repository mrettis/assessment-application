<?php
// Include the database configuration file
require_once '../db/config.php';

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $q9 = $_POST['Q9'];
    $q10 = $_POST['Q10'];
    $q11 = $_POST['Q11'];
    $q12 = $_POST['Q12'];
    $q13 = $_POST['Q13'];
    $q14 = $_POST['Q14'];
    $total_trade_compliance = $_POST['total_trade_compliance'];

    // Prepare an insert statement
    $sql = "INSERT INTO sales_forms.trade_compliance (q9, q10, q11, q12, q13, q14, total_trade_compliance) VALUES (?, ?, ?, ?, ?, ?, ?)";

    if ($stmt = $con->prepare($sql)) {
        // Bind variables to the prepared statement as parameters
        $stmt->bind_param("iiiiiii", $q9, $q10, $q11, $q12, $q13, $q14, $total_trade_compliance);

        // Attempt to execute the prepared statement
        if ($stmt->execute()) {
            // Redirect to trade_compliance.php
            header("location: ../customer_code.php");
            exit();
        } else {
            echo "Error: " . $sql . "<br>" . $con->error;
        }
    }

    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }

    // Close statement
    $stmt->close();

    // Close connection
    $con->close();
}
?>
