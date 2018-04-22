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
echo "<form action='event_reg.php' method 'post'>
	<h4>The registered candidates details:<input type='submit' name='registered' value='Regitration Details'
	style='background-color:blue; color:#ffffff;padding:5px;font-weight:bold;'></h4> </form>";
	
	echo "<form method='post' action='newsupdate.php'>  <textarea id='news' name='news'></textarea><input type='submit' name='submit' value='go' id='submit'> </form>";
	echo "<form action='logout.php' method 'post'>
	<h4>log out:<input type='submit' name='registered' value='Log out'
	style='background-color:blue; color:#ffffff;padding:5px;font-weight:bold;'></h4> </form>";
?>
	
	
	

</div>
</body>
<----------------------------------------------------------Bodyend--------------------------------------------------------------------->
</html>
