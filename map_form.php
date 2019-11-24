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
	$fname = $lname = $email = $brief = "";
	$err_name = $err_email = "";

	if($_SERVER['REQUEST_METHOD']=="POST"){
		//Validation
		$fname = $_POST["fname"];
		$lname = $_POST["lname"];
		$email = $_POST["email"];
		$brief = $_POST["brief"];
	}
	?>
	<div class="main-box">
	<h2>Contribute by Sharing</h2>
	<form method="post" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
		<p>First Name:</p><input type="text" name="fname" value="<?php echo $fname; ?>"><br/>
		<p>Last Name:</p><input type="text" name="lname" value="<?php echo $lname; ?>"><br/>
		<p>Email id:</p><input type="text" name="email" value="<?php echo $email; ?>"><br/>
		<p>Brief about the uploaded file:</p><textarea name="brief" rows="5" cols="30"></textarea><br/>
		<p>Your File:</p><input type="file" name="uploadedFile"><br/>
		<input type="submit" value="Upload" style="width: 20%; margin-left: 24%; margin-right: 5%; margin-top: 5px; margin-bottom: 5px; font-family: Calibri; font-size: 1em;">
		<input type="reset" style="width: 20%; margin-left: 5%; margin-top: 5px; margin-bottom: 5px; font-family: Calibri; font-size: 1em;">
	</form>
	</div>
	<div style="width: 30vw; min-width: 300px; margin: auto; text-align: center; padding: 10px; font-family: Calibri; font-size: 1em;">
	<?php

	if($_SERVER['REQUEST_METHOD']=="POST"){
		//Validation
		if(empty($_POST["fname"]) || empty($_POST["lname"])){
			$err_name = "Name is required. Please re-enter.";
			echo $err_name;
		}
		elseif(!preg_match("/^[a-zA-z]*$/", $_POST["fname"]) || !preg_match("/^[a-zA-z]*$/", $lname)) {
			$err_name = "Name can contain only letters. Please re-enter.";
			echo $err_name;
		}
		elseif(empty($_POST["email"])) {
			$err_email = "Email is required. Please re-enter.";
			echo $err_email;
		}
		elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			$err_email = "Email id is not correct. Please re-enter.";
			echo $err_email;
		}
		elseif(empty($_FILES["uploadedFile"]["name"])) {
			$err_name = "File is empty. Please re-upload.";
			echo $err_name;
		}
		else {
			/*$fname = $_POST["fname"];
			$lname = $_POST["lname"];*/

			echo "Hi ".$fname."!<br/>";
			echo "Thanks for uploading <em>".$_FILES["uploadedFile"]["name"]."</em>. We shall put it up on our portal after scrutinizing it.";
			$dir = "mapuploads/";
			$targetfile = $dir.basename($_FILES["uploadedFile"]["name"]);
			move_uploaded_file($_FILES["uploadedFile"]["tmp_name"], $targetfile);

			date_default_timezone_set('Asia/Dili');
			$buffer = fopen("uploadinfo.txt", "ab");
			fwrite($buffer, $fname." ".$lname." uploaded ".$_FILES["uploadedFile"]["name"]." on ".date("d-m-y")." and with description: ".$brief."\r\n");
		}
	}
	?>
	</div>
</body>