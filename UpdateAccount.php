<?php require 'Connections/Connections.php'; ?>
<?php 
session_start(); 
if(isset($_SESSION["UserID"])){}
else{
	header('Location: Login.php');
	}
?>

<?php
 $User = $_SESSION["UserID"];
 $result = $con->query("Select * from usern where UserID='$User'");
 $row = $result->fetch_array(MYSQLI_BOTH);
 $_SESSION["FirstName"]=$row['Fname'];
 $_SESSION["LastName"]=$row['Lname'];
 $_SESSION["Email"]=$row['Email'];
 $_SESSION["PW"]=$row['Password'];
 ?>
 
 <?php
 
if(isset($_POST['Update'])){
	
	$UpdateFname=$_POST['FirstName'];
	$UpdateLname=$_POST['LastName'];
	$UpdateEmail=$_POST['Email'];
	$UpdatePassword=$_POST['password']; 
 
 $sql = $con->query("UPDATE user SET Fname ='{$UpdateFname}', Lname ='{$UpdateLname}', Email ='{$UpdateEmail}', Password ='{$UpdatePassword}' where UserID=$User");
 header('Location:Account.php');
}
 


 ?>



<!doctype html>
<html>
<head>
<link href="CSS/Master.css"  rel="stylesheet" type="text/css" />
<link href="CSS/Menu.css"  rel="stylesheet" type="text/css" />
<meta charset="utf-8">
<title>Update Account</title>
</head>
<body>
  <div class="Container">
    <div class="Header"></div>
	<div class="Menu">
			<nav>
			<ul class="cssmenu">
			<li><a href="Register.php">Register</a></li>
			<li><a href='Login.php'>Login</a></li>
			</ul>
			</nav>
			</div>
	
	<div class="LeftBody"></div>
	<div class="RightBody">
	  <form id="form1" name="form1" method="post">
      <div class="FormElements">
      <input name="FirstName" type="text" class="TField" id="FirstName" value="<?php echo $_SESSION["FirstName"]; ?>" >
      </div>
      <div class="FormElements">
        <input name="LastName" type="text" required="required" class="TField" id="LastName" value="<?php echo $_SESSION["LastName"]; ?>">
      </div>
      <div class="FormElements">
        <input name="Email" type="email" required="required" class="TField" id="Email" value="<?php echo $_SESSION["Email"]; ?>">
      </div>
      <div class="FormElements">
        <input name="password" type="password" required="required" class="TField" id="password" value="<?php echo $_SESSION["PW"]; ?>">
      </div>
      <div class="FormElements">
        <input name="Update" type="submit" class="button" id="Update" value="Update">
      </div>
      </form>
	</div>
	<div class="Footer"></div>
  </div>
</body>
</html>