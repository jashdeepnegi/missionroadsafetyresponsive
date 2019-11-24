<?php
session_start();
if(!isset($_SESSION['mob']))
{
header('Location: ../login.html');
}



?>
<html>
  <head>
    <title>Mission Road Safety - NGO's Portal Mainpage</title>
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
                    <li class="current"><a href="index.html"><i class="glyphicon glyphicon-home"></i> Dashboard</a></li>
                    <li><a href="calendar.html"><i class="glyphicon glyphicon-calendar"></i> Events</a></li>
                  <!--  <li><a href="stats.html"><i class="glyphicon glyphicon-stats"></i> Statistics (Charts)</a></li>  
                    <li><a href="tables.html"><i class="glyphicon glyphicon-list"></i> Tables</a></li>  -->
              
              <!--      <li><a href="editors.html"><i class="glyphicon glyphicon-pencil"></i> Editors</a></li>
                    <li><a href="forms.html"><i class="glyphicon glyphicon-tasks"></i> Forms</a></li>  -->
                    <li class="submenu">
                         <a href="#">
                            <i class="glyphicon glyphicon-list"></i> Forms
                            <span class="caret pull-right"></span>
                         </a>
                         <!-- Sub menu -->
                         <ul>
                            <li><a href="annexA.php">Annex A</a></li>
                            <li><a href="signup.html">Annex B</a></li>
                        </ul>
                    </li>
                          <li><a href="buttons.html"><i class="glyphicon glyphicon-record"></i> Status</a></li>
                </ul>
             </div>
		  </div>
		  <div class="col-md-10">
		  	<div class="row">
		  		<div class="col-md-6">
		  			<div class="content-box-large">
		  				<div class="panel-heading">
							<div class="panel-title">New vs Returning Visitors</div>
							
							<div class="panel-options">
								<a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
								<a href="#" data-rel="reload"><i class="glyphicon glyphicon-cog"></i></a>
							</div>
						</div>
		  				<div class="panel-body">
		  					Ut tristique adipiscing mauris, sit amet suscipit metus porta quis. Donec dictum tincidunt erat, eu blandit ligula. Nam sit amet dolor sapien. Quisque velit erat, congue sed suscipit vel, feugiat sit amet enim. Suspendisse interdum enim at mi tempor commodo. Sed tincidunt sed tortor eu scelerisque. Donec luctus malesuada vulputate. Nunc vel auctor metus, vel adipiscing odio. Aliquam aliquet rhoncus libero, at varius nisi pulvinar nec. Aliquam erat volutpat. Donec ut neque mi. Praesent enim nisl, bibendum vitae ante et, placerat pharetra magna. Donec facilisis nisl turpis, eget facilisis turpis semper non. Maecenas luctus ligula tincidunt iasdsd vitae ante et, 
				  			<br /><br />
				  			Interdum et malesuada fames ac ante ipsum primis in faucibus. Quisque sed consectetur erat. Maecenas in elementum libero. Sed consequat pellentesque ultricies. Ut laoreet vehicula nisl sed placerat. Duis posuere lectus n, eros et hendrerit pellentesque, ante magna condimentum sapien, eget ultrices eros libero non orci. Etiam varius diam lectus.
							<br /><br />
		  				</div>
		  			</div>
		  		</div>

		  		<div class="col-md-6">
		  			<div class="row">
		  				<div class="col-md-12">
		  					<div class="content-box-header">
			  					<div class="panel-title">New vs Returning Visitors</div>
								
								<div class="panel-options">
									<a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
									<a href="#" data-rel="reload"><i class="glyphicon glyphicon-cog"></i></a>
								</div>
				  			</div>
				  			<div class="content-box-large box-with-header">
				  				
					  			Pellentesque luctus quam quis consequat vulputate. Sed sit amet diam ipsum. Praesent in pellentesque diam, sit amet dignissim erat. Aliquam erat volutpat. Aenean laoreet metus leo, laoreet feugiat enim suscipit quis. Praesent mauris mauris, ornare vitae tincidunt sed, hendrerit eget augue. Nam nec vestibulum nisi, eu dignissim nulla.
								<br /><br />
							</div>
		  				</div>
		  			</div>
		  			<div class="row">
		  				<div class="col-md-12">
		  					<div class="content-box-header">
			  					<div class="panel-title">New vs Returning Visitors</div>
								
								<div class="panel-options">
									<a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
									<a href="#" data-rel="reload"><i class="glyphicon glyphicon-cog"></i></a>
								</div>
				  			</div>
				  			<div class="content-box-large box-with-header">
				  				
					  			Pellentesque luctus quam quis consequat vulputate. Sed sit amet diam ipsum. Praesent in pellentesque diam, sit amet dignissim erat. Aliquam erat volutpat. Aenean laoreet metus leo, laoreet feugiat enim suscipit quis. Praesent mauris mauris, ornare vitae tincidunt sed, hendrerit eget augue. Nam nec vestibulum nisi, eu dignissim nulla.
								<br /><br />
							</div>
		  				</div>
		  			</div>
		  		</div>
		  	</div>

		  	<div class="row">
		  		<div class="col-md-12 panel-warning">
		  			
		  			<div class="content-box-large box-with-header">
			  			<h4 align="center"><b>Guidelines for grant of financial assistance for administering Road
