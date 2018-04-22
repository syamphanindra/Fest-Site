<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<?php include "head.php"; ?>
</head>
<body>
<div class="wrap clearfix">
	
  <div class="header"><strong>SRKR COLLEGE FEST</strong></div>
  
     <?php include "menu.php"; ?>
	 <br>
	 
<?php 
session_start();
if(isset($_POST['username']))
{
$username=$_POST['username'];
}
if(isset($_POST['password']))
{
$password=$_POST['password'];
}
if(($username=='pavan')&&($password=='nani'))
{
	$_SESSION['uid']='admin';
	echo "you are successfully logged in";
	
	echo "<form action='event_reg.php' method 'post'>
	<h4>The registered candidates details:<input type='submit' name='registered' value='Regitration Details'
	style='background-color:blue; color:#ffffff;padding:5px;font-weight:bold;'></h4> </form>";
	
	echo "<form method='post' action='newsupdate.php'>  <textarea id='news' name='news'></textarea><input type='submit' name='submit' value='go' id='submit'> </form>";
	echo "<form action='logout.php' method 'post'>
	<h4><input type='submit' name='registered' value='Logout'
	style='background-color:blue; color:#ffffff;padding:5px;font-weight:bold;'></h4> </form>";
}


else if(!isset($_SESSION['uid']))
{
	session_destroy();
	header("Location:index.php");
}
else
{
	
	header('Location:adminlogin.php?id=1');
	
}
?>

	<div class="footer" id="footer">
Copyright © 2005 | All Rights Reserved  
	</div>

</div>
</body>
</html>

 