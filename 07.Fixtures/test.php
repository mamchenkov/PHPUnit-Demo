<?php
// Include the code that you are actually testing
require_once 'lib.php';

// Create a test class extending PHPUnit framework test case
class TestApp extends PHPUnit_Framework_TestCase {

	// Use this person for all tests
	protected $person;

	// Setup the person
	protected function setUp() {
		$person = array(
			'Name'    => 'Testis Testostoulos',
			'Country' => 'Cyprus',
			'DOB'     => '1978-15-04',
		);
		$this->person = new Person($person);
	}

	protected function tearDown() {
		$this->person = null;
	}

	public function test__getName() {
		$person = $this->person;
		$this->assertEquals('Testis Testostoulos', $person->getName());
	}
	
	public function test__getCountry() {
		$person = $this->person;
		$this->assertEquals('Cyprus', $person->getCountry());
	}
	
	public function test__setName() {
		$person = $this->person;
		$person->setName('Leonid');
		$this->assertEquals('Leonid', $person->getName());
	}

}
?>
