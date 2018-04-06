<?php

include("connection.php");
$s=mysqli_query($con,"select * from tbl_branchreg");
echo "<table class='blackbox' border='1' cellpadding='0' cellspacing='0' align='center' width'95%'>
<tr class='BoldRED' bgcolor='#FFFFFF' style='height:20px;'>
<tr><th class='newtext'>PLACE </th><th class='newtext'>STATE</th><th class='newtext'>COUNTRY</th><th class='newtext'>CONTACT_NO</th></tr>";
  while($row=mysqli_fetch_array($s))
  {
	  $cid=$row[0];
  echo"<tr> <a href='testbranchreg.php'></td>
  <td width='7%'>$row[1]</td><td width='11%'>$row[2]</td><td width='11%'>$row[3]</td><td width='11%'>$row[4]</td></td>
  <td width='7%'><form method='post' action='candidatedelete.php'><input type='hidden' name='h1' value='$cid'><input type='submit' name='delete' value='Delete'>  </form></td></tr>";	 
  }
   
  echo"</table>"
  

  ?>