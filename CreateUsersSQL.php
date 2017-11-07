<?php
try
{
//open the database
$db = new PDO('sqlite2:login.sqlite');
//create the database
$db->exec("CREATE TABLE users (Id INTEGER PRIMARY KEY, Name TEXT, Password TEXT)");

//insert some data...
$db->exec("INSERT INTO users (Name, Password) VALUES ('Danh95', 'password13');".
          "INSERT INTO users (Name, Password) VALUES ('admin', '1234'); ".
		  "INSERT INTO users (Name, Password) VALUES ('user', 'password');");
		  
		  $db = NULL;
		  echo "sql database created.";
}

catch(PDOException $e)
{
print 'Exception : '.$e->getMessage();
}

?>