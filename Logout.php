<?php require 'Connections/Connections.php'; ?>
<?php
session_start();
unset($_SESSION["UserID"]);
unset($_SESSION["Fname"]);
session_destroy();


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
	  <p>You have been Logged Out</p>
	</div>
	<div class="Footer"></div>
  </div>
</body>
</html>