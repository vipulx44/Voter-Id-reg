﻿<?php require 'Connections/Connections.php'; ?>
<?php 
session_start(); 
if(isset($_SESSION["Fname"])){header('Location: Account.php');}
else{
	
	}
?>


<?php
	
	if(isset($_POST['Submit'])){
		
		session_start();
		$name= $_POST['user-name'];
		$email=$_POST['user-email'];
		$msg=$_POST['user-message'];
		$sql= $con->query("INSERT INTO comments(Name,Email,Comment)Values('{$name}','{$email}','{$msg}')");
		header('Location: vote.php');
		
		}
?>




<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>VOTER SYSTEM </title>
	
	<!-- Latest compiled and minified CSS -->
	 <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">

	<!-- Start WOWSlider.com HEAD section --> <!-- add to the <head> of your page -->
	<link rel="stylesheet" type="text/css" href="engine0/style.css" />
	<script type="text/javascript" src="engine0/jquery.js"></script>
	<!-- End WOWSlider.com HEAD section -->
	
	
	
	
	
	<!--<link rel="stylesheet" href="feecal.css" type= "text/css>-->
	
	
	
	
	
	
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



}
#fee{
	color:black;
	font-weight: bold;
	font-size: 80px;
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
width:400px;
border: 3px solid black;
	background:light-blue;
	padding: 15px;
}

</style>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	<script>
function cal()
{
var reg=document.form1.Pass.value;
var ch;
var fees;


fees=0;
if(reg == "Voter ID")
{
ch=Number(0);
fees=fees+50;
} 
else if(reg=="Identity-Certificate")
{
ch=Number(1);
fees=fees+25;
}
else 
{
ch=Number(2);
fees=fees+20;
}

reg=document.form1.Tos.value;

switch(ch)
{
	case 0: if(reg=="Fresh")
			{
				fees=fees+50;

			} 
			else
			{
				fees=fees+40;
			}
			break;
	case 1: if(reg=="Fresh")
			{
				fees=fees+40;
			} 
			else
			{
				fees=fees+45;
			}
			break;	
	case 2: if(reg=="Fresh")
			{
				fees=fees+40;
			} 
			else
			{
				fees=fees+30;
			}
			break;			
}

reg=document.form1.Age.value;
if(reg=="less-15" || reg=="15-18")
{
	fees=fees+100;
}
else
{
	fees=fees+150;
}
document.getElementById("fee").innerHTML=fees;
return false;
}
</script>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	</head>

	
	<body>

<nav class = "navbar navbar-inverse navbar-fixed-top" id="my-navbar">
	<div class = "container">
		<div class = "navbar-header">
			<button type = "button" class = "navbar-toggle" data-toggle= "collapse" data-target = "#navbar-collapse">
			<span class = "icon-bar"></span>
			<span class = "icon-bar"></span>
			<span class = "icon-bar"></span>
			<span class = "icon-bar"></span>
			<span class = "icon-bar"></span>
				</button>	
		   <a href="" class="navbar-brand">Election commission of India</a>
		 </div>
			<div class = "collapse navbar-collapse">
				<ul class = "nav navbar-nav" id ="navbar-collapse">
					<li><a href = "#home">HOME</a>
					<li><a href = "#instructions">INSTRUCTIONS</a>
					<li><a href = "#feecal">FEE CALCULATOR</a>
					<li><a href = "Login.php">LOGIN</a>
					<li><a href = "#about">CONTACTUS</a>
				</ul>
	</div>
</div>
</div>
</nav>

<div class = "jumbotron">
	<div style="position: absolute; left:200; top:82;">   <img src="displayimage.jpg"  			width="200" height="200"> </div>

		
	
		<div class = "container text-center">
		
			<h1>भारत निर्वाचन आयोग <br>Election Commision Of India</h1>

			<p> Proud to be a Voter. Ready to Vote!</p>

		</div>
 
	</div>
</div>
</div>



<div class="container">
  		<section>
  			<div class="page-header" id="home">


  				
  			</div>

  			<div class="row">
  				<div class="col-md-6">
  					<blockquote>
  						<p>Man's birthright is to choose a leader and for that he must vote and never ignore it</p>
  						<footer>Melvin Thomas</footer>
  					</blockquote>
  				</div>
  				
  				<div class="col-md-6">
  					<blockquote>
  						<p>Only Brilliant People can Make Brilliant Democracies.Please Vote!</p>
  						<footer>Vipul Sankhe</footer>
  					</blockquote>
  				</div>
  			</div>
  		</section>
		
  	






