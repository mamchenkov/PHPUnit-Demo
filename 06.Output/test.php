<?php
// Include the code that you are actually testing
require_once 'lib.php';

// Create a test class extending PHPUnit framework test case
class TestApp extends PHPUnit_Framework_TestCase {

	// Very precise
	public function test__hello__exact() {

		$this->expectOutputString("Hello, World.  How are you doing?\n");
		
		hello('World');
	}
	
	// This is probably more useful though
	public function test__hello__regexp() {

		$this->expectOutputRegex("/Hello,\s+World/");
		
		hello('World');
	}

}
?>
