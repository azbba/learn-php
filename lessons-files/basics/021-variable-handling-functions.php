<?php
	/*
		- PHP Variable handling Functions:
			[01]
				- empty(mixed $var)
				- Determine whether a variable is empty
				- Returns false if var exists and has a non-empty, non-zero value. Otherwise returns true.
				- Exp!
					$arr = [];
					var_dump( empty ( $arr ) ); // true
			[02]
				- gettype(mixed $value)
				- Get the type of a variable
				- Possible values for the returned string are:
					boolean, integer, double, string, array, object, resource, resource (closed) 'PHP7.2.0' , NULL, unknown type
			[03]
				- intval(mixed $value, int $base = 10)
				- Get the integer value of a variable
				- The integer value of value on success, or 0 on failure. Empty arrays return 0, non-empty arrays return 1.
				- Exp:
					var_dump( intval( '29' ) ); // int(29)
			[04]
					[04-01 ]
						- is_array(mixed $value)
						- Finds whether a variable is an array
					[04-02 ]
						- is_bool(mixed $value)
						- Finds out whether a variable is a boolean
					[04-04 ]
						- is_float(mixed $value)
						- Finds whether the type of a variable is float
					[04-05 ]
						- is_int(mixed $value)
						- Find whether the type of a variable is integer
					[04-07 ]
						- is_numeric(mixed $value)
						- Finds whether a variable is a number or a numeric string
					[04-08 ]
						- is_string(mixed $value)
						- Find whether the type of a variable is string
					[04-09 ]
						- is_object(mixed $value)
						- Finds whether a variable is an object
					[04-10]
						- is_null(mixed $value)
						- Finds whether a variable is null
					[04-10]
						- is_resource(mixed $value)
						- Finds whether a variable is a resource
					[04-10]
						- is_iterable(mixed $value)
						- Verify that the contents of a variable is an iterable value
						- Exp:
							var_dump(is_iterable([1, 2, 3]));  // bool(true)
					[04-11]
						- is_countable(mixed $value)
						- Verify that the contents of a variable is a countable value
						- Exp:
							var_dump(is_countable([1, 2, 3])); // bool(true)
			[05]
				- isset(mixed $var, mixed ...$vars)
				- Determine if a variable is declared and is different than null
				- Returns true if var exists and has any value other than null. false otherwise.
				- Exp:
					var_dump( $_POST['username'] ); // false
					var_dump( $_POST['username'], $_POST['password'] ); // false
			[06]
				- print_r(mixed $value, bool $return = false)
				- Prints human-readable information about a variable
			[07]
				- unset(mixed $var, mixed ...$vars)
				- Unset a given variable
				- Exp:
					$name = 'azbba';
					unset( $name );
					var_dump( $name ); // NULL + Notice: Undefined variable: name
			[08]
				- var_dump(mixed $value, mixed ...$values)
				- Dumps information about a variable
				- Exp:
					var_dump( 29 ); // int(29)
	*/
?>
<!DOCTYPE html>
<html>
<head>
	<title>Learn PHP - Variable handling Functions</title>
</head>
<body>
	<h1>PHP Variable handling Functions</h1>
</body>
</html>