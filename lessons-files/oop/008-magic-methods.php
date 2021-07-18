<?php
/*
	- PHP Magic methods:
		- Magic methods are special methods that are aimed to perform certain tasks.
		- These methods are named with double underscore [ __ ] as prefix.
		- All these function names are reserved and can't be used for any purpose other than associated magical functionality.
		- Magical method in a class must be declared public.
		- These methods act as interceptors that are automatically called when certain conditions are met.

		[01] __construct( mixed ...$values = "" )
			- construct method will automatically called when the object is created.
			- so it is suitable for any initialization that the object may need before it is used.
			- In PHP 8.0: PHP introduced the new concept of called constructor, 
				so we can now create properties for a class as constructor’s arguments
				Exp:
					public function __construct ( public $name, priavte $password ) {}
			- Parent constructors are not called implicitly if the child class defines a constructor
			- To call a parent constructor must use [ parent::__construct() ] within the child constructor
			- If a class has no constructor, or the constructor has no required arguments, the parentheses may be omitted.

		[02] __destruct():
			- destruct method will automatically called at the end of the script.
			- destruct method will be called when the class instance is removed from the memory.
			- destruct method controlled by the garbage collector that clears an item if it is no longer necessary 
			- This approach is also utilized for resource cleanup and memory free to accommodate more.
		
		[03] __construct() vs __destruct()
			- Constructors: Accepts one or more arguments.
			- Destructors: No arguments are passed

			- Constructor is involved automatically when the object is created.
			- Destructor is involved automatically when the object is destroyed.

			- Constructor used to initialize the instance of a class.
			- Destructor used  to de-initialize objects already existing to free up memory for new accommodation

			- Constructor used to initialize data members of class.
			- Destructor used to make the object perform some task before it is destroyed.
		
		[04] __call( $name, $arguments ) 
			- is triggered when invoking inaccessible methods in an object context.
			- The $name argument is the name of the method being called
			- $arguments argument is an enumerated array containing the parameters passed to the $name'ed method.
		
		[05]	__set( $name, $value ) 
			- is run when writing data to inaccessible (protected or private) or non-existing properties.

		[06] __get( $name ) 
			- is utilized for reading data from inaccessible (protected or private) or non-existing properties.
		
		[...] See the full list in:
			https://www.php.net/manual/en/language.oop5.magic.php
			( 
				__callStatic(), __isset(), __unset(),
				__sleep(), __wakeup(), __serialize(),
				__unserialize(), __invoke(), __set_state(), 
				__clone(), __debugInfo()
			)

*/

class User {

	public string $name;
	public string $email;
	public int $age;
	private string $password;
	

	public function __construct( $name, $email, $age ) {
		$this->name = $name;
		$this->email = $email;
		$this->age = $age;
	}

	public function __call( $name, $arguments ) {
		echo "Calling a not found or not accessible method '$name' with this arguments " . implode(', ', $arguments);
	}

	public function __set( $name, $value ) {
		echo 'You cannot set the property " ' . $name . ' " because it is not found or not accessible';
	}

	public function __get( $name ) {
		echo 'The property " ' . $name . ' " not found or not accessible';
	}

	public function __destruct() {
		// echo "The object has ben destroyed";
	}
}

$user = new User( 'AzBba', 'az92bba@gmail.com', 29 );

echo '<pre>'; 
	var_dump( $user );
echo '</pre>'

?>
<!DOCTYPE html>
<html>
<head>
	<title>Learn PHP - Magic methods</title>
</head>
<body>
	<h1>PHP Magic methods</h1>
</body>
</html>