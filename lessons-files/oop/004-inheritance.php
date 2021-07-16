<?php
/*
	- PHP Inheritance:
		- Inheritance allows you to reuse the code from another class without duplicating it.
		- In inheritance, you have a parent class and a child class
		- The child class inherit from the parent his proprties and methods, so you can use it with redeclare it.
		- Inheritance allows you to write the code in the parent class and use it in both parent and child classes.
		- An inherited class is defined by using the [ extends ] keyword.
		- The child class may contain its own properties and methods 
		- To override a property or method in child class 
			you must use the same name of the property or the method in the child class
		- To prevent the override use the [ final ] keyword
			* for methods	=> You cannot override final methods or redeclare it (Use the method as what parent say). 
			* for classs	=> You cannot inherit from the final class.
		- Exp:
*/

final class User {
	// Properties
	public string $name;
	public string $email;
	public int $age;
	protected string $password; 
	// Methods
	public function set_properties( $name, $email, $age ) {
		$this->name = $name;
		$this->email = $email;
		$this->age = $age;
	}
	// Set password
	final public function set_password( $password ) {
		$this->password = sha1( filter_var( $password, FILTER_SANITIZE_STRING ) );
	}
}

class Porfile extends User {
	// All propertiess and methods of User are inherit, you can use it without create user class
	public string $address;
	public string $country;
	public string $phone;
	// Override set_properties() method
	public function set_properties( $name, $email, $age, $address = '', $country = '', $phone = '' ) {
		// Old method code
		$this->name = $name;
		$this->email = $email;
		$this->age = $age;
		// New method code
		$this->address = $address;
		$this->country = $country;
		$this->phone = $phone;
	}
	// You cannot override the set_password()
}

$profile = new Porfile();
$profile->set_properties( 'AzBba', 'az34bba@gmail.com', 29 );
$profile->set_password( '1234567890' );

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