<?php
/*
	- PHP PDO Transaction
	- Database transactions represent a “block” or “unit” of work.
	- this “unit” of work will consist of multiple queries that are somehow related to one another.
	- In certain scenarios, you might want to ensure that all queries have executed successfully BEFORE you commit the changes to the database.
	[01]
		- PDO::beginTransaction()
		- Initiates a transaction
		- Returns true on success or false on failure.
		- Exp:
			see examples bottom
	[02]
		- PDO::inTransaction()
		- Checks if inside a transaction
		- Checks if a transaction is currently active within the driver. This method only works for database drivers that support transactions.
		- Returns true if a transaction is currently active, and false if not.
	[03]
		- PDO::rollBack()
		- Rolls back a transaction
		- Rolls back the current transaction, as initiated by PDO::beginTransaction().
		- Returns true on success or false on failure.
	[04]
		- PDO::commit()
		- Commits a transaction
		- Commits a transaction, returning the database connection to autocommit mode until the next call to PDO::beginTransaction() starts a new transaction.
		- Returns true on success or false on failure.
*/

include 'connect.php';

try {
	// Initiates a transaction
	$db->beginTransaction();
	// Statement 1
	$stmt = $db->prepare('UPDATE users SET username = :nname WHERE username = :uname');
	$stmt->execute([
		'nname'	=> 'New Name',
		'uname'	=> 'azbba'
	]);

	// Transaction status
	// var_dump( $db->inTransaction() );

	if ( $stmt->rowCount() ) { // If the first statements done do the second one
		// Statement 2
		$stmt1 = $db->prepare( 'DELETE FROM users WHERE username = :uname' );
		$stmt1->execute([
			'uname'	=> 'New Name'
		]);
	}

	// Commit the changes
	$db->commit();
} catch (PDOException $e) {
	$db->rollBack();
	echo $e->getMessage();
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Learn PHP PDO - Transaction</title>
</head>
<body>
	<h1>PHP PDO Transaction</h1>
</body>
</html>