<?php
/*
	- PHP Abstraction:
		- abstraction is a concept in which a class has methods without implementation.
		- The idea is to have a template and let the child class that inherits the parent class implement the method.
		- An abstract class or method is defined with the [ abstract ] keyword
		- Class defined as abstract cannot be instantiated
		- Can have properties and methods but it is not the best practice
		- abstract methods cannot contain body
		- Methods in the child class must following:
			* The child class method must be defined with the same name of the parent abstract method. 
			* The child class method must be defined with the same or a less restricted access modifier
			* The number of required arguments must be the same. However, the child class may have optional arguments in addition
*/

abstract class Page {
	abstract protected function create();
	abstract protected function update( $id );
	abstract protected function delete( $id );
	abstract protected function view( $id );
}

class User extends Page {
	public function create() {
		echo 'create page';
	}
	public function update( $id ) {
		echo 'Update page';
	}
	public function delete( $id ) {
		echo 'Delete page';
	}
	public function view( $id ) {
		echo 'Details page';
	}
}

// $page = new Page(); // Fatal error: Cannot instantiate abstract class
$user = new User();
echo $user->update( 20 );

echo '<pre>'; 
	var_dump( $user );
echo '</pre>'

?>
<!DOCTYPE html>
<html>
<head>
	<title>Learn PHP - Abstraction</title>
</head>
<body>
	<h1>PHP Abstraction</h1>
</body>
</html>