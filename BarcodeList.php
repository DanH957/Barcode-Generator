<?php 
session_start();

include "UPCA.php";
$page = $_GET['pn'];


$limit = 5; //number of items per page
if($page == 1 && $_SESSION['start'] !=5 ){ 
	$_SESSION['start'] = $_SESSION['start'] +1 ;  //next page
	} elseif($page == 0 && $_SESSION['start'] !=0){
		$_SESSION['start'] = $_SESSION['start'] -1; //previous page
	}
	
$start_from = $_SESSION['start'] * $limit; //what product to start from
$db = new PDO('sqlite2:products.sqlite');
$upc = new upc(null, 4);

						
						$sql = "SELECT * FROM Items LIMIT $start_from, $limit"; 
						echo "<div class='pageButtons'>";
							echo "<a> <input type='submit' value = 'Previous Page' id='1' onclick='createlist(0)'></a> <a> <input type='submit' value = 'NextPage' id='1' onclick='createlist(1)'></a>";
							echo "</div>";
						echo "<table>";
						    foreach ($db->query($sql) as $row) { //selected rows from the SQL database.
								$code = $row['Barcode'];
								$name = $row['Name'];
								echo "<tr>" . "<td>" . $row['Name'] . "</td>"; 
							echo  "<td>" . $row['Barcode'] . "</td>"; 
							
							if($bytes = @filesize("images/$code.png")){ //checks to see if the image is cached or needs to be created.
							echo "<td>" . "<img src='images/" . $code . "-resized" . ".png'>" . "</td>";
							}
							else{
								$upc->embed($code, $name);
								$upc->resize($code);
								echo "<td>" . "<img src='images/" . $code . "-resized" . ".png'>" . "</td>";
							}
							echo "<td>" . "<input type='button' value='Enlarge Barcode' onclick='printcode(". $row['Barcode'] . ")'>" . "</td>" . "</tr>";
							}
							echo "</table>";
							
							
								?>

								
					




