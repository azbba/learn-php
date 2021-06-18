<?php
	/*
		- PHP Misc Functions:
			[01]
				- sleep(int $seconds)
				- Delay execution
				- Delays the program execution for the given number of seconds.
				- Returns zero on success, or false on error.
				- Exp:
					sleep( 10 ); // Sleep for 10 seconds
			[02]
				- usleep(int $microseconds)
				- Delay execution in microseconds
				- No value is returned.
				- Exp:
					usleep( 2000000 ); // wait for 2 seconds
			[03]
				- time_sleep_until(float $timestamp)
				- Make the script sleep until the specified time
				- Returns true on success or false on failure.
				- Exp:
					time_sleep_until( time() + 5 )
			[04]
				- exit(string $status = ?)
				- Output a message and terminate the current script
				- No value is returned.
				- Exp:
					fopen( 'file.php', 'r' ) or exit( 'Unable to open the file' );
					@fopen( 'file.php', 'r' ) or exit( 'Unable to open the file' ); // Hide PHP error
					echo 'No code will be executed after exit';
			[05]
				- die( string $status = ? )
				- Equivalent to exit
			[06]
				- uniqid(string $prefix = "", bool $more_entropy = false)
				- Generate a unique ID
				- Returns timestamp based unique identifier as a string.
				- Exp:
					echo uniqid(); 					// 60cc769939bac
					echo uniqid( 'az-' ); 			// az-60cc76b8954af
					echo uniqid( 'az-', true ); 	// az-60cc76cf6c47f5.73056390
			[07]
				- defined(string $constant_name)
				- Checks whether a given named constant exists
				- Returns true if the named constant given by constant_name has been defined, false otherwise.
				- Exp:
					if ( ! defined( 'SITE_STATUS' ) ) {
						define( 'SITE_STATUS', 'open' );
					}
					echo SITE_STATUS;
	*/
?>
<!DOCTYPE html>
<html>
<head>
	<title>Learn PHP - Misc Functions</title>
</head>
<body>
	<h1>PHP Misc Functions</h1>
</body>
</html>