Safety Advocacy and Awards for the Outstanding work done in the field
of Road Safety</b></h4>
					</div>
		  		</div>
		  	</div>
		  	
		  		<div class="content-box-header">
			  					<div class="panel-title">1. Background</div>
								
								
				  			</div>
				  			<div class="content-box-large box-with-header">
				  				
					  			<ol>
<li>
Road safety is a complex issue of concern, considering its magnitude and gravity and the negative impacts on the economy, public health and the general welfare
of the people, particularly those with low income. Although various road safety improvement programs are being implemented, these have not had the required
impact, and the number of road accidents and fatalities continue to rise. With motorization witnessing a 10% compound growth every year and expanding road
network, travel risks and traffic exposure grow at a much faster rate. Today, road traffic injuries are one of the leading causes of deaths, disabilities and
hospitalizations, with severe socio-economic costs across the world.
</li><br>
<li>
The main thrust of accident prevention and control across the world has been on 4 E’s, vis. (i) Education, (ii) Enforcement, (iii) Engineering and (iv) Environment
and Emergency care of road accident victims. The Government of India has been focusing on all these four approaches in its policies and programmes. For
promoting the awareness about road safety, Ministry of Road Transport & Highways has decided to associate Non-Governmental organizations (NGO). The NGOs may undertake activities for creating road safety awareness among citizen.
</li><br>
<li>
It is necessary to ensure active participation of all stakeholders viz. State Governments, Corporate houses, Auto industry and their associations,
Universities, institutions, Non- Governmental Organizations and the society at large to improve the Road Safety scenario. Many NGOs, Trusts, Societies etc. are
working tirelessly for the cause of road safety in the Country. There is a need to recognize the outstanding contribution in the field of road safety especially in
propagating road safety measures and encouraging their adoption.
</li><br>
<li>
It is in fulfillment of the above objectives that the Ministry of Road Transport & Highways proposes to provide financial assistance to various agencies engaged in
the activities to propagate road safety messages among citizens and recognize those making positive contribution in the field of road safety with some awards. 
</li>
</ol>
							</div>

		  	
		  	
		  	<div class="col-md-6">
		  			
		  				
		  					<div class="content-box-header">
			  					<div class="panel-title">2. Name of the Scheme</div>
								
								
				  			</div>
				  			<div class="content-box-large box-with-header">
				  				
					  			This scheme shall be called as the “Scheme for grant of financial assistance for administering Road Safety Advocacy and awards for the outstanding work done in
the field of Road Safety”. The Scheme shall remain in operation till 31.03.2020.
							
						</div>
						
						
			
		  					<div class="content-box-header">
			  					<div class="panel-title">3. Scope/ Objectives of the scheme</div>
								
				  			</div>
				  			<div class="content-box-large box-with-header">
				  				
					  			<ol>
<li>To provide financial assistance to Non-Governmental Organisations (NGOs) /
Trusts/ Cooperative Societies and other agencies for administering road
safety programmes to create awareness about road safety.</li><li>
To give awards to NGOs/ Trusts/ Cooperative Societies etc. for their
outstanding work done in the field of road safety.</li>
</ol>
						</div>			
						
						
		  		</div>

		  		<div class="col-md-6">
		  			
		  				<div class="col-md-12">
		  					<div class="content-box-header">
			  					<div class="panel-title">4. Concept</div>
								
				  			</div>
				  			<div class="content-box-large box-with-header">
				  				The past experience of working with NGOs/ Trusts/ Cooperative Societies in the field of road safety shows that these are necessary supplement and extension to the governmental efforts. Extensive efforts are required to be made focusing on diverse aspects of road safety to sensitise the road users about safe road usage. The limited machinery available with the government agencies falls short of the job at hand and may not be able to handle such efforts. The charitable organisations cumulatively have broader access across the country. Many of these organisations are regularly involved in propagation of a variety of social causes
