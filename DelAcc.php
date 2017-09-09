<?php require 'Connections/Connections.php'; ?>

<?php 
session_start(); 
if(isset($_SESSION["Fname"])){}
else{
	header('Location: LogIn.php');
	}
?>

<?php 

echo "<script type='text/javascript'>alert('Are You Sure You Want to Delete Your Account.Your Application Form Data Will also be deleted');</script>";
   $del=$_SESSION["UserID"];
   $sql= $con->query("DELETE FROM usern
                        WHERE UserID ='$del'");
header( "refresh:3; url=login.php" );
session_destroy();
?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<h1><center>Your Acount has been Deleted.</center></h1>
<h1><center><a href="Login.php"><br>Redirecting You to HomePage</a></center></h1>
</body>
</html>