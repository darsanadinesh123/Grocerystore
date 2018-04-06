<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Courier Store A Corporate Business Bootstrap Responsive Website Template | Typography :: w3layouts</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Courier Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- css files -->
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/typo.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- /css files -->
<!-- font files -->
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700italic,700,800,800italic' rel='stylesheet' type='text/css'>
<link href="//fonts.googleapis.com/css?family=Exo+2:100,200,300,400,500,600,700,800,900" rel="stylesheet">
<!-- /font files -->
<!-- js files -->

<!-- /js files -->
</head>
<body>
<!-- navigation -->
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="index.php"><h1><span class="fa fa-diamond" aria-hidden="true"></span>Courier Store</h1></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
			<ul class="nav navbar-nav navbar-right">
				<li><a href="index.php">Home</a></li>
				<li><a href="about.php">About</a></li>
				<li><a href="service.php">Services</a></li>
				<li><a href="work.php">Our Work</a></li>
				<li><a href="process.php">Process</a></li>
				
				<li><a href="feedback.php">Feedback</a></li>
				<li><a href="contact.php">Contact</a></li>
				
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-lock" aria-hidden="true"></i> Login<b class="caret"></b></a>
					<div class="dropdown-menu">
						<div class="login-w3ls">
							<h3>Login To Your Account</h3>
							<form action="login1.php" method="post">
								<input type="text" name="maill" placeholder="Email as username" required />
								<input type="password" name="password" placeholder="Password" required> 
								<input type="submit" name="submit" value="Login">
								<a href="typo.php" >New user?</a>
							</form>
						</div>
					</div>
					
				</li>
				
			</ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>
<!-- navigation -->
<!-- banner section -->
<section class="inner-w3ls">
	<div class="container">
		<!--h2 class="text-center w3layouts w3 w3l agileinfo">Consignment</h2-->
		<h2 class="text-center w3layouts w3 w3l agileinfo">Find the right courier service.</h2>
	</div>
</section>
<!-- /banner section -->
<!-- typography page -->
<div class="Consignment">
			<!-- container-wrap -->
			</div>
	<!-- //services -->
	<!-- about -->
	<!-- model-video -->
	<html>
<head>
<title>REGISTRATION</title>

<style>
body {
background-color: lightblue;}
button
{
background-color: black;
font-weight: bold;
color:white;
height: 30px;
width: 75px;
 border-radius: 3px;
}
td
{
font-size:100%;
color:red;
}
th
{
font-size:250%;
color:black;
}

tr.spaceUnder>td {
  padding-bottom: 1em;
}

</style>
</head>
<body>
<form  method="post">
	<table border="0" width="35%" align="center"  >
	<th align="center" colspan="2">CUSTOMER REGISTRATION</th>
		<tr class="spaceUnder">
			<td>Customer name :</td>
			<td><input type="text" name="txtname" placeholder=Name class="form-control" ></td>
		
		</tr>
		<tr class="spaceUnder">
		<td>Username :</td>
			<td><input type="text"  name="txtuname" placeholder=Username class="form-control"  ></td>
		</tr>
		<tr class="spaceUnder">
				<td>Password :</td>
			<td><input type="password"  name="txtpwd" placeholder=Password class="form-control"></td>
		</tr>
		<tr class="spaceUnder">
			<td>Gender</td>
			<td><input type="radio" name="gender" value="Male"> Male
			<input type="radio" name="gender" value="Female"> Female
			</td>
		</tr>
		<tr class="spaceUnder">
		<td>Address :</td>
			<td><textarea rows="5" col="20" placeholder="Address" name="address" class="form-control"></textarea></td>
		</tr>
		<tr class="spaceUnder">
		<td> Email id :</td>
			<td><input type="text"  name="txtemail" placeholder=E_mail class="form-control" ></td>
		</tr>
		<tr class="spaceUnder">
		<td>Contact No :</td>
			<td><input type="text"  name="txtcnctno" placeholder=Contact_No class="form-control" ></td>
		</tr>
		<tr class="spaceUnder">
		<td>Branch :</td>
		<td>
		<select name="bid" class="form-control">
		<?php
		$con= mysqli_connect("localhost","root","","newdb");
    $query = "SELECT * FROM `tbl_branchreg`";
    $result = mysqli_query($con,$query);
    while($row=mysqli_fetch_assoc($result))
	{                                                 
       echo "<option value='".$row['BRANCH_ID']."'>".$row['PLACE']."</option>";
    }
?>
         </select>
		</td>
		</tr>
		<tr class="spaceUnder">
		<td> </td>
		
		
	 <td><button type="submit"  name="btnsave" value="SAVE">SAVE</BUTTON>
			<button type="reset"  name="reset" value="CANCEL">CANCEL </BUTTON></td>
		</tr>
		<tr class="spaceUnder">
		
		 <td align="center" colspan="4" ></td>
		 </tr><tr></tr>
		 
		 <?php 