and road safety is a prominent cause amongst them. These agencies can help expand project uptake and outreach and can facilitate greater awareness of road safety issues. In view of this, Ministry of Road Transport & Highways proposes to associate these agencies for taking forward the road safety programmes and recognize their outstanding work in the field of road safety through institution of awards.
							</div>
		  				</div>
		  		
		  		</div>
		  			 
		  		<div class="row">
		  		<div class="col-md-6">
		  			<div class="content-box-large">
		  				<div class="panel-heading">
							<div class="panel-title">New vs Returning Visitors</div>
							
							<div class="panel-options">
								<a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
								<a href="#" data-rel="reload"><i class="glyphicon glyphicon-cog"></i></a>
							</div>
						</div>
		  				<div class="panel-body">
		  					Ut tristique adipiscing mauris, sit amet suscipit metus porta quis. Donec dictum tincidunt erat, eu blandit ligula. Nam sit amet dolor sapien. Quisque velit erat, congue sed suscipit vel, feugiat sit amet enim. Suspendisse interdum enim at mi tempor commodo. Sed tincidunt sed tortor eu scelerisque. Donec luctus malesuada vulputate. Nunc vel auctor metus, vel adipiscing odio. Aliquam aliquet rhoncus libero, at varius nisi pulvinar nec. Aliquam erat volutpat. Donec ut neque mi. Praesent enim nisl, bibendum vitae ante et, placerat pharetra magna. Donec facilisis nisl turpis, eget facilisis turpis semper non. Maecenas luctus ligula tincidunt iasdsd vitae ante et, 
				  			<br /><br />
				  			Interdum et malesuada fames ac ante ipsum primis in faucibus. Quisque sed consectetur erat. Maecenas in elementum libero. Sed consequat pellentesque ultricies. Ut laoreet vehicula nisl sed placerat. Duis posuere lectus n, eros et hendrerit pellentesque, ante magna condimentum sapien, eget ultrices eros libero non orci. Etiam varius diam lectus.
							<br /><br />
		  				</div>
		  			</div>
		  		</div>

		  		<div class="col-md-6">
		  			<div class="row">
		  				<div class="col-md-12">
		  					<div class="content-box-header">
			  					<div class="panel-title">New vs Returning Visitors</div>
								
								<div class="panel-options">
									<a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
									<a href="#" data-rel="reload"><i class="glyphicon glyphicon-cog"></i></a>
								</div>
				  			</div>
				  			<div class="content-box-large box-with-header">
				  				
					  			Pellentesque luctus quam quis consequat vulputate. Sed sit amet diam ipsum. Praesent in pellentesque diam, sit amet dignissim erat. Aliquam erat volutpat. Aenean laoreet metus leo, laoreet feugiat enim suscipit quis. Praesent mauris mauris, ornare vitae tincidunt sed, hendrerit eget augue. Nam nec vestibulum nisi, eu dignissim nulla.
								<br /><br />
							</div>
		  				</div>
		  			</div>
		  			<div class="row">
		  				<div class="col-md-12">
		  					<div class="content-box-header">
			  					<div class="panel-title">New vs Returning Visitors</div>
								
								<div class="panel-options">
									<a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
									<a href="#" data-rel="reload"><i class="glyphicon glyphicon-cog"></i></a>
								</div>
				  			</div>
				  			<div class="content-box-large box-with-header">
				  				
					  			Pellentesque luctus quam quis consequat vulputate. Sed sit amet diam ipsum. Praesent in pellentesque diam, sit amet dignissim erat. Aliquam erat volutpat. Aenean laoreet metus leo, laoreet feugiat enim suscipit quis. Praesent mauris mauris, ornare vitae tincidunt sed, hendrerit eget augue. Nam nec vestibulum nisi, eu dignissim nulla.
								<br /><br />
							</div>
		  				</div>
		  			</div>
		  		</div>
		  	</div>

		</div>
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

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
  </body>
</html>