<?php
	/**
		- PHP Arrays methods:
			$langs = ['HTML', 'CSS', 'JavaScript', 'PHP', 'MySQL'];
			$user = [
				'first_name' 	=> 'Azzedine',
				'user_name'		=> 'AzBba',
				'age'				=> 92,
				'address'		=> [
					'country'	=> 'Algeria',
					'city'		=> 'B.B.A'
				]
			];

			[01]
				- in_array( mixed $needle, array $haystack, $stirct = false )
				- Checks if a value exists in an array
				- [ $stirct ] will also check the [ types ] of the [ needle ] in the [ haystack ]
				- return boolean ( true || false )
				Exp:
					in_array( 'PHP', $langs ) // true
			[02]
				- array_search( mixed $needle, array $haystack, $stirct = false )
				- Searches the array for a given value and returns the first corresponding key if successful
				- Returns the [ key ] for needle if it is found in the array, [false] otherwise.
				Exp:
					array_search( 'PHP', $langs ) //  3
			[03]
				- array_key_exists ( string|int $key , array $array )
				- Checks if the given key or index exists in the array
				- Returns true on success or false on failure.
				- Exp:
					array_key_exists( 'user_name', $user )
			[04]
				- array_push( array &$array , mixed ...$values )
				- Push one or more elements onto the end of array
				- Returns the new number of elements in the array.
				- Exp:
					array_push( $langs, 'Python', 'Dart' );
			[05]
				- array_unshift( array &$array , mixed ...$values )
				- Prepend one or more elements to the beginning of an array
				- Returns the new number of elements in the array.
				- Exp:
					array_unshift( $langs, 'Python' );
			[06]
				- array_pop ( array &$array )
				- Pop the element off the end of array
				- Returns the value of the last element of array. 
				- If array is empty (or is not an array), null will be returned.
				- Exp:
					array_pop( $langs );
			[07]
				- array_shift ( array &$array )
				- Shift an element off the beginning of array
				- Returns the shifted value, or null if array is empty or is not an array.
				- Exp:
					array_shift( $langs );

	*/
	$langs = ['HTML', 'CSS', 'JavaScript', 'PHP', 'MySQL'];
	$user = [
		'first_name' 	=> 'Azzedine',
		'user_name'		=> 'AzBba',
		'age'				=> 92,
		'address'		=> [
			'country'	=> 'Algeria',
			'city'		=> 'B.B.A'
		]
	];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Learn PHP - Arrays Methods</title>
</head>
<body>
	<h1>PHP Arrays Methods</h1>
</body>
</html>