if(isset($_POST["btnsave"]))
{
$con= mysqli_connect("localhost","root","","newdb");
			$a=$_POST["txtname"];
			$b=$_POST["txtuname"];
			$c=$_POST["txtpwd"];
			$d=$_POST["gender"];
			$e=$_POST["address"];
			$f=$_POST["txtemail"];
			$g=$_POST["txtcnctno"];
				$h=$_POST["bid"];
			$sql="select * from tbl_customerreg where username='$b' ";
			
			$result=mysqli_query($con,$sql);
			if(mysqli_num_rows($result)>0)
			{
			//echo "Sorry the user is already exist!!";
			}
			else
			{
			$sql="insert into tbl_customerreg(cust_name,username,password,gender,address,email,mobno,branchid)values('$a','$b','$c','$d','$e','$f','$g','$h')";
			//echo $sql;
			mysqli_query($con,$sql);
			//echo "Sucessfully inserted!!";
			//header('Location: login1.php');
			}
			
			$ii ="2";
            $sy= "insert into tbl_customerreg(cust_name,username,password,gender,address,email,mobno,branchid)values('$a','$b','$c','$d','$e','$f','$g','$h')";
			$ss=mysqli_query($con,$sy);
			//echo $sy;
			$yh="INSERT INTO `login`(`email`, `password`, `type`) VALUES ('$f','$c',$ii)";
			$yy=mysqli_query($con,$yh);
			//echo $yh;
			//header('Location: login1.php');
}
		?>
			
			}
			
			
			
			?>
			</td>
			</tr>
	</table>
</form>
</body>
</html>
	<!-- //typography -->
<!-- footer section -->
<section class="footer-agileits">
	<div class="container">
		<div class="col-lg-3 col-md-3 col-sm-6">
			<h3>More Info</h3>
			<ul class="info-links">
				<li><a href="about.html"><i class="fa fa-hand-o-right" aria-hidden="true"></i> About Us</a></li>
				<li><a href="contact.html"><i class="fa fa-hand-o-right" aria-hidden="true"></i> Contact Us</a></li>
				<li><a href="icons.html"><i class="fa fa-hand-o-right" aria-hidden="true"></i> Icons</a></li>
				<li><a href="privacy.html"><i class="fa fa-hand-o-right" aria-hidden="true"></i> Privacy Policy</a></li>
			</ul>
		</div>
		<div class="col-lg-3 col-md-3 col-sm-6">
			<h3>Our Links</h3>
			<ul class="footer-links">
				<li><a href="service.html"><i class="fa fa-hand-o-right" aria-hidden="true"></i> Our Services</a></li>
				<li><a href="work.html"><i class="fa fa-hand-o-right" aria-hidden="true"></i> Our Work</a></li>
				<li><a href="process.html"><i class="fa fa-hand-o-right" aria-hidden="true"></i> Process</a></li>
				<li><a href="typo.html"><i class="fa fa-hand-o-right" aria-hidden="true"></i> Consignment</a></li>
			</ul>
		</div>
		<div class="col-lg-3 col-md-3 col-sm-6">
			<h3>Contact Info</h3>
			<div class="contact-info">
				<div class="address">	
					<i class="glyphicon glyphicon-globe"></i>
					<p class="p3">77 Jack Street</p>
					<p class="p4">Chicago, USA</p>
				</div>
				<div class="phone">
					<i class="glyphicon glyphicon-phone-alt"></i>
					<p class="p3">+1 515 151515</p>
					<p class="p4">+00 1010101010</p>
				</div>
				<div class="email-info">
					<i class="glyphicon glyphicon-envelope"></i>
					<p class="p5"><a href="mailto:myemail1@example.com">myemail1@example.com</a></p> 
					<p class="p6"><a href="mailto:myemail2@example.com">myemail2@example.com</a></p>
				</div>
			</div>
		</div>
		<div class="col-lg-3 col-md-3 col-sm-6">
			<h3>Subscribe Us</h3>
			<div class="subscribe">
				<form action="#" method="post">
					<div class="form-group">
						<input type="email" name="email2" class="form-control" id="inputEmail1" placeholder="Email">
					</div>
					<div class="form-group">
						<input type="text" name="user" class="form-control" id="text1" placeholder="Your Name">
					</div>
					<div class="form-group">
						<button type="submit" class="btn-outline">Subscribe</button>
					</div>
				</form>
			</div>	
			<ul class="social-icons2">
				<li><a href="#"><i class="fa fa-facebook"></i></a></li>
				<li><a href="#"><i class="fa fa-twitter"></i></a></li>
				<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
				<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
			</ul>
		</div>
		<div class="clearfix"></div>
		<hr>
		<p class="copyright">© 2016 Courier Store. All Rights Reserved | Design by <a href="https://w3layouts.com/" target="_blank">W3layouts</a></p>
	</div>
</section>
<!-- /footer section -->
<a href="#0" class="cd-top">Top</a>
<!-- js files -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/SmoothScroll.min.js"></script>
<script src="js/index.js"></script>
<script src="js/top.js"></script> 
<!-- /js files -->
</body>
</html>