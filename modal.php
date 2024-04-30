<?php
date_default_timezone_set('America/New_York');
$title ='Sales Process ';

require_once 'includes/header.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generate Documents</title>
    <!-- Add Bootstrap CSS link -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Add jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    



    <!-- Custom CSS -->
    <style>
        /* Center content horizontally and vertically */
        html, body {
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
        }
    </style>
</head>
<body>

<div class="container">
    <!-- Your form -->
    <form >
        <div class="row">
            <div class="col-md-12 text-center"> <!-- Center the content horizontally -->
                <!-- Generate Documents Button -->
                <button type="button" class="btn btn-primary" onclick="runPythonScript()">Generate Documents</button>
        </div>
    </form>



  

</div>

<!-- Add Bootstrap JS -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.min.js"></script>

<!-- Your custom JavaScript code -->
<script>
    function runPythonScript() {
        $.ajax({
            type: "GET",
          
            url: "http://localhost/sales-process/run_generate_documents.php",
            success: function(response) {
                console.log("Python script executed successfully");
                console.log(response); // Output the response from the Python script
                // Optionally, you can display a success message to the user
                alert('Documents generated successfully-from modal!');

                window.location.href = "http://localhost/sales-process/exit.php";
            },
            error: function(xhr, status, error) {
                console.error("Error executing Python script");
                console.error(xhr.responseText); // Output any error message
                // Optionally, you can display an error message to the user
                alert('Error generating documents. Please try again.');
            }
        });
    }
</script>

</body>
</html>
