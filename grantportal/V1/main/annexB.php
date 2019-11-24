<?php
session_start();
if(!isset($_SESSION['mob']))
{
header('Location: ../login.html');
}



?>
<html>
  <head>
    <title>Mission Road Safety - NGO's Portal Annex B</title>
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
                            <i class="glyphicon glyphicon-list"></i> <font color="black">Forms</font>
                            <span class="caret pull-right"></span>
                         </a>
                         <!-- Sub menu -->
                         <ul>
                            <li><a href="annexA.php"><b>Annex A</b></a></li>
                            <li><a href="#">Annex B</a></li>
                        </ul>
                    </li>
                          <li><a href="status.php"><i class="glyphicon glyphicon-record"></i> Status</a></li>
                </ul>
             </div>
		  </div>
		  <div class="col-md-10">
		  	
		  	<div class="content-box-large">
		  	<h3 align="center">Annexure B</h3>
		  	     <form role="form" class="form-horizontal" method="post" action="submit/annexB.php" id="reused_form" >
		  	     <legend><b>Particulars of Agency being Nominated by <select name="state" class="form-control" style="width:30%;min-width:200px;" id="stateId" required="required">
<option value="">Select State</option>
<option value="Andaman and Nicobar Island">Andaman and Nicobar Islands</option><option value="Andhra Pradesh">Andhra Pradesh</option><option value="Arunachal Pradesh">Arunachal Pradesh</option><option value="Assam">Assam</option><option value="Bihar">Bihar</option><option value="Chandigarh">Chandigarh</option><option value="Chhattisgarh">Chhattisgarh</option><option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option><option value="Daman and Diu">Daman and Diu</option><option value="Delhi">Delhi</option><option value="Goa">Goa</option><option value="Gujarat">Gujarat</option><option value="Haryana">Haryana</option><option value="Himachal Pradesh">Himachal Pradesh</option><option value="Jammu and Kashmir">Jammu and Kashmir</option><option value="Jharkhand">Jharkhand</option><option value="Karnataka">Karnataka</option><option value="Kenmore">Kenmore</option><option value="Kerala">Kerala</option><option value="Lakshadweep">Lakshadweep</option><option value="Madhya Pradesh">Madhya Pradesh</option><option value="Maharashtra">Maharashtra</option><option value="Manipur">Manipur</option><option value="Meghalaya">Meghalaya</option><option value="Mizoram">Mizoram</option><option value="Nagaland">Nagaland</option><option value="Narora">Narora</option><option value="Natwar">Natwar</option><option value="Odisha">Odisha</option><option value="Paschim Medinipur">Paschim Medinipur</option><option value="Pondicherry">Pondicherry</option><option value="Punjab">Punjab</option><option value="Rajasthan">Rajasthan</option><option value="Sikkim">Sikkim</option><option value="Tamil Nadu">Tamil Nadu</option><option value="Telangana">Telangana</option><option value="Tripura">Tripura</option><option value="Uttar Pradesh">Uttar Pradesh</option><option value="Uttarakhand">Uttarakhand</option><option value="Vaishali">Vaishali</option><option value="West Bengal">West Bengal</option></select></b></legend>

		  	     <div class="form-group">
					<label class="col-md-2 control-label" for="text-field">Name of the Agency</label>
				<div class="col-md-10">
	  <input type="text" class="form-control" id="name" name="name" value="<?php echo $_SESSION['orgname'] ; ?>" required >
				</div>
			    </div>
			    
			     <div class="form-group">
					<label class="col-md-2 control-label" for="text-field">Authorized Contact Person</label>
				<div class="col-md-10"> 
				<input type="text" class="form-control" id="name" name="poc" value="<?php echo $_SESSION['pername'] ; ?>" required >
				</div>
			    </div>
			    
			     <div class="form-group">
					<label class="col-md-2 control-label" for="text-field">Phone Number</label>
				<div class="col-md-10"> 
				  <input type="text"  class="form-control" id="name" name="phone" value="<?php echo $_SESSION['mob']; ?>" placeholder="Contact Number" required >
				</div>
			    </div>
			    
			     <div class="form-group">
					<label class="col-md-2 control-label" for="text-field">Email Id</label>
				<div class="col-md-10"> 
				   <input type="text"  class="form-control" id="name" name="emailid" value = "<?php echo $_SESSION['email']; ?>" placeholder="Email Id" required >
				</div>
			    </div>
			    
			    <div class="form-group">
					<label class="col-md-2 control-label" for="textarea">Postal Address</label>
						<div class="col-md-10">
						
								<textarea type="textarea" style="resize: none;" rows="4"  class="form-control" id="name" name="address" placeholder="Complete Address with PIN CODE" required ></textarea>
						</div>
			</div>
			
			 <div class="form-group">
					<label class="col-md-3 control-label" for="text-field">Unique ID of the Agency as obtained
