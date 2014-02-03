<?php
// Include the code that you are actually testing
require_once 'lib.php';

// Create a test class extending PHPUnit framework test case
class TestApp extends PHPUnit_Framework_TestCase {

	// Have as many tests as you want.  Start method name with 'test'.
	public function test__addTwoNumbers__positive() {

		// What are we expecting back?
		$expected = 3;
		
		// What have we actually got?
		$actual = addTwoNumbers(1, 2);

		// Assert that expected and actual results are equal. Otherwise print a message.
		// Check the list of other assertions here: http://phpunit.de/manual/3.7/en/appendixes.assertions.html
		$this->assertEquals($expected, $actual, "What, you can't even add two numbers, you moron?");
	}
	
	public function test__addTwoNumbers__negative() {

		// What are we expecting back?
		$expected = -3;
		
		// What have we actually got?
		$actual = addTwoNumbers(-1, -2);

		// Assert that expected and actual results are equal. Otherwise print a message.
		// Check the list of other assertions here: http://phpunit.de/manual/3.7/en/appendixes.assertions.html
		$this->assertEquals($expected, $actual, "What, you can't even add two numbers, you moron?");
	}

}
?>
