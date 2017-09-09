<?php require 'Connections/Connections.php'; ?>
<?php 
session_start(); 
if(isset($_SESSION["Fname"])){header('Location: Account.php');}
else{
	
	}
?>


<?php
	
	if(isset($_POST['Register'])){
		
		session_start();
		$Fname= $_POST['First_Name'];
		$Lname=$_POST['Last_Name'];
		$Email=$_POST['email'];
		$PW=$_POST['password'];
		
		$sql= $con->query("INSERT INTO usern(Fname, Lname, Email, Password)Values('{$Fname}','{$Lname}','{$Email}','{$PW}')");
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
			<li><a href="Register.php">Register</a></li>
			<li><a href="Login.php">Login</a></li>
			<li><a href="vote.php">Home</a></li>
			</ul>
			</nav>
			</div>
	
	<div class="LeftBody"></div>
	<div class="RightBody">
	  <form action="" id="RegisterForm" name="RegisterForm" method="post">
      <div class="FormElements">
        <input name="First_Name" type="text" required="required" class="TField" id="First_Name" placeholder="First Name">
      </div>
      <div class="FormElements">
        <input name="Last_Name" type="text" required="required" class="TField" id="Last_Name" placeholder="Last Name">
      </div>
      <div class="FormElements">
       
        <input name="email" type="email" class="TField" id="email" placeholder="Email">
      </div>
      <div class="FormElements">
        <input name="password" type="password" class="TField" id="password" placeholder="Password">
      </div>
      <div class="FormElements">
        
        <input name="Register" type="submit" class="button" id="Register" value="Register">
      </div>
      </form>
	 
	</div>
	<div class="Footer"></div>
  </div>
</body>
</html>