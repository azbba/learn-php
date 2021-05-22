<?php
	/**
		- PHP Loops
		- [ for ] loop:
			- Syntax:
				for ( expr1; expr2; expr3 ) {
					// Code to execute
				}
			- Exp:
				for ( $i = 0; $i <= 10; $i++ ) {
					echo $i . '<br />';
				}
			- Loop through array (See months exp ):
				( count( Countable ) ) => Bulit-in function used to calculate number of elements in array

		- Break and Continue:
			[ break ] 		=> Ends the execution of the current loop
			[ continue ]	=> skip the rest of the current loop iteration and continue the loop

		- [ while ] loop:
			- Syntax:
				while ( expr ) {
					// Code to execute
				}
			- Exp:
				$a = 1;
				while ( $a <= 10 ) {
					echo $a++;
				}
		
		- [ do while ] loop:
			- Syntax:
				do {
					// Code to execute
				} while ( expr );
			Exp: 
				$a = 1;
				do {
					echo $a++; 
				} while ( $a < 10 );

		- [ foreach ] loop: ( the foreach construct provides an easy way to iterate over arrays )
			- Syntax:
				[ For indexed array ]:
					foreach ( $iterable_expression  as $value ) {
						// Code to execute
					}
				[ For associative array ]:
					foreach ( $iterable_expression  as $key => $value ) {
						// Code to execute
					}
			- Exp:
				[ 1 ] => Indexed Array:
					$numbers = [1, 2, 3];
					foreach ( $numbers as $number ) {
						echo $number . '<br />';
					}
				[ 2 ] => Associative Array:
					$numbers = [
						'1' => 'One' ,
						'2' => 'Two',
						'3' => 'There'
					];
					foreach ( $numbers as $key => $number ) {
						echo $key . '-' . $number . '<br />';
					}
					
		- Loops without {}
			Exp:
				foreach( $years as $year ):
					// Code to execute
					echo $year . '<br/>';
				endforeach;
	*/
?>
<!DOCTYPE html>
<html>
<head>
	<title>Learn PHP - Operators</title>
</head>
<body>
	<h1>PHP Operators</h1>
	<div>
		<label for="year" style="font-weight:  bold;">Year</label>
		<select id="year" name="year">
			<?php
				for ( $year = 2021; $year >= 1992; $year-- ) {
					if ( $year == 2000 ) {
						// This code will skip 2000 year
						continue;
					}
					echo "<option value='$year'>$year</option>";
				}
			?>
		</select>
	</div>
	<div>
		<label for="month" style="font-weight:  bold;">Month</label>
		<select id="month" name="month">
			<?php
				$months = [
					'January', 'February', 'March', 'April', 'May', 'June', 'July',
					'August', 'September', 'October', 'November', 'December' 
				];
				for ( $month = 0; $month < count($months); $month++ ) {
					echo "<option value='$month'>$months[$month]</option>";
				}
			?>
		</select>
	</div>
	<div>
		<label for="day" style="font-weight:  bold;">Day</label>
		<select id="day" name="day">
			<?php
				$day = 1;
				for ( ; ; ) {
					if ( $day > 30 ) {
						break;
					}
					echo "<option value='$day'>$day</option>";
					$day++;
				}
			?>
		</select>
	</div>
</body>
</html>