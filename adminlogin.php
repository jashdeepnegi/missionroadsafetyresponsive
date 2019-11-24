<html>
<head>
	<title>Upload Portal</title>
	<style type="text/css">
		* {
			box-sizing: border-box;
			margin: 0px;
			padding: 0px;
		}
		body {
			background-color: #44bba4;
		}
		.admin {
			width: 150px;
			text-align: center;
			padding: 5px;
			background-color: #eee;
			border: 2px solid #C94632;
			border-radius: 5px;
			margin: 20px;
			position: absolute;
			right: 0;
			top: 0;
			color: #000;
		}
		.main-box {
			width: 30vw;
			min-width: 300px;
			margin: auto;
			margin-top: 30vh;
			border: 2px solid #C94632;
			border-radius: 5px;
			background-color: #eee;
		}
		.main-box h2 {
			background-color: #C94632;
			color: #fff;
			font-family: Calibri;
			text-align: center;
			padding: 5px;
		}
		form p {
			width: 40%;
			margin-left: 10%;
			text-align: left;
			display: inline-block;
			margin-top: 10px;
			font-family: Calibri;
			font-size: 1em;
		}
		form input, form textarea {
			width: 40%;
			display: inline-block;
			margin: 5px;
		}
	</style>
</head>
<body>
	<?php
	$user = $pass = "";
	$err = "";

	if($_SERVER['REQUEST_METHOD']=="POST"){
		//Validation
		$user = $_POST["user"];
		$pass = $_POST["pass"];
	}
	?>
	<a href="map_form.php" class="admin">Back</a>
	<div class="main-box">
	<h2>Admin Login</h2>
	<form method="post" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
		<p>Username:</p><input type="text" name="user"><br/>
		<p>Password:</p><input type="password" name="pass"><br/>
		<input type="submit" value="Login" style="width: 20%; margin-left: 40%; margin-right: 40%; margin-top: 5px; margin-bottom: 5px; font-family: Calibri; font-size: 1em;">
	</form>
	</div>
	<div style="width: 30vw; min-width: 300px; margin: auto; text-align: center; padding: 10px; font-family: Calibri; font-size: 1em;">
	<?php

	if($_SERVER['REQUEST_METHOD']=="POST"){
		//Validation
		if($user=="admin" && $pass=="mydreamngo") {
			$dir = "mapuploads/";    
			echo "<a href='../uploadinfo.txt'>Upload info</a><br>";
			if ($dirobj = opendir($dir)){     
				while (($file = readdir($dirobj)) !== false){
                                        if($file!==".." && $file!=".") {
					       echo "filename: <a href='$dir$file'>" . $file . "</a><br>";     
				        }
                                }     
				closedir($dirobj);   
			} 
		}
		else {
			echo "Invalid Credentials";
		}
	}
	?>
	</div>
</body>