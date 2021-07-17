<?php
/*
	- PHP Visibility:
		- The visibility of a property, a method or (as of PHP 7.1.0) a constant can be defined by prefixing the declaration with the keywords public, protected or private
		- Class members declared [ public ] can be accessed everywhere
		- Members declared [ protected ] can be accessed only within the class itself and by inheriting and parent classes.
		- Members declared as [ private ] may only be accessed by the class that defines the member.
		- Class properties must be defined as [ public, private, or protected ].
		-  If declared using [ var ], the property will be defined as [ public ].
		- Class methods may be defined as [ public, private, or protected ]. 
		- Methods declared without any explicit visibility keyword are defined as [ public ].
		- As of PHP 7.1.0, class constants may be defined as [ public, private, or protected ]. 
		- Constants declared without any explicit visibility keyword are defined as [ public ].
*/

class User {
	public string $name = 'AzBba'; // Can access to it from anywhere.
	var $email = 'az34bba@gmail.com'; // === public
	private string $password; // Only this class can access to it.
	protected const STATUS = false; // Can access to it with this class, and inheriting classes

	function set_name( $name ) { // Method without visibility keyword are defined as [ public ]
		$this->name = $name;
	}

	public function set_password( $password ) { // Can access to this method from anywhere
		$this->password = sha1( $password );
	}
}

class Profile extends User {
	public function get_status() {
		echo self::STATUS == true ? 'Active' : 'Pending'; // Access to proteced constant of parent class
	}
}

$user = new User();
echo $user->name; // 'AzBba'
// echo $user->password; // Fatal error: // Cannot access private property
// echo $user::STATUS; // Fatal error: Cannot access protected const 

$profile = new Profile();
$profile->get_status();

echo '<pre>'; 
	var_dump( $user );
	var_dump( $profile );
echo '</pre>'

?>
<!DOCTYPE html>
<html>
<head>
	<title>Learn PHP - Visibility</title>
</head>
<body>
	<h1>PHP Visibility</h1>
</body>
</html>