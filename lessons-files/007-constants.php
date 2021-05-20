<?php
	/**
		- PHP Constants
		- Syntax:
			define( CONST_NAME, constValue, case-insensitive[false by default] )
		Exp:
			define( 'SITE_STATUS', 'open' )
		- Print a constant value:
			echo SITE_STATUS;
		- Defining Constants using the const keyword
			const MAX_UPLOAD_SIZE = 20;
		- Differences between constants and variables:
			Constants do not have a dollar sign ($) before them
			Constants may be defined and accessed anywhere without regard to variable scoping rules
			Constants may not be redefined or undefined once they have been set
		- Predefined constants 
			PHP provides a large number of predefined constants (Go to link below to see the full list)
			https://www.php.net/manual/en/reserved.constants.php
			Exps:
				PHP_VERSION			=> Return The current PHP version
				PHP_OS_FAMILY 		=> The operating system family PHP was built for
				PHP_INT_MAX 		=> The largest integer supported in this build of PHP
		- Magic constants:
			There are nine magical constants that change depending on where they are used
			https://www.php.net/manual/en/language.constants.magic.php
			Exps:
				__LINE__
				__FILE__
				__DIR__

	*/
?>
<!DOCTYPE html>
<html>
<head>
	<title>Learn PHP - Constants</title>
</head>
<body>
	<h1>PHP Constants</h1>
</body>
</html>