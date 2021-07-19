<?php
/*
	- PHP Autoloading Classes
		- Autoloading allows you to automatically include the class files.
		- PHP introduced the spl_autoload_register() function that automatically loads a class file
			whenever you use a class that has not been loaded yet.
		- spl_autoload_register( callable $autoload_function = ?, bool $throw = true, bool $prepend = false )
		- Exp:
			spl_autoload_register( function($class) {
				include 'classes/' . $class . '.class.php';
			});
			// or
			function my_autoload ($pClassName) {
				include(__DIR__ . "/" . $pClassName . ".php");
			}
			spl_autoload_register("my_autoload");
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

}

$user = new User( 'AzBba', 'az34bba@gmail.com', 29 );

echo '<pre>' ;
	var_dump($user);
echo '</pre>';

?>
<!DOCTYPE html>
<html>
<head>
	<title>Learn PHP - Autoloading Classes</title>
</head>
<body>
	<h1>PHP Autoloading Classes</h1>
</body>
</html>