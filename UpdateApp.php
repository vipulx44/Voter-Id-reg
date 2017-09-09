<?php require 'Connections/Connections.php'; ?>

 <?php 
session_start(); 
if(isset($_SESSION["UserID"])){}
else{
	header('Location: Login.php');
	}
?>

<?php 
 
if(isset($_SESSION["af"])){}
else{
	?>
			
			<script>alert('Incorrect details');</script>
			
	<?php
	}
?>
<?php 

if(isset($_SESSION["af"])){}
else{
	header('Location: Account.php');
	}
?>

<?php
 $User = $_SESSION["UserID"];
 $result = $con->query("Select * from usern where UserID='$User'");
 $row = $result->fetch_array(MYSQLI_BOTH);
 $_SESSION["AF"]=$row['AF'];
 $_SESSION["TOA"]=$row['TOA'];
 $_SESSION["TOV"]=$row['TOV'];
 $_SESSION["AFname"]=$row['AFname'];
 $_SESSION["ALname"]=$row['ALname'];
 $_SESSION["Gender"]=$row['Gender'];
 $_SESSION["DOB"]=$row['DOB'];
 $_SESSION["COI"]=$row['COI'];
 $_SESSION["ET"]=$row['ET'];
 $_SESSION["EQ"]=$row['EQ'];
 $_SESSION["AddressP"]=$row['AddressP'];
 $_SESSION["AddressT"]=$row['AddressT'];
 $_SESSION["Mobile"]=$row['Mobile'];
 $_SESSION["Tno"]=$row['Tno'];
 

 ?>
 
 <?php
 
if(isset($_POST['Update'])){
	
	    $upa= $_POST['af'];
		$upb=$_POST['toa'];
		$upc=$_POST['top'];
		$upd=$_POST['name'];
        $upe= $_POST['sname'];
		$upf=$_POST['gen'];
		$upg=$_POST['DOB'];
		$uph=$_POST['cit'];
        $upi= $_POST['et'];
		$upj=$_POST['eq'];
		$upk=$_POST['address'];
		$upl=$_POST['paddress'];
        $upm= $_POST['Mnumber'];
		$upn=$_POST['Pnumber'];
		$v=$_SESSION["UserID"]; 
 
 $sql = $con->query("UPDATE user1 SET  AF='$upa',TOA='$upb',TOV='$upc',AFname='$upd',ALname='$upe',Gender='$upf',DOB='$upg',COI='$uph',ET='$upi',EQ='$upj',AddressT='$upk',AddressP='$upl',Mobile='$upm',Tno='$upn' WHERE  UserID='$v'");
 } 

?>


<!DOCTYPE html>
<html>
<head>
	<title>Application-Form</title>
<style>
div{
background: lightgrey;
text-align: left;
border: solid 4px black;
padding: 20px;
margin:20px;
}
label{

	text-align: left;
	display: inline-block;
	width:300px;
	color:red;
}
h1{
	text-align: center;
	font-weight: bolder;
	background: lightblue;
	width: 100;
	margin:0px;
	margin-bottom: 20px;
	height: 90px;	
	padding-top: 30px;
}
#demo{
	padding-left: 310px;
	color:red;
}
#demo1{
	padding-left: 310px;
	color:red;
}
#demo2{
	padding-left: 310px;
	color:red;
}
#demo3{
	padding-left: 310px;
	color:red;
}
#demo4{
	padding-left: 310px;
	color:red;
}
#demo5{
	padding-left: 310px;
	color:red;
}
</style>

<script type="text/javascript">
function flr()
{
var reg=/[A-z]/;
if (document.form.Applying_for.value == "")
{
document.getElementById("demo").innerHTML="This is a required field";
document.form.Applying_for.focus();
return false;	
}
if(!reg.test(document.form.Applying_for.value))
{
document.getElementById("demo").innerHTML="This field should only contain letters";
document.form.Applying_for.focus();
return false;	
}
if (document.form.name.value == "")
{
document.getElementById("demo1").innerHTML="This is a required field";
document.form.name.focus();
return false;	
}
if (document.form.sname.value == "")
{
document.getElementById("demo2").innerHTML="This is a required field";
document.form.sname.focus();
return false;	
}
if(!reg.test(document.form.name.value))
{
document.getElementById("demo1").innerHTML="This field should only contain letters";
document.form.name.focus();
return false;	
}
if(!reg.test(document.form.sname.value))
{
document.getElementById("demo2").innerHTML="This field should only contain letters";
document.form.sname.focus();
return false;	
}

reg=/^(?=.*[0-9]).{10}$/;
if (!reg.test(document.form.MNUMBER.value))
{
document.getElementById("demo4").innerHTML="Mobile Number should have 10 digits";
document.form.MNUMBER.focus();
return false;	
}

reg=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
if (!reg.test(document.form.email.value))
{
document.getElementById("demo5").innerHTML="Email invalid";
document.form.email.focus();
return false;	
}
}
</script>
</head>

