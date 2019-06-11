<!--test the category form-->
<?php
	require 'functions/categoryTest.php';//includes the category test from functions
	class categoryFormTest extends \PHPUnit_Framework_TestCase {
		public function setUp() {

		}
		//function testLoginname to check the passed value
		public function testLoginname(){
			$testCategory = [
				'name' => '',
				
			];
			$validTest = categoryTest($testCategory);
			$this->assertFalse($validTest);
		}
		//function testLoginEdit to check the passed value
		public function testLoginEdit(){
			$testCategory = [
				'name' => 'Beds',
				
			];
			$validTest = categoryTest($testCategory);
			$this->assertFalse($validTest);
		}
}
?> 