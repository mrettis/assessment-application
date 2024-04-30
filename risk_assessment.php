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
    <title>Company_info Risk Assessment and Customer Code Request</title>

    <!-- Link to your custom stylesheet -->
    

    <!-- Add Bootstrap CSS link -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/site.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="./functions/main.js"></script>

</head>



  
</style>


<body>


</body>
   

    <div class="container custom-container">

        <!-- Your existing navigation bar -->

        <nav class=" navbar navbar-expand-lg navbar-light bg-light my-5 ">
            <a class="navbar-brand" href="/"><h4>Risk Assessment</h4></a>
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
                        <a class="nav-link active" href="risk_assessment.php">Risk Assessment</a>
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

         <div id="companyNameDisplay" class="my-3">
            <h5>Company Name: <span id="companyName"></span></h5>
        </div>    
        
  
        <form action="includes/process_risk_assessment.php" method="post">

                            <table class="table caption-top my-5">
                               
                                <thead>
                                    <tr>
                                        <th scope="col"  style="width: 10%;" >Questions</th>
                                        <th scope="col" class="text-center" style="width: 20%;">Compliance Review</th>
                                        <th scope="col" class="text-center" style="width: 10%;">Point</th>
                                        <th scope="col" class="text-center" style="width: 60%;">Note</th>
                                      </tr>
                                      
                                </thead>
                                <tbody>
                                <tr>
                                    <th scope="row">Q1</th>

                                    <td>    <p class=" small"> Has the prospective customer conducted business with REA previously? <br><br>
                                            If YES, it's NOT necessary to perform the new customer review <br> 
                                            if NO, please continue the review</p>
                                    </td>                                  
                                    
                                    <td>        
                                        <div class="form-group d-flex justify-content-center">
                                        <input 
                                         type="" 
                                         class="form-control" 
                                         style="max-width: 70px;" 
                                         min="0" max="1"
                                          disabled
                                          placeholder="NA">
                                        </div>
                                    </td>

                                    <td>
                                        <p class=" small mx-5 ">
                                            If no customer code exist in the accounting system, type 'No' in the Answer/Description field and continue the risk 
                                            Assessment review. (If it's  fir sample transaction, ask the Compliance Manager if the prospective
                                            customer has been reviewed before, and if the answer is 'No', continue the risk_assessment review)
                                        </p>

                                        <textarea 
                                        id="" 
                                        cols="90" 
                                        rows="4" 
                                        class="small mx-auto d-block"
                                        name="Q1_note"
                                        content="width=device-width, initial-scale=1.0">
                                     
                                        </textarea>
                                    </td>

                                </tr>

                                <tr>
                                    <th scope="row">Q2</th>
                                    <td>    <p class=" small"> To your knowledge, is the prospective customer owned in whole  
                                              or in part by public officer  or close relative or a public officer? <br>
                                              <br>

                                             Point 0 for "NO" <br>
                                             Point 1 for "YES"</p>
                                    </td>                                  
                                    
                                    <td>        
                                        <div class="form-group d-flex justify-content-center">
                                        <input 
                                        type="number" 
                                         class="form-control " 
                                         style="max-width: 70px;" 
                                         min="0" max="1"
                                         name="Q2"
                                         onchange="calculateTotalRisk()"
                                          >
                                        </div>
                                    </td>

         
                                    <td>
                                        <p class=" small mx-5 ">
                                            Public Officer: Any one regardless of whether domestic or foreign: (i) 
                                            any person who engages in services for national or local governments....see excel for more detail explation <br>
                                             
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">Q3</th>
                                    <td>    <p class=" small"> Is the customer expected to have direct or 
                                         indirect interaction with Public Officers or families of Public Officers? <br>  <br> 
                                        
                                     
                                        Point 0 for "NO" <br>
                                        Point 1 for "YES"</p>
                                    </td>                                  
                                    
                                    <td>        
                                        <div class="form-group d-flex justify-content-center">
                                        <input 
                                        type="number" 
                                        class="form-control" 
                                        style="max-width: 70px;" 
                                        min="0" max="1"
                                        name="Q3"
                                        onchange="calculateTotalRisk()"
                                        >
                                        </div>
                                    </td>

        

                                    <td>
                                        <p class="small mx-5">If yes, describe the full nature of the anticipated interaction in the box below:
                                        </p>

                                        <textarea id="" 
                                        cols="90" 
                                        rows="4" 
                                        class="small mx-auto d-block"
                                        name="Q3_note"
                                        content="width=device-width, initial-scale=1.0"
                                        >
                                        </textarea>
   
                                    </td>
                                </tr>

                                <tr>
                                    <th scope="row">Q4</th>

                                    <td>    <p class=" small">Has the prospective customer previously been considered and rejected by REA?
                                            <br> <br>
                                            Point 0 for "NO" <br>
                                            Point 1 for "YES"</p>
                                
                                    </td>                                  
                                    
       

                                    <td>
                                        <div class="form-group d-flex justify-content-center">
                                            <input 
                                            type="number" 
                                            class="form-control" 
                                            style="max-width: 70px;" 
                                            min="0" max="1"
                                            name="Q4"
                                            onchange="calculateTotalRisk()"
                                            >
                                            </div>
                                    </td>
                                    <td>
                                        <p class=" small mx-5 ">If 'Yes', explain WHY they were rejected in the box below: </p>

                                            <textarea id="" 
                                            cols="90" rows="4" 
                                            class="small mx-auto d-block"
                                            name="Q4_note"
                                            content="width=device-width, initial-scale=1.0"
                                            >                                     
                                            </textarea>
                                    </td>

                                </tr>

                                <tr>
                                    <th scope="row">Q5</th>
                                    <td>    <p class=" small"> If Q4 above is 'yes', please describe why it is acceptable to reconsider the same business partner <br>
                                            </p>
                                    </td>                                  
                                    
                                    <td>        
                                        <div class="form-group d-flex justify-content-center">
                                        <input 
                                        type="" 
                                        class="form-control" 
                                        style="max-width: 70px;" 
                                        min="0" max="1"
                                        disabled
                                        placeholder="NA">

                                        </div>
                                    </td>

       
                                    </td>
                                    <td>
                                        <p class=" small mx-5 ">
                                            "If yes, answer the reason of reconsideration in the box below:
                                        </p>

                                        <textarea id="" 
                                        cols="90" 
                                        rows="4" 
                                        class="small mx-auto d-block"
                                        name="Q5_note"
                                        content="width=device-width, initial-scale=1.0"
                                        >                                     
                                        </textarea>
                                    </td>
                                </tr>




                                <tr>
                                    <th scope="row">Q6</th>

                                    <td>    <p class=" small" > Is there any negative compliance news/litigations/regulatory violations about the business partner?
                                        <br> <br>
                                        Point 0 for none, <br>
                                        Point 1 if happened over 5 years ago, <br>
                                        Point 2 if happened over 2 years age but within 5 years, <br>
                                        Point 3 if happened within 2 years"<br>
                                    </td>                                  
                                    
                                    <td>        
                                        <div class="form-group d-flex justify-content-center">
                                        <input 
                                        type="number" 
                                        class="form-control"
                                        style="max-width: 70px;" 
                                        min="0" max="3"
                                        name="Q6"
                                        onchange="calculateTotalRisk()"
                                        >
                                        </div>
                                    </td>

        
                                    <td>
                                        <p class=" small mx-5 ">
                                            Please search with each key word at least using the words listed in 'note' and keep the copies of each search result  by, such as, screenshot or pdf <br> <br>
                                            KEYWORDS:  unethical, or unlawful conduct such as, any criminal or civil judgment, penalty, lawsuit, or allegation involving: 
                                           antitrust, 
                                           corruption,  
                                           oney laundering, 
                                          terrorist financing, 
                                           breach of contract, 
                                           human rights, or 
                                          material litigation imposed, settled, or alleged."
                                        </p>

                                        <div>
                                      <textarea 
                                        id="" 
                                        cols="90" 
                                        rows="3" 
                                        class="small mx-auto d-block"
                                        name="Q6_note"
                                        content="width=device-width, initial-scale=1.0">
                                     
                                        </textarea>
                                      </div>


                                       
                                       

                                        <button type="button" onclick="runPythonScript()"class="btn btn-primary float-right my-3 mr-5">SEARCH</button>


                                  
                                    </td>

                                </tr>

                                <tr>
                                    <th scope="row">Q7</th>
                                    <td>    <p class=" small"> Location of goods to be provided by REA:<br>
                                            Determine the point by CPI score. See link below
                                            <br><br>
                                            Point 0 for CPI score 71 - up<br>
                                            Point 1 for CPI score 51 - 70<br>
                                            Point 2 for CPI score 0 - 50<br>

                                            <br>
                                            <a href="https://www.transparency.org/en/cpi/2023">CPI (Corruption Perception Index) </a>

                                        </p>
                                    </td>                                  
                                    
                                    <td>        
                                        <div class="form-group d-flex justify-content-center">
                                        <input 
                                         type="number" 
                                         class="form-control"
                                         style="max-width: 70px;" 
                                         min="0" max="2"
                                         name="Q7"
                                         onchange="calculateTotalRisk()"
                                         >
                                        </div>
                                    </td>


                                    <td>
                                        <p class=" small mx-5 ">
                                            (i) Type the location in the box below. <br>
                                            (ii) Keep the evidence of your scoring by , such as, taking screenshot of the CPI page that shows the ground of your scoring.
                                      
                                        </p>

                                        <textarea 
                                        id="" 
                                        cols="90" 
                                        rows="4" 
                                        class="small mx-auto d-block"
                                        name="Q7_note"
                                        content="width=device-width, initial-scale=1.0"
                                        >
                                     
                                        </textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">Q8</th>
                                    <td>    <p class=" small"> Is the compliance certification submitted <br> <br>
                                        Point 0 for "Yes" <br>
                                        Point 1 for "No"</p>
                                    </td>                                  
                                    
                                    <td>        
                                        <div class="form-group d-flex justify-content-center">
                                        <input 
                                        type="number" 
                                        class="form-control" 
                                        style="max-width: 70px;" 
                                        min="0" max="1"
                                        name="Q8"
                                        onchange="calculateTotalRisk()"
                                        >
                                        </div>
                                    </td>

  
                                    </td>
                                    <td>
                                        <p class=" small mx-5 ">
                                            Attache the signed certification with this form. <br>
                                            if 'No', explain why in the box below. <br>
                                            For customers use Shodex website: enter 0 point (Yes) and type "Shodex website" in the box below. certification attachement
                                            is excluded.
                                    
                                        </p>
                                        <textarea 
                                        id="" 
                                        cols="90" 
                                        rows="4" 
                                        class="small mx-auto d-block"
                                        name="Q8_note"
                                        content="width=device-width, initial-scale=1.0"
                                        >
                                     
                                        </textarea>
                                    </td>
                                </tr>

                                <tr>
                                    <th scope="row"></th>
                                    <td>    <p class=" medium"> Total Compliance Review Result </p>
                                    </td>                                  
                                    
                                    <td>        
                                        <div class="form-group d-flex justify-content-center">
                                           
                                            <input 
                                            type="number" 
                                            class="form-control no-spinner" 
                                            style="max-width: 70px;" 
                                            min="0" 
                                            max="10"
                                            name="total_risk"                                                                                         
                                            >
                                    </td>

  
                                    </td>
                                    <td>
                                        <p class=" medium mx-5 ">
                                            Point 0 - 3 LOW <br>
                                            Point 4 - 7 MEDIUM <br>
                                            Point 8 - 10: HIGH <br>

                                    
                                        </p>
                              
                                    </td>
                                </tr>

              <!-- Submit and Clear/Reset buttons -->

                               




                                </tbody>

      
                
                            </table>          
                            <div class="row my-5">
                                <div class="col-md-6">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                 
                                </div>
                                <div class="col-md-6">
                                    <!-- Submit Button -->
                                    <button type="button" class="btn btn-primary" onclick="navigateTocompliance()">NEXT</button>
                                </div>
                            </div>

    </form>


</div>





  <!-- Add Bootstrap JS and Popper.js scripts -->
  
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.min.js"></script>
  


 
  <script>
    function navigateTocompliance() {
        // Redirect to risk_assessment.html
        window.location.href = 'trade_compliance.php';
    }

    


    function runPythonScript() {
    $.ajax({
        type: "GET",
        url: "http://localhost/sales-process/search-button.php", // Call the PHP endpoint
        success: function(response) {
            console.log("Python script executed successfully");
            console.log(response); // Output the response from the Python script
        },
        error: function(xhr, status, error) {
            console.error("Error executing Python script");
            console.error(xhr.responseText); // Output any error message
        }
    });
}

</script>

<!-- Other HTML code -->



   
</body>

</html>







</div>
<?php require_once 'includes/footer.php'; ?>
</div>
