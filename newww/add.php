



<?php 

$con= mysqli_connect("localhost","root","","newdb");
			
			
			//$cn=$_POST["id"];
			$a=$_POST["Shippername"];
			$b=$_POST["Shipperphone"];
			$c=$_POST["Shipperaddress"]; 
			
			$v=$_POST["fbranchid"];
			$w=$_POST["fcontryid"];
			$x=$_POST["fstateid"];
			
			$d=$_POST["Receivername"];
			$e=$_POST["Receiverphone"];
			$f=$_POST["Receiveraddress"];
			
			$va=$_POST["tbranchid"];
			$wa=$_POST["tcontryid"];
			$xa=$_POST["tstateid"];
			
			$cg=$_POST["cno"];
			$g=$_POST["type"];
			
			$h=$_POST["Shiptype"];
			$i=$_POST["Weight"];
			//$j=$_POST["Qnty"];
			$k=$_POST["Total"];
			$n=$_POST["Totalfreight"];
			$o=$_POST["Mode"];
			$p=$_POST["Depttime"];
			//$q=$_POST["Destination"];
			$r=$_POST["Packupdate"];
			$t=$_POST["Pickuptime"];
			$q=$_POST["status"];
			$u=$_POST["Comments"];
			//echo $c."<br/>";
			$sq="INSERT INTO tbl_checkaddcour(shippername, phone, address, fbranch, fcontry, fstate, receivername, rphone, raddress, rbranch, rcontry, rstate, ctype, typeship, weight, qnty, total, freight, waymode, depttime, pickdate, picktime, status, comments) VALUES('$a','$b','$c','$v','$w','$x','$d','$e','$f','$va','$wa','$xa','$h','$g','$i','$k','$n','$o','$p','$r','$t','$q','$u')";
			mysqli_query($con,$sq);
			$aa=mysqli_query($con,"select consignmentno from tbl_checkaddcour");
			while($row=mysqli_fetch_array($aa))
			{
				$cno=$row[0];
			}
			echo $cno;
			$sql="INSERT INTO tbl_statusupdate(consignmentno, statusdate, newstatus) values($cno,'$r','$q')";
			
			mysqli_query($con,$sql);
			//echo $sql;
			echo "Sucessfully inserted!!";
			//header('Location: listadd.php');
			
			
			?>
			
			
			
			
		
   
  <html>
  <head></head>
  <body>
  <form  method="post" name="frmShipment"  > 
<div class="gentxt" align="right">
</div>
<table border="0" cellpadding="0" cellspacing="0" align="center" width="75%">
  <tbody><tr>
    <td width="18"><img src="images/boxtopleftcorner.gif" alt="" height="13" width="18"></td>
    <td background="images/boxtopBG.gif" width="734"></td>
    <td width="18"><img src="images/boxtoprightcorner.gif" alt="" height="13" width="18"></td>
  </tr>
  <tr>
    <td background="images/boxleftBG.gif"></td>
    <td><table border="0" cellpadding="0" cellspacing="0" align="center" width="98%">
      <tbody><tr>
        <td colspan="2" height="4"></td>
      </tr>
      <tr>
        <td height="18">&nbsp;</td>
      </tr>
      <tr>
        <td><table class="Partext1" cellpadding="2" cellspacing="2" align="center" width="100%">
          <tbody><tr>
            <td colspan="3" class="TrackMediumBlue" align="right"><div class="gentxt" align="right">
                <div class="headtext13" align="left"><strong>Shipper info : </strong></div>
            </div></td>
          </tr>
		  <tr>
            <td class="TrackMediumBlue" align="right">&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td class="TrackMediumBlue" align="right" width="138">Shipper Name   :</td>
            <td>&nbsp;</td><td><?php echo $a;?></td>
            
          </tr>
		 
          <tr>
            <td class="TrackMediumBlue" align="right">Phone   :</td>
            <td>&nbsp;</td><td><?php echo $b;?></td>
           
          </tr>
          <tr>
            <td class="TrackMediumBlue" align="right">Address   :</td>
            <td>&nbsp;</td><td><?php echo $c;?></td>
            
          </tr>
		  <tr>
		<td  class="TrackMediumBlue" align="right">Branch :</td><td>&nbsp;</td>
			<td><?php echo $v;?></td>
			</tr>
			<tr>
			<td  class="TrackMediumBlue" align="right">Country :</td><td>&nbsp;</td>
			<td><?php echo $w;?></td>
			</tr>
		  		<tr>
		<td  class="TrackMediumBlue" align="right">State :</td><td>&nbsp;</td>
			<td><?php echo $x;?></td>
          </tr>
        <tr>
            <td class="TrackMediumBlue" align="right">&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td colspan="3" class="TrackMediumBlue" align="right"><div class="headtext13" align="left"><strong>Receiver  info : </strong></div></td><td>
          </tr>
		  
		  <tr>
            <td class="TrackMediumBlue" align="right">&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td class="TrackMediumBlue" align="right">Receiver Name : </td>
            <td>&nbsp;</td><td><?php echo $d;?></td>
            
          </tr>
          <tr>
            <td class="TrackMediumBlue" align="right">Phone : </td>
            <td>&nbsp;</td><td><?php echo $e;?></td>
            
          </tr>
          <tr>
            <td class="TrackMediumBlue" align="right"> Address : </td>
            <td>&nbsp;</td><td><?php echo $f;?></td>
            
          </tr>
		  <tr>
		<td  class="TrackMediumBlue" align="right">Branch :</td><td>&nbsp;</td><td><?php echo $va;?></td>
			</tr>
			
			
		</tr>
		<tr>
			<td  class="TrackMediumBlue" align="right">State :</td><td>&nbsp;</td>
			<td><?php echo $xa;?></td>
		</tr>
          <tr>
            <td class="TrackMediumBlue" align="right">&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td colspan="3" class="TrackMediumBlue" align="right"><div class="headtext13" align="left"><strong>Shipment   info : </strong></div></td>
          </tr>
		  <tr>
            <td class="TrackMediumBlue" align="right">&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
           <tr>
			<td class="TrackMediumBlue" align="right">Consignment no :</td><td>&nbsp;</td>
			<td><?php echo $cg;?></td>
		
		</tr>
		<tr>
            <td class="TrackMediumBlue" align="right">&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
		 
		<tr>
            <td class="TrackMediumBlue" align="right">&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
		
