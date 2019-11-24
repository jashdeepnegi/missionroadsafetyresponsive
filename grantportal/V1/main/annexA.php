<?php
session_start();
if(!isset($_SESSION['mob']))
{
header('Location: ../login.html');
}



?>
<html>
  <head>
    <title>Mission Road Safety - NGO's Portal Annex A</title>
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
                            <li><a href="annexB.php">Annex B</a></li>
                        </ul>
                    </li>
                          <li><a href="status.php"><i class="glyphicon glyphicon-record"></i> Status</a></li>
                </ul>
             </div>
		  </div>
		  <div class="col-md-10">
		  	
		  	<div class="content-box-large">
		  	<h3 align="center">Annexure A</h3>
		  	     <form role="form" class="form-horizontal" method="post" action="submit/annexA.php" id="reused_form" >
		  	     <legend><b>NGO Details</b></legend>
		  	     <div class="form-group">
					<label class="col-md-2 control-label" for="text-field">Name of the Agency</label>
				<div class="col-md-10">
	  <input type="text" class="form-control" id="name" name="name" value="<?php echo $_SESSION['orgname'] ; ?>" required >
				</div>
			    </div>
			    
			     <div class="form-group">
					<label class="col-md-2 control-label" for="text-field">Legal Status</label>
				<div class="col-md-10"> 
				<input type="text" class="form-control" id="name" name="legalstatus" required >
				</div>
			    </div>
			     <div class="form-group">
					<label class="col-md-2 control-label" for="text-field">Date of registration/incorporation</label>
				<div class="col-md-10"> 
				<div class="input-group bfh-datepicker-toggle" data-toggle="bfh-datepicker"><span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>  <input type="date" class="form-control" id="name" name="datereg" required ></div>
				</div>
			    </div>	
			    
	<legend><b>Contact Details</b></legend>		    
			     <div class="form-group">
					<label class="col-md-2 control-label" for="text-field">Phone Number</label>
				<div class="col-md-10"> 
				  <input type="text"  class="form-control" id="name" name="phone" value="<?php echo $_SESSION['mob']; ?>" placeholder="Contact Number" required disabled>
				</div>
			    </div>
			    
			     <div class="form-group">
					<label class="col-md-2 control-label" for="text-field">Email Id</label>
				<div class="col-md-10"> 
				   <input type="text"  class="form-control" id="name" name="emailid" value = "<?php echo $_SESSION['email']; ?>" placeholder="Email Id" required disabled>
				</div>
			    </div>
			    

			<div class="form-group">
					<label class="col-md-2 control-label" for="textarea">Textarea</label>
						<div class="col-md-10">
								<textarea type="textarea" style="resize: none;" rows="4"  class="form-control" id="name" name="address" placeholder="Complete Address with PIN CODE" required ></textarea>
						</div>
			</div>
									
	<legend><b>Bank Details</b></legend>		
	 <div class="form-group">
					<label class="col-md-2 control-label" for="text-field">Account No.</label>
				<div class="col-md-10"> 
				    <input type="text"  class="form-control" id="name" name="acno" placeholder="Bank Account No." required >
				</div>
			    </div>
			    
			     <div class="form-group">
					<label class="col-md-2 control-label" for="text-field">IFSC Code</label>
				<div class="col-md-10"> 
				   <input type="text"  class="form-control" id="name" name="ifsc" maxlength="100" placeholder="IFSC Code" required >
				</div>
			    </div>
			    

			<div class="form-group">
					<label class="col-md-2 control-label" for="textarea">Branch Address</label>
						<div class="col-md-10">
							  <textarea type="textarea" style="resize: none;" rows="3"  class="form-control" id="name" name="bankaddress" placeholder="Branch Address with PIN CODE" required ></textarea>
						</div>
			</div>	
				    
			<legend><b>President / Secretary / Trustee of the agency</b></legend>
			     <div class="form-group">

			   <label class="col-md-2 control-label" for="text-field">Name</label>
				<div class="col-md-10"> 
				      <input type="text"  class="form-control" id="name" name="presname" placeholder="Name" required >
				</div>
			    </div>
			    
			     <div class="form-group">
					<label class="col-md-2 control-label" for="text-field">Aadhar Number</label>
				<div class="col-md-10"> 
				     <input type="text"  class="form-control" id="name" name="presadhaar" maxlength="20" placeholder="Aadhar Number" required >
				</div>
			    </div>
			    

			<div class="form-group">
					<label class="col-md-2 control-label" for="textarea">Branch Address</label>
						<div class="col-md-10">
							  <textarea type="textarea" style="resize: none;" rows="3"  class="form-control" id="name" name="presaddress" placeholder="Address with PIN CODE" required ></textarea>
						</div>
			</div>	 
			
			<legend><b>Darpan Details (only for NGO's)</b></legend>
			 <div class="form-group">
					<label class="col-md-2 control-label" for="text-field">Date of registration on DARPAN Portal</label>
				<div class="col-md-10"> 
				<div class="input-group bfh-datepicker-toggle" data-toggle="bfh-datepicker"><span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span> <input type="date"  class="form-control" id="darpandate" name="darpandate"   ></div>
				</div>
			    </div>
			    
			     <div class="form-group">
					<label class="col-md-2 control-label" for="text-field">Unique ID generated on DARPAN Portal</label>
				<div class="col-md-10"> 
				  <input type="text"  class="form-control" id="darpanid" name="darpanid" placeholder="Unique Id" >
				  <br>
				  <input type="checkbox" name="notngo" id="notngo"> Check here if not a NGO
				</div>
			    </div>
			    <script>	
			document.getElementById('notngo').onchange = function() {
    document.getElementById('darpanid').disabled = this.checked;
    document.getElementById('darpandate').disabled = this.checked;
};
</script>

<legend><b>Past Activities</b></legend>
			 <div class="form-group">
					<label class="col-md-5 control-label" for="text-field">Brief on the activities conducted by the Agency in past three years</label>
				<div class="col-md-7"> 
				 <input type="file" class="btn btn-default" id="fupload" name="brief" accept=".pdf" required>
					<p class="help-block">Please upload only .pdf file</p>
				</div>
			    </div>
			    
   <div class="form-group">
					<label class="col-md-5 control-label" for="text-field">Whether any road safety awareness
programmes have been earlier conducted by
the Agency (if yes, give details)</label>

				<div class="col-md-7"> 
				<input type="checkbox" name="rsact" id="rsact"> Check here if YES.
				<textarea class="form-control" name="rsbrief" id="rsbrief" style="resize: none;" rows="5" placeholder="Enter details here (list the activities. if already mentioned in the pdf above, give the section headers)" style="width:98%;height:200px;" ></textarea>
				</div>
			    </div>
			    
			     <script>	
			document.getElementById('rsact').onchange = function() {
			if (this.checked == true)
			{
			 document.getElementById('rsbrief').style.display="block" ;
			}
			else 
			{
			 document.getElementById('rsbrief').style.display="none" ;
			}
     document.getElementById('rsbrief').required = this.checked;
};
</script>
	
	<legend><b>Proposed Plan</b></legend>		    
		 <div class="form-group">
					<label class="col-md-5 control-label" for="text-field">	Brief of the proposed activity proposed to be undertaken indicating the target group, place, content of the programme and the proposed time period for conducting the programme</label>
				<div class="col-md-7"> 
				<input type="file" id="fupload"  class="btn btn-default"  name="planbrief" accept=".pdf" required>
				
					<p class="help-block">Please upload only .pdf file</p>
				</div>
			    </div>
			    
			     <div class="form-group">
					<label class="col-md-5 control-label" for="text-field">	Total estimated cost of the Proposal <i>(Attach a copy of the estimate)</i></label>
				<div class="col-md-4"> 
				<div class="input-group">
					<span class="input-group-addon">&#8377</span>
					<input class="form-control" id="appendprepend" name="estimate" max="50000000000000" type="number">
					<span class="input-group-addon">.00</span>
					</div><br>
					<input type="file" id="fupload"  class="btn btn-default"  name="estimatefile" accept=".pdf" required>
				
					<p class="help-block">Please upload only .pdf file for estimate</p>
			    </div>
			    </div>	  				
	<input type="checkbox" id="confirm"  required> I confirm that all details provided are correct and up to date.
	
                      
                        <input type="submit"  id="grantbtn" class="btn btn-lg btn-success pull-right" value="Request Grant" ><br><br>
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

echo $ip ; ?>
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