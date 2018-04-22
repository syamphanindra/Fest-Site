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

	echo "<br>";
	echo "<br>";

	echo "<a href='login_verifycon.php'><h2 align='left'>Back</h2></a>";
	echo "<center>";
	echo "<table border='1'>";
	echo '<tr><th><form action="registered.php" method="post"><input type="submit" name="registered" value="Total registrations" style="background-color:blue; color:#ffffff; padding:5px; font-weight: bold;"></th>
	<th>click on registered to get registered members details....</form></th></tr>';
	echo '<tr><th><form action="ipllist.php" method="post"><input type="submit" name="ipl" value="ipl" style="background-color:red; color:#ffffff; padding:5px; font-weight: bold;"></th>
	<th>click on ipl to get ipl event detils....</form></th></tr>';	
	echo '<tr><th><form action="artlist.php" method="post"><input type="submit" name="art" value="art" style="background-color:red; color:#ffffff; padding:5px; font-weight: bold;"></th>
	<th>click on art to get art gallery event detils....</form></th></tr>';	
	echo '<tr><th><form action="codelist.php" method="post"><input type="submit" name="coding" value="coding" style="background-color:red; color:#ffffff; padding:5px; font-weight: bold;"></th>
	<th>click on coding to get coding contest event detils....</form></th></tr>';	
	echo '<tr><th><form action="treasurelist.php" method="post"><input type="submit" name="treasure" value="treasure" style="background-color:red; color:#ffffff; padding:5px; font-weight: bold;"></th>
	<th>click on treasure to get treasure hunt event detils....</form></th></tr>';	
	echo '<tr><th><form action="quizlist.php" method="post"><input type="submit" name="quiz" value="quiz" style="background-color:red; color:#ffffff; padding:5px; font-weight: bold;"></th>
	<th>click on quiz to get quiz event detils....</form></th></tr>';	
	echo '<tr><th><form action="ridehighlist.php" method="post"><input type="submit" name="ride" value="ride" style="background-color:red; color:#ffffff; padding:5px; font-weight: bold;"></th>
	<th>click on ride to get ride high event detils....</form></th>';	
	echo '</tr></table></center>';
	
	echo "<br>";
	echo "<center><table border='1'><tr><th>workshop</th><th>description</th></tr>";
    
	echo '<tr><th><form action="androidlist.php" method="post"><input type="submit" name="android" value="android" style="background-color:red; color:#ffffff; padding:5px; font-weight: bold;"></th>
	<th>click on android to get android detils....</form></th></tr>';	
	echo '<tr><th><form action="bigdatalist.php" method="post"><input type="submit" name="big data" value="big data" style="background-color:red; color:#ffffff; padding:5px; font-weight: bold;"></th>
	<th>click on big data to get big data workshop detils....</form></th></tr>';	
	echo '</tr></table></center>';
	echo "<br>";
?>

	
	

</div>
</body>
<----------------------------------------------------------Bodyend--------------------------------------------------------------------->
</html>
