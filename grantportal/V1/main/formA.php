<?php
session_start();
if(!isset($_SESSION['mob']))
{
echo "<script>window.top.location.href = \"../login.html\";</script>";
echo "<font color='red'><h4 align=\"center\">You have been logged out. Please close this window and <b>Login Again</b></h4></font>" ;
}



?>

<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Mission Road Safety - NGO's Annex A</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <link rel="stylesheet" href="form.css" >
        <script src="form.js"></script>
    </head>
    <body >
        <div class="container">
            <div class="row">
             

                
                    <h3 align="center">Government of India<br>
Ministry of Road Transport and Highways</h3>
                    <p align="center">  No. RT-25029/02/2016-RS<br>

(Road safety Cell)<br>
Transport Bhavan,1, Sansad Marg,<br>New Delhi - 110001 </p><hr/><p align="right"><b>Annexure A</b></p>
                    <form role="form" method="post" action="submit/annexA.php" id="reused_form" >
<table border="1" style="width: 100%;">
<th width="8%" ><p align="center"> Sr.No</p></th>
<th width="46%" ><p align="center">Subject</p></th>
<th width="46%" ><p align="center">Particulars</p></th>

<tr>
<td align="center">1.</td>
<td style="padding-left: 3px;"><b>Name of the Agency</b></td>
<td style="padding: 4px;">
    <div class="form-group">
        <input type="text" class="form-control" id="name" name="name" required ">
    </div>
</td>
</tr>

<tr>
<td align="center">2.</td>
<td style="padding-left: 3px;"><b>Legal Status</b></td>
<td style="padding: 4px;">
    <div class="form-group">
        <input type="text" class="form-control" id="name" name="legalstatus" required >
    </div>
</td>
</tr>

<tr>
<td align="center">3.</td>
<td style="padding-left: 3px;"><b>Date of registration / incorporation</b>
</td>
<td style="padding: 4px;">
    <div class="form-group">
        <input type="text" class="form-control" id="name" name="datereg" required >
    </div>
</td>
</tr>

<tr>
<td align="center">4.</td>
<td style="padding-left: 3px;"><b>Contact Details</b>
</td>
<td style="padding: 4px;">
    <div class="form-group">
        <input type="text"  class="form-control" id="name" name="phone" value="<?php echo $_SESSION['mob']; ?>" placeholder="Contact Number" required disabled>
          
    </div>
     <div class="form-group">
        <input type="text"  class="form-control" id="name" name="emailid" value = "<?php echo $_SESSION['email']; ?>" placeholder="Email Id" required disabled>
          
    </div>
</td>
</tr>

<tr>
<td align="center">5.</td>
<td style="padding-left: 3px;"><b>Postal Address</b>
</td>
<td style="padding: 4px;">
    <div class="form-group">
        <textarea type="textarea" style="resize: none;" rows="4"  class="form-control" id="name" name="address" placeholder="Complete Address with PIN CODE" required ></textarea>
    </div>
    
</td>
</tr>

<tr>
<td align="center">6.</td>
<td style="padding-left: 3px;"><b>Bank Account Details</b>
</td>
<td style="padding: 4px;">
    <div class="form-group">
        <input type="text"  class="form-control" id="name" name="acno" placeholder="Bank Account No." required >
          
    </div>
    <div class="form-group">
        <input type="text"  class="form-control" id="name" name="ifsc" placeholder="IFSC Code" required >
          
    </div>
    <div class="form-group">
        <textarea type="textarea" style="resize: none;" rows="3"  class="form-control" id="name" name="bankaddress" placeholder="Branch Address with PIN CODE" required ></textarea>
    </div>
    
</td>
</tr>

