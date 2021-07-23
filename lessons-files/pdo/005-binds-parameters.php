<?php
/*
	- PHP PDO Binds Parameters
	[01] 
		- PDOStatement::execute( array|null $params = null )
		- Executes a prepared statement.
		- $params parameter:
			- An array of values with as many elements as there are bound parameters in the SQL statement being executed.
			- All values are treated as PDO::PARAM_STR.
		- Returns true on success or false on failure.

		- Exp 1:
			$stmt = $db->prepare( "SELECT * FROM users WHERE username = :username AND password = :password" );
			$stmt->execute( [
				':username'	=> 'azbba', // key can be [ :username || username ] and must be exists in sql statement. 
				':password'	=> 'secret'
			]);

		- Exp 2:
			$stmt->execute( ['azbba', 'secret'] ); // Without use the keys, values are treated as a sequence.

		- Exp 3:
			$stmt = $db->prepare( "SELECT * FROM users WHERE username = ? AND password = ?" );
			$stmt->execute( [ 'azbba', 'secret' ] );

		- Execute multiple values with one prepared statement.
			- Exp:
				$stmt = $db->prepare( "SELECT * FROM users WHERE username = :username AND password = :password" );
				// One
				$stmt->execute( [
					':username'	=> 'azbba',
					':password'	=> 'secret'
				]);
				// Two
				$stmt->execute( [
					':username'	=> 'azzedine',
					':password'	=> 'secret'
				]);
	
	[02]
		- PDOStatement::bindParam( string|int $param, mixed &$var, int $type = PDO::PARAM_STR, int $maxLength = 0, mixed $driverOptions = null )
		- Binds a PHP variable to a corresponding named or question mark placeholder in the SQL statement that was used to prepare the statement. 
		- Unlike PDOStatement::bindValue(), the variable is bound as a reference and will only be evaluated at the time that PDOStatement::execute() is called.
		- $param			=> Parameter identifier
								* :name 			=> For a prepared statements using named placeholder
								* 1-indexed		=> For a prepared statements using question mark placeholders.
		- $var			=> Name of PHP variable to bind to the SQL statement parameter
		- $type			=> Explicit data type for the parameter using the PDO::PARAM_* constants.
								* PDO::PARAM_BOOL	=> Represents a boolean data type.
								* PDO::PARAM_INT	=> Represents the SQL INTEGER data type.
								* PDO::PARAM_STR	=> Represents the SQL CHAR, VARCHAR, or other string data type.
								* To see the full list [ https://www.php.net/manual/en/pdo.constants.php ]
		- $maxLength	=> Length of the data type
		- Returns true on success or false on failure.
		- Exp:
			$username 	= 'Azzedine Bba';
			$password 	= 'secert';
			$email		= 'azd.bba@gmail.com';
			$stmt = $db->prepare( 'INSERT INTO users (username, password, email) VALUES (:username, :password, :email)' );
			$stmt->bindParam( ':username', $username, PDO::PARAM_STR, 50 ); // [ $type and $maxlength is not required ]
			$stmt->bindParam( ':password', $password, PDO::PARAM_STR, 50 );
			$stmt->bindParam( ':email', $email, PDO::PARAM_STR, 100 );
			$stmt->execute();
		- If you change the value of $var before you execute the statments the new value will sended
			- Exp: same previews example and change [ $username... ] value before execute the statments
				$username = 'New username'; // ...
				$stmt->execute(); // New usename will sended to db
	
	[03] 
		- PDOStatement::bindValue( string|int $param, mixed $value, int $type = PDO::PARAM_STR )
		- Binds a value to a corresponding named or question mark placeholder in the SQL statement that was used to prepare the statement.
		- Returns true on success or false on failure.
		- Exp:
			$username = 'azbba';
			$password = 'secret';
			$stmt = $db->prepare( 'SELECT * FROM users WHERE username = ? AND password = ? LIMIT 1' );
			$stmt->bindValue( 1, $username );
			$stmt->bindValue( 2, $password );
			* // No effects if you change the $vars values 
			$stmt->execute();
			$result = $stmt->fetch();
	
	[04]
		- PDOStatement::bindColumn( string|int $column, mixed &$var, int $type = PDO::PARAM_STR, int $maxLength = 0, mixed $driverOptions = null )
		- Bind a column to a PHP variable
		- Returns true on success or false on failure.
		- Work with PDO::FETCH_BOUND mode
		- Exp
			$stmt = $db->prepare( 'SELECT username, password FROM users' );
			$stmt->bindColumn(1, $username);
			$stmt->bindColumn(2, $password);
			$stmt->execute();
			while ( $stmt->fetch( PDO::FETCH_BOUND ) ) {
				echo 'Hello ' . $username . ' Your password is ' . $password . '<br/>';
			}
*/

include 'connect.php';

?>
<!DOCTYPE html>
<html>
<head>
	<title>Learn PHP PDO - Binds Parameters</title>
</head>
<body>
	<h1>PHP PDO Binds Parameters</h1>
</body>
</html>