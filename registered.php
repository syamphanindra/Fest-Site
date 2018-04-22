<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<!------------------------Head Part---------------------------------------------------------------------->
<head>
<?php include "head.php";  ?>
</head>
<!-----------------------------------------Headend------------------------------------------------------------------------->
<!------------------------------------------Body------------------------------------------------------------------------>
<body>
<div class="wrap clearfix">
	
  <div class="header"><strong>SRKR COLLEGE FEST</strong></div>
  
  <?php include "menu.php"; ?>
  
 
   <?php
     include "datacon.php"; 

//query...

$query="SELECT * FROM `registration`";

$res=mysqli_query($conn,$query);
echo "<a href='event_reg.php'><h2 align='left'>Back</h2></a>";
echo "<br>";
echo "<br>";
echo "<div style='height:200px; overflow-y: scroll;'align='CENTER';>";
echo "<table border='1'> <tr><th>name</th><th>college</th><th>branch</th><th>gender</th><th>email</th><th>mobile no</th><th>event</th><th>workshop</th></tr>";

while($row=mysqli_fetch_row($res))
{
	echo "<tr>";
	echo"<td>  $row[0] </td>";
	echo  "<td> $row[1] </td>";
	echo "<td> $row[2] </td>";
	 echo "<td> $row[3] </td>";
	 echo "<td> $row[4] </td>";
	 echo "<td> $row[5] </td>";
	echo "<td>  $row[6] </td>";
	 echo  "<td> $row[7] </td>";
	echo "</tr>";
	
}
echo "</table>";
echo "</div>";
echo "<br>";
echo "<br>";
//db close
mysqli_close($conn);
?>	
	
	

</div>
</body>

</html>
