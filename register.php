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
  
<CENTER><br><br>
<h2>REGISTRATION FORM</h2><br>  
<form name='registration' action='registration_submit.php' method='post' onsubmit='return validate();'>
<table align='center'>
<tr><th align='right' valign='middle'>NAME:</th><td><input type='text' name='name' id='name'></td></tr> 	
<tr><th align='right' valign='middle'>COLLEGE:</th><td><input type='text' name='college' id='college'></td></tr> 	
<tr><th align='right' valign='middele'>BRANCH:</th><td>
<select name='branch' id='branch'>
 <option value='CSE' selected>CSE</option>
 <option value='IT'>IT</option>
 <option value='ECE'>ECE</option>
<option value='EEE'>EEE</option>
 <option value='CIVIL'>CIVIL</option>
 <option value='MECHANICAL'>MECHANICAL</option>
 </select>
 </tr>
 <tr><th align="right" valign="middle">GENDER:</th><td><input type='radio' name='gender' value='M' checked='checked'>Male<input type='radio' name='gender' value='F' checked>Female</td></tr>
 
 <tr><th align='right' valign='middle'>EMAIL:</th><td><input type='text' name='email' id='email'></td></tr> 
 <tr><th align='right' valign='middle'>MOBILE NO:</th><td><input type='text' name='mobile_no' id='mobile_no'></td></tr> 

 <tr><th align='right' valign='middele'>EVENTS:</th><td>
 <select name='event' id='event'>
 <option value='none' selected >------</option>
 <option value='treasure' >TEEASURE HUNT</option>
  
 <option value='quiz'>QUIZ</option>
 <option value='art_gallery'>ART GALLERY</option>
<option value='coding'>CODING CONTEST</option>
 <option value='ipl' >IPL AUCTION</option>
 <option value='ridehigh' >RIDE HIGH</option>
 </select>
 </tr>
 
 
 <tr><th align='right' valign='middele'>WORKSHOPS:</th><td>
 <select name='workshop' id='workshop'>
 <option value='none' selected >------</option>
 <option value='bigdata' >BIGDATA</option>
 <option value='android'>ANDROID</option>
</td>
</tr>
 <tr><td></td><td valign='right'><br><input type='submit' value='REGISTER' style="background-color:green; color:#ffffff; padding:5px; font-weight: bold;"></td></tr>
 </table>	
 </form>
 </CENTER>
</div>
<script type="text/javascript">
function validate()
{
	var name2= document.getElementById('name').value;
var college2= document.getElementById('college').value;
var email2= document.getElementById('email').value;
var mobile2= document.getElementById('mobile_no').value;	
	 //Validate Name - Empty Check & Only Characters Check
   if(name2== "") { alert("Name should not be Empty!"); return false;}
   var nm = /^[A-Za-z ]{4,30}$/; //Regular Expression to match a value with exactly 12 digits 
   if(!nm.test(name2)) { alert("Invalid Name! Name should contain only characters & spaces.\nIt should contain a minimum of 4 characters & maximum of 30 characters"); return false;}
	if(college2=="")
	{
		alert("Enter college");
	     return false;
	}
	//Validate Email - Empty Check & Email Format Check
   if(email2== "") { alert("Email should not be Empty!"); return false;}
   var atpos = email2.indexOf("@"); //get the position of @ in the input email string
   var dotpos = email2.lastIndexOf("."); //get the position (last occurrence) of .
   //Checks Min 2 chars in email name (ravi/abc12), domain name (gmail/yahoo) and domain type (.com/.net)
   if (atpos < 2 || dotpos <= atpos+2 || dotpos+2 >= email2.length)   
      {
        alert("In-valid E-mail Address!");
        return false;
      }
	   
   //Validate Mobile - Empty Check & Mobile Format Check
   if(mobile2 == "") { alert("Mobile should not be Empty!"); return false;}
   var mb = /^[0-9]{10}$/; //Regular Expression to match a value with exactly 10 digits 
   if(!mb.test(mobile2)) { alert("Invalid Mobile Number! Enter a valid 10 Digit Mobile Number"); return false;}
	   
	
return true;
}
</script>
</body>

</html>
