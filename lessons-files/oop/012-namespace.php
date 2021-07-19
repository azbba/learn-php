<?php
/*
	- PHP Namespace:
		- Namespace it's a way of encapsulating items.
		- Namespaces are designed to solve two problems:
			- Name collisions between code you create, and internal PHP code.
			- Ability to alias (or shorten) Extra_Long_Names designed to alleviate the first problem, improving readability of source code.
		- PHP Namespaces provide a way in which to group related classes, interfaces, functions and constants. 
		- Namespace names are case-insensitive.
		- Namespace name [ PHP ] are reserved for internal language and should not be used in the userspace code.
		- Namespaces are declared using the [ namespace ] keyword.
		- A file containing a namespace must declare the namespace at the top of the file before any other code
		- Without any namespace definition, all class and function definitions are placed into the global space.
		- Namespace syntax:
			[ namespace keyword ] [ namespace_name ];
		- Exp:
			namespace App;
		- Much like directories and files, PHP namespaces also contain the ability to specify a hierarchy of namespace names. Thus, a namespace name can be defined with sub-levels:
		- Exp:
			namespace App\Controllers;
			namespace App\Controllers\User;
			namespace App\Models\User;
		- Defining multiple namespaces in the same file (There are two allowed syntaxes.)
			-  Declaring multiple namespaces, simple combination syntax
				- Exp:
					namesapce App;
						class User {}
					namespace Dashboard;
						class Dashboard {}
				- This syntax is not recommended for combining namespaces into a single file. Instead it is recommended to use the alternate bracketed syntax.
			- Declaring multiple namespaces, bracketed syntax
				- Exp:
					namesapce App {
						class user {}
					}
					namespace Dashboard {
						class Dashboard {}
					}
				- It is strongly discouraged as a coding practice to combine multiple namespaces into the same file.
			- Declaring multiple namespaces and unnamespaced code
				- Exp:
					namesapce {
						// Without namespace name mean it is a global code
					}
		- The [ __NAMESPACE__ ] magic constant is:
			- is a string that contains the current namespace name. In global, un-namespaced code, it contains an empty string.
		- The ability to refer to an external fully qualified name with an alias, or importing, is an important feature of namespaces.
			- Aliasing is accomplished with the use operator:
				- #1 importing/aliasing with the use operator
					use App\User as Author;
					$author = new Author();
				- #2 importing/aliasing with the use operator, multiple use statements combined
					User App\User as Author, App\Profile;
*/

namespace App\User;

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

echo '<pre>';
	var_dump( $user );
	echo __NAMESPACE__;
echo '</pre>';

?>
<!DOCTYPE html>
<html>
<head>
	<title>Learn PHP - Namespace</title>
</head>
<body>
	<h1>PHP Namespace</h1>
</body>
</html>