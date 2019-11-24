<?php
session_start();
if(!isset($_SESSION['mob']))
{
header('Location: ../login.html');
}



?>


<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Mission Road Safety - NGO's Portal Mainpage</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <link rel="stylesheet" href="form.css" >
       
      <style>
.sidenav {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 20;
    left: 0;
    background-color: #111;
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 60px;
}

.sidenav a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 25px;
    color: #818181;
    display: block;
    transition: 0.3s;
}

.sidenav a:hover {
    color: #f1f1f1;
}

.sidenav .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
    margin-left: 50px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>
     <div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="#">My Profile</a>
  <a href="#">Services</a>
  <a href="#">Clients</a>
  <a href="logout.php"><font color="red">Logout</font></a>
</div>
    </head>
    <body >
        <div class="container">
        
<span style="font-size:20px;cursor:pointer;background-color:#3d5998;color:#fff;" onclick="openNav()">&#9776; Main Menu</span>

<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}
</script>

            <div class="row">
             

                
                    <h3 align="center">Government of India<br>
Ministry of Road Transport and Highways</h3>
                    <h4 align="center"><font color="#3d5998"><b>NGO's Portal</b></font></h4><hr/>

                    <form role="form" method="post" id="reused_form" >
<table border="1" style="width: 100%;">
<th width="50%" ><p align="center">Subject</p></th>
<th width="50%" ><p align="center">Particulars</p></th>

<tr>
<td style="padding-left: 3px;"><b>Name of the Agency</b></td>
<td style="padding: 4px;">
    <div class="form-group">
        <input type="text" class="form-control" id="name" name="name" required ">
    </div>
</td>
</tr>




</table>

       <br>
        <input type="checkbox" name="rsbrief" onchange="document.getElementById('rsbrief').disabled = this.checked;document.getElementById('name').querySelectorAll("input").disabled = this.checked;document.getElementById('fupload').disabled = this.checked;document.getElementById('cmnts').disabled = this.checked;" > Confirm Details Filled in Annexure A<br>   
     
                      
                        <input type="submit" class="btn btn-lg btn-success pull-right" value="Save Details" ><br><br>
                        <hr/>

                 <p align="center"><img src="http://road-safety.co.in/assets/img/logo.png" height="40px"><br>Developed and Maintained by <a href="https://road-safety.co.in" target="_blank">IRSC 2018</a></p>
                    </form>
                 
                
                </div>
            </div>
       
    </body>
</html>