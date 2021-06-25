<?php
/**
	- PHP Classes and objects:
		[01] classes:
			- Basic class definitions begin with the keyword [ class ]
			- Followed by a [ ClassName ]
			- Followec by a pair of curly braces [ {} ] 
			- A valid [ ClassName ] start with letter or undersore, followed by any letter or numbers
			- A Class may contain its own [ constants, variables( properties ), functions ( methods ) ]
			- Exp
				class User 
				{

				}
		[02] Objects:
			- To create an instance of a class, must us [ new ] keyword
			- class should be defined before instantiation
			- Exp:
				$user = new User();
		[03] Properties:
			- Variables inside the classes called properties
			- Properties defined by using on of keywords [ public, protected, private ] optionally
			- Follwoed by a normal variable declaration
			- You can add default value for a property
			- Exp:
				class User {
					public $name;
					public $age;
					public $email;
					public $status = true;
				}
			- As PHP 7.4.0 property definitions can include a [ Type declarations ]
			- Declarations type list:
				[ class, self, parent, array, callable, bool, float, int, string, object, mixed, iterable ]
			- Exp 
				class User {
					public string $name;
					public int $age;
					public string $email;
					public bool $status = true; 
				}
			- Set properties values:
				$user = new User();
				$user->name = 'AzBba';

			- Accessing properties:
				$user = new User();
				echo $user->name; // 'AzBba'
		[04] methods:
			- Functions inside the classes called methods
			- Their declaration and behavior are almost similar to normal functions,
			- Exp
				class User {
					public function login() {
						echo 'logged';
					}
				}
			- Accessing methods:
				$user = new User();
				$user->login();
			- changing propety value with method
			Exp:
				class User {
					public string $name;
					public function set_name( $name ) {
						$this->name = $name;
					}
				}
				$user = new User();
				$user->set_name = 'AzBba';
				echo $user->name; // AzBba
		[05] [ $this ] keyword:
				- [ $this ] refers to the current object
				- [ $this ] is a pseudo-variable which is only available inside methods.
				- Exp:
					( Preview Example of methods )
		[06] Constants:
			- Constants are pieces of information stored in the computer's memory which cannot be changed once assigned.
			- Class Constants are constants that are declared within classes.
			- To declaring class Constants, we use [ const ] keyword
			- class constant should be declared inside the class definition without [$]
			- Exp
				class User {
					public string $name;
					// Our constants
					const NAME_MIN_LENGTH = 5;
					const NAME_MAX_LENGTH = 20; 
				}
			- Accessing Class Constants:
				- There are two ways to access class constants
					1- Inside the class: the [ self ] keyword and [ :: ] === Scope Resolution Operator
						is used to access class constants from a method
					2- Outside the class: by using the name of the class or the instance [ $object ] and [ :: ] and the name of the constant
				- Exp
					class User {
						public string $name;
						// Our constants
						const NAME_MIN_LENGTH = 3;
						const NAME_MAX_LENGTH = 20;
						
						// Our methods
						public function set_name( $name ) {
							if ( strlen($name) < self::NAME_MIN_LENGTH || strlen($name) > self::NAME_MAX_LENGTH ) {
								echo 'The name must be between ' . self::NAME_MIN_LENGTH . ' And ' . self::NAME_MAX_LENGTH . ' Character';
								return;
							}
							$this->name = $name;
						}
					}
					$user = new User();
					echo User::NAME_MAX_LENGTH;
					echo $user::NAME_MAX_LENGTH;
		[07] $this vs self
				- $this refer to the current object
				- self refer to the current object
*/

class User {
	// Properties
	public $name;
	// Properties with Type declarations PHP 7.4.0
	public string $email;
	// Properties with default value
	protected bool $status = true;
	// Constants
	const NAME_MIN_LENGTH = 3;
	const NAME_MAX_LENGTH = 20;
	// Methods
	public function set_name( $name ) {
		$name_length = strlen( $name );
		if ( $name_length < self::NAME_MIN_LENGTH || $name_length > self::NAME_MAX_LENGTH  ) {
			echo 'The name must be between ' . self::NAME_MIN_LENGTH . ' And ' . self::NAME_MAX_LENGTH . ' Character';
			return;
		}
		$this->name = filter_var( $name, FILTER_SANITIZE_STRING );
	}
}
// Create an object
$user = new User;
// Set the name
$user->set_name( 'AzBba' );
// Get the name
echo $user->name . '<br/>'; // 'AzBba'
// Get the max and min name length outside the class
echo 'Max length of the name is ' . User::NAME_MAX_LENGTH . ' Characters<br/>';
echo 'Min length of the name is ' . $user::NAME_MIN_LENGTH . ' Character<br/>';
// Var dump the object
echo '<pre>';
	var_dump( $user );
echo '</pre>';

?>
<!DOCTYPE html>
<html>
<head>
	<title>Learn PHP - Classes and objects:</title>
</head>
<body>
	<h1>PHP Classes and objects:</h1>
</body>
</html>