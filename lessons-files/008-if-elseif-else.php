<?php
	/**
		- PHP Conditional Statements
		- Very often when you write code, you want to perform different actions for different conditions
		- [ if ] statements evaluate a boolean value or expression and execute the provided code block if the expression evaluates to [ TRUE ].
		- Syntax:
			if ( condition ) {
				// Code to execute
			}
		- Exp:
			define( 'SITE_STATUS', 'open' );
			if ( SITE_STATUS == 'open' ) { // Check if the site is open [ open == true || close == false ]
				echo 'Website in open';
			}
		- [ else ] A PHP else statement can follow an if block. If the condition of the if does not evaluate to TRUE, the code block following else will be executed
		- Exp:
			define( 'SITE_STATUS', 'close' );
			if ( SITE_STATUS == 'open' ) {
				// This code block will not execute
				echo 'Welcome to our website';
			} else {
				// This code block will execute
				echo 'The website is closed for maintenance';
			}
		- [ elseif ] provide an additional condition to check.
		- [ elseif ] statements must be paired with an [ if ] statement.
		- Exp:
			define( 'SITE_STATUS', 'maintenance' );
			if ( SITE_STATUS == 'open' ) {
				echo 'Website is open';
			} elseif ( SITE_STATUS == 'maintenance' ) {
				// This code block will execute
				echo 'The website is closed for maintenance';
			} else {
				echo 'Website is closed';
			}
		- PHP ternary operator: This operator is frequently used as a shortcut for the if statement.
		- Syntax:
			condition ? exprIfTrue : exprIfFalse;
		Exp:
			define( 'SITE_STATUS', 'open' );
			echo SITE_STATUS == 'open' ? 'Website is open' : 'The website is closed for maintenance';
	*/
?>
<!DOCTYPE html>
<html>
<head>
	<title>Learn PHP - Conditional Statements</title>
</head>
<body>
	<h1>PHP Conditional Statements</h1>
</body>
</html>