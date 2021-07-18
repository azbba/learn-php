<?php
/*
	- PHP Method Chaining:
		- Method chaining is a fluent interface design pattern used to simplyify your code.
		- Must return [ $this ] in each method we want to chain from.
		- Exp:
*/

class User {

	public string $name;
	public string $email;
	public int $age;

	public function __construct( string $name, string $email, int $age ) {
		$this->name = $name;
		$this->email = $email;
		$this->age = $age;
	}

	public function print_name() {
		echo $this->name . ' <br/>';
		return $this;
	}

	public function print_email() {
		echo $this->email . ' <br/>';
		return $this;
	}

	public function print_age() {
		echo $this->age . ' <br/>';
		return $this;
	}

}

$user = new User( 'AzBba', 'az34bba@gmail.com', 29 );

$user->print_name()->print_email()->print_age();

echo '<pre>' ;
	var_dump($user);
echo '</pre>';

?>
<!DOCTYPE html>
<html>
<head>
	<title>Learn PHP - Method Chaining</title>
</head>
<body>
	<h1>PHP Method Chaining</h1>
</body>
</html>