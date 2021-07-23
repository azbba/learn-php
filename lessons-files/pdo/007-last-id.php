<?php
/*
	- PHP PDO The last inserted id
	- PDO::lastInsertId( string|null $name = null )
	- Returns the ID of the last inserted row or sequence value
	- If a sequence name was not specified for the name parameter, PDO::lastInsertId() returns a string representing the row ID of the last row that was inserted into the database.
	- If a sequence name was specified for the name parameter, PDO::lastInsertId() returns a string representing the last value retrieved from the specified sequence object.
	- If the PDO driver does not support this capability, PDO::lastInsertId() triggers an IM001 SQLSTATE.
	- Work with SQL [insert & replace]
	- Exp:
		$stmt = $db->prepare( 'INSERT INTO users (username, password, email) VALUES (?, ?, ?)' );
		$stmt->execute([
			'azbba', 'secret', 'az34bba@gmail.com'
		]);
		if ( $stmt->rowCount() ) {
			echo $db->lastInsertId(); // last id added 
		}
*/

include 'connect.php';

?>
<!DOCTYPE html>
<html>
<head>
	<title>Learn PHP PDO - The last inserted id</title>
</head>
<body>
	<h1>PHP PDO The last inserted id</h1>
</body>
</html>