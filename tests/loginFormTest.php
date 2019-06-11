<!--test the edit furniture form-->
<?php
	require 'functions/loginTest.php';//includes the edit furnitures test from functions
	class loginFormTest extends \PHPUnit_Framework_TestCase {
		public function setUp() {

		}
		//function testLoginname to check the passed value	
		public function testLoginname(){
			$testLogin = [
				'username' => '',
				'password' => ''
			];
			$validLogin = loginTest($testLogin);
			$this->assertFalse($validLogin);
		}
		//function testLoginUsername to check the passed value	
		public function testLoginUsername(){
			$testLogin = [
				'username' => '',
				'password' => 'thisisit'
			];
			$validLogin = loginTest($testLogin);
			$this->assertFalse($validLogin);
		}
		//function testLoginPassword to check the passed value	
		public function testLoginPassword(){
			$testLogin = [
				'username' => 'Right',
				'password' => ''
			];
			$validLogin = loginTest($testLogin);
			$this->assertFalse($validLogin);
		}
		//function testLoginValid to check the passed value	
		public function testLoginValid(){
			$testLogin = [
				'username' => 'Right',
				'password' => 'Wrong'
			];
			$validLogin = loginTest($testLogin);
			$this->assertTrue($validLogin);
		}
	}
?>