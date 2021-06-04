<?php
	/**
		- PHP File System:
			- $file = 'header.php';
			[01]
				- file_exists ( string $filename )
				- Checks whether a file or directory exists
				- Returns true if the file or directory specified by filename exists; false otherwise.
				- Exp:
					file_exists( $file ); // true || false
			[02]
				- is_writable ( string $filename )
				- Tells whether the filename is writable
				- Returns true if the filename exists and is writable.
				- Exp:
					is_writable( $file ); // true || false
			[03]
				- dirname ( string $path , int $levels = 1 )
				- Returns a parent directory's path
				- $levels parameter: The number of parent directories to go up. ( must greater than 0 )
				- [ __FILE__ ] is a magic constants to get the full path of the current file  
				- [ __DIR__ ] This is equivalent to dirname(__FILE__)
				- Exp:
					echo dirname( __FILE__ ); // C:\laragon\www\learn-php\lessons-files
					echo dirname( __FILE__, 2 ); // C:\laragon\www\learn-php\
			[04]
				- mkdir ( string $directory , int $permissions = 0777 , bool $recursive = false , resource $context = ? )
				- Makes directory
				- Returns true on success or false on failure.
				- $permissions paramter:
					- [0444]	=> nothing for everybody (read only)
					- [0600]	=> Read and write for owner, nothing for everybody else
					- [0644]	=> Read and write for owner, read for eveybody else
					- [0755]	=> Everything for owner, read and execute for others
					- [0750]	=> Everything for owner, read and execute for owner's group
				- $recursive paramter: Allows the creation of nested directories specified in the directory.
				- Exp:
					mkdir( 'layouts' ); // return true and create the directory
					mkdir( 'layouts/darktheme', 0777, true ); // return true and create nested directories
					mkdir( 'private', 0600 ); // return true and create directory with custom permission
			[05]
				- rmdir ( string $directory , resource $context = ? )
				- Removes directory
				- Returns true on success or false on failure.
				- directory must be not empty 
				- Exp:
					rmdir ( 'layouts' );
			[06]
				- is_dir ( string $filename )
				- Tells whether the filename is a directory
				- Returns true if the filename exists and is a directory, false otherwise.
				- Exp:
					is_dir( 'layouts' ); // true || false
					if ( ! is_dir( 'layouts' ) ) {
						mkdir( 'layouts' );
						echo 'Layouts folder has ben created';
					} else {
						rmdir( 'layouts' );
						echo 'Layouts folder has ben removed';
					}
			[07]
				- basename ( string $path , string $suffix = "" )
				- Returns trailing name component of path
				- $suffix paramter: If the name component ends in suffix this will also be cut off
				- Exp:
					basename( __FILE__ ); // 016-file-system.php
					basename( __FILE__, '.php' ); // 016-file-system
			[08]
				- chmod ( string $filename , int $permissions )
				- Changes file mode
				- $permissions paramter same with ( mkdir $permissions )
				- Returns true on success or false on failure.
				- Exp:
					chmod( __FILE__, 0444 ); // return true and change the mode to read only for evrybody
					chmod( __FILE__, 0755 ); // return true and change the mode to everythings for owner, read and execute for others
			[09]
				- file_put_contents ( string $filename , mixed $data , int $flags = 0 , resource $context = ? )
				- Write data to a file
				- this function created the $filename if not exists
				- This function returns the number of bytes that were written to the file, or false on failure.
				- $flags paramter:
					- FILE_APPEND	=> append the data to the file instead of overwriting it.
					- LOCK_EX		=> Acquire an exclusive lock on the file while proceeding to the writing
				- Exp:
					file_put_contents( 'header.php', 'this is the header' );  // return 18 (18bytes => data size), create the file if not exists
					file_put_contents( 'header.php', 'this is the header', FILE_APPEND );  // return 18 (18bytes => data size), create the file if not exists, append the data
					file_put_contents( 'header.php', 'this is the header', FILE_APPEND | LOCK_EX );  // return 18 (18bytes => data size), create the file if not exists, append the data, lock the file when useing it
			[10]
				- file_get_contents ( string $filename , bool $use_include_path = false , resource $context = ? , int $offset = 0 , int $length = ? )
				- Reads entire file into a string
				- The function returns the read data or false on failure.
				- Exp:
					echo file_get_contents( 'header.php' ); // Header file content
					echo file_get_contents( 'header.php', false, NULL, 0, 6 ); // Header
			[11]
				- copy ( string $source , string $dest , resource $context = ? )
				- Copies file
				- Returns true on success or false on failure.
				- Exp:
					copy( __FILE__, basename( __FILE__, '.php' ) . '.bck' ); // Make backup file for current file
			[12]
				- rename ( string $oldname , string $newname , resource $context = ? )
				- Renames a file or directory
				- Returns true on success or false on failure.
				- Exp:
					rename( 'header.php', 'header-dark.php' ); // Rename current file
			[13]
				- pathinfo ( string $path , int $flags = PATHINFO_ALL )
				- Returns information about a file path
				- $flags paramter:
					PATHINFO_DIRNAME
					PATHINFO_BASENAME
					PATHINFO_EXTENSION
					PATHINFO_FILENAME
				- Return Values
					If the flags parameter is not passed, an associative array containing the following elements is returned: dirname, basename, extension (if any), and filename.
					If flags is present, returns a string containing the requested element.
				- Exp:
					pathinfo( __FILE__ ); // return an array contain dirname, basename, extension (if any), and filename.
					pathinfo( __FILE__, PATHINFO_BASENAME ); // Return string contain the basename of the current file
			[14]
				- unlink ( string $filename , resource $context = ? )
				- Deletes a file
				- Returns true on success or false on failure.
				- Exp:
					unlink( 'header.php' ); // true or false
			[15]
				- scandir ( string $directory , int $sorting_order = SCANDIR_SORT_ASCENDING , resource $context = ? )
				- List files and directories inside the specified path
				- $sorting_order paramter:
					SCANDIR_SORT_ASCENDING
					SCANDIR_SORT_DESCENDING
					SCANDIR_SORT_NONE
				- Returns an array of filenames on success, or false on failure
				- Returns false and E_WARNING  If $directory is not a directory 
				- Exp:
					$files = scandir( __DIR__ ); // return an array contain current directory files
			[16]
				- fopen ( string $filename , string $mode , bool $use_include_path = false , resource $context = ? )
				- Opens file or URL
				- $mode paramter:
					[r]	=> Read only, place the file pointer at the beginning of the file, file must be exists
					[r+]	=> Read and write, place the file pointer at the beginning of the file, file must be exists
					[w]	=> Write only, place the file pointer at the beginning of the file, remove the content, create the file if not exists
					[w+]	=> Write and read, place the file pointer at the beginning of the file, remove the content, create the file if not exists
					[a]	=> Write only, place the file pointer at the end of the file, create the file if not exists.
					[a+]	=> Write and read, place the file pointer at the end of the file, create the file if not exists.
					[x]	=> Write only, place the file pointer at the beginning of the file, file must not be exists
					[x+]	=> Write and read, place the file pointer at the beginning of the file, file must not be exists
				- Exp:
					$filehandle = fopen( 'header.php', 'r' );
			[17]
				- filesize ( string $filename )
				- Gets file size
				- Returns the size of the file in bytes, or false
				- Exp
					filesize( __FILE__ ); // current file size
			[18]
				- fread ( resource $stream , int $length )
				- Binary-safe file read
				- $length paramter: number of bytes read.
				- Returns the read string or false on failure.
				- Exp:
					$filehandle = fopen( 'header.php', 'r' );
					$content = fread( $filehandle, filesize('header.php') ); // string
			[19]
				- fwrite ( resource $handle , string $string , int $length = ? )
				- Binary-safe file write
				- $length paramter: writing will stop after length bytes have been written 
				- eturns the number of bytes written, or false on error.
				- Exp:
					$filehandle = fopen( 'header.php', 'r+' );
					fwrite( $filehandle, 'The new text' ); // Write in the beginning of the file
			[20]
				- fseek ( resource $stream , int $offset , int $whence = SEEK_SET )
				- Seeks on a file pointer
				- $whence paramter
					SEEK_SET	=> Set position equal to offset bytes.
					SEEK_CUR	=> Set position to current location plus offset.
					SEEK_END	=> Set position to end-of-file plus offset.
				- Upon success, returns 0; otherwise, returns -1.
				- Exp: 
					$filehandle = fopen( 'header.php', 'r+' );
					fseek( $filehandle, 2 ); // Set the pointer on 2 (== to offset)
					fseek( $filehandle, -2, SEEK_END ); // Set the pointer on -2 from the end of the file
			[21]
				- fclose ( resource $stream )
				- Closes an open file pointer
				- Returns true on success or false on failure.
				- Exp:
					$filehandle = fopen( 'header.php', 'r+' );
					fclose( $filehandle );	
	*/
?>
<!DOCTYPE html>
<html>
<head>
	<title>Learn PHP - File System</title>
</head>
<body>
	<h1>PHP File System</h1>
</body>
</html>