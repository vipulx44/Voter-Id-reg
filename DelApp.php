<?php require 'Connections/Connections.php'; ?>

<?php 
session_start(); 
if(isset($_SESSION["UserID"])){$id=$_SESSION["UserID"];

$sql=$con->query(" UPDATE usern SET BloName=null, BloID=null, Date=null WHERE UserID='$id' ");
header( "refresh:3; url=Account.php" );
}
else{
	header('Location: Login.php');
	}
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body><h1><center>Your Appointment has been Deleted.</center></h1>
<h1><center><a href="Account.php"><br>Redirecting you to your Account</a></center></h1>
</body>
</html>