from the DARPAN Portal of NITI Aayog.</label>
				<div class="col-md-4"> 
				    <input type="text"  class="form-control" id="name" name="darpanid" placeholder="Darpan Unique ID" required >
				</div>
			    </div>
			    
			     <div class="form-group">
					<label class="col-md-3 control-label" for="text-field">Bank Account Number and Branch Name</label>
				<div class="col-md-4"> 
				    <input type="text"  class="form-control" id="name" name="acno" placeholder="Account No." required >
				</div>
				<div class="col-md-5"> 
				    <input type="text"  class="form-control" id="name" name="branch" placeholder="Branch Name" maxlength="200" required >
				</div>
			    </div>
			    
			    	
			    
	<legend><b>Particulars of President and Secretary of Agency</b></legend>		    
			     <div class="form-group">
					<label class="col-md-2 control-label" for="text-field">President's Name</label>
				<div class="col-md-10"> 
				  <input type="text"  class="form-control" id="name" name="presname" maxlength="200"  placeholder="Name of President" required >
				</div>
			    </div>
			    
			      <div class="form-group">
					<label class="col-md-2 control-label" for="textarea"> Address</label>
						<div class="col-md-10">
						
								<textarea type="textarea" style="resize: none;" rows="4"  class="form-control" id="name" name="presaddress" placeholder="Complete Address with PIN CODE" required ></textarea>
						</div>
			</div>
			
			  <div class="form-group">
					<label class="col-md-2 control-label" for="text-field">Aadhaar Number</label>
				<div class="col-md-10"> 
				  <input type="text"  class="form-control" id="name" name="presadhaar" maxlength="20"  placeholder="Aadhaar Number" required >
				</div>
			    </div>
			    
			    


<legend><b>Past Activities</b></legend>
			 <div class="form-group">
					<label class="col-md-5 control-label" for="text-field">Brief description of the activities
undertaken by the agency, for which
award has been recommended</label>
				<div class="col-md-7"> 
				 <input type="file" class="btn btn-default" id="fupload" name="brief" accept=".pdf" required>
					<p class="help-block">Please upload only .pdf file</p>
				</div>
			    </div>
			  
	<legend><b>Recommendation</b></legend>		    
		 <div class="form-group">
					<label class="col-md-2 control-label" for="text-field">	Recommendation of the State
Government
</label>
				<div class="col-md-10"> 
				
								<textarea type="textarea" style="resize: none;" rows="4"  class="form-control" id="name" name="govreco" placeholder="Recommendation of State Govt." required ></textarea>
				</div>
			    </div>
			    
			    				
	<input type="checkbox" id="confirm"  required> I confirm that all details provided are correct and up to date.
	
                      
                        <input type="submit"  id="grantbtn" class="btn btn-lg btn-success pull-right" style="display:none;" value="SUBMIT > > >" ><br><br>
                        <hr/>
<script>
	document.getElementById('confirm').onchange = function() {
	if (this.checked == true)
	{
			 document.getElementById('grantbtn').style.display = "block" ;
			 document.getElementById('appendprepend').type = "text" ;
	}
	else 
	{
	 document.getElementById('grantbtn').style.display = "none" ;
	  document.getElementById('appendprepend').type = "number" ;
	}
};
	</script>
                    </form></div>
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
echo $ip ; 
?>
            </div>
            
         </div>
      </footer>
<link rel="stylesheet" type="text/css" href="vendors/bootstrap-wysihtml5/src/bootstrap-wysihtml5.css"></link>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="vendors/bootstrap-wysihtml5/lib/js/wysihtml5-0.3.0.js"></script>
    <script src="vendors/bootstrap-wysihtml5/src/bootstrap-wysihtml5.js"></script>
    <script src="js/custom.js"></script>
    <script src="js/editors.js"></script>
  </body>
</html>