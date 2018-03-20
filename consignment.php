
<!DOCTYPE html>
<html>
<head>
<title>Courier Store A Corporate Business Bootstrap Responsive Website Template | Icons :: w3layouts</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Courier Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>

<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/jQuery.lightninBox.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/icons.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />

<link href='https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css' rel='stylesheet'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700italic,700,800,800italic' rel='stylesheet' type='text/css'>
<link href="//fonts.googleapis.com/css?family=Exo+2:100,200,300,400,500,600,700,800,900" rel="stylesheet">

<!-- js files -->

<!-- /js files -->
</head>
<body>

<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="index.html"><h1><span class="fa fa-diamond" aria-hidden="true"></span>Courier Store</h1></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
			<ul class="nav navbar-nav navbar-right">
				<li><a href="index.html">Home</a></li>
				<li><a href="about.html">About</a></li>
				<li><a href="service.html">Services</a></li>
				<li><a href="work.html">Our Work</a></li>
				<li><a href="process.html">Process</a></li>
				<li><a href="consignment.php">Consignment</a></li>
				<li><a href="contact.html">Contact</a></li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-truck" aria-hidden="true"></i> Track Order<b class="caret"></b></a>
					<div class="dropdown-menu">
						<div class="track-w3ls">
							<h3>Enter Your Tracking Code</h3>
							<form action="process.html" method="post">
								<input type="text" name="trackcode" placeholder="Enter Tracking Code" required />
								<button type="submit" class="btn btn-primary">Track</button>
							</form>
							<p class="track-p1">Contact Us :</p>
							<p class="track-p2"><a href="mailto:mail@example.com">mail@example.com</a></p>
						</div>
					</div>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-lock" aria-hidden="true"></i> Login<b class="caret"></b></a>
					<div class="dropdown-menu">
						<div class="login-w3ls">
							<h3>Login To Your Account</h3>
							<form action="login.php" method="post">
								<input type="text" name="email1" placeholder="Username or email" required />
								<input type="password" name='password' placeholder="Password" required> 
								<input type="submit" name="submit" value="Continue">
								<a href="typo.php" >New user?</a>
							</form>
						</div>
					</div>
				</li>
			</ul>
        </div>
    </div>
</nav>

<section class="inner-w3ls">
	<div class="container">
		<h2 class="text-center">Consignment Page</h2>
		<p class="text-center">Register for the best courier services.</p>
	</div>
</section>

	<div class="icons main-grid-border">
		<div class="container">
			<div class="grid_3 grid_4">
						<div class="icons">
							
									
									
									<?php 
$con= mysqli_connect("localhost","root","","newdb");
	$sql="select * from tbl_consignreg ";
							$res=mysqli_query($con,$sql);
				
			if (mysqli_num_rows($res)>0)
			{
			$sql="select max(CONSIGN_ID)+1 cid from tbl_consignreg ";
							$res=mysqli_query($con,$sql);
							$row=mysqli_fetch_assoc($res);

							$n=$row["cid"];
			}
			else
			{
				$n=1;
			}

?>

<html>
<head>
<title>REGISTRATION</title>


</head>
<body >
<form  method="post">

