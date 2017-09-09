<?php require 'Connections/Connections.php'; ?>

 <?php 
session_start(); 
if(isset($_SESSION["UserID"])){}
else{
	header('Location: LogIn.php');
	}
?>
<?php
 
if(isset($_POST['Calculate'])){
	
	$blo=$_POST['Tos'];
	$Date=$_POST['Date'];
	$result=$con->query("Select * from blo where BLOAreaCode='$blo' ");
	$row= $result->fetch_array(MYSQLI_BOTH);
	session_start();
	$_SESSION["BloName"]=$row['BLOName'];
	$_SESSION["BloID"]=$row['BLOID'];
	$_SESSION["Date"]=$_POST['Date'];
	$BloName=$_SESSION["BloName"];
    $BloId=$_SESSION["BloID"];
    $Date=$_SESSION["Date"];
	$id=$_SESSION["UserID"];
    $sql=$con->query(" UPDATE usern SET BloName='$BloName', BloID='$BloId', Date='$Date' WHERE UserID='$id' ");
	
	header('Location:ShedPrint.php');
	
	}

?>

<!DOCTYPE html>
<head>
<title>Shedule Appointment</title>


<style>
label{
display:inline-block;
width:250px;
color:black;
}
.calc{
width:200px;
color:#4C0000;
padding:3px;
}

h1{
text-align:center;
font-weight: bolder;
background-color: white;;
width:auto;
padding:35px;
color:black;
font-size:500%;

}
#fee{
	color:black;
	font-weight: bold;
	font-size: 50px;
}
#rol{
	color:black;
	
	font-weight: bold;
	font-size: 50px;
}
#rock{
	margin-left:650px;
	margin-top: 5%;
	margin-right: 5%;
width:200px;
border: 3px solid black;
	background:light-blue;
	padding: 15px;
}
</style>
</head>
<body>
<h1>Shedule Appointment</h1>

<form method="POST" name="form1" id="rock">

<label>Area of Residence* : </label>
<select name="Tos" >
<option value="1">Borivali-Malad</option>
<option value="2">Goregoan-Andheri</option>
<option value="3">Vile-Parle-Khar</option>
<option value="4">Bandra-Matunga</option>
<option value="5">Dadar-Lower Parel</option>
<option value="6">Mahalaxmi-Grant Road</option>
<option value="7">Charni Road-Churchgate</option>
</select>
<br><br>

<label>Date* : </label>
<input type="date" name="Date" >

<br><br>

<center><input type="submit" value="Shedule" class="calc" name="Calculate"></center><br><br>
<span>Note : * is required field</span>

</form>
</body>
</html>
