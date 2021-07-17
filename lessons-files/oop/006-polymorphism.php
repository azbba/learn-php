<?php
/*
	- PHP Polymorphism:
		- Polymorphism describes a pattern in object oriented programming in which classes have different functionality while sharing a common interface.
		- Polymorphism helps you create a generic framework that takes the different object types that share the same interface.
		- To implement polymorphism in PHP, you can use either abstract classes or interfaces.
		- Interface Cannot be instantiate.
		- Methods in interface follow the same rules of abstract classes.
		- The [ implements ] keyword is used to declare that a class must have the methods described in the specified interface.
		- Exp: 
*/

interface DataBase {
	public function get_all( $table );
	public function delete( $table, $id );
	public function update( $table, $colmVal, $id  );
}

// $db = new DataBase(); // Fatal error: Cannot instantiate interface

class MySQL implements DataBase {
	public function get_all( $table ) {
		echo "SELECT * FROM $table";
	}
	public function delete( $table, $id ) {
		echo "DELETE FROM $table WHERE id=$id";
	}
	public function update( $table, $colmVal, $id ) {
		echo "UPDATE $table SET $colmVal WHERE id=$id";
	}
}

class PostgreSQL implements DataBase {
	public function get_all( $table ) {
		echo "SELECT * FROM $table";
	}
	public function delete( $table, $id ) {
		echo "DELETE FROM $table WHERE id=$id";
	}
	public function update( $table, $colmVal, $id ) {
		echo "UPDATE $table SET $colmVal WHERE id=$id";
	}
}

$db = new MySQL();
// $db = new PostgreSQL(); // Toggle comments to change database vendor extensions witout effect your code  

echo '<pre>'; 
	var_dump( $db );
echo '</pre>'

?>
<!DOCTYPE html>
<html>
<head>
	<title>Learn PHP - Polymorphism</title>
</head>
<body>
	<h1>PHP Polymorphism</h1>
</body>
</html>