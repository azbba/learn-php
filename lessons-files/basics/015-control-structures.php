<?php
	/**
		- PHP Control Structures:
			- include and require statements allow you to include the code contained in a PHP file within another PHP file
			- Including files is very useful when you want to include the same PHP, HTML, or text on multiple pages of a website.
			- Exp
				include 'layouts/header.php';
			- include vs require
				[ When failure to include file ]
					require => will produce a fatal error (E_COMPILE_ERROR) and stop the script
					include => will only produce a warning (E_WARNING) and the script will continue
			
			- include_once and require_once
				These statements behave in the same way as include and require 
				but if the file was already included previously, this statement will not include it again.
			
			- switch:
				- The switch statement is used to perform different actions based on different conditions.
				- The switch-case statement is an alternative to the if-elseif-else statement, which does almost the same thing.
				- Exp:
					$today = 'friday';
					switch ( $today ) {
						case 'saturday':
							echo 'Today is Saturday';
							break;
						case 'friday':
							echo 'Today is Friday';
							break;
						default:
							echo 'unknown day, please check the day name';
					}
	*/
?>
<!DOCTYPE html>
<html>
<head>
	<title>Learn PHP - Control Structures</title>
</head>
<body>
	<h1>PHP Control Structures</h1>
</body>
</html>