<?php
	/*
		- PHP Session:
			- Session must be sent before any output from your script
			[01]
				- session_start ( array $options = [] )
				- Start new or resume existing session
				- $options paramter:
					- $options will override the currently set session configuration directives 
				- This function returns true if a session was successfully started, otherwise false.
					( PHP 7.1.0 => return false when it failed to start the session )
				- Exp:
					session_start();
				- Session with $options:
					session_start( [
						'cookie_lifetime'	=> 86400,
						'read_and_close'  => true, // if we don't need to change the session
						'cookie_path'		=> '/',
						'cookie_domain'	=> '',
						'cookie_secure'	=> '',
						'cookie_httponly'	=> '',
						'name'				=> 'PHPSESSID',
						'save_handler'		=> 'files',
						'auto_start'		=> 0,
						'gc_maxlifetime'	=> 1440,
						// See the full list in
						// https://www.php.net/manual/en/session.configuration.php
					] )
			[02]
				- use [$_SESSION] to initialize a new session
				- Exp:
					$_SESSION['theme'] = 'dark-theme';
			[03] 
				- Modify Session:
				- $_SESSION['theme'] = 'new-theme';
			
			[04] End the session:
				[04-01]
					- session_unset();
					- Free all session variables
					- Returns true on success or false on failure.
				[04-02]
					- session_destroy();
					- Destroys all data registered to a session
					- Returns true on success or false on failure.
	*/
?>
<!DOCTYPE html>
<html>
<head>
	<title>Learn PHP - Session</title>
</head>
<body>
	<h1>PHP Session</h1>
</body>
</html>