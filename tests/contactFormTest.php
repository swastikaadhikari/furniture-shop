<!--test the contact form-->
<?php
	require 'functions/contactTest.php';//includes the contact test from functions
	class contactFormTest extends \PHPUnit_Framework_TestCase {
		public function setUp() {

		}
			//function testLoginleaveAll to check the passed value		
			public function testLoginleaveAll(){
			$testContact = [
				'firstname' => '',
				'lastname' => '',
				'email'=>'',
				'phone_no' => '',
				'enquiry'=>''
			];
			$validContact = contactTest($testContact);
			$this->assertFalse($validContact);
		}
		//function testLoginFirstname to check the passed value
		public function testLoginFirstname(){
			$testContact = [
				'firstname' => '',
				'lastname' => 'Ghale',
				'email'=>'Dikshya@gmail.com',
				'phone_no' => '9841690640',
				'enquiry'=>'This is nice'
			];
			$validContact = contactTest($testContact);
			$this->assertFalse($validContact);
		}
		//function testLoginLastname to check the passed value
		public function testLoginLastname(){
			$testContact = [
				'firstname' => 'Dikshya',
				'lastname' => '',
				'email'=>'Dikshya@gmail.com',
				'phone_no' => '9841690640',
				'enquiry'=>'This is nice'
			];
			$validContact = contactTest($testContact);
			$this->assertFalse($validContact);
		}
		//function testLoginEmail to check the passed value
		public function testLoginEmail(){
			$testContact = [
				'firstname' => 'Dikshya',
				'lastname' => 'Ghale',
				'email'=>'',
				'phone_no' => '9841690640',
				'enquiry'=>'This is nice'
			];
			$validContact = contactTest($testContact);
			$this->assertFalse($validContact);
		}
		//function testLoginPhoneNo to check the passed value
		public function testLoginPhoneNo(){
			$user = [
				'firstname' => 'Dikshya',
				'lastname' => 'Ghale',
				'email'=>'Dikshya@gmail.com',
				'phone_no' => '',
				'enquiry'=>'This is nice'
			];
			$validContact = contactTest($user);
			$this->assertFalse($validContact);
		}
		//function testLoginEnquiry to check the passed value
		public function testLoginEnquiry(){
			$testContact = [
				'firstname' => 'Dikshya',
				'lastname' => 'Ghale',
				'email'=>'Dikshya@gmail.com',
				'phone_no' => '9841690640',
				'enquiry'=>''
			];
			$validContact = contactTest($testContact);
			$this->assertFalse($validContact);
		}
		//function testLoginFillAll to check the passed value
		public function testLoginFillAll(){
			$testContact = [
				'firstname' => 'Dikshya',
				'lastname' => 'Ghale',
				'email'=>'Dikshya@gmail.com',
				'phone_no' => '9841690640',
				'enquiry'=> 'This is nice'
			];
			$validContact = contactTest($testContact);
			$this->assertTrue($validContact);
		}
	}
?> 