<?php
/*
	- PHP Encapsulation:
		- is a concept where we encapsulate all the data and member functions together to form an object.
		- It keeps the data and the code safe from external interference.
		- Exp: ( Prevent change and view password from outside the User Class  )
*/
class User {
	// Set visibilty to priavte to Prevent display and change the password
	private string $password;
	// Method to change the password with some rules
	public function set_password( $pass ) {
		$this->password = sha1( filter_var( $pass, FILTER_SANITIZE_STRING ) );
	}
}

$user = new User();
$user->set_password( '12345' );
// $user->password = '12345677'; // Fatal error: Uncaught Error: Cannot access private property User::$password
// echo $user->password; // Fatal error: Uncaught Error: Cannot access private property User::$password

echo '<pre>'; 
	var_dump( $user );
echo '</pre>'

?>
<!DOCTYPE html>
<html>
<head>
	<title>Learn PHP - Encapsulation</title>
</head>
<body>
	<h1>PHP Encapsulation</h1>
</body>
</html>