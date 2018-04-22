<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
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
$name=addslashes(trim($_POST['name']));
$college=addslashes(trim($_POST['college']));
$branch=addslashes(trim($_POST['branch']));
$gender=addslashes(trim($_POST['gender']));
$email=addslashes(trim($_POST['email']));
$mobile_no=addslashes(trim($_POST['mobile_no']));
$event=addslashes(trim($_POST['event']));
$workshop=addslashes(trim($_POST['workshop']));

//db connection
require_once('class.phpmailer.php');
  include("class.smtp.php"); // optional, gets called from within class.phpmailer.php if not already loaded		
		
 
 
  $mail = new PHPMailer();
  $mail->IsSMTP(); // telling the class to use SMTP
  $mail->SMTPDebug  = 0;                     // enables SMTP debug information (for testing)
  $mail->SMTPAuth   = true;                  // enable SMTP authentication
  $mail->SMTPSecure = "ssl";                 // sets the prefix to the servier
  $mail->Host       = "smtp.gmail.com";      // sets GMAIL as the SMTP server
  $mail->Port       = 465;                   // set the SMTP port for the GMAIL server
  $mail->Username   = "srkrcollegefest@gmail.com";  // GMAIL username
  $mail->Password   = "fest@123";            // GMAIL password

  $mail->SetFrom('srkrcollegefest@gmail.com', 'SRKR COLLEGE FEST, SRKREC'); // Change the name as you want
  $mail->Subject    = "SRKR COLLEGE FEST ";
  $mail->Body = "You have successfully registered for our fest .";
  $mail->AddAddress($email);

  $mail->Send();

  echo "<br><br><font color='green' size='3'><b>Email has been Successfully Sent!</b></font></center>"; 	
 include "datacon.php"; 
//query...

$query="INSERT INTO `registration` (`name`, `college`, `branch`, `gender`, `email`, `mobile`, `event`, `workshop`) VALUES ('$name', '$college', '$branch', '$gender', '$email', '$mobile_no', '$event', '$workshop')";

$res=mysqli_query($conn,$query);
//db close
mysqli_close($conn);
echo "<br>";
echo "you're succcessfully  registered!";
echo "</div>";
?>
	

</div>
 
 
</body>
 
</html>
