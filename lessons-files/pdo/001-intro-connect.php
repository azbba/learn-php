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
								'mysql:host=?port=;dbname=?;charset=?;'
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
		- Error mode:
			[
				PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
			]
*/

try {
	
	$dsn = 'mysql:host=localhost;dbname=learn_php;';
	// $dsn = 'mysql:host=localhost;dbname=learn_php;charset=utf8;';
	$user = 'root';
	$pass = '';
	$options = [
		PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
		PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
	];

	$db = new PDO( $dsn, $user, $pass, $options );

	// $db->exec( 'set names utf8' );

} catch ( PDOException $e ) {
	die( $e->getMessage() );
}

echo '<pre>'; 
	var_dump( $db );
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