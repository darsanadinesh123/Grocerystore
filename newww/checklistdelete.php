<?php
include("connection.php");
$d=$_POST["h1"];
//echo $d;
$m="delete from tbl_checkaddcour where consignmentno=$d";
mysqli_query($con,$m);
//echo $m;
echo "<div style=margin:200px; align=center>";
			  echo "<marquee behavior=alternate width=80% hspace=10% ><font size=20 color=green align=center>$d is deleted...!</font></marquee>";
			  echo "</div>";	 
	  
?>