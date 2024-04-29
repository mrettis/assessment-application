// // autofill.js

function copyCompanyAddress(addressType) {
    if (document.getElementById(`same_${addressType}_address`).checked) {
        const companyAddressStreet = document.getElementById('company_address_street').value;
        const companyAddressCity = document.getElementById('company_address_city').value;
        const companyAddressState = document.getElementById('company_address_state').value;
        const companyAddressZipcode = document.getElementById('company_address_zipcode').value;

        document.getElementById(`${addressType}_address_street`).value = companyAddressStreet;
        document.getElementById(`${addressType}_address_city`).value = companyAddressCity;
        document.getElementById(`${addressType}_address_state`).value = companyAddressState;
        document.getElementById(`${addressType}_address_zipcode`).value = companyAddressZipcode;
    } else {
        // Clear the fields if the checkbox is unchecked
        document.getElementById(`${addressType}_address_street`).value = '';
        document.getElementById(`${addressType}_address_city`).value = '';
        document.getElementById(`${addressType}_address_state`).value = '';
        document.getElementById(`${addressType}_address_zipcode`).value = '';
    }
}






    // Function to calculate the total risk  - for risk_assesment.php

    function calculateTotalRisk() {
        
        // Get values from input fields Q2 to Q8
        var q2Value = parseInt(document.getElementsByName("Q2")[0].value);
        var q3Value = parseInt(document.getElementsByName("Q3")[0].value);
        var q4Value = parseInt(document.getElementsByName("Q4")[0].value);
        var q6Value = parseInt(document.getElementsByName("Q6")[0].value);
        var q7Value = parseInt(document.getElementsByName("Q7")[0].value);
        var q8Value = parseInt(document.getElementsByName("Q8")[0].value);
    
        // Calculate total risk
        var totalRisk = q2Value + q3Value + q4Value + q6Value + q7Value + q8Value;
    
        // Update the total risk input field with the calculated result
        document.getElementsByName("total_risk")[0].value = totalRisk;

        
    }
    
    

    // Trade compliance


   
    function calculateTradeComplianceResult() {
        // Get values from input fields Q9 to Q14
        var q9Value = parseInt(document.getElementsByName("Q9")[0].value);
        var q10Value = parseInt(document.getElementsByName("Q10")[0].value);
        var q11Value = parseInt(document.getElementsByName("Q11")[0].value);
        var q12Value = parseInt(document.getElementsByName("Q12")[0].value);
        var q13Value = parseInt(document.getElementsByName("Q13")[0].value);
        var q14Value = parseInt(document.getElementsByName("Q14")[0].value);

        // Calculate total trade compliance result
        var totalTradeCompliance = q9Value + q10Value + q11Value + q12Value + q13Value + q14Value;

        // Update the total trade compliance input field with the calculated result
        document.getElementsByName("total_trade_compliance")[0].value = totalTradeCompliance;
    }

  




