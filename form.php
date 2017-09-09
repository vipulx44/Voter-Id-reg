<?php require 'Connections/Connections.php'; ?>
<?php
	
	if(isset($_POST['Submit'])){
		
		session_start();
		$a= $_POST['af'];
		$b=$_POST['toa'];
		$c=$_POST['top'];
		$d=$_POST['name'];
        $e= $_POST['sname'];
		$f=$_POST['gen'];
		$g=$_POST['DOB'];
		$h=$_POST['cit'];
        $i= $_POST['et'];
		$j=$_POST['eq'];
		$k=$_POST['address'];
		$l=$_POST['paddress'];
        $m= $_POST['Mnumber'];
		$n=$_POST['Pnumber'];
		$v=$_SESSION["UserID"];
		$_SESSION["af"]=$a;
		$date=getdate();
		$sql=$con->query("UPDATE usern SET   AF='$a',TOA='$b',TOV='$c',AFname='$d',ALname='$e',Gender='$f',DOB='$g',COI='$h',ET='$i',EQ='$j',AddressT='$k',AddressP='$l',Mobile='$m',Tno='$n' WHERE  UserID='$v'");
		header('Location:Shed.php');
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
<h1>APPLICATION FORM</h1>
<div>
<form name="form" onsubmit="return(flr())" method="POST">
<fieldset>
<legend>Form Info</legend>
<br>
<label>APPLYING FOR : </label>&nbsp;&nbsp;&nbsp;<input type="text" name="af" id="af" ><span id="demo"></span><br><br>
<label>TYPE OF APPLICATION : </label>&nbsp;&nbsp;&nbsp;<input type="radio" name="toa" value="Normal" checked> Normal <input type="radio" name="toa" value="Tatkaal">Tatkaal
<br>
<br>
<label>TYPE OF VOTER-ID : </label>&nbsp;&nbsp;&nbsp;<input type="radio" name="top" value="36" checked> 36 Pages <input type="radio" name="top" value="60">60 Pages
<br>
</fieldset>
<fieldset>
<legend>Applicant Info</legend>
<br>
<label>APPLICANT'S FIRST NAME : </label>&nbsp;&nbsp;&nbsp;<input type="text" name="name">
<span id="demo1"></span>
<br>

<br>
<label>SURNAME: </label>&nbsp;&nbsp;&nbsp;<input type="text" name="sname">
<span id="demo2"></span>
<br>

<br>
<label>GENDER : </label>&nbsp;&nbsp;&nbsp;<input type="radio" name="gen" value="Male" checked> MALE <input type="radio" value="Female" name="gen">FEMALE
<br>
<br>
<label>DATE OF BIRTH(DD/MM/YYYY) : </label>&nbsp;&nbsp;&nbsp;<input type="date" name="DOB">
<br>
<br>
<br>
</fieldset>
<fieldset>
<legend>General Info</legend>
<br>
<label>CITIZENSHIP OF INDIA BY : </label>&nbsp;&nbsp;&nbsp;<input type="text" name="cit">
<br>
<br>
<label>EMPLOYMENT TYPE : </label>&nbsp;&nbsp;&nbsp;<input type="text" name="et">
<br>
<br>
<label>EDUCATION QUALIFICAION : </label>&nbsp;&nbsp;&nbsp;<input type="text" name="eq">
<br>
<br>
<label>ADDRESS(Permanant) : </label>&nbsp;&nbsp;&nbsp;<input type="text" name="address" style="width:500px">
<br>
<br>
<label>ADDRESS(Present) : </label>&nbsp;&nbsp;&nbsp;<input type="text" name="paddress" style="width:500px">
<br>
<br>
<label>MOBILE NUMBER : </label>&nbsp;&nbsp;&nbsp;<input type="text" name="Mnumber">
<span id="demo4"></span>
<br>
<br>
<label>TELEPHONE NUMBER : </label>&nbsp;&nbsp;&nbsp;<input type="text" name="Pnumber">
<br>
<br>
</fieldset>
<br>

<center><input type="Submit" name="Submit" value="Submit">&nbsp;&nbsp;<input type="reset" name="Reset"></center>
</form>
</div>
</body>
</html>