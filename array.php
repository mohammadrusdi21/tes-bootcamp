<!DOCTYPE html>
<html>
<head>
  <title>seleksi</title>
</head>
<body>
<table border="1">
<tr><td></td><td>0</td><td>1</td><td>2</td><td>3</td><td>4</td></tr>
<?php
$seleksi = array(
		array("0", "2", "8","14","20","26"),
		array("1", "32", "38","44","50","58"),
		array("2", "62", "68","74","80","86")

		);
			
	for ($row = 0; $row < 5; $row++) {
		echo "<tr>";
		for ($col = 0; $col < 6; $col++) {
			echo "<td>".$seleksi[$row][$col]."</td>";
		}
	echo "</tr>";
}
?>
</table>
</body>
</html>