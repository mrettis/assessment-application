<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Code Request</title>

    <!-- Link to your custom stylesheet -->


    <!-- Add Bootstrap CSS link -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="/static/stylesheet.css">
    <script src="functions/main.js"></script>
</head>

<body>
    <div class="container custom-container">
        <!-- Your existing navigation bar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light my-5">
            <a class="navbar-brand" href="/"><h4>Customer Code Request</h4></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Company Info</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="risk_assessment.php">Risk Assessment</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="trade_compliance.php">Trade Compliance </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="customer_code.php">Customer Code</a>
                    </li>
                </ul>
            </div>
        </nav>

        <div>
                <h5 class="mt-4 mb-5" >General Information</h5>
            </div>

        <form action="includes/process-customer_code.php" method="post"> <!-- Added form -->
     

            <div class="row mb-3 ">
                <div class="col-md-4  mr-5">
                    <div class="form-group">
                        <label for="submitted_by"><h5>Submitted by:</h5></label>
                        <input type="text" id="submitted_by" name="submitted_by" class="form-control" required>
                    </div>
                </div>

                <div class="col-md-2 mt-2">
                    <div class="form-group">
                        <label for="submission_date"> <h5>Date:</h5> </label>
                        <input type="date" id="submission_date" name="submission_date" class="form-control" style="max-width: 400px;"  required>
                    </div>
                </div>
            </div>



            <!-- cards  -->


            <div class="row mt-5">
    <div class="col-md-4">
        <!-- First Column Content -->
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-center justify-content-between">
                    <h5 class="card-title">Sales Tax:</h5>
                    <select id="selection" class="form-control" 
                    name="sales-tax" 
                    style="max-width: 150px;" 
                    required > 
                    <option selected>Select</option>
                        <option value="yes">Yes</option>
                        <option value="no">No</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <!-- Second Column Content -->
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-center justify-content-between">
                    <h5 class="card-title">Payment Term:</h5>
                    <input type="text" 
                           id="payement-term" 
                           name="payement-term" 
                           class="form-control" 
                           style="max-width: 140px;" 
                           required >
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <!-- Third Column Content -->
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-center justify-content-between">
                    <h5 class="card-title">Delivery Term:</h5>
                    <input type="text" 
                           id="delivery-term" 
                           name="delivery-term"  
                           class="form-control" 
                           style="max-width: 140px;" 
                           required>
                </div>
            </div>
        </div>
    </div>
</div>






        <div class="col mt-5">
                <h5>Instructions: </h5>
                <p class="mediun">Review and answer the questions below. Obtain approval from Trade Compliance Officer if you answer "YES" to either question.
                    For more information on the procedure of this form, refer to "Section C Flowchart" tab.</p>
            </div>
    





            <table class="table caption-top mt-4">
                <thead>
                    <tr>
                        <th scope="col" style="width: 10%;">Questions</th>
                        <th scope="col" class="text-center" style="width: 40%;">Compliance Review</th>
                        <th scope="col" class="text-center" style="width: 10%;">Y/N</th>
                        <th scope="col" class="text-center" style="width: 40%;">Note</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">Q1</th>
                        <td>
                            <p class="small">Did you already submit an approved ESF with the Customer Risk Assessment form?<br><br>
                                If YES, it's NOT necessary to perform the new customer review <br>
                                if NO, please continue the review</p>
                        </td>
                        <td>
                            <div class="form-group d-flex justify-content-center">
                                <select class="form-control" name="Q1-code">
                                    <option value="Select">Select</option>
                                    <option value="No">No</option>
                                    <option value="Yes">Yes</option>
                                </select>
                            </div>
                        </td>
                        <td>
                            <p class="small mx-5">
                                If YES, submit a copy of your approved ESF along with this form to Trade Compliance for further review/approval.
                                <br>You may skip Question 2. "
                                "If NO, move to Question 2.
                            </p>
                        </td>
                    </tr>

                    <tr>
                        <th scope="row">Q2</th>
                        <td>
                            <p class="small">Does your business with the new customer require an ESF? <br> <br>
                        </td>
                        <td>
                            <div class="form-group d-flex justify-content-center">
                                <select class="form-control" name="Q2-code">
                                    <option value="Select">Select</option>
                                    <option value="No">No</option>
                                    <option value="Yes">Yes</option>
                                </select>
                            </div>
                        </td>
                        <td>
                            <p class="small mx-5">
                                To determine if "YES" or "NO", review REA's Trade Control Screening Process in "ESF Flowchart" tab in excel document.
                                <br>If YES, attach the completed ESF along with this form, and submit to Trade Compliance for further review/approval.
                                <br>If NO, your Trade Compliance Screening is complete. <br> Please submit this form directly to Accounting to complete your
                                Customer Code request." <br>
                            </p>
                        </td>
                    </tr>
                </tbody>
            </table>

            <div class="row my-5">
                <div class="col-md-6">
                
                    <!-- <input type="submit" class="btn btn-primary" value="submit"> -->
                </div>
                <div class="col-md-6">
                    <!-- Submit Button -->
                    <input type="submit" class="btn btn-primary" value="submit">
                </div>
            </div>
        </form> <!-- End of form -->
        

    </div>   




    <!-- Add Bootstrap JS and Popper.js scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>







</body>

</html>
