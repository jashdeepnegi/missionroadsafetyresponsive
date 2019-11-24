<?php
$mob = $_POST['mobno'] ;
$pass = md5($_POST['pass']) ;
$captcha = $_POST['g-recaptcha-response'] ;
$response=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6LcA714UAAAAANuTWmC4ciaQZ6DnwzgXEbbC0Qsj&response=".$captcha."&remoteip=".$_SERVER['REMOTE_ADDR']);

$obj = json_decode($response);
if($obj->success == true)
{
   
   
   
if ($mob == "")
{
header('Location: login.html');
die() ;
}

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

$mobno = mysqli_real_escape_string($conn, $mob);
$sql = "SELECT * FROM user WHERE mobno='$mobno' AND otpverified='1' AND password='$pass'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       session_start() ;
       $_SESSION['mob'] = $row['mobno'] ;
       $_SESSION['email'] = $row['emailid'];
       $_SESSION['pername'] = $row['pername'] ;
       $_SESSION['orgname'] = $row['orgname'] ;
     
    }
    $ip = getenv('HTTP_CLIENT_IP')?:
getenv('HTTP_X_FORWARDED_FOR')?:
getenv('HTTP_X_FORWARDED')?:
getenv('HTTP_FORWARDED_FOR')?:
getenv('HTTP_FORWARDED')?:
getenv('REMOTE_ADDR');
date_default_timezone_set("Asia/Kolkata");
$d = date("d-m-Y h:i:sa");
$sql = "INSERT INTO iplogins (mobile,timestamp,ip)
VALUES ('$mob', '$d', '$ip')";

if ($conn->query($sql) === TRUE) {
    echo "logging you in . . .";
} 


      header('Location: main/index.php');
} 
else 
{
    echo "Incorrect Password ! Please login again" ;
}
$conn->close();



   
   
   
   
}
else
{
    echo "Invalid Captcha" ;
}





?>