<?php
/*
	- PHP PDO Counts
		[01] 
			- PDOStatement::rowCount()
			- Returns the number of rows affected by the last SQL statement
			- returns the number of rows affected by the last DELETE, INSERT, or UPDATE statement executed by the corresponding PDOStatement object.
			- Exp:
				$stmt = $db->prepare( 'SELECT * FROM user WHERE username = :uname AND password = :pass' );
				$stmt->execute([
					':uname'	=> 'azbba',
					':pass'	=> 'secret'
				]);
				if ( $stmt->rowCount() ) { // If there's records in database 
					$result = $stmt->fetch();
					echo 'Hello ' . $result['username'] . ' how are you?';
				} else {
					echo 'Incorrect username or password';
				}
		
		[02]
			- PDOStatement::columnCount()
			- Returns the number of columns in the result set
			- Returns the number of columns in the result set represented by the PDOStatement object, even if the result set is empty. 
			- If there is no result set, PDOStatement::columnCount() returns 0.
			- Exp:
				$stmt = $db->prepare( 'SELECT * FROM users' );
				$stmt->execute();
				echo $stmt->columnCount(); // Return number of columns in users table

				$stmt = $db->prepare( 'SELECT username, password FROM users' );
				$stmt->execute();
				echo $stmt->columnCount(); // 2 == [ username, password ]
*/

include 'connect.php';

?>
<!DOCTYPE html>
<html>
<head>
	<title>Learn PHP PDO - Counts</title>
</head>
<body>
	<h1>PHP PDO Counts</h1>
</body>
</html>