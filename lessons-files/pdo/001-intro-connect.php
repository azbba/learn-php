<?php
/*
	- PHP Data Object
		- A set of PHP extensions that provide a core PDO class and database specific drivers.
		- Syntax:
			PDO( $dsn, $username, $password, $options )
		- Parameters:
			- $dsn	=> - The data source name
							- Contains the information required to connect to the database.
							- Exp: 
								'mysql:host=?port=;dbname=?;charset=?;connect_timeout=?'
								'mysql:host=localhost;dbname=db';
			- $username	=> The user name for the DSN string.
			- $password	=> The password for the DSN string.
			- $options	=> Array of driver-specific connection options.
		- Returns a PDO object on success.
		- 3 ways to set the encoding to utf8
			- [1]	=> From $dsn parameter:
						'mysql:host=localhost;dbname=db;charset=utf8';
			- [2]	=> Using $options Parameter:
				[
					PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
				]
			- [3] => Using exec() method:
				$connect->exec( 'set names utf8' );
		- Error reporting:
			[
				PDO::ATTR_ERRMODE [
					PDO::ERRMODE_SILENT,
					PDO::ERRMODE_EXCEPTION,
					PDO::ERRMODE_WARNING,
				]
			]
		- Case ( Force column names to a specific case )
			[
				PDO::ATTR_CASE [
					PDO::CASE_LOWER	=> Force column names to lower case.
					PDO::CASE_NATURAL	=> Leave column names as returned by the database driver.
					PDO::CASE_UPPER	=> Force column names to upper case.
				]
			]
		- Conversion of NULL and empty strings. ( for all drivers not just Oracle )
			[
				PDO::ATTR_ORACLE_NULLS [
					PDO::NULL_NATURAL 			=> No conversion.
					PDO::NULL_EMPTY_STRING:		=> Empty string is converted to null.
					PDO::NULL_TO_STRING			=> NULL is converted to an empty string.
				]
			]
		- Convert numeric values to strings when fetching
			[
				PDO::ATTR_STRINGIFY_FETCHES	=> true | false
			]
		- Specifies the timeout duration in seconds.
			[
				PDO::ATTR_TIMEOUT		=> Requires int
			]
		- Enables or disables emulation of prepared statements.
			[
				PDO::ATTR_EMULATE_PREPARES	=> true | false
			]
		- Set default fetch mode
			[
				PDO::ATTR_DEFAULT_FETCH_MODE [
					PDO::FETCH_BOTH	=> Return an array indexed by both 0-indexed and column name (default).
					PDO::FETCH_ASSOC	=> Returns an array indexed by column name.
					PDO::FETCH_CLASS	=> Returns a new instance of the requested class, mapping the columns of the result set to named properties in the class.
					...					=> [ More mode when learn PDOStatement::fetch ]
				]
			]
*/

try {
	
	$dsn = 'mysql:host=localhost;dbname=learn_php;';
	// $dsn = 'mysql:host=localhost;dbname=learn_php;charset=utf8;';
	$user = 'root';
	$pass = '';
	$options = [
		PDO::ATTR_DEFAULT_FETCH_MODE 	=> PDO::FETCH_ASSOC,
		PDO::ATTR_TIMEOUT					=> 30,
		PDO::ATTR_ERRMODE 				=> PDO::ERRMODE_EXCEPTION,
		PDO::MYSQL_ATTR_INIT_COMMAND 	=> "SET NAMES utf8"
	];

	$db = new PDO( $dsn, $user, $pass, $options );

	// $db->exec( 'set names utf8' );

} catch ( PDOException $e ) {
	die( $e->getMessage() );
}
// $db->query( 'INSERT INTO users (username, password, email) VALUES( "azzedine", "secret", "az92bba@gmail.com" )' );
// $db->query( 'UPDATE users SET username = "azzedine" WHERRE username = "azzedine"' );
// $db->query( 'DELETE FROM users WHERE username = "azzedine"' );
// $db->query( 'SELECT * FROM users' )->fetchAll();

echo '<pre>'; 
	print_r( $db->query(' SELECT * FROM users ')->fetchAll() );
echo '</pre>';

?>
<!DOCTYPE html>
<html>
<head>
	<title>Learn PHP - PHP Data Object</title>
</head>
<body>
	<h1>PHP Data Object</h1>
</body>
</html>