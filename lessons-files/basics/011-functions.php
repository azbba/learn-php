<?php
	/**
		- PHP functions
		- A function is a piece of code in a larger program. The function performs a specific task. 
		- The advantages of using functions are:
			- Reducing duplication of code
			- Reuse of code
			- ...
		- A function will be executed by a call to the function.

		- Syntax:
			function[keyWord] [functionName]( $arg1, $arg2, $args... ) {
				// Function body
			} 
		Exp:
			function sayHello() {
				echo 'Hello world';
			}

		- Functions arguments:
			- Arguments are values that are sent to the function.
			- The functions process the values and possibly return some outcome.
			Exp:
				function calcAge( $name, $age ) {
					echo 'Hello ' . $name . ' Your age in days is ' . (365 * $age);
				}
				calcAge( 'AzBba' ); // Hello AzBba your age in days is 10585

		- Default value:
			Exp:
				function sayHello( $name = 'anonymous' ) {
					echo 'Hello ' . $name;
				}
		
		- Nasted functions
			- Function inside a function
				Exp:
					function welcomeMsg ( $name ) {
						function checkStatus( $status = 'on' ) {
							return ( $status === 'on' ? 'Connected' : 'Offline' );
						}
						echo 'Hello ' . $name . ' You are ' . checkStatus();
					}
					welcomeMsg('AzBba');

		- Function return:
			[ return ] keyword is used to return a value from the function.
			[ return ] All code after the [ return ] keyword will be not running.
			Exp:
				function calcAge( $age ) {
					return $age * 365;
					// All code after return will not executed
					echo 'This line will not printed';
				}
				echo calcAge( 29 );
	*/
?>
<!DOCTYPE html>
<html>
<head>
	<title>Learn PHP - Functions</title>
</head>
<body>
	<h1>PHP Functions</h1>
</body>
</html>