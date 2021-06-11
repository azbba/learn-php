<?php
	/**
		- PHP Predefined Variables:
			[01]
				- $GLOBALS
				- An associative array containing references to all variables which are currently defined in the global scope of the script.
				- Exp
					$name = 'AzBba';
					function testFunc() {
						// Print $name in local scope
						echo $GLOBALS['name'];
					}
					testFunc(); // AzBba
				- The [ global ] keyword instead of $GLOBALS
				- Exp:
					$name = 'AzBba';
					function testFunc() {
						// Print $name in local scope
						global $name;
						echo $name;
					}
					testFunc(); // AzBba
			[02]
				- $_SERVER
				- Server and execution environment information
				- is an array containing information such as headers, paths, and script locations.
				- Indices:
					PHP_SELF
					HTTP_REFERER
					SERVER_ADDR
					REQUEST_METHOD
					QUERY_STRING
					DOCUMENT_ROOT
					REQUEST_URI
					SERVER_NAME
					SERVER_SOFTWARE
					SERVER_PROTOCOL
					REQUEST_TIME
					REMOTE_ADDR
					...
					See the full list in:
						https://www.php.net/manual/en/reserved.variables.server.php
				- Exp:
					if ( $_SERVER['REQUEST_METHOD'] === 'POST' ) {
						// Code to execute
					}
			[03]
				- $_GET
				- HTTP GET variables
				- An associative array of variables passed to the current script via the URL parameters (aka. query string). 
				- Exp:
					'https://www.azdroit.com/search?q=PHP&category=developments'
					var_dump( $_GET ); // [ 'q' => 'PHP', 'category' => 'developments' ]
					echo $_GET['category']; // developments
			[04]
				- $_POST
				- HTTP POST variables
				- An associative array of variables passed to the current script via the HTTP POST method when using application/x-www-form-urlencoded or multipart/form-data as the HTTP Content-Type in the request.
				- Exp:
					echo '<form action="'. $_SERVER['PHP_SELF'] .'" method="post">
						<input type="text" name="username">
						<input type="submit" value="Send">
					</form>';
					echo $_POST['username'];
			[05]
				- $_REQUEST
				- HTTP Request variables
				- An associative array that by default contains the contents of $_GET, $_POST and $_COOKIE.
			[06]
				- $_ENV
				- Environment variables
				- An associative array of variables passed to the current script via the environment method.
				- Exp:
					echo 'My username is ' .$_ENV["USER"] . '!';
			[07]
				- $_FILES
				- HTTP File Upload variables
				- An associative array of items uploaded to the current script via the HTTP POST method.
				- The data encoding type, enctype, MUST be specified as below
				- Exp:
					echo '<form action="' . $_SERVER['PHP_SELF'] . '" method="post" enctype="multipart/form-data">
						<input type="file" name="avatar"/>
						<input type="submit" value="Send Avatar">
					</form>';
				- The global $_FILES will contain all the uploaded file information.
					- $_FILES['avatar']['name'];
						The original name of the file.
					$_FILES['avatar']['type'];
						The mime type of the file [Exp: => "image/png"]
					$_FILES['avatar']['tmp_name'];
						The temporary filename of the file in which the uploaded file was stored on the server.
					$_FILES['avatar']['error'];
						The error code associated with this file upload.
						[0]	=> There is no error, the file uploaded with success.
						[1]	=> The uploaded file exceeds the upload_max_filesize
						[2]	=> The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form.
						[3]	=> The uploaded file was only partially uploaded.
						[4]	=> No file was uploaded.
						[6]	=> Missing a temporary folder.
						[7]	=> Failed to write file to disk.
						[8]	=> A PHP extension stopped the file upload.
					$_FILES['avatar']['size'];
						The size, in bytes, of the uploaded file.
			[08]
				- $_SESSION
				- Session variables
				- An associative array containing session variables available to the current script.
			[09]
				- $_COOKIE
				- HTTP Cookies
				- An associative array of variables passed to the current script via HTTP Cookies.
			[10]
				- $http_response_header
				- HTTP response headers
				- The $http_response_header array is similar to the get_headers() function. 
				- When using the HTTP wrapper, $http_response_header will be populated with the HTTP response headers.
				- Exp:
					file_get_contents("http://example.com");
					var_dump($http_response_header); // [ 0 => 'HTTP/1.0 200 OK', 1 => 'Age: 40302', 2 => 'Cache-Control: max-age=604800',... ]
	*/
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