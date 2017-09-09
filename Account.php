<?php require 'Connections/Connections.php'; ?>
<?php 
session_start(); 
if(isset($_SESSION["Fname"])){}
else{
	header('Location: Login.php');
	}
?>
<!doctype html>
<html>
<head>
<link href="CSS/Master.css"  rel="stylesheet" type="text/css" />
<link href="CSS/Menu.css"  rel="stylesheet" type="text/css" />
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<body>
  <div class="Container">
    <div class="Header"></div>
	<div class="Menu">
			<nav>
			<ul class="cssmenu">
            <li><a href="Account.php">Account</a></li>
            <li><a href="UpdateAccount.php">Update Account</a></li>
			<li><a href="Logout.php">Logout</a></li>
            <li><a href="DelAcc.php">Delete Account</a></li>
          
			
			</ul>
			</nav>
			</div>
	
	<div class="LeftBody"></div>
	<div class="RightBody">
	  <p>LOGIN SUCCESSFUL</p>
	  <p>Welcome <?php  echo $_SESSION["Fname"]; ?>
      </p>
	  <p><a href="form.php">Click Here To access Application Form</a></p>
       <p><a href="UpdateApp.php">Click Here To Update Application Form</a></p>
       <p><a href="ShedPrint.php">Click Here for Appointment Details</a></p>
	</div>
	<div class="Footer"></div>
  </div>
</body>
</html>