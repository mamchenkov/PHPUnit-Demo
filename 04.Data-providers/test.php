<?php
// Include the code that you are actually testing
require_once 'lib.php';

// Create a test class extending PHPUnit framework test case
class TestApp extends PHPUnit_Framework_TestCase {


	// Return array of arrays.  Each array is a set of values for the test
	public function numbers() {
		return array(
				array(1, 2, 3),
				array(-1, -2, -3),
				array(1, -2, -1),
			);
	}


	/**
	 * Use docblock syntax to specify dataProvider
	 * 
	 * Use parameters to suggest which values go where
	 * 
	 * @dataProvider numbers
	 */
	public function test__addTwoNumbers($one, $two, $expected) {

		// What have we actually got?
		$actual = addTwoNumbers($one, $two);

		// Assert that expected and actual results are equal. Otherwise print a message.
		$this->assertEquals($expected, $actual, "What, you can't even add two numbers, you moron?");
	}
	
}
?>
