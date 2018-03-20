<?php	
include("connection.php");
	$emaill=$_POST["maill"];
	echo $emaill;
	$pass=$_POST["password"];
	$sq="select * from login where email='$emaill'and password='$pass'";
	echo $sq;
	$result=mysqli_query($con,$sq);
     $num_row=mysqli_num_rows($result);
if($num_row==1)
{
	$row=mysqli_fetch_assoc($result);
	$_SESSION['emaill']=$row['email'];
	if($row['type']=='1')
	{
		$_SESSION['user']=$_POST["maill"];
		header('location:admin1.php');
		exit();
	}
	else if($row['type']=='2')
	{
		$_SESSION['user']=$_POST["maill"];		
		//echo "hi";
		header('location:admin1.php');
		exit();
	}
else if($row['type']=='0')
	{
		$_SESSION['user']=$_POST["maill"];		
		//echo "hi";
		header('location:admin1.php');
		exit();
}
}
	else{
		echo "invalid user";
	//	header('location:index.php');
	}	
?>