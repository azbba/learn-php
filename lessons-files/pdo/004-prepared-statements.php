<?php
/*
	- PHP PDO Prepared Statements
	- PDO::prepare( string $query, array $options = [] )
	- Prepares a statement for execution and returns a statement object.
	- The statement template can contain zero or more named (:name) or question mark (?) parameter markers for which real values will be substituted when the statement is executed.
	- Both named and question mark parameter markers cannot be used within the same statement template
	- Use these parameters to bind any user-input, do not include the user-input directly in the query.
	- You must include a unique parameter marker for each value you wish to pass in to the statement when you call PDOStatement::execute().
	- You cannot use a named parameter marker of the same name more than once in a prepared statement.
	- $query parameter: => SQL statement.
	- $options: An array of key value to set attribute values for the PDOStatement object that this method returns
					Use this param to set: [ PDO::ATTR_CURSOR ]
	- If the database server successfully prepares the statement, PDO::prepare() returns a PDOStatement object.
	- If the database server cannot successfully prepare the statement, PDO::prepare() returns false or emits PDOException.
	- Exp with named parameter:
		$db->prepare( 'SELECT * FROM users WHERE username = :uname AND password = :pass LIMIT 1' );
	- Exp with question mark :
		$db->prepare( 'SELECT * FROM users WHERE username = ? AND password = ? LIMIT 1' );
	- Exp with no parameter:
		$db->prepare( 'SELECT * FROM users' );
*/

include 'connect.php';

$stmt = $db->prepare( "SELECT * FROM users WHERE username = :username AND password = :password" );
$stmt->execute( [
	':username'	=> 'azbba',
	':password'	=> 'secret'
]);

$results = $stmt->fetch();

echo '<pre>'; 
	// print_r( $results );
	// var_dump( $results );
echo '</pre>';

?>
<!DOCTYPE html>
<html>
<head>
	<title>Learn PHP PDO - Prepared Statement</title>
</head>
<body>
	<h1>PHP PDO Prepared Statement</h1>
</body>
</html>