<?php
date_default_timezone_set('America/New_York');
$title ='Sales Process ';

require_once 'includes/header.php';
?>



<!-- start here -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Company Info</title>

    <!-- Add Bootstrap CSS link -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/site.css">
    <script src=" functions/main.js"></script>

    <!-- Include autofill.js -->


</head>

<body>
    <div class="container">

        <!-- Your existing navigation bar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light my-3">
            <a class="navbar-brand" href="index.php"><h4>Company Info</h4></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" href="index.php" active >Company Info</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="risk_assessment.php">Risk Assessment</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="trade_compliance.php">Trade Compliance </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="customer_code.php">Customer Code</a>
                    </li>

                </ul>
            </div>
        </nav>

        <div class="container-fluid">
            <!-- Your form for capturing user input -->
            <form action="includes/process_data.php" method="post">
                <div class="col-md-6 offset-md-3 mb-5 company-name-form my-5">
                    <h5>Company Name</h5>
                    <input type="text" class="form-control" id="company_name" name="company_name" required>
                </div>

                <!-- Other input fields go here (Address, Billing Address, Shipping Address, Payment Term, etc.) -->
                <div class="row">
                    <!-- Address -->
                    <div class="col-md-6 address-forms">
                        <h5 class="mb-4">Address</h5>
                        <label for="company_address_street">Street:</label>
                        <input type="text" id="company_address_street" name="company_address_street" class="form-control" required>

                        <label for="company_address_city">City:</label>
                        <input type="text" id="company_address_city" name="company_address_city" class="form-control" required>

                        <label for="company_address_state">State:</label>
                        <input type="text" id="company_address_state" name="company_address_state" class="form-control" required>

                        <label for="company_address_zipcode">Zip Code:</label>
                        <input type="text" id="company_address_zipcode" name="company_address_zipcode" class="form-control" required>
                    </div>

                    <!-- Billing Address -->
                    <div class="col-md-6 address-forms">
                        <h5>Billing Address</h5>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="same_billing_address" onclick="copyCompanyAddress('billing')">
                            <label class="form-check-label" for="same_billing_address">Same as Company Address</label>
                        </div>

                        <label for="billing_address_street">Street:</label>
                        <input type="text" id="billing_address_street" name="billing_address_street" class="form-control" required>

                        <label for="billing_address_city">City:</label>
                        <input type="text" id="billing_address_city" name="billing_address_city" class="form-control" required>

                        <label for="billing_address_state">State:</label>
                        <input type="text" id="billing_address_state" name="billing_address_state" class="form-control" required>

                        <label for="billing_address_zipcode">Zip Code:</label>
                        <input type="text" id="billing_address_zipcode" name="billing_address_zipcode" class="form-control" required>
                    </div>
                </div>

                <div class="row">
                    <!-- Shipping Address -->
                    <div class="col-md-6 address-forms">
                        <h5 class="mt-5">Shipping Address</h5>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="same_shipping_address" onclick="copyCompanyAddress('shipping')">
                            <label class="form-check-label" for="same_shipping_address">Same as Company Address</label>
                        </div>

                        <label for="shipping_address_street">Street:</label>
                        <input type="text" id="shipping_address_street" name="shipping_address_street" class="form-control" required>

                        <label for="shipping_address_city">City:</label>
                        <input type="text" id="shipping_address_city" name="shipping_address_city" class="form-control" required>

                        <label for="shipping_address_state">State:</label>
                        <input type="text" id="shipping_address_state" name="shipping_address_state" class="form-control" required>

                        <label for="shipping_address_zipcode">Zip Code:</label>
                        <input type="text" id="shipping_address_zipcode" name="shipping_address_zipcode" class="form-control" required>
                    </div>

                    <!-- Payment Term -->
                    <!-- <div class="col-md-6 payment-term-form mt-5">
                        <h5 class="mt-5">Payment Term</h5>
                        <input type="text" id="payment_term" name="payment_term" class="form-control mt-3" required>
                    </div>
                </div> -->

                <div class="row my-5">

                    <div class="row my-5">
       
                    <div class="col-md-6">
                        <!-- Next Button -->
                        <!-- <button type="button" class="btn btn-primary" onclick="navigateToRiskAssessment()">NEXT</button> -->
                    </div>

                    <div class="col-md-6">
                            <!-- Submit Button -->
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                </div>

 

            </form>
        </div>








    </div>



    <!-- Add Bootstrap JS and Popper.js scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.min.js"></script>



    
    <script>
        function navigateToRiskAssessment() {
            // Redirect to risk_assessment.html
            window.location.href = 'risk_assessment.php';
        }
    </script>
</body>

</html>


</div>
<?php require_once 'includes/footer.php'; ?>
</div>


