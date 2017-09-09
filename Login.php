<?php require 'Connections/Connections.php'; ?>
<?php

  if(isset($_POST['LogIn'])){
		
		$EM= $_POST['email'];
		$PW=$_POST['password'];
			
			$result=$con->query("Select * from usern where Email='$EM' AND Password='$PW'");
			$row= $result->fetch_array(MYSQLI_BOTH);
			if($row['Password']==$PW){
			session_start();
			$_SESSION["UserID"]=$row['UserID'];
			$_SESSION["Fname"]=$row['Fname'];
			header('Location: Account.php');}
			else{
			?>
			
			<script>alert('Incorrect details');</script>
			
			<?php
			 }}
?>

<!doctype html>
<html>
<head>
<link href="CSS/Master.css"  rel="stylesheet" type="text/css" />
<link href="CSS/Menu.css"  rel="stylesheet" type="text/css" />
<meta charset="utf-8">
<title>Login</title>
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
	  <form id="form1" name="form1" method="post">
      <div class="FormElements">
        <input name="email" type="email" required="required" class="TField" id="email" placeholder="Email">
      </div>
      <div class="FormElements">
        <input name="password" type="password" required="required" class="TField" id="password" placeholder="Password">
      </div>
      <div class="FormElements">
        <input name="LogIn" type="submit" class="button" id="LogIn" value="LogIn">
      </div>
      </form>
	</div>
	<div class="Footer"></div>
  </div>
</body>
</html>