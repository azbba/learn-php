<?php
	/*
		- PHP Date:
			- These functions allow you to get the date and time from the server where your PHP scripts are running.
			[01]
				- date_default_timezone_get()
				- Gets the default timezone used by all date/time functions in a script
				- Returns a string.
				- Exp
					echo date_default_timezone_get(); // UTC
			[02]
				- date_default_timezone_set(string $timezoneId)
				- List of Supported Timezones:
					Africa/Algiers
					Africa/Cairo
					Africa/Tunis
					Africa/Tripoli
					Africa/Casablanca
					... See the full list in this URL:
						https://www.php.net/manual/en/timezones.php
				- Exp:
					date_default_timezone_set('America/Los_Angeles'); // Set timezone to america los angeles time
			[03]
				- time()
				- Return current Unix timestamp
				- Exp:
					$nextWeek = time() + (7 * 24 * 60 * 60); // 7 days, 24 hours, 60 mins; 60 secs
			[04]
				- date(string $format, int|null $timestamp = null)
				- Format a local time/date
				- $format paramter:
					d		=> Day of the month, 2digts with 0 							=> 01, 05, 15, 30
					j		=> Day of the month, without 0 								=> 1, 5, 15, 30
					D		=> A textual representation of a day, three letters 	=> Fri, Sun...
					l		=> A full textual representation of the day				=> Friday, Sunday
					S		=> English ordinal suffix for the day of the month		=> st, ndn rd, th, works with j Exp [jS => 1st]
					w		=> Numeric representation of the day of the week		=> 0 for sunday to 6 for Saturday
					z		=> The day of the year (starting from 0)
					W		=> week number of year
					F		=> A full textual representation of a month				=> June
					m		=> Numeric representation of a month, with leading zeros
					M		=> A short textual representation of a month, three letters
					n		=> Numeric representation of a month, without leading zeros
					t		=> Number of days in the given month
					Y		=> A full numeric representation of a year, 4 digits
					y		=> A two digit representation of a year
					a 		=> Lowercase Ante meridiem and Post meridiem				=> am or pm
					A		=> Uppercase Ante meridiem and Post meridiem				=> AM or PM 
					g		=> 12-hour format of an hour without leading zeros
					G		=> 24-hour format of an hour without leading zeros
					h		=> 12-hour format of an hour with leading zeros
					H 		=> 24-hour format of an hour with leading zeros
					i		=> Minutes with leading zeros	
					s		=> Seconds with leading zeros	
					u		=> Microseconds
					v		=> Milliseconds
				- Exp
					echo date( 'Y-m-d \of H:i:s' ); // 2021-06-18 of 21:10:51
					echo date( 'Y-m-d', time() + (7 * 24 * 60 * 60) ); // date next week
			[05]
				- strtotime(string $datetime, int|null $baseTimestamp = null)
				- Parse about any English textual datetime description into a Unix timestamp
				- Returns a timestamp on success, false otherwise.
				- $datetime paramter:
					- now
					- 10 September 2021
					- +1 day
					- +1 week
					- +1 year
					- next monday
					- 1+ week 2 days 4 hours 2 seconds
				- Exp:
					$nextWeekOldWay = time() + (7 * 24 * 60 * 60)
					$nextWeek = strtotime( '+1 week' ); // timestamp
					echo date( 'Y-m-d', $nextWeek ); // Date of next week
	*/
?>
<!DOCTYPE html>
<html>
<head>
	<title>Learn PHP - Date</title>
</head>
<body>
	<h1>PHP Date</h1>
</body>
</html>