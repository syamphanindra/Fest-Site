
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<?php include "head.php"; ?>
</head>
<body>
<div class="wrap clearfix">
	
  <div class="header"><strong>SRKR COLLEGE FEST</strong></div>
  
     <?php include "menu.php"; ?>
	 <br><br>
<form action='login_verify.php' method='post'>
	<center><table>
	<h2>
	<tr>
	<th>
	USERNAME:</th><td align='left'><input type="text" name="username" id="username" checked></td>
	<tr>
	<th>
	PASSWORD:</th><td align='left'><input type="password" name="password" id="pasword" checked></td>
	<div style="color:red;font-weight:bold;">
	<?php
	if(isset($_GET['id']))
	{
		
		echo "invalid username and password";
	}
	?>
	</div>
	<tr>
	<td align='middle'>
	<input type="submit" name="submit" value="login"></td>
	</tr></h2>
	</table></center>
	</form>

	<div class="footer" id="footer">

	</div>

</div>
</body>
</html>

