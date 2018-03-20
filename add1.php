<?php 

$con= mysqli_connect("localhost","root","","newdb");
			
			
			$cn=$_POST["id"];
			$a=$_POST["Shippername"];
			$b=$_POST["Shipperphone"];
			$c=$_POST["Shipperaddress"]; 
			$d=$_POST["Receivername"];
			$e=$_POST["Receiverphone"];
			$f=$_POST["Receiveraddress"];
			$g=$_POST["Consignmentno"];
			$h=$_POST["Shiptype"];
			$i=$_POST["Weight"];
			$j=$_POST["Qnty"];
			$k=$_POST["Bookingmode"];
			$n=$_POST["Totalfreight"];
			$o=$_POST["Mode"];
			$p=$_POST["Depttime"];
			$q=$_POST["Destination"];
			$r=$_POST["Pickupdate"];
			$t=$_POST["Pickuptime"];
			$u=$_POST["Comments"];
			echo $c."<br/>";
			$sql="INSERT INTO tbl_checkaddcour(id,shippername, phone, address, receivername, raddress, consignmentno, typeship, weight, invoiceno, qnty, bookingmode, freight, mode, depttime, destoffice, pickdate, picktime, comments) VALUES('$cn','$a','$b','$c','$d','$e','$f','$g','$h','$i','$j','$k','$n','$o','$p','$q','$r','$t','$u')";
			echo $sql;
			mysqli_query($con,$sql);
			//echo $sql;
			echo "Sucessfully inserted!!";
			header('Location: addcour.php');
			
			
			?>