<?php
session_start();
if(!isset($_SESSION['mob']))
{
header('Location: ../login.html');
}
$changed = 0 ;

$old = $_POST['old'] ;
if ($old != "")
{
$old = md5($old) ;
$new = md5($_POST['new']) ; 
$new_cnf = md5($_POST['cnf_new']) ;

if ($new == $new_cnf)
{
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
$mob = $_SESSION['mob'] ;
$sql = "UPDATE user SET password='$new' WHERE mobno='$mob' AND otpverified='1' AND password='$old'";

if ($conn->query($sql) === TRUE) {

if(mysqli_affected_rows($conn)== 1 ){ 
$changed = 1 ;
}
else 
{
$changed = 2 ;
}
    
       
} else {
    echo "Error updating password: " . $conn->error;
}

$conn->close();

}

}


?>
<html>
  <head>
    <title>Mission Road Safety - NGO's Portal Password Change</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- styles -->
    <link href="css/styles.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
     <script>
var check = function() {
   if (document.getElementById('password').value == "")
   {
     document.getElementById('message').innerHTML = '';
     document.getElementById("subbtn").disabled = true;
   }
   else
  if (document.getElementById('password').value ==
    document.getElementById('confirm_password').value) {
    document.getElementById('message').style.color = 'green';
    document.getElementById('message').innerHTML = 'PASSWORDS MATCH';
    document.getElementById("subbtn").disabled = false;

  } else {
    document.getElementById('message').style.color = 'red';
    document.getElementById('message').innerHTML = 'PASSWORDS DO NOT MATCH';
    document.getElementById("subbtn").disabled = true;
  }
}
    </script>
    <?php 
    if ($changed == 1)
    {
  echo '  <script>
function loadImage() {
    alert("Password Changed Successfully");
}
</script>  ' ;
    }
    else if ($changed == 2)
    {
     echo '  <script>
function loadImage() {
    alert("Password Change Unsuccessful. You entered wrong current password");
}
</script>  ' ;
    }
    else 
    {
     echo '  <script>
function loadImage() {
   
}
</script>  ' ;
    }
    
    ?>
  </head>
  <body class="login-bg"  onload="loadImage()">
  	<div class="header">
	     <div class="container">
	        <div class="row">
	           <div class="col-md-12">
	              <!-- Logo -->
	              <div class="logo">
	                 <h1><a href="index.html">Change Password</a></h1>
	              </div>
	           </div>
	        </div>
	     </div>
	</div>

	<div class="page-content container">
		<div class="row">
			<div class="col-md-4 col-md-offset-4">
				<div class="login-wrapper">
			        <div class="box">
			            <div class="content-wrap">
			                <h6><?php  echo $_SESSION['pername']; ?></h6>
			                <label>Registered Mobile Number</label>
			                <input class="form-control" type="text" value="<?php echo $_SESSION['mob'] ; ?>" disabled>
			                <hr/>
			                <form action="changepwd.php" method="POST">
			                <input class="form-control" type="password" id="password_old" name="old" placeholder="Old Password" required>
			                <input class="form-control" type="password" id="password" name="new" onkeyup='check();'  placeholder="New Password" required>
			                <input class="form-control" type="password" id="confirm_password" name="cnf_new"  onkeyup='check();'  placeholder="Confirm New Password" required>
			               <p> <b> <span id='message'></span></b>   </p>

			                 <input type="submit" class="btn btn-primary signup" id="subbtn"  style="min-width:200px;" value="Change Password" disabled>
			                   </form>                
			            </div>
			        </div>

			        <div class="already">
			           
			            <a href="index.php">Main Page</a>
			        </div>
			    </div>
			</div>
		</div>
	</div>



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
  </body>
  <?php
  if ($changed == 2)
  {
  echo "<script>window.location.href = \"../login.html\";</script>";
  }
  ?>
  
</html>