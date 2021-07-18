<?php
	/**
		- PHP Operators:

		- Arithmetic Operators
			[ + ]		=> Addition
			[ - ] 	=> Subtraction
			[ * ] 	=> Multiplication
			[ / ] 	=> Division
			[ % ]	 	=> Modulus
			[ ** ] 	=> Exponentiation
			[ -$a ] 	=> Negation
			[ +$a ]	=> Identity

		- Assignment Operators:
			[ = ]		=> Assignment 
			[ .= ]	=> Concatenation assignment
			[ += ]	=> Addition
			[ -= ] 	=> Subtraction
			[ *= ] 	=> Multiplication
			[ /= ] 	=> Division
			[ %= ]	=> Modulus
			[ **= ] 	=> Exponentiation

		- Comparison Operators ( allow you to compare two values ):
			[ == ]		=> Equal => ( return [true] if [$a] equal to $[b]  )
			[ === ]		=> Identical => Same value And same data type
			[ != ]		=> Not Equal
			[ <> ]		=> Not Equal
			[ !==]		=> Not identical
			[ < ]			=> Less than
			[ > ]			=> Greater than
			[ <= ]		=> Less than or Equal
			[ >= ]		=> Greater than or Equal

		- Incrementing/Decrementing Operators:
			[ ++$a ]		=> Pre-increment
			[ $a++ ]		=> Post-increment
			[ --$a ]		=> Pre-decrement
			[ $a--]		=> Post-decrement

		- Logical Operators:
			[ AND ]		=> Both ( $x ) and ( $y ) are true
			[ && ]		=> Same as [ AND ]
			[ OR ]		=> True if either ( $x ) or ( $y ) is true
			[ || ]		=> Same as [ OR ]
			[ ! ]			=> Not true
			[ XOR ]		=> True if either ( $x ) or ( $y ) is true, but not both
		
		- String Operators
			[ . ]			=> Concatenation
			[ .= ]		=> Concatenation assignment

		- Error Control Operators:
			[ @ ]			=> Exp:
								$file = @fopen('test.txt', 'r') or die('File not found'); 

		- Conditional Operator:
			[ ? : ]		=> Ternary
								Exp:
									$a == $b ? 'Good' : 'Bad';
			[ ?? ]		=> Null coalescing
								Exp:
									echo $a ?? 'anonymous';

		- Array Operators
			[ + ]			=> Union
			[ == ]		=> Equality
			[ === ]		=> Identity
			[ != ]		=> Inequality
			[ <> ]		=> Inequality
			[ !== ]		=> Non-identity
				Exp:
					$a = [
						'a'	=> 'Apple',
						'b'	=> 'Banana'
					];
					$b = [
						'c'	=> 'Cat',
						'd'	=> 'Dog'
					];
					var_dump( $a + $c );
					// Results:
						[
							'a'	=> 'Apple',
							'b'	=> 'Banana',
							'c'	=> 'Cat',
							'd'	=> 'Dog'
						]
	*/
?>
<!DOCTYPE html>
<html>
<head>
	<title>Learn PHP - Operators</title>
</head>
<body>
	<h1>PHP Operators</h1>
</body>
</html>