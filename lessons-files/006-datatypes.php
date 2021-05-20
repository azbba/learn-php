<?php
	/**
		- PHP Data types:
		- Use [ gettype() or var_dump() ] to get the type of a value
			gettype( $value )		=> Get the type of a variable
			var_dump( $value )	=> Dumps information about a variable

		- PHP supports the following data types:
			- $name 			= 'My Name';					=> string
			- $age  			= 29;								=> integer
			- $is_married	= false;							=> boolean
			- $salary		= 1500.00;						=> double ( floating-point number )
			- $friends		= [
				'One', 'Two', 'Three'
			];														=> array
			-
				class User {

				}
				$user 			= new User();					=> object
			- $empty 		= NULL;							=> NULL
			- $file			= fopen( 't.txt', 'r' );	=> resource

		- String: 	is a sequence of characters.
		- Integer:	is a non-decimal number, -2,147,483,648 and 2,147,483,647.
		- Double:	is a number with a decimal point or a number.
		- Boolean:	represents two possible states: TRUE or FALSE.
		- Array: 	stores multiple values in one single variable.
		- Object: 	classes and objects are the two main aspects of object-oriented programming.
		- NULL:		a variable of data type NULL is a variable that has no value assigned to it.
		- resource:	is a special variable, holding a reference to an external resource

		- Determine if variable is a specific data type:
			is_string( $value )
			is_array( $value )
			is_bool( $value )
			is_float( $value )
			is_int( $value )
			is_null( $value )
			is_resource( $value )
			is_object( $value )
	*/
?>
<!DOCTYPE html>
<html>
<head>
	<title>Learn PHP - Data types</title>
</head>
<body>
	<h1>PHP Data types</h1>
</body>
</html>