<?php
// Include the database configuration file
require_once '../db/config.php';

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $submitted_by = $_POST['submitted_by'];
    $submission_date = $_POST['submission_date'];
    $sales_tax = $_POST['sales-tax'];
    $payment_term = $_POST['payement-term'];
    $delivery_term = $_POST['delivery-term'];
    $q1_code = $_POST['Q1-code'];
    $q2_code = $_POST['Q2-code'];

    // Prepare an insert statement
    $sql = "INSERT INTO customer_code (submitted_by, submission_date, sales_tax, payment_term, delivery_term, Q1_code, Q2_code) VALUES (?,?,?,?, ?, ?, ?)";

    if ($stmt = $con->prepare($sql)) {
        // Bind variables to the prepared statement as parameters
        $stmt->bind_param("sssssss", $submitted_by, $submission_date, $sales_tax, $payment_term, $delivery_term, $q1_code, $q2_code);

        // Attempt to execute the prepared statement
        if ($stmt->execute()) {
            // Redirect to customer_code.php
            header("location: ../modal.php");
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




