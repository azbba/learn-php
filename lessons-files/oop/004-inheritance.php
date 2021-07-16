<?php
/*
	- PHP Inheritance:
		- Inheritance allows you to reuse the code from another class without duplicating it.
		- In inheritance, you have a parent class and a child class
		- The child class inherit from the parent his proprties and methods, so you can use it with redeclare it.
		- Inheritance allows you to write the code in the parent class and use it in both parent and child classes.
		- An inherited class is defined by using the [ extends ] keyword.
		- The child class may contain its own properties and methods 
		- Exp:
*/

class User {
	// Properties
	public string $name;
	public string $email;
	public int $age;
	// Methods
	public function set_properties( $name, $email, $age ) {
		$this->name = $name;
		$this->email = $email;
		$this->age = $age;
	}
}

class Porfile extends User {
	// All propertiess and methods of User are inherit, you can use it without create user class
}

$profile = new Porfile();
$profile->set_properties( 'AzBba', 'az34bba@gmail.com', 29 );

echo '<pre>'; 
	var_dump( $profile );
echo '</pre>'

?>
<!DOCTYPE html>
<html>
<head>
	<title>Learn PHP - Inheritance</title>
</head>
<body>
	<h1>PHP Inheritance</h1>
</body>
</html>