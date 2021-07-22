<?php
/*
	- PHP PDO Fetch data:
		[01]
			- PDOStatement::fetch( int $mode = PDO::FETCH_DEFAULT, int $cursorOrientation = PDO::FETCH_ORI_NEXT, int $cursorOffset = 0 )
			- Fetches the next row from a result set .
			- Fetches a row from a result set associated with a PDOStatement object. The mode parameter determines how PDO returns the row.
			- $mode: Controls how the next row will be returned to the caller
				* default value is 
					( PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_BOTH ) [ PDO( ..., $options ) ]
				* PDO::FETCH_ASSOC				=> returns an array indexed by column name.
				* PDO::FETCH_BOTH (default)	=> returns an array indexed by both column name and 0-indexed column number as returned in your result set.
				* PDO::FETCH_BOUND				=> returns true and assigns the values of the columns in your result set to the PHP variables to which they were bound with the PDOStatement::bindColumn() method.
				* PDO::FETCH_CLASS				=> returns a new instance of the requested class, mapping the columns of the result set to named properties in the class, and calling the constructor afterwards
															Exp:
																To fetch with class must use: ( setFetchMode() method )
																	$stmt->setFetchMode(PDO::FETCH_CLASS, 'User');
				* PDO::FETCH_INTO					=> updates an existing instance of the requested class, mapping the columns of the result set to named properties in the class.
															Don't work with [ priavte or protected ] properties
															Exp:
																class User {
																	// Properties and methods
																}
																$user = new User();
																$stmt = $db->query( 'select * from users' );
																$stmt->setFetchMode( PDO::FETCH_INTO, $user );
																$stmt->fetch(); // Update existing instance $user
				* PDO::FETCH_LAZY					=> combines PDO::FETCH_BOTH and PDO::FETCH_OBJ, creating the object variable names as they are accessed
															Exp:
																$stmt = $db->query( 'select * from users' );
																$result = $stmt->fetch( PDO::FETCH_LAZY ); // Return PDORow Object
															You can access the data:
																$result->username || $result['username'];
															Don't work with fetchAll()
				* PDO::FETCH_NAMED				=> returns an array with the same form as PDO::FETCH_ASSOC
				* PDO::FETCH_NUM					=> returns an array indexed by column number as returned in your result set, starting at column 0
				* PDO::FETCH_OBJ					=> returns an anonymous object with property names that correspond to the column names returned in your result set
				* PDO::FETCH_PROPS_LATE			=> when used with PDO::FETCH_CLASS, the constructor of the class is called before the properties are assigned from the respective column values.
			- $cursorOrientation: this value determines which row will be returned to the caller
			- $offset
				* More info when we learn PDO::prepare()
			- The return value of this function on success depends on the fetch type. In all cases, false is returned on failure.
			- Exp:
				$db->query( 'select * from users where id = 1' ).fetch( PDO::FETCH_ASSOC ); // Returns named array
				$db->query( 'select * from users where id = 1' ).fetch( PDO::FETCH_OBJ ); // Returns an anonymous object
				$stsm = $db->query( 'select * from users' );
				$stmt->setFetchMode( FETCH_CLASS, 'User', [ 'param1', 'for', 'counstructor' ] );
				$stmt->fetch(); // User class
		
		[02]
			- PDOStatement::fetchAll( int $mode = PDO::FETCH_DEFAULT )
			- PDOStatement::fetchAll( int $mode = PDO::FETCH_COLUMN, int $colno )
			- PDOStatement::fetchAll( int $mode = PDO::FETCH_CLASS, string $class, array|null $constructorArgs )
			- PDOStatement::fetchAll( int $mode = PDO::FETCH_INTO, object $object )
			- Returns an array containing all of the result set rows
			- $mode === fetch() $mode
				* PDO::FETCH_KEY_PAIR	=> Return key value array
													Exp:
														$stmt = $db->query( 'SELECT username, password FROM users' );
														$stmt->fetchAll( PDO::FETCH_KEY_PAIR ); // [ 'azbba'	=> 'mypassword', 'user2' => 'anotherpassword' ]
													Exp 2:
														$stmt = $db->query( 'SELECT username, count(*) FROM users group by username' );
														$stmt->fetchAll( PDO::FETCH_KEY_PAIR );
															[ 'azbba'	=> 22, 'Azzedine'	=> '30' ] // 30 user with azzedine name
				* PDO::FETCH_COLUMN		=> return an array consisting of all values of a single column from the result set
											You can specify which column you want with the $colno parameter.
											Exp:
												$stmt->fetchAll( PDO::FETCH_COLUMN, 1 );
				* PDO::FETCH_UNIQUE		=> To fetch only the unique values of a single column from the result set.
				* PDO::FETCH_GROUP		=> To return an associative array grouped by the values of a specified column.
			- returns an array containing all of the remaining rows in the result set depends on the fetch type, or false on failure.
				empty array if there's no results to fetch
		
		[03]
			- PDOStatement::fetchColumn( int $column = 0 )
			- Returns a single column from the next row of a result set
			- column
			- 0-indexed number of the column you wish to retrieve from the row.
			- If no value is supplied PDOStatement::fetchColumn() fetches the first column.
			- Returns false if there are no more rows.

		[04]
			- PDOStatement::fetchObject( string|null $class = "stdClass", array $constructorArgs = [] )
			- Fetches the next row and returns it as an object
			- This function is an alternative to PDOStatement::fetch() with PDO::FETCH_CLASS or PDO::FETCH_OBJ style.
			- Returns an instance of the required class with property names that correspond to the column names or false on failure.
		
		[05]
			- PDOStatement::setFetchMode(int $mode)
			- PDOStatement::setFetchMode(int $mode = PDO::FETCH_COLUMN, int $colno)
			- PDOStatement::setFetchMode(int $mode = PDO::FETCH_CLASS, string $class, array|null $constructorArgs)
			- PDOStatement::setFetchMode(int $mode = PDO::FETCH_INTO, object $object)
			- Set the default fetch mode for this statement
			- Returns true on success or false on failure.

*/
include 'connect.php';

echo '<pre>'; 
	// print_r( $result );
	// var_dump( $results );
echo '</pre>';

?>
<!DOCTYPE html>
<html>
<head>
	<title>Learn PHP PDO - Fetch data</title>
</head>
<body>
	<h1>PHP PDO Fetch data</h1>
</body>
</html>