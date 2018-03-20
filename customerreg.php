<?php 
	$con= mysqli_connect("localhost","root","","newdb");
    $query = "SELECT * FROM `tbl_branchreg`";
    $result = mysqli_query($con,$query);
    while($row=mysqli_fetch_assoc($result))
	{                                                 
       echo "<option value='".$row['BRANCH_ID']."'>".$row['PLACE']."</option>";
    }
 

if(isset($_POST["btnsave"]))
{
$con= mysqli_connect("localhost","root","","newdb");
			$a=$_POST["txtname"];
		//	$b=$_POST["txtuname"];
			$c=$_POST["txtpwd"];
			$d=$_POST["gender"];
			$e=$_POST["address"];
			$f=$_POST["txtemail"];
			$g=$_POST["txtmobno"];
			$h=$_POST["bid"];
			$sql1="select * from tbl_customerreg where username='$b' ";
			$result=mysqli_query($con,$sql);
			if(mysqli_num_rows($result)>0)
			{
			echo "Sorry the user is already exist!!";
			}
			else
			{
			$sql="insert into tbl_customerreg(cust_name,password,gender,address,email,mobno,branchid)values('$a','$c','$d','$e','$f','$g','$h')";
			mysqli_query($con,$sql);
			echo "Sucessfully inserted!!";
			header('Location: login1.php');
			}
			}
			?>