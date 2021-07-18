<?php
/*
	- PHP Trait:
		- Traits are a mechanism for code reuse in single inheritance languages such as PHP.
		- Problem with extending classes, it that you can only extend one class.
		- But with trait its possible.
		- It is not possible to instantiate trait on its own ( Cannot instantiate trait ).
		- Traits can not implement interfaces
		- It's possible to define abstract function in a trait as static and implement non-static version of the function , and it will works.
		- Traits have priority over clss
			Exp:
				- class extends from other class
				- Same class use a trait
				- There's conflict between the trait and extended class ( same method )
				- PHP will use trait method insteadOf the class method
		- If there's conflict between 2 traits ( Fatal error ), you can use either [ default method or alias ] see example below.
		- Traits can also define properties.
		- If a trait defines a property then a class can not define a property with the same name unless it is compatible (same visibility and initial value), otherwise a fatal error is issued.
		- Traits can define static variables, static methods and static properties.
		- Traits support the use of abstract methods in order to impose requirements upon the exhibiting class. 
		- Trait can use one or more traits
		- Multiple Traits can be inserted into a class by listing them in the use statement, separated by commas.
		- Changing Method Visibility See Example below.
*/

trait Reader {

	public function open( string $file_name ) {
		echo "Open file [ $file_name ] for read <br/>";
		return $this;
	}

	public function read( string $file_name ) {
		echo "Read from [ $file_name ]";
		return $this;
	}

}

trait writer {

	public function open( string $file_name ) {
		echo "Open file [ $file_name ] for write <br/>";
		return $this;
	}

	public function write ( string $file_name ) {
		echo "Write in [ $file_name ]";
		return $this;
	}

}

class File {
	/*
		use Reader;
		use Writer;
		// Or You can use the short way
	*/
	use Reader, Writer {
		/*
			If there's collisions with other trait methods
			You can set a method as default one, used when there's collisions
			Syntax:
				[Trait name] [::] [Method name] [ insteadOf keyword ] [ Other trait name ]
		*/
		Writer::open insteadOf Reader;
		/*
			You can also add alias to that methods
			Syntax: 
				[ Trait name ] [::] [ Method name ] [ as keyword ] [ New name ]
		*/
		Reader::open as open_for_read;
		/* 
			Change visibility of a method
			Syntax:
				[Old method] [ as keyword ] [ visibility keyword] [ New name];
			Exp:
				method_name as protected new_method_name
		*/
	}

	public string $file_name;

	public function __construct( string $file_name ) {
		$this->file_name = $file_name;
		$this->open( $this->file_name )->write( $this->file_name );
	}
}

$file = new File( 'help.pdf' );
// $reader = new Reader(); // Fatal error: Cannot instantiate trait

?>
<!DOCTYPE html>
<html>
<head>
	<title>Learn PHP - Trait</title>
</head>
<body>
	<h1>PHP Trait</h1>
</body>
</html>