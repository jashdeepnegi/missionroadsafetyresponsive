<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Mission Road Safety - NGO's Portal Registration</title>
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
   session_start();
   
  $ok = 0 ;
  $otp = $_POST['otp'] ;
  $mob = $_POST['mobno'];

  if (($otp != "")&&($otp == $_SESSION['otp']))
  {
  
   $servername = "localhost";
$username = "irsc";
$password = "irsc2018";
$dbname = "ngoportal";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
echo "could not connect" ;
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "UPDATE user SET otpverified=1 WHERE mobno='$mob' AND otp='$otp' ";

if ($conn->query($sql) === TRUE) {
   $ok = 2 ;
   
} else {
    $ok = 0 ;
}

$conn->close();
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
                   <h4 align="center"><b><font color="#3d5998">  NGO's Portal (Sign Up Status)</font></b></h4><hr/>
                    <form role="form" method="post" action="verifystatus.php" id="reused_form" >
                    <?php
                    
                    if ($ok == '2')
                    {
                    echo '<p align="center"><img src="tick.gif" height="150px"></p><p align="center"><b>Your registration was successful.<br>Congratulations! An email confirming your registration has been sent to your regd email id.<br><br>TO LOGIN,  <a href="../login.html">Click Here</a></b></p>' ;
                    
                    }
                    else if ($ok == '1' )
                    {
                    echo '<p align="center"><img src="cross.png" height="150px"></p><p align="center"><b>Your OTP Registration was unsuccessful as the OTP entered was incorrect.<br><a href="../signup.html">Click Here to SIGN UP</a></b></p>' ;
                    }
                    else 
                    {
                     echo '<p align="center"><img src="cross.png" height="150px"></p><p align="center"><b>An unknown error occurred.<br><a href="../signup.html">Click Here to SIGN UP</a></b></p>' ;
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