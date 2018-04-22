<?php
$news=addslashes(trim($_POST['news']));
 include "datacon.php"; 
 $query="INSERT INTO `newsupdate` (`newsupdate`, `timestamp`) VALUES ('$news', CURRENT_TIMESTAMP)";
 $res=mysqli_query($conn,$query);
 mysqli_close($conn);
 echo "you have successfully updated news";
 header("Location:index.php");
?>