<tr>
<td align="center">7.</td>
<td style="padding-left: 3px;"><b>Name, Address and Aadhar Number of the
President / Secretary / Trustee of the agency
</b>
</td>
<td style="padding: 4px;">
    <div class="form-group">
        <input type="text"  class="form-control" id="name" name="presname" placeholder="Name" required >
          
    </div>
    <div class="form-group">
        <input type="text"  class="form-control" id="name" name="presadhaar" placeholder="Aadhar Number" required >
          
    </div>
    <div class="form-group">
        <textarea type="textarea" style="resize: none;" rows="3"  class="form-control" id="name" name="presaddress" placeholder="Address with PIN CODE" required ></textarea>
    </div>
    
</td>
</tr>

<tr>
<td align="center">8.</td>
<td style="padding-left: 3px;"><b>In case of NGO, please furnish-</b><br>
(i) Date of registration on DARPAN Portal<br>
(ii) Unique ID generated on DARPAN
Portal


</td>
<td style="padding: 4px;">
    <div class="form-group">
        <input type="date"  class="form-control" id="name" name="darpandate"  required >
          
    </div>
    <div class="form-group">
        <input type="text"  class="form-control" id="name" name="darpanid" placeholder="Unique Id" required >
          
    </div>
   
    
</td>
</tr>

<tr>
<td align="center">9.</td>
<td style="padding-left: 3px;"><b>Brief on the activities conducted by the
Agency in past three years</b><br>
(Please upload a .pdf file for the same)


</td>
<td style="padding: 4px;">
    <div class="form-group">
       <input type="file" id="fupload" name="brief" accept=".pdf" required>
          
    </div>
  
   
    
</td>
</tr>

<tr>
<td align="center">10.</td>
<td style="padding-left: 3px;"><b>Whether any road safety awareness
programmes have been earlier conducted by
the Agency,</b> (if yes, give details thereof)<br>



</td>
<td style="padding: 4px;">
    <div class="form-group">
     <input type="checkbox" name="rsbrief" onchange="document.getElementById('rsbrief').disabled = this.checked;" value="same"> Tick Here if same as above<br>   
        <div class="form-group">
        <textarea type="textarea" style="resize: none;" rows="3"  class="form-control" id="rsbrief" name="rsbrief" placeholder="Details" ></textarea>
    </div>
    
          
    </div>
  
   
    
</td>
</tr>

<tr>
<td align="center">11.</td>
<td style="padding-left: 3px;"><b>Brief of the proposed activity proposed to be
undertaken indicating the target group, place,
content of the programme and the proposed
time period for conducting the programme</b> <br>(Please upload a .pdf file for the same)



</td>
<td style="padding: 4px;">
    <div class="form-group">
      <input type="file" id="fupload" style="padding-left: 2px;" name="planbrief" accept=".pdf" required><br>
    </div>
    
          
    </div>
  
   
    
</td>
</tr>

<tr>
<td align="center">12.</td>
<td style="padding-left: 3px;"><b>Total estimated cost of the Proposal (Attach
a copy of the estimate)</b> <br> (Attach
a copy of the estimate in .pdf format)



</td>
<td style="padding: 4px;">
    <div class="form-group">
     <input type="number"  class="form-control" id="name" name="estimate" placeholder="Estimate in Rs." required ><br>
      <input type="file" id="fupload" style="padding-left: 2px;" name="estimatefile" accept=".pdf" required><br>
         
    </div>
    
          
    </div>
  
   
    
</td>
</tr>





</table>

       <br>
        <input type="checkbox" name="rsbrief" onchange="document.getElementById('rsbrief').disabled = this.checked;document.getElementById('name').querySelectorAll("input").disabled = this.checked;document.getElementById('fupload').disabled = this.checked;document.getElementById('cmnts').disabled = this.checked;" > Confirm Details Filled in Annexure A<br>   
     
                      
                        <input type="submit" class="btn btn-lg btn-success pull-right" value="Save Details" ><br><br>
                        <hr/>

                 <p align="center"><img src="http://road-safety.co.in/assets/img/logo.png" height="40px"><br>Developed and Maintained by <a href="https://road-safety.co.in" target="_blank">IRSC 2018</a></p>
                    </form>
                 
                
                </div>
            </div>
       
    </body>
</html>