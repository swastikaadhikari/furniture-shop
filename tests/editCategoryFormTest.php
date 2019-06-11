<!--test the edit category form-->
<?php
	require 'functions/editCategoryTest.php';//includes the edit category test from functions
	class editCategoryFormTest extends \PHPUnit_Framework_TestCase {
		public function setUp() {

		}
		//function testLoginname to check the passed value	
		public function testLoginname(){
			$testEditCategory = [
				'name' => '',
				
			];
			$validEditTest = editCategoryTest($testEditCategory);
			$this->assertFalse($validEditTest);
		}
		//function testLoginEditname to check the passed value	
		public function testLoginEditname(){
			$testEditCategory = [
				'name' => 'sofas',
				
			];
			$validEditTest = editCategoryTest($testEditCategory);
			$this->assertFalse($validEditTest);
		}
}
?>