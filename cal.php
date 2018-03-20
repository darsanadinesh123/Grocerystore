
	

<html>
	<head>
	<link href="css/style.css" rel="stylesheet" type="text/css"  media="all" />
		<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
		 <script type="text/javascript" src="js/move-top.js"></script>
	      <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
		  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
		  <script type="text/javascript" src="js/jquery.easing.1.3.js"></script> 
		  <script type="text/javascript" src="js/move-top.js"></script>
		  <style>
		  body{
			  background-color: #93B874;
		  }
		 </style>
	</head>
	<body>
	<div class="main-header">
     		 		<div class="logo">
     		 			<h1><a href="index.html"><img src="image/logo11.png" title="logo" /></a></h1>
     		 		</div>
     		 		<div class="top-nav">
     		 			<ul>
     		 				<li class="active"><a href="index.html">Home</a></li>
     		 				<li><a href="candidate.php">Candidate Entry</a></li>
     		 				<li><a href="votersreg.php">Voters Entry</a></li>
     		 				<li><a href="party.php">Party Entry</a></li>
     		 				<li><a href="candidateviewlist.php">Candidate List</a></li>
							<li><a href="voterslist.php">Voters List</a></li>
     		 				
							<li><a href="changepass.html">Change password</a></li>
     		 				<div class="clear"> </div>
     		 			</ul>
     		 		</div>
     		 		<div class="clear"> </div>
     		 	</div>
				<?php
		$s1=$_POST["txtoldpass"];
	    $s2=$_POST["txtnewpass"];
	    $s3=$_POST["txtretypepass"];
			  include("connection.php");
			  $s=mysqli_query($con,"select * from admin where pass='$s1'");
			  $a=0;
			  while($row=mysqli_fetch_array($s))
			  {
			  $a++;
			  }
			  if($a==0)
			  echo "invalid old password";
			  else
			  {
			  $s="update admin set pass='$s2'";
			  mysqli_query($con,$s);
			  echo "<div style=margin:200px; align=center>";
			  echo "<marquee behavior=alternate width=80% hspace=10% ><font size=20 color=green align=center>Your Password Changed</font></marquee>";
			  echo "</div>";
			  }
?>
	</body>
</html>

changepass.php
Displaying changepass.php.