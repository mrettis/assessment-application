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
    <script src="functions/main.js"></script>
</head>




  
</style>


<body>
   

    <div class="container custom-container">

        <!-- Your existing navigation bar -->

        <nav class=" navbar navbar-expand-lg navbar-light bg-light my-5 ">
            <a class="navbar-brand" href="/"><h4>Trade Compliance Review</h4></a>
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
                        <a class="nav-link active" href="trade_compliance.php">Trade Compliance </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="customer_code.php">Customer Code</a>
                    </li>



                </ul>
            </div>
         </nav>

         <div id="companyNameDisplay" class="my-3">
            <h5>Company Name: <span id="companyName"></span></h5>



    <form action="includes/process_trade_compliance.php" method="post">
       

        <table class="table caption-top my-5">
                               
                                <thead>
                                    <tr>
                                        <th scope="col"  style="width: 10%;" >Questions</th>
                                        <th scope="col" class="text-center" style="width: 20%;"> Trade Compliance Review</th>
                                        <th scope="col" class="text-center" style="width: 10%;">Point</th>
                                        <th scope="col" class="text-center" style="width: 60%;">Note</th>
                                      </tr>
                                      
                                </thead>
                                <tbody>


                                <tr>
                                    <th scope="row">Q9</th>

                                    <td>    <p class=" small"> Is the end-use of the product we intended to provide, related or suspected to relate to military applications?
                                        <br> <br>

                                        Point 0 for "NO" <br>
                                        Point 1 for "YES"</p>
                                    </p>
                                    </td>                                  
                                    
                                    <td>        
                                        <div class="form-group d-flex justify-content-center">
                                        <input type="number"
                                         class="form-control " 
                                         style="max-width: 70px;"
                                          min="0"
                                          max="1" 
                                          name="Q9"
                                          onchange="calculateTradeComplianceResult()"
                                          
                                          >
                                          
                                   
                                        </div>
                                    </td>

                                    <td>
                       

                                        <textarea name="" id="" cols="90" rows="5" 
                                        class="small mx-auto d-block mt-3" 
                                        disabled style="background-color: #f8f9f8fa; color: #6c757d;"
                                        
                                        > NO NEED TO FILL
                                     
                                        </textarea>
                                    </td>

                                </tr>

                                <tr>
                                    <th scope="row">Q10</th>
                                    <td>    <p class=" small"> Is the prospective customer and/or end-user a military or national
                                            defense agency, police, nazy party, communist party or Republicans?
                                        <br> <br>

                                        Point 0 for "NO" <br>
                                        Point 1 for "YES"</p>
                                    </p>
                                    </td>                                  
                                    
                                    <td>                                                                                   
                                        
                                        <div class="form-group d-flex justify-content-center">
                                        <input type="number"
                                         class="form-control " 
                                         style="max-width: 70px;"
                                          min="0"
                                          max="1" 
                                          name="Q10"
                                          onchange="calculateTradeComplianceResult()"
                                          >
                                        
                                    
                                    </div>
                                    </td>

                                    <td>
                      

                                    <textarea name="" id="" cols="90" rows="5" 
                                        class="small mx-auto d-block mt-3" 
                                        disabled style="background-color: #f8f9f8fa; color: #6c757d;"
                                        
                                        > NO NEED TO FILL
                                     
                                        </textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">Q11</th>
                                    <td>    <p class=" small"> Is the prospective customer and/or end-user located in one of the 'UN Embargo
                                            Countries/Region' or 'Other Designated Countries' listed in column E?   
                                        ' <br>  <br> 
                                        
                                     
                                        Point 0 for "NO" <br>
                                        Point 1 for "YES"</p>
                                    </td>                                  
                                    
                                    <td>        
                                        <div class="form-group d-flex justify-content-center">
                                        <input type="number"
                                         class="form-control " 
                                         style="max-width: 70px;"
                                          min="0"
                                          max="1" 
                                          name="Q11"
                                          onchange="calculateTradeComplianceResult()"
                                          >
                                        
                                        </div>
                                    </td>

        

                                    <td>
                                        <p class="small mx-5 mt-2">"UN Embargo Countries/Regions" or "Other Designated Countries":
                                            Afganistan, Central Africa, Iraq, Iran, North Korea, Cuba, Congo, Syria, Sudan,
                                            Somali, Libya, Lebanon, Venezuela, Ukraine, Lugank, Crimea, Russia, Belarus.
                                        </p>

                                      
   
                                    </td>
                                </tr>

                                <tr>
                                    <th scope="row">Q12</th>

                                    <td>    <p class=" small">Is the prospective customer and/or end-user excluded from "Export Control Regime 
                                                        Participating Countries" listed in column E, and do tehy have a military/ defense related,
                                                        business sector? <br>
                                                        (answer 'YES' only if both criteria above apply to the customer/End-user, otherwise, answe 'NO')
                        "
                                            <br> <br>
                                            Point 0 for "NO" <br>
                                            Point 1 for "YES"</p>
                                
                                    </td>                                  
                                    
       

                                    <td>
                                        <div class="form-group d-flex justify-content-center">
                                        <input type="number"
                                         class="form-control " 
                                         style="max-width: 70px;"
                                          min="0"
                                          max="1" 
                                          name="Q12"
                                          onchange="calculateTradeComplianceResult()"
                                          >
                                        
                                            </div>
                                    </td>
                                    <td>
                                        <p class=" small mx-5 mt-2">Export Control Participating Countries: <br>
                                                        Argentina, Australia, Austria, Belgium, Bulgaria, Canada,
                                                    Czech, Denmark, Finland, France, Germany, Greece, Hungary, Ireland,
                                                    Italy, Korea, Luxembourg, Netherlands, New Zeland, Norway, Poland,
                                                    Spain, Sweeden, Sweden, Switzeland, UK, Northern Ireland, USA, Japan.</p>


                                    </td>

                                </tr>

                                <tr>
                                    <th scope="row">Q13</th>
                                    <td>   
                                        
                                        <p class=" small"> Is the prospective customer and/or end-user listed on the Denied Party List ( DPL) See link below: <br>
                                        <br> <br>
                                        Point 0 for "NO" <br>
                                        Point 1 for "YES"
                                        
                                        <br><br>

                                        <a href="http://w40.mc.showadenko.com/mstweb/mainservletDenial" target="_blank"> DPL site </a>

                                        <br>
                                        *Refer to column E for screening instructions
                                        **Click ""Send anyway"" if notification pops up."
                                    </p>

                                    </td>                                  
                                    
                                    <td>        
                                        <div class="form-group d-flex justify-content-center">
                                        <input type="number"
                                         class="form-control " 
                                         style="max-width: 70px;"
                                          min="0"
                                          max="1" 
                                          name="Q13"
                                          onchange="calculateTradeComplianceResult()"
                                          >
                                        </div>
                                    </td>

       
                                    </td>
                                    <td>
                                        <p class=" small mx-5 ">
                                            DPL Screening Instructions <br>

                                            1 - To access the link, you must be connected to the company server or VPN <br>
                                            2 - If notification pops up indicating ""not secure"", click ""Send anyway"".
                                                For further assistance, contact the Trade Compliance officer (xxxxx@resonac.com) <br>
                                            3 - Once you have access, select your preferred language. <br>
                                            4 - Enter the Customer/End-user's company NAME and COUNTRY/REGION and click ""Search"". <br><br>
                                             If there are no findings, the following message will appear:  
                                            ""There was no corresponding information"". <br><br>
                                            If there are findings, the system will show a list of results. Review if any of the entities
                                            listed match your customer. If none match, answer 'No"" to this question. If there is a
                                             match, answer 'Yes' to this question and take a screenshot of the DPL page as evidence. "	<br>						
	                                        "DPL site 

                                          
                                        </p>

                                
                                    </td>
                                </tr>




                                <tr>
                                    <th scope="row">Q14</th>

                                    <td>    <p class=" small" >Do you know or suspect if any of the ?Red Flags"" listed in column E pertain to your transaction?
                                        <br> <br>
                                        
                                        point 0 for 'NO' <br>
                                        point 1 for 'YES'
                                    </td>                                  
                                    
                                    <td>        
                                        <div class="form-group d-flex justify-content-center">
                                        <input type="number"
                                         class="form-control " 
                                         style="max-width: 70px;"
                                          min="0"
                                          max="1" 
                                          name="Q14"
                                          onchange="calculateTradeComplianceResult()"
                                          >
                                        </div>
                                    </td>

        
                                    <td>
                                        <p class=" small mx-5 ">
                                            "Red Flags  <br>
                                            1- The end-use is not being disclosed <br>
                                            2- The product's capabilities do not fit the Customer/End-User's line of business <br>
                                            3- The Customer/End-User has little or no business background
                                            4- The Customer/End-User is willing to pay cash for a very expensive item
                                               instead by Net Terms. <br>
                                            5-The shipping route is abnormal for the product and destination. <br>
                                            6-There are other unusual or suspicious features about the transaction. E32"
                                        </p>
                                        
                                    </td>

                                </tr>

 
                                <tr>
                                    <th scope="row"></th>
                                    <td>    <p class=" medium"> Trade Compliance Result </p>
                                    </td>                                  
                                    
                                    <td>        
                                        <div class="form-group d-flex justify-content-center">
                                           
                                        <input type="number"
                                         class="form-control no-spinner" 
                                         style="max-width: 70px;"
                                          min="0"
                                          max="10" 
                                          name="total_trade_compliance"
                                          
                                          >

                                        
                                        </div>
                                    </td>

  
                                    </td>
                                    <td>
                                        <p class=" medium mx-5 ">
                                        LOW								
		Point = 0: 	<br> LOW = An Export Screening Form (ESF) IS NOT required at this time. 
Please note that an ESF may still be required when Requestor completes the ""New Customer Code Form.							
<br> <br>	Point >|=1: <br>	HIGH = An ESF IS required. 
Submit a completed ESF to Trade Compliance Officer for review and approval. Once ESF is approved, submit the approved ESF together with this Risk Assessment Form.	

                                    
                                        </p>

                                                                    
                                    </td>
                                </tr>

                               




                                </tbody>
                            </table>  
                            
                            
                            <div class="row my-5">
                                <div class="col-md-6">
                                    
                                </div>
                                <div class="col-md-6">
                                    <!-- Submit Button -->
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                
    </form>

</div>



  <!-- Add Bootstrap JS and Popper.js scripts -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


   
</body>

</html>



</div>
<?php require_once 'includes/footer.php'; ?>
</div>



