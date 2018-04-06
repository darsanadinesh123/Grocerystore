<?php

include("connection.php");
$c=$_POST["consignmentno"];
$s=mysqli_query($con,"select * from tbl_statusupdate where consignmentno='$c'");
echo "<table class='blackbox' border='1' cellpadding='0' cellspacing='0' align='center' width'100'>
<tr class='BoldRED' bgcolor='#FFFFFF' style='height:20px;'>
<th class='newtext'>Consignment No. </th><th class='newtext'>Status Updated On</th><th class='newtext'>Current Status</th></tr>";
  while($row=mysqli_fetch_array($s))
  {
	  $cid=$row[0];
  echo"<tr> <a href='statuslist.php'></td>
  <td width='7%'>$row[1]</td><td width='11%'>$row[2]</td><td width='11%'>$row[3]</td></tr>";	 
  }
   
  echo"</table>"
  

  ?>