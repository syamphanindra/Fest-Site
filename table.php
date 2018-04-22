<html>
<body>
<style>
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 5px;
    text-align: left;
}
</style>
<?php
$j=0;
echo "TABLE";
echo  "<table width=50%>";
for($i=0;$i<11;$i++)
{
	
    echo "</tr>";

              echo "<tr>";
			  $j++;
              echo "<td>" . "$j" . "</td>";
			   $j++;
              echo "<td>" . "$j" . "</td>";
			   $j++;
              echo "<td>" . "$j" . "</td>";
			   $j++;
              echo "<td>" . "$j" . "</td>";
			   $j++;
              echo "<td>" . "$j" . "</td>";
			   $j++;
			   echo "<td>" . "$j" . "</td>";
			    $j++;
				echo "<td>" . "$j" . "</td>";
$j++;
echo "<td>" . "$j" . "</td>";
$j++;

echo "<td>" . "$j" . "</td>";
              echo "</tr>";
}
echo "<\table>";
?>
</body>
</html>