<div id="wowslider-container0">
<div class="ws_images"><ul>
		<li><img src="data0/images/1.jpg" alt="1" title="1" id="wows0_0"/></li>
		<li><img src="data0/images/voting.jpg" alt="voting" title="voting" id="wows0_1"/></li>
		<li><a href="http://wowslider.net"><img src="data0/images/ntional_voters_service_portal.png" alt="jquery slider" title="Ntional Voters' Service Portal" id="wows0_2"/></a></li>
		<li><img src="data0/images/googlemapmumbai.jpg" alt="googleMapMumbai" title="googleMapMumbai" id="wows0_3"/></li>
	</ul></div>
	<div class="ws_bullets"><div>
		<a href="#" title="1"><span><img src="data0/tooltips/1.jpg" alt="1"/>1</span></a>
		<a href="#" title="voting"><span><img src="data0/tooltips/voting.jpg" alt="voting"/>2</span></a>
		<a href="#" title="Ntional Voters' Service Portal"><span><img src="data0/tooltips/ntional_voters_service_portal.png" alt="Ntional Voters' Service Portal"/>3</span></a>
		<a href="#" title="googleMapMumbai"><span><img src="data0/tooltips/googlemapmumbai.jpg" alt="googleMapMumbai"/>4</span></a>
	</div></div><div class="ws_script" style="position:absolute;left:-99%"><a href="http://wowslider.com/vi">image slider</a> by WOWSlider.com v8.6</div>
<div class="ws_shadow"></div>
</div>	
<script type="text/javascript" src="engine0/wowslider.js"></script>
<script type="text/javascript" src="engine0/script.js"></script>

</div>
</div>





<br>
<br>
<br>

<div class="container">

  		<section>
  			<div class="page-header" id="instructions">
			<br>
<br>
<br>
  			</div>


  			<p>India has an asymmetric federal government, with elected officials at the federal, state and local levels. At the national level, the head of government, prime minister, is elected by members of the Lok Sabha, the lower house of the parliament of India.[1] The elections are conducted by the Election Commission of India. All members of the Lok Sabha, except two who can be nominated by the President of India, are directly elected through general elections which take place every five years, in normal circumstances, by universal adult suffrage.[2] Members of the Rajya Sabha, the upper house of the Indian parliament, are elected by elected members of the legislative assemblies of the states and the Electoral college for the Union Territories of India.[3]
2014 general elections involved an electorate of 81.45 crore people (larger than both EU and US elections combined).[4][5] Declared expenditure has trebled since 1989 to almost $300 million, using more than one million electronic voting machines.[6] The size of the huge electorate mandates that elections be conducted in a number of phases (there were nine phases in the 2014 general election). It involves a number of step-by-step processes from announcement of election dates to the announcement of results paving the way for the formation of the new government.</p>
	</section>
		</div></div></div>
<br>
<br>
<br>





<div class ="container>

	<section >
		<div class = "page-header" id = "feecal">
		</div>
		<form onsubmit="return cal()" name="form1" id="rock">
<label>Select Application Type* : </label>
<select name="Pass" >
<option value="Voter">Voter ID</option>

</select id="tos" ><br><br>
<label>Type of Service* : </label>
<select name="Tos" >
<option value="Fresh">Fresh	</option>
<option value="Re-Issue">Re-Issue</option>

</select><br><br>
<label>Applicant's Age* : </label>
<select id="Age" >
<option value="less-15">Less than 15 years</option>
<option value="15-18">Between 15 and 18 years </option>
<option value="18-30" selected>Above 18 years</option>
</select><br><br>
<center><input type="submit" value="Calculate fee" class="calc"></center><br><br>
<center><span id="rol">&#8377;</span><span id="fee"></span`><br><br></center>
<span>Note : * is required field</span>

</form></center>
   </section>
   </div>




		<div class="container">
    <section>
      <div class="page-header" id="about">
          <h2>Contact Us.</h2>
        </div>

        <div class="row">
          <div class="col-lg-4">
            <p>Send us a message, or contact us from the address below</p>


            <address>
              <strong>PMO</strong></br>
              Prime Minister's Office</br>
 South Block, Raisina Hill</br>
 New Delhi-110011</br>
 Phone No: +91-11-23012312</br>
 Fax: +91-11-23019545, 23016857</br>
 F: https://www.facebook.com/narendramodi</br>
 T: https://twitter.com/narendramodi </br>
              
            </address>
          </div>
          
          <div class="col-lg-8">
          <center>  <form action="" class="form-horizontal" method="POST">
              <div class="form-group">
                <label for="user-name" class="col-lg-2 control-label">Name</label>
                <div class="col-lg-10">
                  <input type="text" class="form-control" id="user-name" name="user-name" placeholder="Enter you name">
                </div>
              </div>

              <div class="form-group">
                <label for="user-email" class="col-lg-2 control-label">Email</label>
                <div class="col-lg-10">
                  <input type="text" class="form-control" id="user-email" name="user-email" placeholder="Enter you Email Address">
                </div>
              </div><!-- End form group -->

              

              <div class="form-group">
                <label for="user-message" class="col-lg-2 control-label">Message</label>
                <div class="col-lg-10">
                  <textarea name="user-message" id="user-message" name="user-message" class="form-control" 
                  cols="20" rows="10" placeholder="Enter your Message"></textarea>
                </div>
              </div><!-- End form group -->

              <div class="form-group">
                <div class="col-lg-10 col-lg-offset-2">
                  <input type="Submit" class="btn btn-primary" name="Submit" id="Submit" value="Submit">
                </div>
              </div>

             

            </form></center>
          </div>
        </div><!-- End the row -->

    </section>
  </div>


















<script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
	<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>	
</html>