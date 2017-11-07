<?php

try
{
//open the database
$db = new PDO('sqlite2:products.sqlite');
//create the database
$db->exec("CREATE TABLE Items (Id INTEGER PRIMARY KEY, Name TEXT, Barcode TEXT)");

//insert some data...
$db->exec("INSERT INTO Items (Name, Barcode) VALUES ('Apples', 01234567890);".
          "INSERT INTO Items (Name, Barcode) VALUES ('Oranges', 01234509876); " .
          "INSERT INTO Items (Name, Barcode) VALUES ('Lemons', 05432167890); " .
		  "INSERT INTO Items (Name, Barcode) VALUES ('Bananas', 09456881235); " .
		  "INSERT INTO Items (Name, Barcode) VALUES ('Lettuce', 07894563841); " .
		  "INSERT INTO Items (Name, Barcode) VALUES ('Beetroot', 01123487645); " .
		  "INSERT INTO Items (Name, Barcode) VALUES ('Carrots', 02234994875); " .
          "INSERT INTO Items (Name, Barcode) VALUES ('Controlled Drug 1', 34859603004); " .
		  "INSERT INTO Items (Name, Barcode) VALUES ('Box of Tissues', 04546938969); " .
		  "INSERT INTO Items (Name, Barcode) VALUES ('Kitchen Rolls', 04446573995); " .
		  "INSERT INTO Items (Name, Barcode) VALUES ('Toilet Rolls', 09866958348); " .
		  "INSERT INTO Items (Name, Barcode) VALUES ('Disposable Napkins', 01263553425); " .
		  "INSERT INTO Items (Name, Barcode) VALUES ('Tea Towels', 04628374758); " .
		  "INSERT INTO Items (Name, Barcode) VALUES ('Washing-up Liquid', 06859939577); " .
		  "INSERT INTO Items (Name, Barcode) VALUES ('Soap Powder', 08839577381); " .
		  "INSERT INTO Items (Name, Barcode) VALUES ('Controlled drug 2', 30548999604); " .
		  "INSERT INTO Items (Name, Barcode) VALUES ('Spring Water', 01177226637); " .
		  "INSERT INTO Items (Name, Barcode) VALUES ('Champagne', 05969483958); " .
		  "INSERT INTO Items (Name, Barcode) VALUES ('Still Water ', 01928337773); " .
		  "INSERT INTO Items (Name, Barcode) VALUES ('Orange Juice ', 05843637378); " .
		  "INSERT INTO Items (Name, Barcode) VALUES ('Tomato Juice ', 09999948377); " .
		  "INSERT INTO Items (Name, Barcode) VALUES ('Can of Beer', 03677748388); " .
		  "INSERT INTO Items (Name, Barcode) VALUES ('Controlled drug 3', 36888493904); " .
		  "INSERT INTO Items (Name, Barcode) VALUES ('Cheese', 03828475734); " .
		  "INSERT INTO Items (Name, Barcode) VALUES ('Milk', 01727172717); " .
		  "INSERT INTO Items (Name, Barcode) VALUES ('Yogurt', 02838264634); " .
		  "INSERT INTO Items (Name, Barcode) VALUES ('Coffee', 07578486889); " .
		  "INSERT INTO Items (Name, Barcode) VALUES ('Tea', 01525465634); " .
		  "INSERT INTO Items (Name, Barcode) VALUES ('Bread', 01111115253); ");
		  
		  $db = NULL;
		  echo "sql database created.";
}
catch(PDOException $e)
{
print 'Exception : '.$e->getMessage();
}
?>
