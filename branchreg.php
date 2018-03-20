<html>
<head>
<title>Courier Store A Corporate Business Bootstrap Responsive Website Template | Service :: w3layouts</title>
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
				<li><a href="addofficer.php">Add New Officer</a></li>
				<li class="active"><a href="branchreg.php">Add New Branche</a></li>
			
				<li><a href="report.php">Reports</a></li>
				<li><a href="statusupdate.php">Status Update</a></li>
				
				<li><a href="logout.php">Logout</a></li>
				
			
				<!--<li class="dropdown">
				
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-lock" aria-hidden="true"></i> Logout<b class="caret"></b></a>
					<div class="dropdown-menu">
						<div class="login-w3ls">
							<h3>Login To Your Account</h3>
							<form action="#" method="post">
								<input type="text" name="email1" placeholder="Username or email" required />
								<input type="password" name='password' placeholder="Password" required> 
								<input type="submit" name="submit" value="Continue">
								<a href="typo.php" >New user?</a>
								
							</form>
						</div>
					</div>-->
				</li>
			</ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>
<!-- navigation -->
<!-- banner section -->
<section class="inner-w3ls">
	<div class="container">
		<h2 class="text-center w3 w3l agileinfo wthree">Courier Store Services</h2>
		
	</div>
	
</section>
<!-- /banner section -->

		<!-- START THE FEATURETTES -->
		
	


<html>
<head> <center>BRANCH REGISTRATION</center></head>
<body>
<form method="post">
<table border="2" cellspacing="3" cellpadding="3" align="center">
<TR>
<TH>BRANCH
<th>PLACE

<th>STATE

<th>COUNTRY

<TH>CONTACT_NO</tr>
<tr>
<td><input type="text" name="txtbranch"></td>
<td><input type="text" name="txtplc"></td>
<td><input type="text" name="txtstate">

<td><input type="text" name="txtcntry"></td>
<td><input type="text" name="txtcnctno"></td>

</tr>
<tr><td><input type="submit" name="submit"></tr>
</table>
</form>
<?php 
if(isset($_POST["submit"]))
{
$con= mysqli_connect("localhost","root","","newdb");



			$a=$_POST["txtplc"];
			$b=$_POST["txtstate"];
			$c=$_POST["txtcntry"];
			$d=$_POST["txtcnctno"];
			$e=$_POST["txtbranch"];
			$sql="select * from tbl_branchreg where PLACE='$a'";
			$result=mysqli_query($con,$sql);
			if(mysqli_num_rows($result)>0)
			{
			echo "Sorry the user is already exist!!";
			}
			else
			{
			$sq="insert into tbl_branchreg(PLACE,STATE,COUNTRY,CONTACT_NO,BRANCH)values('$a','$b','$c','$d','$e')";
			mysqli_query($con,$sq);
			//echo $sq;
			echo "Sucessfully inserted!!";
			header('Location:admin1.php');
			}
			}
			?>
			


</body>
</html>			