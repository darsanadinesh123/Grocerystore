<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Courier Store A Corporate Business Bootstrap Responsive Website Template | Contact :: w3layouts</title>
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
				
				
				
				<li class="active"><a href="complaints.php">Complaints</a></li>
				
				<li><a href="logout.php">Logout</a></li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-truck" aria-hidden="true"></i> Track Order<b class="caret"></b></a>
					<div class="dropdown-menu">
						<div class="track-w3ls">
							<h3>Enter Your Consignment No.</h3>
							<form action="statusview.php" method="post">
								<input type="text" name="trackcode" placeholder="Enter Consignment No." required />
								<button type="submit" class="btn btn-primary">Track</button>
							</form>
							
							<p class="track-p1">Contact Us :</p>
							<p class="track-p2"><a href="mailto:mail@example.com">mail@example.com</a></p>
						</div>
					
						</li>
						
					</div>
				
			</ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>
<!-- navigation -->
<!-- banner section -->
<section class="inner-w3ls">
	<div class="container">
		<h2 class="text-center w3 w3l agileinfo wthree">Be In Touch With Us</h2>
		
	</div>
</section>
<!-- /banner section -->

<!-- contact section -->
<section class="contact-w3ls">
	<div class="container">
		<i class="fa fa-compass" aria-hidden="true"></i>
		<h3 class="text-center">Write To Us</h3>
		
		
			<form action="complaints.php" method="post" name="sentMessage" id="contactForm" novalidate>
                <div class="col-lg-6 col-md-6 col-sm-6 contact-agile1">    
					<div class="control-group form-group">
                        <div class="controls">
                            <label class="contact-p1">Full Name:</label>
                            <input type="text" class="form-control" name="name" id="name" required data-validation-required-message="Please enter your name.">
                            <p class="help-block"></p>
                        </div>
                    </div>	
                    <div class="control-group form-group">
                        <div class="controls">
                            <label class="contact-p1">Phone Number:</label>
                            <input type="tel" class="form-control" name="phone" id="phone" required data-validation-required-message="Please enter your phone number.">
							<p class="help-block"></p>
						</div>
                    </div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6 contact-agile2">
                    <div class="control-group form-group">
                        <div class="controls">
                            <label class="contact-p1">Email Address:</label>
                            <input type="email" class="form-control" name="email" id="email" required data-validation-required-message="Please enter your email address.">
							<p class="help-block"></p>
						</div>
                    </div>
					<div class="control-group form-group">
                        <div class="controls">
                            <label class="contact-p1">Subject:</label>
                            <input type="text" class="form-control" name="subject" id="subject" required data-validation-required-message="Please enter Subject.">
                            <p class="help-block"></p>
                        </div>
                    </div>
				</div>
				<div class="col-lg-12">	
                    <div class="control-group form-group">
                        <div class="controls">
                            <label class="contact-p1">Message:</label>
                            <textarea rows="10" cols="100" class="form-control" name="message" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
							<p class="help-block"></p>
                        </div>
                    </div>
                    <div id="success"></div>
                    <!-- For success/fail messages -->
                    <button type="submit" name="btnsubmit" class="btn btn-primary">Send Message</button>
				</div>
				<div class="clearfix"></div>

<?php 

$con= mysqli_connect("localhost","root","","newdb");
			
			
		if(isset($_POST["btnsubmit"]))
		
	{
		//echo "hi";
			$a=$_POST["name"];
		
			$h=$_POST["email"];
				$b=$_POST["phone"];
			$c=$_POST["subject"];
			$d=$_POST["message"];
			
			$sql="INSERT INTO tbl_contact(name, email, phone, subject, message) VALUES('$a','$h','$b','$c','$d')";
			mysqli_query($con,$sql);
			//echo $sql;
			//echo "Sucessfully inserted!!";
			//header('Location: index.php');
	}
			?>
			
				
            </form>            
       	
	</div>	
</section>			
<!-- /contact section -->
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
				<li><a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
				<li><a href="https://twitter.com/login/error?username_or_email=darsanadinesh28%40gmail.com&redirect_after_login=%2Fhcltech#"><i class="fa fa-twitter"></i></a></li>
				<li><a href="https://www.linkedin.com/"><i class="fa fa-linkedin"></i></a></li>
				<li><a href="https://accounts.google.com/ServiceLogin/signinchooser?passive=1209600&osid=1&continue=https%3A%2F%2Faboutme.google.com%2Fu%2F0%2F%3Freferer%3Dgplus&followup=https%3A%2F%2Faboutme.google.com%2Fu%2F0%2F%3Freferer%3Dgplus&flowName=GlifWebSignIn&flowEntry=ServiceLogin"><i class="fa fa-google-plus"></i></a></li>
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
<!--script src="js/jquery.min.js"></script-->
<script src="js/bootstrap.min.js"></script>
<script src="js/SmoothScroll.min.js"></script>
<script src="js/index.js"></script>
<script src="js/top.js"></script>
<script src="js/jqBootstrapValidation.js"></script>
<script src="js/contact_me.js"></script>	 
<!-- /js files -->
</body>
</html>