<tr>
            <td class="TrackMediumBlue" align="right">Type of Shipment  :</td>
            <td>&nbsp;</td><td><?php echo $h;?></td>
            
          </tr>
		  <tr>
			<td  class="TrackMediumBlue" align="right">Country :</td><td>&nbsp;</td><td><?php echo $wa;?></td>
			</tr>
          <tr>
            <td class="TrackMediumBlue" align="right">Weight : </td>
            <td>&nbsp;</td><td><?php echo $i;?></td><td>(kg)</td>
    
          </tr>
         
          <!--tr>
            <td class="TrackMediumBlue" align="right">Qnty  :</td>
            <td>&nbsp;</td><td><?php echo $j;?></td>
            
          </tr-->
         
          <tr>
            <td class="TrackMediumBlue" align="right">Freight : </td>
            <td>&nbsp;</td><td><?php echo $n;?></td>
            
          </tr>
		   <tr>
            <td class="TrackMediumBlue" align="right">Total Freight :</td>
            <td>&nbsp;</td><td><?php echo $k;?></td>
           
          </tr>
          <tr>
            <td class="TrackMediumBlue" align="right">Mode : </td>
            <td>&nbsp;</td>
            <td><?php echo $o;?></td>
          </tr>
          <tr>
            <td class="TrackNormalBlue" align="right"><span class="TrackMediumBlue">Dept time : </span></td>
            <td>&nbsp;</td>
          <td> <?php echo $p;?></td>
          </tr>
          
          <tr>
            <td class="TrackNormalBlue" align="right">Pickup Date  :</td>
            <td>&nbsp;</td><td><?php echo $r;?></td>
            <td>
          </tr>
          <tr>
            <td class="TrackNormalBlue" align="right" valign="top">Pickup Time  :</td>
            <td>&nbsp;</td><td><?php echo $t;?></td>
           
          </tr>
         <tr>
            <td class="TrackNormalBlue" align="right" valign="top">Status :</td>
            <td>&nbsp;</td><td><?php echo $q;?></td>
            
          </tr>
          <tr>
            <td class="TrackNormalBlue" align="right" valign="top">Comments :</td>
            <td>&nbsp;</td><td><?php echo $u;?></td>
            
          </tr>
        <tr>
            <td align="right">&nbsp;</td>
            <td>&nbsp;</td>
            <td><b>
			<button onclick="myFunction()" >Print this page</button>
			</td></b>
          </tr>
		  
                </tbody></table></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
    </tbody></table></td>
    <td background="images/boxrightBG.gif"></td>
  
  <tr>
    <td width="18"><img src="images/boxbtmleftcorner.gif" alt="" height="12" width="18"></td>
    <td background="images/boxbtmBG.gif" width="734"></td>
    <td width="18"><img src="images/boxbtmrightcorner.gif" alt="" height="12" width="18"></td>
  </tr>
</tbody></table>
</form> 
<script>
function myFunction(){
	window.print();
}
</body>
</html>


	





 