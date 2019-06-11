<!--test the edit furniture form-->
<?php
	require 'functions/specialOfferTest.php';//includes the edit furnitures test from functions
	class specialOfferFormTest extends \PHPUnit_Framework_TestCase {
		public function setUp() {

		}
		//function testOfferLeaveALl to check the passed value	
		public function testOfferLeaveALl(){
			$testSpecialOffer =[
				'title'=>'',
				'description' =>'',
				'start_date' =>'',
				'end_date' =>'',
				'image' =>''

			];
			$validTest = specialOfferTest($testSpecialOffer);
			$this->assertFalse($validTest);
		}
		//function testOfferTitle to check the passed value	
		public function testOfferTitle(){
			$testSpecialOffer =[
				'title'=>'',
				'description' =>'Sale',
				'start_date' =>'2019-1-9',
				'end_date' =>'2019-2-3',
				'image' =>'2.jpg'

			];
			$validTest = specialOfferTest($testSpecialOffer);
			$this->assertFalse($validTest);
		}
		//function testOfferDescription to check the passed value	
		public function testOfferDescription(){
			$testSpecialOffer =[
				'title'=>'Dashain Offer',
				'description' =>'',
				'start_date' =>'2019-1-9',
				'end_date' =>'2019-2-3',
				'image' =>'2.jpg'

			];
			$validTest = specialOfferTest($testSpecialOffer);
			$this->assertFalse($validTest);
		}
		//function testOfferStartDate to check the passed value	
		public function testOfferStartDate(){
			$testSpecialOffer =[
				'title'=>'Dashain Offer',
				'description' =>'Sale',
				'start_date' =>'',
				'end_date' =>'2019-2-3',
				'image' =>'2.jpg'

			];
			$validTest = specialOfferTest($testSpecialOffer);
			$this->assertFalse($validTest);
		}
		//function testOfferEndDate to check the passed value	
		public function testOfferEndDate(){
			$testSpecialOffer =[
				'title'=>'Dashain Offer',
				'description' =>'Sale',
				'start_date' =>'2019-1-9',
				'end_date' =>'',
				'image' =>'2.jpg'

			];
			$validTest = specialOfferTest($testSpecialOffer);
			$this->assertFalse($validTest);
		}
		//function testOfferImage to check the passed value	
		public function testOfferImage(){
			$testSpecialOffer =[
				'title'=>'Dashain Offer',
				'description' =>'Sale',
				'start_date' =>'2019-1-9',
				'end_date' =>'2019-2-3',
				'image' =>''

			];
			$validTest = specialOfferTest($testSpecialOffer);
			$this->assertFalse($validTest);
		}
		//function testOfferFillAll to check the passed value	
		public function testOfferFillAll(){
			$testSpecialOffer =[
				'title'=>'Dashain Offer',
				'description' =>'Sale',
				'start_date' =>'2019-1-9',
				'end_date' =>'2019-2-3',
				'image' =>'1.jpg'

			];
			$validTest = specialOfferTest($testSpecialOffer);
			$this->assertFalse($validTest);
		}
	}
	?> 