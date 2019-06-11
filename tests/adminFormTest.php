<!--test the admin form-->
 <?php
	require 'functions/adminTest.php';//includes the admin test from functions
	class adminFormTest extends \PHPUnit_Framework_TestCase {
		public function setUp() {

		}
			//function testAdminFillFull to check the passed value
			public function testAdminFillFull(){
			$testAdmin =[
				'firstName' => 'Swastika',
				'surName' =>'Adhikari',
				'phone_no'=>'9861164848',
				'email'=>'swastika@gmail.com',
				'username'=>'swastik',
				'password'=>'swastik'
			];
			$validTest = adminTest($testAdmin);//function admin test
			$this->assertFalse($validTest);//checks the assert value
		}
		//function testAdminName to check the passed value
		public function testAdminName(){
			$testAdmin =[
				'firstName' => '',
				'surName' =>'Adhikari',
				'phone_no'=>'9861164848',
				'email'=>'swastika@gmail.com',
				'username'=>'swastik',
				'password'=>'swastik'
			];
			$validTest = adminTest($testAdmin);
			$this->assertFalse($validTest);
		}
		//function testAdminLastName to check the passed value
		public function testAdminLastName(){
			$testAdmin =[
				'firstName' => 'Swastika',
				'surName' =>'',
				'phone_no'=>'9861164848',
				'email'=>'swastika@gmail.com',
				'username'=>'swastik',
				'password'=>'swastik'
			];
			$validTest = adminTest($testAdmin);
			$this->assertFalse($validTest);
		}
		//function testAdminPhoneNo to check the passed value
		public function testAdminPhoneNo(){
			$testAdmin =[
				'firstName' => 'Swastika',
				'surName' =>'Adhikari',
				'phone_no'=>'',
				'email'=>'swastika@gmail.com',
				'username'=>'swastik',
				'password'=>'swastik'
			];
			$validTest = adminTest($testAdmin);
			$this->assertFalse($validTest);
		}
		//function testAdminEmail to check the passed value
		public function testAdminEmail(){
			$testAdmin =[
				'firstName' => 'Swastika',
				'surName' =>'Adhikari',
				'phone_no'=>'9861164848',
				'email'=>'',
				'username'=>'swastik',
				'password'=>'swastik'
			];
			$validTest = adminTest($testAdmin);
			$this->assertFalse($validTest);
		}
		//function testAdminUsername to check the passed value
		public function testAdminUsername(){
			$testAdmin =[
				'firstName' => 'Swastika',
				'surName' =>'Adhikari',
				'phone_no'=>'9861164848',
				'email'=>'swastika@gmail.com',
				'username'=>'',
				'password'=>'swastik'
			];
			$validTest = adminTest($testAdmin);
			$this->assertFalse($validTest);
		}
		//function testAdminPassword to check the passed value
		public function testAdminPassword(){
			$testAdmin =[
				'firstName' => 'Swastika',
				'surName' =>'Adhikari',
				'phone_no'=>'9861164848',
				'email'=>'swastika@gmail.com',
				'username'=>'swastik',
				'password'=>''
			];
			$validTest = adminTest($testAdmin);
			$this->assertFalse($validTest);
		}
		//function testAdminLeaveAll to check the passed value
		public function testAdminLeaveAll(){
			$testAdmin =[
				'firstName' => '',
				'surName' =>'',
				'phone_no'=>'',
				'email'=>'',
				'username'=>'',
				'password'=>''
			];
			$validTest = adminTest($testAdmin);
			$this->assertFalse($validTest);
		}
	}
?> 