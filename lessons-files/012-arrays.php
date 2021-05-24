<?php
	/**
		- PHP Arrays
		- An array is a special variable, which can hold more than one value at a time.
		- How to create an array:
			[ array() ] => use array built-in function
			[ [] ]		=> using curly braces
		- Exp:
			$langs = array( 'HTML', 'CSS', 'JavaScript', 'PHP', 'MySQL' );
			or
			$langs = [ 'HTML', 'CSS', 'JavaScript', 'PHP', 'MySQL' ];
			or 
			$numbers[] = 'One';
			$numbers[] = 'Two';
			$numbers[] = 'Three';
		
		- Access [or edit] to array elements [indexed array]:
			echo $langs[1]; // CSS
			$langs[2] = 'JS';

		- [ count( $array ) ] => built-in function used to calculate number of elements in array
	
		- In PHP, there are three types of arrays:
			indexed array:
				- The index will be represented by numbers.
				- By default array index starts from zero.
				- $numbers = ['One', 'Two', 'Theree']; // index 0 = 'One'
				- Loop through indexed array
					foreach ( $numbers as $number ) {
						echo $number;
					}
			Associative array
				- will have their index as [ string ] or [ int ]
				- index must be unique
				- index call [ key ]
				- $langs = [
					'HTML'	=> '%80',
					'CSS' 	=> '%85',
					'PHP' 	=> '%75',
				];
				- Access to elements
					echo $langs['PHP']; // '%75'
				- Loop through Associative array
					foreach ( $langs as $lang => $progress ) {
						echo 'My knowlage in ' . $lang . ' is ' . $progress . '<br />';
					}
			Multidimensional array
				each element in the main array can also be an array. 
				And each element in the sub-array can be an array, and so on
				Exp:
					$user = [
						'first_name'	=> 'Azzedine',
						'user_name'		=> 'AzBba',
						'age'				=> 29,
						'address'		=> [
							'country'	=> 'algeria',
							'city'		=> 'B.B.A'
						]
					];
				- Access to elements
					echo $user['address']['country']; // Algeria
	*/
?>
<!DOCTYPE html>
<html>
<head>
	<title>Learn PHP - Arrays</title>
</head>
<body>
	<h1>PHP Arrays</h1>
</body>
</html>