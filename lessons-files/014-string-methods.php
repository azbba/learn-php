<?php
	/**
		- PHP String methods:
			[01]
				- explode ( string $separator , string $string , int $limit = PHP_INT_MAX )
				- Split a string by a string
				- Returns an array
				- $limit paramter:
					- If limit is set and positive			=> the returned array will contain a maximum of limit elements with the last element containing the rest of string.
					- If the limit parameter is negative 	=> all components except the last -limit are returned.
					- If the limit parameter is zero			=> then this is treated as 1.
				- Exp:
					$slug = 'Learn-PHP-from-Scratch';
					$arr  = explode( '-', $slug ); // [ 'Learn', 'PHP', 'from', 'Scratch' ];
			[02]
				- implode ( string $separator , array $array )
				- Join array elements with a string
				- join( string $separator , array $array  ) 
				- join is the Alias of implode
				- Returns a string containing a string representation of all the array elements in the same order, with the separator string between each element.
				- Exp:
					$arr = [ 'Learn', 'PHP', 'from', 'Scratch' ];
					$str = implode( " ", $arr ); // Learn PHP from Scratch
			[03]
				- str_split ( string $string , int $length = 1 )
				- Convert a string to an array
				- returne an array
				- Exp:
					$str = 'Learn PHP from Scratch';
					str_split( $str ); // [ 'Lea', 'rn ', 'PHP', ' fr', 'om ', 'Scr', 'atc', 'h  ' ];
			[04]
				- chunk_split ( string $string , int $length = 76 , string $separator = "\r\n" )
				- Split a string into smaller chunks
				- Returns the chunked string
				- Exp:
					$str = 'Learn PHP from Scratch';
					echo chunk_split( $str, 5,'@' ); // Learn@ PHP @from @Scrat@ch@
			[05]
				- str_replace ( array|string $search , array|string $replace , string|array $subject , int &$count = null )
				- Replace all occurrences of the search string with the replacement string
				- This function returns a string or an array with the replaced values.
				- Exp:
					$slug = 'Learn-PHP-from-Scratch';
					$title = str_replace( '-', ' ', $slug ); // Learn PHP from Scratch
				- $search paramter as array to search for multiple values
				- $replace paramter as array to replace search value with multiple values
	*/
	$str = 'I Love PHP is JavaScript because is PHP and JavaScript is aewsome';
	$str = str_replace( [ 'PHP', 'JavaScript', 'is' ], [ 'HTML', 'CSS', '@' ], $str );
	echo $str;
?>
<!DOCTYPE html>
<html>
<head>
	<title>Learn PHP - String Methods</title>
</head>
<body>
	<h1>PHP String Methods</h1>
</body>
</html>