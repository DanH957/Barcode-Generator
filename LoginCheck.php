<?php
session_start();
$user = $_GET['username'];
$pass = $_GET['password'];
$result = null;


$db = new PDO('sqlite2:login.sqlite');

$sql = "SELECT * FROM users";
foreach ($db->query($sql) as $row) {
	if($user == $row['Name'] & $pass == $row['Password'] ){
		$result = "True";
		$_SESSION["Username"] = $row['Name'];
		$_SESSION["Password"] = $row['Password'];
		break;
	}
	else{
		$result = "False";
	}
}
		echo $result;

?>