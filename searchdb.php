<?php
$db = new PDO('sqlite2:products.sqlite');
$name=$_GET['value'];
$sql = "SELECT * FROM Items WHERE Name LIKE '%" . $_GET['value'] . "%' OR Barcode LIKE '%" . $_GET['value'] . "%' ";
foreach ($db->query($sql) as $row) {
	echo "<table>";
	echo "<tr>" . "<td>" . $row['Name'] . "</td>"; 
	echo  "<td>" . $row['Barcode'] . "</td>"; 
	echo "<td>" . "<img src='images/" . $row['Barcode'] . "-resized" . ".png'>" . "</td>";
	echo "<td>" . "<input type='button' value='Print barcode' onclick='printcode(". $row['Barcode'] .  ")'>" . "</td>" . "</tr>";
	echo "</table>";
}
?>