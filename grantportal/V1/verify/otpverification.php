<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Mission Road Safety - NGO's Portal Login</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <link rel="stylesheet" href="form.css" >
        <script src="form.js"></script>
        <script src='https://www.google.com/recaptcha/api.js'></script>
    </head>
    <body >
    <?php
    $otp = substr(number_format(time() * rand(),0,'',''),0,6); 
  
    $name = $_POST['pername'];
    $org = $_POST['orgname'] ;
    $regno = $_POST['orgregno'];
    $mob = $_POST['mobno'] ;
    $mob = str_replace(" ","",$mob);

    $email = $_POST['emailid'] ;
    $email = str_replace(" ","",$email);
    $pass = $_POST['pass'] ;
    $cnfpass = $_POST['pass2'];
    $ok = 0 ;
    if (($pass != "")&&($pass == $cnfpass)&&(strlen($pass) >= 6))
    {
    $servername = "localhost";
$username = "irsc";
$password = "irsc2018";
$dbname = "ngoportal";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
echo "Could not connect" ;
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM user WHERE mobno=$mob AND otpverified='1'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
   $ok = "regd" ;
    }

 else 
 {
 
	$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://control.msg91.com/api/postsms.php",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => "<MESSAGE> <AUTHKEY>168607AGCKQ3vvNz5985a467</AUTHKEY> <SENDER>IRSCPI</SENDER> <ROUTE>4</ROUTE> <CAMPAIGN>OTP</CAMPAIGN> <COUNTRY>91</COUNTRY> <SMS TEXT=\"OTP for MISSIONROADSAFETY NGO Portal Registration is ".$otp." .\" > <ADDRESS TO=\"".$mob."\"></ADDRESS> </SMS></MESSAGE>",
  CURLOPT_SSL_VERIFYHOST => 0,
  CURLOPT_SSL_VERIFYPEER => 0,
  CURLOPT_HTTPHEADER => array(
    "content-type: application/xml"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);
date_default_timezone_set("Asia/Kolkata");
$d =  date("Y-m-d h:i:sa");
$encrpass = md5($pass) ;
$sql = "INSERT INTO user (timestamp,pername,orgname,orgregno,mobno,emailid,password,otp)
VALUES ('$d','$name','$org','$regno','$mob','$email','$encrpass','$otp')";

if ($conn->query($sql) === TRUE) {
   $ok = 2 ;
     session_start() ;
    $_SESSION['otp'] = $otp ;
} else {
    $ok = 0 ;
}
}
    
}

else 
{
$ok = 1 ;
}
    
    
    
    ?>
        <div class="container">
            <div class="row">
              <div class="col-md-6 col-md-offset-3">

                
                    <h3 align="center">Government of India<br>
Ministry of Road Transport and Highways</h3>
                   <h4 align="center"><b><font color="#3d5998">  NGO's Portal (Sign Up OTP Verification)</font></b></h4><hr/>
                    <form role="form" method="post" action="verifystatus.php" id="reused_form" >
                    <?php
                    
                    if ($ok == 2)
                    {
                    echo '<p align="center"><b>An OTP has been sent to '.$mob.' . Please enter it below. </b></p>' ;   
                    echo '
  <div class="form-group">
        <input type="password" minlength="6" maxlength="6"  class="form-control" id="name" name="otp" placeholder="Enter OTP Here" required >
           <input type="hidden"  class="form-control" id="name" name="mobno" value="'.$mob.'">
    </div> <input type="submit" class="btn btn-lg btn-success pull-left" style="min-width:200px;" value="Verify" ><br><br>
   <p align="right"> <a href="#">Resend OTP</a> </p>
   ' ;                                   
                    }
                    else if ($ok == 1)
                    {
                    echo '<p align="center"><b>Passwords did not match or were shorter than 6 characters. Please re-register. <a href="../signup.html">Click Here</a></b></p>' ;
                    }
                    else if ($ok == "regd")
                    {
                      echo '<p align="center"><b>You are already registered with this mobile number. Please re-register using a different mobile number. <a href="../signup.html">Click Here</a></b></p>' ;
                    }
                    else
                    {
                    
                      echo '<p align="center"><b>An error occurred. Please check your mobile number and re-register. <a href="../signup.html">Click Here</a></b></p>' ;
                    }
                    
                    ?>
                    
                    

   <br>
                        <hr/>

                 <p align="center"><img src="http://road-safety.co.in/assets/img/logo.png" height="40px"><br>Developed and Maintained by <a href="https://road-safety.co.in" target="_blank">IRSC 2018</a></p>
                    </form>
                 
                
                </div>
            </div>
       </div>
    </body>
</html>