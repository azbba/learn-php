<?php
/*
	- PHP PDO Execute the statement
		[01] 
			- PDO::exec( string $statement ) 
			- Execute an SQL statement and return the number of affected rows
			- exec() does not return results from a SELECT statement. 
			- exec() return number of effected rows or 0 if no rows effected.

		[02]
			- PDO::query( string $query, int|null $fetchMode = null )
			- PDO::query( string $query, int|null $fetchMode = PDO::FETCH_COLUMN, int $colno )
			- PDO::query( string $query, int|null $fetchMode = PDO::FETCH_CLASS, string $classname, array $constructorArgs )
			- PDO::query( string $query, int|null $fetchMode = PDO::FETCH_INTO, object $object )
			- Executes an SQL statement, returning a result set as a PDOStatement object.
			- Executes an SQL statement in a single function call,
			- Returning the result set (if any) returned by the statement as a PDOStatement object, or false on failure.
		
		[03]
			- PDOStatement::execute( array|null $params = null )
			- Executes a prepared statement
			- $params:
				An array of values with as many elements as there are bound parameters in the SQL statement being executed
			- Returns true on success or false on failure.
			- More Information when we learn PDO::prepare();PDOStatement Object
			- Exp
				$stmt = $db->prepare( 'select * from users where id = :id' );
				$stmt->execute( ['id' => 1] ); // return true or false
*/
include 'connect.php';

// $stmt = $db->exec( 'INSERT INTO users (username, password, email) VALUES( "Bilal", "secret", "bilal@gmail.com" )'); // Return 1 [ 1 === 1 affected row ]
// $stmt = $db->exec( 'DELETE FROM users WHERE username = "walid" OR username = "Bilal"' ); // Return 2 [ 2 === 2 affected row ]
// $stmt = $db->exec( 'SELECT * FROM users' ); // return 0 exec() do not return results of select statements

// $stmt = $db->query( 'SELECT * FROM users' ); // Return PDOStatement object

// $stmt = $db->prepare( 'select * from users where id = :id' );
// $stmt->execute( ['id' => 1] ); // return true or false
// foreach ( $stmt as $stm ) {
// 	echo $stm['username'] . '<br/>';
// }

echo '<pre>'; 
	// print_r( $stmt );
	// var_dump( $stmt );

echo '</pre>';

?>
<!DOCTYPE html>
<html>
<head>
	<title>Learn PHP PDO - Execute the statement</title>
</head>
<body>
	<h1>PHP PDO Execute the statement</h1>
</body>
</html>