<!DOCTYPE html>
<html>
<head>
	<title>Question 3</title>
    <!-- Basic Internal CSS -->
    <style type="text/css">
     .form-group{
        margin-bottom: 10px;
                }  
    .form
        {
        padding: 20px 0px;
        background-color: #f3ebeb;
        }
    .btn
        {
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 25px;
        margin-left: 95px;
        cursor: pointer;
        }


    </style>
</head>
<body>   
    <div class="container">    
        <div class="col-sm-3">    
        <!-- form starts       -->
            <form class="form" name="formSubmit" action="submit.php" onsubmit="return validation()" method="post">  
                <!-- select option for bank -->
                <div class="form-group">
                    <label class="lbl" for="bankName">Bank</label>    
                    <select type="text" value="" name="bankName" style="margin-left: 50px;width:20%;height: 30px; "> 
                        <option>Kumari Bank</option> 
                        <option>Nabil Bank</option> 
                        <option>Prabhu Bank</option> 
                        <option>Prime Bank</option> 
                        <option>Himilayan Bank</option> 
                    </select><br><br>
                </div>
                <!-- select option for branch    -->
                <div class="form-group">
                    <label class="lbl" for="branchName">Branch</label>   
                    <select type="text" value="" name="branchName" style="margin-left: 37px;width:20%;height: 30px;"> 
                        <option>Putalisadak</option> 
                        <option>Balaju</option> 
                        <option>Kantipath</option> 
                    </select><br><br>
                </div>
                <!-- input field for account number -->
                <div class="form-group">
                    <label class="lbl" for="acno">Account No</label>
                    <input type="text" name="acno" style="margin-left: 9px;width:20%;height: 30px;"><br><br>
                </div>
                <!-- radio button for account type -->
                <div class="form-group">
                    <label class="lbl" for="amount">Amount</label>  
                    <input type="radio" name="amount" value="saving" style="margin-left: 35px;"> Saving
                    <input type="radio" name="amount" value="current"> Current<br><br>
                </div>
                <!-- input field for date -->
                <div class="form-group">
                    <label class="lbl" for="date">Date</label>
               		<input type="text" name="date" style="margin-left: 58px;width:20%;height: 30px;"> <br><br> 
                </div>
                <div class="form-group">
                    <input class="btn" type="submit" value="Submit" name="Submit"> 
                </div>
                      
            </form>
        <!-- form ends -->
        </div>
    </div>
<!-- script starts -->
<script> 
function validation()                                    
{     
    var acnumber = document.forms["formSubmit"]["acno"]; //Read data 
    if (acnumber.value == "") //check condition of emptiness            
    { 
        window.alert("Account number cannot be empty."); //send alert if empty
        acnumber.focus(); 
        return false; 
    }   
}
</script> 
</body>
</html>