<body>
<h1>APPLICATION FORM<br><h5>Update Procedure</h5></h1>

<div>
<form name="form" onsubmit="return(flr())" method="POST">
<fieldset>
<legend>Form Info</legend>
<br>
<label>APPLYING FOR : </label>&nbsp;&nbsp;&nbsp;<input type="text" name="af" id="af" value="<?php echo $_SESSION["AF"]; ?>" ><span id="demo"></span><br><br>
<label>TYPE OF APPLICATION : </label>&nbsp;&nbsp;&nbsp;<input type="radio" name="toa" value="Normal" checked> Normal <input type="radio" name="toa" value="Tatkaal">Tatkaal
<br>
<br>
<label>TYPE OF VOTER-ID : </label>&nbsp;&nbsp;&nbsp;<input type="radio" name="top" value="36" checked> 36 Pages <input type="radio" name="top" value="60">60 Pages
<br>
</fieldset>
<fieldset>
<legend>Applicant Info</legend>
<br>
<label>APPLICANT'S FIRST NAME : </label>&nbsp;&nbsp;&nbsp;<input type="text" name="name" value="<?php echo $_SESSION["AFname"]; ?>">
<span id="demo1"></span>
<br>

<br>
<label>SURNAME: </label>&nbsp;&nbsp;&nbsp;<input type="text" name="sname" value="<?php echo $_SESSION["ALname"]; ?>">
<span id="demo2"></span>
<br>

<br>
<label>GENDER : </label>&nbsp;&nbsp;&nbsp;<input type="radio" name="gen" value="Male" checked> MALE <input type="radio" value="Female" name="gen">FEMALE
<br>
<br>
<label>DATE OF BIRTH(DD/MM/YYYY) : </label>&nbsp;&nbsp;&nbsp;<input type="date" name="DOB" value="<?php echo $_SESSION["DOB"]; ?>">
<br>
<br>
<br>
</fieldset>
<fieldset>
<legend>General Info</legend>
<br>
<label>CITIZENSHIP OF INDIA BY : </label>&nbsp;&nbsp;&nbsp;<input type="text" name="cit" value="<?php echo $_SESSION["COI"]; ?>">
<br>
<br>
<label>EMPLOYMENT TYPE : </label>&nbsp;&nbsp;&nbsp;<input type="text" name="et" value="<?php echo $_SESSION["ET"]; ?>">
<br>
<br>
<label>EDUCATION QUALIFICAION : </label>&nbsp;&nbsp;&nbsp;<input type="text" name="eq" value="<?php echo $_SESSION["EQ"]; ?>">
<br>
<br>
<label>ADDRESS(Permanant) : </label>&nbsp;&nbsp;&nbsp;<input type="text" name="address" style="width:500px" value="<?php echo $_SESSION["AddressP"]; ?>">
<br>
<br>
<label>ADDRESS(Present) : </label>&nbsp;&nbsp;&nbsp;<input type="text" name="paddress" style="width:500px" value="<?php echo $_SESSION["AddressT"]; ?>">
<br>
<br>
<label>MOBILE NUMBER : </label>&nbsp;&nbsp;&nbsp;<input type="text" name="Mnumber" value="<?php echo $_SESSION["Mobile"]; ?>">
<span id="demo4"></span>
<br>
<br>
<label>TELEPHONE NUMBER : </label>&nbsp;&nbsp;&nbsp;<input type="text" name="Pnumber" value="<?php echo $_SESSION["Tno"]; ?>">
<br>
<br>
</fieldset>
<br>

<center><input type="Submit" name="Update" value="Update">&nbsp;&nbsp;
</form>
</div>
</body>
</html>