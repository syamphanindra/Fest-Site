<!DOCTYPE html>
<html>
<body>
<?php
$i=$_POST['firstname'];
$j=$_POST['lastname'];
$arr1=str_split($i);
$arr2=str_split($j);
$l1=count($arr1);
$l2=count($arr2);
echo $l1;
echo "<br>";
echo $l2;
echo "<br>";
$ar=array(0,0);
for($k=0;$k<l1;$k++)
{
	echo ord($arr1[0]);
	if((ord($arr1[0])-ord('a'))==0)
		$ar[0]++;
}
echo $ar[0];

?>

</body>
</html>