<table border="0" width="100%" align="center" >
		<th align="center" colspan="2">CONSIGNMENT REGISTRATION</th>
		<tr>
			<td>Consignment no :</td>
			<td><input type="text" class="form-control" name="cno" value="<?php echo $n;?>" ></td>
		
		</tr>
		<tr>
			<td>Consignment date:</td>
			<td><input type="date"  name="cdate" ></td>
		</tr>
		
		<tr>
			<td colspan="2"><input type="radio" name="type" value="National">National
			<input type="radio"  name="type" value="International">International
			</td>
		</tr>
		<tr>
			<td colspan="2">From ,<td/> <td colspan="4"> To, </td> 
		</tr>		
		<tr>
			<td>Branch :</td>
			<td>
				<select class="form-control" name="fbranchid" >
					<option value="0">--Select--</option>
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
			<td>Country :</td>
			<td>
				<select class="form-control" name="tcontryid" >
					<option value="0">--Select--</option>
						<?php
							$con= mysqli_connect("localhost","root","","newdb");
							$query = "SELECT * FROM `tbl_branchreg`";
							$result = mysqli_query($con,$query);
							while($row=mysqli_fetch_assoc($result))
							{                                                 
							   echo "<option value='".$row['BRANCH_ID']."'>".$row['COUNTRY']."</option>";
							}
						?>
			 </select>
			</td>
			<td>Address :</td>
			<td><textarea rows="5" col="20" class="form-control" name="address" placeholder=Address></textarea></td>
		</tr>
		<tr>
			<td>State :</td>
			<td>
				<select class="form-control" name="fstateid" >
					<option value="0">--Select--</option>
						<?php
							$con= mysqli_connect("localhost","root","","newdb");
							$query = "SELECT * FROM `tbl_branchreg`";
							$result = mysqli_query($con,$query);
							while($row=mysqli_fetch_assoc($result))
							{                                                 
							   echo "<option value='".$row['BRANCH_ID']."'>".$row['STATE']."</option>";
							}
						?>
				</select>
		</td>
		<td>State :</td>
			<td>
				<select class="form-control" name="tstateid" >
					<option value="0">--Select--</option>
						<?php
							$con= mysqli_connect("localhost","root","","newdb");
							$query = "SELECT * FROM `tbl_branchreg`";
							$result = mysqli_query($con,$query);
							while($row=mysqli_fetch_assoc($result))
							{                                                 
							   echo "<option value='".$row['BRANCH_ID']."'>".$row['STATE']."</option>";
							}
						?>
				</select>
			</td>
			<td>Pin Code :</td>
			<td><input type="text"  class="form-control" name="txtPin" placeholder=Pin Code ></td>
		</tr>
		<tr>
			<td>Country :</td>
			<td>
				<select name="fcontryid" class="form-control" >
					<option value="0" >--Select--</option>
						<?php
							$con= mysqli_connect("localhost","root","","newdb");
							$query = "SELECT * FROM `tbl_branchreg`";
							$result = mysqli_query($con,$query);
							while($row=mysqli_fetch_assoc($result))
							{                                                 
							   echo "<option value='".$row['BRANCH_ID']."'>".$row['COUNTRY']."</option>";
							}
						?>
			 </select>
			</td>
			<td>Branch :</td>
			<td>
				<select name="tbranchid" class="form-control" >
					<option value="0">--Select--</option>
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
			<td>Phone No :</td>
			<td><input type="text" class="form-control" name="txtPhone" placeholder=Phone No ></td>
		</tr>
		<tr>
		<td >mode :</td>
					<td><select name="mtype" class="form-control">
					<option value="0">--Select--</option>
						<option value="Admin" selected>Air</option>
						<option value="Staff">Water</option>
						<option value="Customer">Road</option></td>
					</select></td>
				</tr>
				<tr>
				<td>Weight :</td>
				<td><input type="text" class="form-control" name="txtweight" placeholder=Weight >Kg</td>
				<td>Grand total :</td>
				<td align="center"><input type="text" class="form-control" name="txtgtotal" placeholder=Total ></td>
				<td align="center"> <button type="submit"  name="btnsave" value="SAVE">SAVE</BUTTON></td>
			<td><button type="reset"  name="reset" value="CANCEL">CANCEL </BUTTON></td>
		</tr>
			
					<tr>
		 <td align="center" colspan="2" ><?php 
if(isset($_POST["btnsave"]))
{
$con= mysqli_connect("localhost","root","","newdb");
			
			
			$cn=$_POST["cno"];
			$a=$_POST["cdate"];
			$b=$_POST["type"];
			$c=$_POST["fbranchid"]; 
			$d=$_POST["fstateid"];
			$e=$_POST["fcontryid"];
			$f=$_POST["tcontryid"];
			$g=$_POST["tstateid"];
			$h=$_POST["tbranchid"];
			$i=$_POST["address"];
			$j=$_POST["txtPin"];
			$k=$_POST["txtPhone"];
			$l=$_POST["txtweight"];
			$m=$_POST["txtgtotal"];
			$md=$_POST["mtype"];
			echo $c."<br/>";
			$sql="INSERT INTO `tbl_consignreg`(`CONSIGN_DATE`, `TRANCE_TYPE`, `FBRANCH`, `FSTATE`, `FCOUNTRY`, `TCOUNTRY`, `TSTATE`, `TBRANCH`, `ADDRESS`, `PINCODE`, `MOBNO`, `WEIGNT`, `GTOTAL`, `MODE`) VALUES('$a','$b','$c','$d','$e','$f','$g','$h','$i','$j','$k','$l','$m','$md')";
			//echo $sql;
			mysqli_query($con,$sql);
			//echo $sql;
			echo "Sucessfully inserted!!";
			//header('Location: login.php');
			
			}
			?>
			</td>
			</tr>
				
		</table>	
	
</form>
</body>
</html>
									
								  </div>

								</section>
							<div class="section group">
									
							</div> 
						</div>
					

		</div>	
	</div>
<!-- /icons -->
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
				<li><a href="typo.html"><i class="fa fa-hand-o-right" aria-hidden="true"></i> Typography</a></li>
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