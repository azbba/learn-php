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
			[06]
				- str_repeat ( string $string , int $times )
				- Repeat a string
				- Returns the repeated string.
				- Exp
					echo str_repeat( 'PHP', 5 ); // PHPPHPPHPPHPPHP
			[07]
				- str_shuffle ( string $string )
				- Randomly shuffles a string
				- Returns the shuffled string.
				- Exp:
					echo str_shuffle( 'I Love PHP' ); // HL IPev Po
			[08]
				- strlen ( string $string )
				- Get string length
				- The length of the string on success, and 0 if the string is empty.
				- Exp:
					echo str_shuffle( 'I Love PHP' ); // 10
			[09]
				- addslashes ( string $string )
				- Quote string with slashes
				- Add slashes before this character:
					single quote (')
					double quote (")
					backslash (\)
					NUL (the NUL byte)
				- Returns the escaped string.
				- Exp:
					echo addslashes( "There's no posts in this category" ); // There\'s no posts in this category
			[10]
				- stripslashes ( string $string )
				- Un-quotes a quoted string
				- Returns a string with backslashes stripped off.
				- Exp:
					echo stripslashes( 'There\'s no posts in this category' ); // There's no posts in this category
			[11]
				- strip_tags ( string $string , array|string|null $allowed_tags = null )
				- Strip HTML and PHP tags from a string
				- Returns the stripped string.
				- Exp
					echo strip_tags( '<h1>I <strong>Love</strong> <a href="php.net">PHP</a></h1>', ['strong', 'a'] );
					// I <strong>Love</strong> <a href="php.net">PHP</a>
			[12]
				- strtoupper ( string $string )
				- Make a string uppercase
				- Returns the uppercased string.
				- Exp:
					echo strtoupper( 'i love php' ); // I LOVE PHP
			[13]
				- strtolower ( string $string )
				- Make a string lowercase
				- Returns the lowercased string.
				- Exp:
					echo strtolower( 'I LOVE PHP' ); // i love php
			[14]
				- lcfirst ( string $string )
				- Make a string's first character lowercase
				- Returns the resulting string.
				- Exp:
					echo lcfirst( 'I love php' ); // i love php
			[15]
				- ucfirst ( string $string )
				- Make a string's first character uppercase
				- Returns the resulting string.
				Exp:
					echo ucfirst( 'i love php' ); // I love php
			[16]
				- ucwords ( string $string , string $separators = " \t\r\n\f\v" )
				- Uppercase the first character of each word in a string
				- Returns the modified string.
				- Exp
					echo ucwords( 'i love php' ); // I Love Php
			[17]
				- trim ( string $string , string $characters = " \n\r\t\v\0" )
				- Strip whitespace (or other characters) from the beginning and end of a string
				- rim() will strip these characters:
					" "		=> an ordinary space
					"\t"		=> a tab
					"\n"		=> a new line
					"\r"		=> a carriage return
					"\0"		=> the NUL-byte
					"\v"		=> a vertical tab
				- Returns The trimmed string
				- Exp:
					$str = "\t \t \t I Love PHP \t \t \t"; // string(22)
					echo trim( $str ); // I love php => string(10)

				- rtrim ( string $string , string $characters = " \n\r\t\v\0" )
				- Strip whitespace (or other characters) from the end of a string

				- ltrim ( string $string , string $characters = " \n\r\t\v\0" )
				- Strip whitespace (or other characters) from the beginning of a string

				- Trim custom chatacters:
					$str = 'I Love PHP';
					echo trim( $str, 'IP' ); // Love PH
					// Remove Any IP from beginning and the end of string
			[18]
				- str_word_count ( string $string , int $format = 0 , string|null $characters = null )
				- Return information about words used in a string
				- Returns an array or an integer, depending on the format chosen.
				- $format paramter:
					0	=> returns the number of words found
					1	=> returns an array containing all the words found inside the string
					2	=> eturns an associative array, where the key is the numeric position of the word inside the string and the value is the actual word itself
				- $characters paramter:
					A list of additional characters which will be considered as 'word' like (&)
				- Exp:
					$str = "I Love PHP & JavaScript";
					echo str_word_count( $str ); // 4
					str_word_count($str, 1); // [ 'I', 'Love', 'PHP', 'JavaScript' ]
					str_word_count($str, 2); // [ 0 => 'I', 2 => 'Love', 7 => 'PHP', 13 => 'JavaScript' ]
					echo str_word_count( $str, 0, '&' ); // 5
			[19]
				- parse_str ( string $string , array &$result )
				- Parses the string into variables
				- Exp:
					$url = parse_str( 'name=azbba&age=29&gender=male', $parsed_url );
					// $parsed_url = [ 'name' => 'azbba', 'age' => 29, 'gender' => male ]
			[20]
				- nl2br ( string $string , bool $use_xhtml = true )
				- Inserts HTML line breaks before all newlines in a string
				- Returns the altered string.
				- Exp:
					$msg = "There's no: \n posts \n news \n for you";
					echo nl2br($msg); // There's no <br/> posts <br/> news <br/> for you
			[21]
				- strpos ( string $haystack , string $needle , int $offset = 0 )
				- Find the position of the first occurrence of a substring in a string
				- $offset paramter:
					if not specifed 	=> The search will start from the beginning of the string
					if specified		=> The search will start from that specified number
					If is negative		=> The search will start from the end of the string.
				- Returns the position of where the needle exists or false if not exists
				- Exp:
					$str = 'I love php so much, because php is famous and very easy to learn';
					echo strpos('php', $str);	// 7 => Return posts of the first [php]
					echo strpos('php', $str, -36);	// 28 => Start search from end

				- stripos ( string $haystack , string $needle , int $offset = 0 )
				- Find the position of the first occurrence of a case-insensitive substring in a string

				- strrpos ( string $haystack , string $needle , int $offset = 0 )
				- Find the position of the last occurrence of a substring in a string

				- strripos ( string $haystack , string $needle , int $offset = 0 )
				- Find the position of the last occurrence of a case-insensitive substring in a string
			[22]
				- strstr ( string $haystack , string $needle , bool $before_needle = false )
				- Find the first occurrence of a string
				- Returns the portion of string, or false if needle is not found.
				- Exp
					$email = 'name@email.com';
					$domain = strstr( $email, '@' );
					echo $domain; // @email.com
					$user = strstr( $email, '@', true );
					echo $user; // name

				- stristr ( string $haystack , string $needle , bool $before_needle = false )
				- Case-insensitive strstr()
			[23]
				- strcmp ( string $string1 , string $string2 )
				- Binary safe string comparison
				- Returns:
					[ 0 ] 	=> strings are equal
					[ 0 < ]	=> String 1 is less than string 2
					[ 0 > ]	=> String 1 greater than string 2
				- Exp:
					echo strcmp( 'azbba is my name', 'azbba' ); // 11
					echo strcmp( 'azbba', 'azbba is my name' ); // -11
					echo strcmp( 'azbba', 'azbba' ); // 0
			[24]
				- strrev ( string $string )
				- Reverse a string
				- Returns the reversed string.
				- Exp:
					$str = 'I love php';
					echo strrev( $str ); // php evol I
			[25]
				- substr ( string $string , int $offset , int|null $length = null )
				- Return part of a string
				- Exp:
					$str = 'I love PHP Because PHP is famous and easy to learn';
					echo substr( $str, 0, 10 ); // I love PHP
			[26]
				- substr_count ( string $haystack , string $needle , int $offset = 0 , int|null $length = null )
				- Count the number of substring occurrences
				- returns an int.
				- Exp:
					$str = 'I love PHP Because PHP is famous and easy to learn';
					echo substr_count( $str, 'PHP' ); // 2
					echo substr_count( $str, 'PHP', 10 ); // 1 Start search from position 10 to the end
			[27]
				- str_contains ( string $haystack , string $needle )
				- Determine if a string contains a given substring
				- PHP Version 8 required
				- Returns true if needle is in haystack, false otherwise.
				- Exp:
					$str = 'The lazy fox jumped over the fence';
					var_dump( str_contains( $str, 'lazy' ) ); // true
	*/
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