<?php
$db = new PDO('sqlite2:products.sqlite');
 
$code = $_GET['code'];
$sql = "SELECT * FROM Items WHERE Barcode = $code";
 foreach ($db->query($sql) as $row) {
 echo "<input class='back' type='button' value='Back' onclick='createlist()'>";
echo "<table>";
echo "<tr>";


echo "<td>" . $row['Name'] . "</td>"; 
echo "<td>" . $row['Barcode'] . "</td>"; 
if (strlen($code) == 10){
	echo "<td>" . "<a href='images/". "0" . $code . ".png' target='blank'>" . "<img src='images/". "0" . $code . ".png'>" . "</a>" . "</td>";
}
else {
	echo "<td>" . "<a href='images/" . $code . ".png' target='blank'>" . "<img src='images/". $code . ".png'>" . "</a>" . "</td>";
}	
echo "</tr>";
echo "</table>";



}

?>