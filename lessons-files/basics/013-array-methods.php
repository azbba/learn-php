<?php
	/**
		- PHP Arrays methods:
			$langs = ['HTML', 'CSS', 'JavaScript', 'PHP', 'MySQL'];
			$user = [
				'first_name' 	=> 'Azzedine',
				'user_name'		=> 'AzBba',
				'age'				=> 29,
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
			[08]
				- sort ( array &$array , int $flags = SORT_REGULAR )
				- Sort an array
				- Returns true on success or false on failure
				- Sort indexed array
				- $flags list:
					- SORT_REGULAR
					- SORT_NUMERIC
					- SORT_STRING
					- ...
				- Exp:
					$nums = [ 10, "10", 2, 3, 8, 6 ];
					sort( $nums, SORT_NUMERIC ); // true
					// new $nums = [ 2, 3, 6, 8, 10, "10" ]
			[09]
				- rsort ( array &$array , int $flags = SORT_REGULAR )
				- Sort an array in reverse order
				- Returns true on success or false on failure
				- $flags list: Same as sort() $flags
				- Sort indexed array
				- Exp:
					$nums = [ 10, "10", 2, 3, 8, 6 ];
					rsort( $nums, SORT_NUMERIC ); // true
					// new $nums = [ 10, "10", 8, 6, 3, 2 ]
			[10]
				- asort ( array &$array , int $flags = SORT_REGULAR )
				- Sort an array and maintain index association
				- Returns true on success or false on failure
				- $flags list: Same as sort() $flags
				- Sort Associative array
				- Sort the value not the key
				- Exp:
					$nums = [
						'two' 	=> 2,
						'one' 	=> 1,
						'three'	=> 3
					];
					asort( $nums, SORT_NUMERIC );
					// new $nums = [ 'one' => 1, 'two' => 2, 'three' => 3 ];
			[11]
				- arsort ( array &$array , int $flags = SORT_REGULAR )
				- Sort an array in reverse order and maintain index association
				- Returns true on success or false on failure
				- $flags list: Same as sort() $flags
				- Sort Associative array
				- Sort the value not the key
				- Exp:
					$nums = [
						'two' 	=> 2,
						'one' 	=> 1,
						'three'	=> 3
					];
					asort( $nums, SORT_NUMERIC );
					// new $nums = [ 'three' => 3, 'two' => 2, 'one' => 1 ];
			[12]
				- ksort ( array &$array , int $flags = SORT_REGULAR ) 
				- Sort an array by key
				- $flags list: Same as sort() $flags
				- Sort Associative array
				- Sort the array by the key
				- Exp:
					$nums = [
						'two' 	=> 2,
						'one' 	=> 1,
						'three'	=> 3
					];
					ksort( $nums, SORT_STRING );
					// new $nums = [ 'one' => 1, 'three' => 3, 'two' => 2 ];
			[12]
				- krsort ( array &$array , int $flags = SORT_REGULAR ) 
				- Sort an array by key in reverse order
				- $flags list: Same as sort() $flags
				- Sort Associative array
				- Sort the array by the key
				- Exp:
					$nums = [
						'two' 	=> 2,
						'one' 	=> 1,
						'three'	=> 3
					];
					krsort( $nums, SORT_STRING );
					// new $nums = [ 'two' => 2, 'three' => 3, 'one' => 1 ];
			[13]
				- array_reverse ( array $array , bool $preserve_keys = false )
				- Return an array with elements in reverse order
				- Returns the reversed array.
				- Exp
					array_reverse( $langs ); // [ 0 => 'MySQL', 1 => 'PHP'..., 4 => 'HTML' ]
					array_reverse( $langs, true ); // [ 4 => 'MySQL', 3 => 'PHP'..., 0 => 'HTML' ]
			[14]
				- shuffle ( array &$array )
				- Shuffle an array
				- Returns true on success or false on failure
				- Exp
					$nums = [1, 2, 3];
					shuffle( $langs ); // [3, 1, 2]
					shuffle( $langs ); // [2, 1, 3]
					shuffle( $langs ); // [1, 3, 2]
			[15]
				- array_fill ( int $start_index , int $count , mixed $value )
				- Fill an array with values
				- Returns the filled array
				- Exp:
					$arr = array_fill( 5, 3, 'AzBba' )
					// $arr = [ 5 => 'AzBba', 6 => 'AzBba', 7 => 'AzBba' ];
			[16]
				- array_sum ( array $array )
				- Calculate the sum of values in an array
				- Returns the sum of values as an integer or float; 0 if the array is empty.
				- Exp:
					$nums = [1, 2, 3];
					array_sum ( $nums ); // 6
			[17]
				- array_rand ( array $array , int $num = 1 )
				- Pick one or more random keys out of an array
				- Return int|string|array
				- Exp:
					$nums = ['One', 'Two', 'Three', 'Four', 'Five'];
					$randomKeys = array_rand( $nums, 3 ); // [0, 2, 3]
					$randomKeys = array_rand( $nums, 3 ); // [0, 1, 3]
					$randomKeys = array_rand( $nums, 3 ); // [1, 3, 4]
			[18]
				- array_unique ( array $array , int $flags = SORT_STRING )
				- Removes duplicate values from an array
				- Returns the filtered array.
				- $flags list same as sort $flags
				- Exp:
					$nums = [1, 1, 2, 2, 2, 3, 3, 4, 4];
					$unique = array_unique( $nums ); // [1, 2, 3, 4]
	*/
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