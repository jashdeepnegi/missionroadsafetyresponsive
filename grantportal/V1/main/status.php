<?php
session_start();
if(!isset($_SESSION['mob']))
{
header('Location: ../login.html');
}
$mob = $_SESSION['mob'] ;
$servername = "localhost";
$username = "irsc";
$password = "irsc2018";
$dbname = "ngoportal";

?>
<html>
  <head>
    <title>Mission Road Safety - NGO's Portal Grant Status</title>
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
    window.onload = function () {
    document.getElementById("rsbrief").style.display = "none";
    
    document.getElementById('grantbtn').style.display = "none" ;
 
};
</script>
  </head>
  <body>
  	<div class="header">
	     <div class="container">
	        <div class="row">
	           <div class="col-md-5">
	              <!-- Logo -->
	              <div class="logo">
	                 <h1><a href="#">Welcome, <?php echo explode(' ',trim($_SESSION['pername']))[0]  ; ?></a></h1>
	              </div>
	              
	              
	           </div>
	         
	           <div class="col-md-5">
	              <div class="row">
	                <div class="col-lg-12">
	                  <div class="input-group form">
	                      
	                  </div>
	                </div>
	              </div>
	           </div>
	           <div class="col-md-2">
	              <div class="navbar navbar-inverse" role="banner">
	                  <nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">
	                    <ul class="nav navbar-nav">
	                      <li class="dropdown">
	                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">My Account <b class="caret"></b></a>
	                        <ul class="dropdown-menu animated fadeInUp">
	                          <li><a href="profile.html">Profile</a></li>
	                          <li><a href="changepwd.php">Change Password</a></li>
	                          <li><a href="logout.php">Logout</a></li>
	                        </ul>
	                      </li>
	                    </ul>
	                  </nav>
	              </div>
	           </div>
	        </div>
	     </div>
	</div>

    <div class="page-content">
    	<div class="row">
		  <div class="col-md-2">
		  	<div class="sidebar content-box" style="display: block;">
                <ul class="nav">
                    <!-- Main menu -->
                    <li ><a href="index.php"><i class="glyphicon glyphicon-home"></i> Dashboard</a></li>
                    <li><a href="calendar.html"><i class="glyphicon glyphicon-calendar"></i> Events</a></li>
                  <!--  <li><a href="stats.html"><i class="glyphicon glyphicon-stats"></i> Statistics (Charts)</a></li>  
                    <li><a href="tables.html"><i class="glyphicon glyphicon-list"></i> Tables</a></li>  -->
              
              <!--      <li><a href="editors.html"><i class="glyphicon glyphicon-pencil"></i> Editors</a></li>
                    <li><a href="forms.html"><i class="glyphicon glyphicon-tasks"></i> Forms</a></li>  -->
                    <li class="submenu" >
                         <a href="#">
                            <i class="glyphicon glyphicon-list"></i> Forms
                            <span class="caret pull-right"></span>
                         </a>
                         <!-- Sub menu -->
                         <ul>
                            <li><a href="annexA.php"><b>Annex A</b></a></li>
                            <li><a href="annexB.php">Annex B</a></li>
                        </ul>
                    </li>
                          <li><a href="#"><i class="glyphicon glyphicon-record"></i> <font color="black">Status</font></a></li>
                </ul>
             </div>
		  </div>
		  <div class="col-md-10">
		  	
		  	<div class="content-box-large" style="height:100%;">
		  	<div class="panel-heading">
					<div class="panel-title">Annexure A (Status)</div>
					<div class="panel-options">
								<a href="status.php" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
								
							</div>
				</div>
  				<div class="panel-body">
  				<?php
  				$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM annexA WHERE phone='$mob'";
$result = $conn->query($sql);


  				?>
  					<div class="table-responsive">
  						<table class="table">
  						
  				<?php		if ($result->num_rows > 0) {
  						echo '  <thead>
			                <tr>
			                  <th>Ref Id</th>
			                  <th>Date Time</th>
			                  <th>Amount</th>
			                  <th>Status</th>
			                   <th>Query</th>
			                </tr>
			              </thead> <tbody>' ;
    // output data of each row
    while($row = $result->fetch_assoc()) {
    if ($row['approved'] == '0')
    { // 0 - approval pending
      // 1 - approved 
      // 2 - not approved
       echo '<tr><td>'.strtoupper($row["uniqueid"]).'</td><td>'.$row["timestamp"].' IST</td><td>₹ '.$row["cost"].'</td><td><img src="images/sandclock.png" height="20px">Pending</td><td><a href="query.php?refid='.$row['uniqueid'].'" target="_blank">Raise Query</a></tr>' ;
       }
    }
} else {
    echo "No grant requests found";
}

			            
		?>	             
			              </tbody>
			            </table>
  					</div>
  				</div>
		  	<hr/>
		  	<div class="panel-heading">
					<div class="panel-title">Annexure B (Status)</div>
					<div class="panel-options">
								<a href="status.php" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
								
							</div>
				</div>
		  	<div class="panel-body">
  					<div class="table-responsive">
  						<table class="table">
			              <?php
			              $sql = "SELECT * FROM annexB WHERE usermobile='$mob'";
			              $result = $conn->query($sql);
			              if ($result->num_rows > 0) {
			              echo '
			              <thead>
			                <tr>
			                  
			                  <th>Ref Id</th>
			                  <th>Date Time</th>
			                  <th>State</th>
			                  <th>Status</th>
			                  <th>Query</th>
			                </tr>
			              </thead><tbody> ' ;
			               // output data of each row
    while($row = $result->fetch_assoc()) {
    if ($row['approved'] == '0')
    { // 0 - approval pending
      // 1 - approved 
      // 2 - not approved
       echo '<tr><td>'.strtoupper($row["uniqueid"]).'</td><td>'.$row["timestamp"].' IST</td><td>'.$row["recostate"].'</td><td><img src="images/sandclock.png" height="20px">Pending</td><td><a href="query.php?refid='.$row['uniqueid'].'" target="_blank">Raise Query</a></td></tr>' ;
       }
    }
} else {
    echo "No  requests found";
}


?>
			              
			              
			             
			              
			              </tbody>
			            </table>
  					</div>
  				</div>
		  	
		  	</div>
		  	</div></div>
    </div>

    
    
    

    <footer>
         <div class="container">
         
            <div class="copy text-center">
               Copyright 2018 <a href='https://road-safety.co.in'>IRSC</a>
               <br>IP: <?php $ip = getenv('HTTP_CLIENT_IP')?:
getenv('HTTP_X_FORWARDED_FOR')?:
getenv('HTTP_X_FORWARDED')?:
getenv('HTTP_FORWARDED_FOR')?:
getenv('HTTP_FORWARDED')?:
getenv('REMOTE_ADDR');

echo $ip ; ?>
            </div>
            
         </div>
      </footer>
<link rel="stylesheet" type="text/css" href="vendors/bootstrap-wysihtml5/src/bootstrap-wysihtml5.css"></link>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
   <script src="vendors/datatables/js/jquery.dataTables.min.js"></script>

    <script src="vendors/datatables/dataTables.bootstrap.js"></script>

    <script src="js/tables.js"></script>

    <script src="js/custom.js"></script>
  </body>
</html>