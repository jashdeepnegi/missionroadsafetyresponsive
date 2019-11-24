<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Mission Road Safety - NGO's Portal Annex A</title>
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
if(!isset($_SESSION['mob']))
{
echo "<script>window.top.location.href = \"../../login.html\";</script>";
echo "<font color='red'><h4 align=\"center\">You have been logged out. Please close this window and <b>Login Again</b></h4></font>" ;
}

$name = $_POST['name'];
$legal = $_POST['legalstatus'] ;
$datereg = $_POST['datereg'] ;
$phone = $_SESSION['mob'];
$emailid = $_SESSION['email'];
$address = htmlspecialchars($_POST['address']);
$acno = $_POST['acno'];
$ifsc = $_POST['ifsc'];
$bank = $acno.";".$ifsc;
$baddress = htmlspecialchars($_POST['bankaddress']) ;
$presname = $_POST['presname'] ;
$presadhaar = $_POST['presadhaar'];
$presaddress = htmlspecialchars($_POST['presaddress']) ;
$darpandate = $_POST['darpandate'];
$darpanid = $_POST['darpanid'];
$rsbrief = $_POST['rsbrief'] ;
$cost = "".$_POST['estimate'] ;
$uniqueid = "A_".uniqid() ;

$ok = 0 ;
if ($name == "")
{
echo "<script>window.top.location.href = \"../annexA.php\";</script>";
}
else 
{
//sql update
$servername = "localhost";
$username = "irsc";
$password = "irsc2018";
$dbname = "ngoportal";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
date_default_timezone_set("Asia/Kolkata");
$d = date("d-m-Y h:i:sa") ;
$sql = "INSERT INTO annexA (timestamp,name,legalstatus,datereg,phone,email,address,bankdetails,bankaddress,presname,presaadhar,presaddress,darpandate,darpanid,rsdetails,cost,uniqueid)
VALUES ('$d','$name','$legal','$datereg','$phone','$emailid','$address','$bank','$baddress','$presname','$presadhaar','$presaddress','$darpandate','$darpanid','$rsbrief','$cost','$uniqueid')";

if ($conn->query($sql) === TRUE) {
   $ok= 2 ;
} else {
    $ok = 1 ;
    
}

$conn->close();

//sql update ends

}


?>

 <div class="container">
            <div class="row">
              <div class="col-md-6 col-md-offset-3">

                
                    <h3 align="center">Government of India<br>
Ministry of Road Transport and Highways</h3>
                   <h4 align="center"><b><font color="#3d5998">  Annexure A (Request Status)</font></b></h4><hr/>
                    <form role="form" method="post"  id="reused_form" >
                    <?php
                    
                    if ($ok == '2')
                    {
                    echo '<p align="center"><img src="tick.gif" height="150px"></p><p align="center"><b>Your Grant Request was successful.<br>Please check status tab to keep a track about approval of your grant status. Once approved, you will receive an email notification to the registered email id. .<br><br>To keep track, your request ID is :<font color="green"> '.$uniqueid.'</font></b></p>' ;
                    
                    }
                    else if ($ok == '1' )
                    {
                    echo '<p align="center"><img src="cross.png" height="150px"></p><p align="center"><b>Your grant request could not be updated due to a technical issue. Please try after sometime.<br><a href="../formA.php">Click Here to re-apply</a></b></p>' ;
                    }
                    else 
                    {
                     echo '<p align="center"><img src="cross.png" height="150px"></p><p align="center"><b>An unknown error occurred.<br><a href="../formA.php">Click Here to re-apply</a></b></p>' ;
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