<?php
	/*
		- PHP Cookie:
			- HTTP Cookies
			- cookies must be sent before any output from your script
			[01]
				- setcookie ( string $name , string $value = "" , int $expires = 0 , string $path = "" , string $domain = "" , bool $secure = false , bool $httponly = false )
				- Alternative signature available as of PHP 7.3.0:
					setcookie ( string $name , string $value = "" , array $options = [] ) 
				- Send a cookie: defines a cookie to be sent along with the rest of the HTTP headers.
				- Parameters
					name			=> The name of the cookie.
					value			=> The value of the cookie ( This value is stored on the clients computer, so do not store sensitive information )
					expires		=> The time the cookie expires, This is a Unix timestamp so is in number of seconds since the epoch.
					path			=> The path on the server in which the cookie will be available on. If set to '/', the cookie will be available within the entire domain.
										if set to '/foo/', the cookie will only be available within the /foo/ directory and all sub-directories such as /foo/bar/ of domain
										The default value is the current directory that the cookie is being set in.
					domain		=> The (sub)domain that the cookie is available to. 
					secure		=> Indicates that the cookie should only be transmitted over a secure HTTPS connection from the client.
					httponly		=> When true the cookie will be made accessible only through the HTTP protocol,This means that the cookie won't be accessible by scripting languages, such as JavaScript.
					options		=> An associative array which may have any of the keys expires, path, domain, secure, httponly and samesite.
				- Return Values
					If output exists prior to calling this function, setcookie() will fail and return false. If setcookie() successfully runs, it will return true. 
				- Exp:
					- Check weather the cookies is activated in browsers or no
						if ( count( $_COOKIE ) > 0 ) {
							// Cookie is enabled
						}
					setcookie( 'theme', 'dark-theme', time() + 3600 ); // /* expire in 1 hour
					// PHP 7.3.0 Syntax
					setcookie( 'theme', 'light-theme', [
						'expires'	=> time() + 3600,
						'path'		=> '/',
						'domain'		=> '.example.com',
						'secure'		=> true,	 // true || false
						'httponly'	=> true,	 // true || false
						'samesite'	=> 'None' // None || Lax || Strict
					] );
				- Get all cookies:
					var_dump( $_COOKIE ); // [ 'cookieName' => 'cookieValue', 'cookieName2' => 'cookieValue2' ]
				- Print an individual cookie
					echo $_COOKIE["theme"];
				- Modify cookie:
					// Reset the value of an cookie
					setcookie( 'oldCookieName', 'newCookieValue', time() - 3600, '/' );
				- Delete cookie:
					// Set cookie value to null, and enter expire date in the past
					setcookie( 'oldCookieName', '', time() - 3600, '/' );
	*/
	setcookie( 'theme', 'dark-theme', [
		'expires'	=> time() + 3600,
		'path'		=> '/'
	] );
	setcookie( 'theme', NULL, time() - 3600, '/' );
	setcookie( 'status', NULL, time() - 3600, '/' );
	echo '<pre>' . print_r($_COOKIE, true) . '</pre>';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Learn PHP - Predefined Variables</title>
</head>
<body>
	<h1>PHP Predefined Variables</h1>
</body>
</html>