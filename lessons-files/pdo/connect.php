<?php

try {
	$dsn = 'mysql:host=localhost;dbname=learn_php;';
	$user = 'root';
	$pass = '';
	$options = [
		PDO::ATTR_DEFAULT_FETCH_MODE 	=> PDO::FETCH_ASSOC,
		PDO::ATTR_TIMEOUT				=> 30,
		PDO::ATTR_ERRMODE 				=> PDO::ERRMODE_EXCEPTION,
		PDO::MYSQL_ATTR_INIT_COMMAND 	=> "SET NAMES utf8"
	];
	$db = new PDO( $dsn, $user, $pass, $options );
} catch ( PDOException $e ) {
	die( $e->getMessage() );
}

// $db->query( 'INSERT INTO users (username, password, email) VALUES( "azzedine", "secret", "az92bba@gmail.com" )' );
// $db->query( 'UPDATE users SET username = "azzedine" WHERRE username = "azzedine"' );
// $db->query( 'DELETE FROM users WHERE username = "azzedine"' );
// $db->query( 'SELECT * FROM users' )->fetchAll();