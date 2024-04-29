<?php
// Include the database configuration file
require_once '../db/config.php';

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $q1_note = $_POST['Q1_note'];
    $q2 = $_POST['Q2'];
    // $q2_note = $_POST['Q2_note'];
    $q3 = $_POST['Q3'];
    $q3_note = $_POST['Q3_note'];
    $q4 = $_POST['Q4'];
    $q4_note = $_POST['Q4_note'];
    $q5_note = $_POST['Q5_note'];
    $q6 = $_POST['Q6'];
    // $q6_note = $_POST['Q6_note'];
    $q7 = $_POST['Q7'];
    $q7_note = $_POST['Q7_note'];
    $q8 = $_POST['Q8'];
    $q8_note = $_POST['Q8_note'];
    $total_risk = $_POST['total_risk'];

    // Prepare an insert statement
    $sql = "INSERT INTO risk_assessment (Q1_note, Q2, Q3, Q3_note, Q4, Q4_note, Q5_note, Q6, Q7, Q7_note, Q8, Q8_note, total_risk) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    if ($stmt = $con->prepare($sql)) {
        // Bind variables to the prepared statement as parameters
        $stmt->bind_param("sssssssssssss", $q1_note, $q2, $q3, $q3_note, $q4, $q4_note, $q5_note, $q6, $q7, $q7_note, $q8, $q8_note, $total_risk);

        // Attempt to execute the prepared statement
        if ($stmt->execute()) {
            // Redirect to trade_compliance.php
            header("location: ../trade_compliance.php");
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
