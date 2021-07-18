<?php
/**	
	- To get output in PHP you must use print Statements: 
	- [ echo ] => Output one or more strings
		Exp: echo 'Hello PHP';
	- [ print ] => Output a string
		Exp: print 'Hello PHP';
	- Difference between [ echo ] and [ print ] 
		Speed: 		[ echo ] is faster than [ print ]
		Expression: [ print ] behaves like a function
		Parameters: [ echo ] is valid to use a [,] between the strings but without using the [ () ] 
			Exp:
				echo "One", "Two"; 	// Valid
				echo ("One", "Two") 	// Not valid
				print "One", "Two"; 	// Not valid
				print ("One", "Two") // Not valid
		Return:
			[ Echo ] 	No value returned
			[ Print ]	Returns 1, always.
	- [ '' ] Single quote is faster than [ "" ]
	- [ printf ] Output a formatted string
		Syntax:
			printf ( $format, ...$values )
			Exp:
				printf( "1 + 1 is equl to %s", (1 + 1) );  // 1 + 1 is equl to 2
				printf( "1 + 1 is equl to %f", (1 + 1) );  // 1 + 1 is equl to 2.000000
			Specifiers:
				[ %s ] 	The argument is treated as a string.
				[ %f ] 	The argument is treated as floating-point number
				[ %d ] 	The argument is treated as an integer
				[ ... ] 	The Full list of specifiers in this URL:
					https://www.php.net/manual/en/function.printf.php
	- Use [ \ ] to escape a (single || double) quote
		Exp:
			echo 'There\'s no account with this id';
			or use
			echo "There's no account with this id";
*/
?>
<!DOCTYPE html>
<html>
<head>
	<title>Learn PHP - Output</title>
</head>
<body>
	<h1>PHP Output</h1>
</body>
</html>