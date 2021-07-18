<?php
/*
	- PHP Static methods and properties:
		- Declaring class properties or methods as [ static ] makes them accessible without needing an instantiation of the class.
		- Static methods and properties are declared with the [ static ] keyword
		- These can also be accessed statically within an instantiated class object.
		- To access a static method or property use the class name, double colon  [ :: ], and the method or property name.
		- Syntax: ClassName::staticMethod();
		- [ :: ] called => Scope Resolution Operator
		- Because static methods are callable without an instance of the object created, 
			the pseudo-variable [ $this ] is not available inside methods declared as static.
		- to access to static method or static property inside a class we use [ self ] keyword

*/

class User {

	public static $name = 'AzBba';

	public static function sayHello() {
		echo 'Hello ' . self::$name;
	}

}

echo User::$name . '<br/>';
User::sayHello(); 

?>
<!DOCTYPE html>
<html>
<head>
	<title>Learn PHP - Static methods and properties</title>
</head>
<body>
	<h1>PHP Static methods and properties</h1>
</body>
</html>