<?php require 'Connections/Connections.php'; ?>
<?php 
session_start(); 
if(isset($_SESSION["UserID"])){}
else{
	header('Location: Login.php');
	}
?>
<?php 
 
if(isset($_SESSION["BloID"])){}
else{
	?>
			
			<script>alert('Incorrect details');</script>
			
	<?php
	}
?>
<?php 

if(isset($_SESSION["BloID"])){}
else{
	header('Location: Account.php');
	}
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body><center>
<h3>Appointment Scheduled with MR.<?php  echo $_SESSION["BloName"]; ?> ID:<?php  echo $_SESSION["BloID"]; ?> on <?php  echo $_SESSION["Date"]; ?></h3>
<h4><a href="DelApp.php">Delete Appointment</a></h4><br><br>
<h5><a href="Account.php">Go To Account Page</a></h5></center>
</body>
</html>