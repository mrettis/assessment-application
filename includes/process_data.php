<?php
// Include the database configuration file
require_once '../db/config.php';

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $company_name = $_POST['company_name'];
    $company_address_street = $_POST['company_address_street'];
    $company_address_city = $_POST['company_address_city'];
    $company_address_state = $_POST['company_address_state'];
    $company_address_zipcode = $_POST['company_address_zipcode'];
    $billing_address_street = $_POST['billing_address_street'];
    $billing_address_city = $_POST['billing_address_city'];
    $billing_address_state = $_POST['billing_address_state'];
    $billing_address_zipcode = $_POST['billing_address_zipcode'];
    $shipping_address_street = $_POST['shipping_address_street'];
    $shipping_address_city = $_POST['shipping_address_city'];
    $shipping_address_state = $_POST['shipping_address_state'];
    $shipping_address_zipcode = $_POST['shipping_address_zipcode'];


    // Prepare an insert statement
    $sql = "INSERT INTO sales_forms.company_info (company_name, company_address_street, company_address_city, company_address_state, company_address_zipcode, billing_address_street, billing_address_city, billing_address_state, billing_address_zipcode, shipping_address_street, shipping_address_city, shipping_address_state, shipping_address_zipcode) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    if ($stmt = $con->prepare($sql)) {
        // Bind variables to the prepared statement as parameters
        $stmt->bind_param("sssssssssssss", $company_name, $company_address_street, $company_address_city, $company_address_state, $company_address_zipcode, $billing_address_street, $billing_address_city, $billing_address_state, $billing_address_zipcode, $shipping_address_street, $shipping_address_city, $shipping_address_state, $shipping_address_zipcode);

        // Attempt to execute the prepared statement
        if ($stmt->execute()) {
            // Redirect to success page
            header("location: ../risk_assessment.php");
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
