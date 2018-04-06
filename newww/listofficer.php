<?php

include("connection.php");
$s=mysqli_query($con,"select * from tbl_staffreg");
echo "<table class='blackbox' border='1' cellpadding='0' cellspacing='0' align='center' width'95%'>
<tr class='BoldRED' bgcolor='#FFFFFF' style='height:20px;'>
<tr><th class='newtext'>NAME</th><th class='newtext'>ADDRESS</th><th class='newtext'>GENDER</th><th class='newtext'>BRANCH</th><th class='newtext'>PHONE</th><th class='newtext'>EMAIL</th></tr>";
  while($row=mysqli_fetch_array($s))
  {
	  $cid=$row[0];
  echo"<tr> <a href='listofficer.php'></td>
  <td width='7%'>$row[1]</td><td width='11%'>$row[2]</td><td width='11%'>$row[4]</td><td width='11%'>$row[5]</td><td width='11%'>$row[6]</td><td width='11%'>$row[7]</td></td>
  <td width='7%'><form method='post' action='officerdelete.php'><input type='hidden' name='h1' value='$cid'><input type='submit' name='delete' value='Delete'> 
 
  </form>
 </tr>";	 
  }
   
  echo"</table>"


  ?>
 