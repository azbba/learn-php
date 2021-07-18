<?php
	/*
		- PHP Filter:
			- PHP filters are used to validate and sanitize external input.
			[01]
				- filter_list()
				- Returns a list of all supported filters
				- Returns an array of names of all supported filters, empty array if there are no such filters.
			[02]
				- filter_var(mixed $value, int $filter = FILTER_DEFAULT, array|int $options = 0)
				- Filters a variable with a specified filter
				- Returns the filtered data, or false if the filter fails.
				- Exp:
					filter_var( $_POST['input'], FILTER_SANITIZE_STRING );
			[03]
				- Validate filters:
					[ 01 ] $filter paramter:
						- FILTER_VALIDATE_BOOLEAN || FILTER_VALIDATE_BOOL	=> validate boolean
						- FILTER_VALIDATE_DOMAIN									=> validate domain
						- FILTER_VALIDATE_EMAIL										=> validate email
						- FILTER_VALIDATE_FLOAT										=> validate float
						- FILTER_VALIDATE_INT										=> validate integer
						- FILTER_VALIDATE_IP											=> validate ip
						- FILTER_VALIDATE_MAC										=> validate mac address
						- FILTER_VALIDATE_REGEXP									=> validate regexp
						- FILTER_VALIDATE_URL										=> validate url
						
						- Exp:
							var_dump( filter_var( $input, FILTER_VALIDATE_EMAIL ) == true ); // bool(true)
					[02] $options paramters:
						[02-01]: Options:
							- FILTER_VALIDATE_FLOAT		=> [decimal, min_range, max_range]
							- FILTER_VALIDATE_INT		=> [min_range, max_range]
							- FILTER_VALIDATE_REGEXP	=> [regexp]
							
							- Exp:
								$opts = [
									'options' => [
										'min_range' => 1,
										'max_range'	=> 100
									]
								];
								var_dump( filter_var( $input, FILTER_VALIDATE_INT, $opts ) == true ); // bool(true) => input value must be between 1 and 100*
						[02-01]: Flags:
							- FILTER_VALIDATE_BOOL		=> FILTER_NULL_ON_FAILURE
							- FILTER_VALIDATE_DOMAIN	=> FILTER_FLAG_HOSTNAME || FILTER_NULL_ON_FAILURE
							- FILTER_VALIDATE_EMAIL		=> FILTER_FLAG_EMAIL_UNICODE || FILTER_NULL_ON_FAILURE
							- FILTER_VALIDATE_FLOAT		=> FILTER_FLAG_ALLOW_THOUSAND || FILTER_NULL_ON_FAILURE
							- FILTER_VALIDATE_INT		=> FILTER_FLAG_ALLOW_OCTAL || FILTER_FLAG_ALLOW_HEX || FILTER_NULL_ON_FAILURE
							- FILTER_VALIDATE_IP			=> FILTER_FLAG_IPV4 || FILTER_FLAG_IPV6 || FILTER_FLAG_NO_PRIV_RANGE || FILTER_FLAG_NO_RES_RANGE || FILTER_NULL_ON_FAILURE
							- FILTER_VALIDATE_URL		=> FILTER_FLAG_SCHEME_REQUIRED || FILTER_FLAG_HOST_REQUIRED || FILTER_FLAG_PATH_REQUIRED || FILTER_FLAG_QUERY_REQUIRED || FILTER_NULL_ON_FAILURE 

							- Exp:
								$opts = [
									'flags' => FILTER_FLAG_IPV4
								];
								var_dump( filter_var( $input, FILTER_VALIDATE_IP, $opts ) == true ); // bool(true) => input value must be ip address type 4
								var_dump( filter_var( $input, FILTER_VALIDATE_IP, FILTER_FLAG_IPV4 ) ); // bool(true) => pass flag directly
				- Sanitize filters
					- FILTER_SANITIZE_EMAIL
					- FILTER_SANITIZE_NUMBER_FLOAT
					- FILTER_SANITIZE_NUMBER_INT
					- FILTER_SANITIZE_STRING
					- FILTER_SANITIZE_URL
					- See the full list of Sanitize filters and flags in this URL:
						https://www.php.net/manual/en/filter.filters.sanitize.php
	*/
?>
<!DOCTYPE html>
<html>
<head>
	<title>Learn PHP - Filter</title>
</head>
<body>
	<h1>PHP Filter</h1>
</body>
</html>