<?php
/**	
	- Syntax:
		[$][variableName][=][value][;]
	- Exp:
		$name = 'My Name';
	- The variable name is case-sensitive
	- The variable name must start with letter[A-Za-z] or underscores [ _ ]
	- The variable name cannot start with number.
	- The variable name cannot contain a white space
	- The Variable name cannot contain a special character like[ @, -, *, /, +, !... ]
	- [ $this ] is a special variable that can't be assigned.

	$name 	= 'My Name'; // Valid
	$_name 	= 'My Name'; // Valid
	$na me 	= 'My Name'; // Not Valid
	$1name	= 'My Name'; // Not valid
	$n1ame	= 'My Name'; // valid
	$n@me 	= 'My Name'; // Not valid
	$this 	= 'My Name'; // Not valid

	- You can print the variable value inside the string if you use [""]
		$name = 'Azzedine';
		echo "My name is $name"; // My name is Azzedine
		echo 'My name is $name'; // My name is $name

	- Naming convention:
		snake_case 	=> $firt_name
		camelCase	=> $firstName
		PascalCase	=> $FirstName
*/
?>
<!DOCTYPE html>
<html>
<head>
	<title>Learn PHP - Variables</title>
</head>
<body>
	<h1>PHP Variables</h1>
</body>
</html>