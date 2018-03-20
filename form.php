<?php
if(isset($_POST["btnsave"]))
{
$con= mysqli_connect("localhost","root","","newdb");
			
			$sql="select * from tbl_consignreg ";
							$res=mysqli_query($con,$sql);
				
			if (mysqli_num_rows($res)>0)
			{
			$sql1="select max(CONSIGN_ID) from tbl_consignreg ";
							$res=mysqli_query($con,$sq1);
							$n=$res+1;
			}
			else
			{
				$n=1;
			}
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
			$sql="insert into tbl_consignreg(CONSIGN_ID,CONSIGN_DATE,TRANCE_TYPE,FBRANCH,FSTATE,FCOUNTRY,TCOUNTRY,TSTATE,TBRANCH,ADDRESS,PINCODE,PHNO,WEIGHT,GTOTAL)values('$n','$b','$c','$d','$e','$f','$g','$h','$i','$j','$k','$l','$m')";
			mysqli_query($con,$sql);
			//echo $sql;
			echo "Sucessfully inserted!!";
			?>