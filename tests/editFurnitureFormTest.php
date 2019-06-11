<!--test the edit furniture form-->
<?php
	require 'functions/editFurnitureTest.php';//includes the edit furnitures test from functions
	class editFurnitureFormTest extends \PHPUnit_Framework_TestCase {
		public function setUp() {

		}
		//function testFurnitureBlank to check the passed value	
		public function testFurnitureBlank(){
			$testEditFurniture =[
				'name' => '',
				'description' =>'',
				'price'=>'',
				'categoryId' =>'',
				'image'=>'',
				'item_type'=>''
			];
			$validTest = furnitureTest($testEditFurniture);
			$this->assertFalse($validTest);
		}
		//function testFurnitureName to check the passed value	
		public function testFurnitureName(){
			$testEditFurniture =[
				'name' => '',
				'description' =>'This is nice',
				'price'=>'200',
				'categoryId' =>'1',
				'image'=>'1.jpg',
				'item_type'=>'first-hand'
			];
			$validTest = furnitureTest($testEditFurniture);
			$this->assertFalse($validTest);
		}
		//function testFurnitureDescription to check the passed value	
		public function testFurnitureDescription(){
			$testEditFurniture =[
				'name' => 'Bed',
				'description' =>'',
				'price'=>'200',
				'categoryId' =>'1',
				'image'=>'1.jpg',
				'item_type'=>'first-hand'
			];
			$validTest = furnitureTest($testEditFurniture);
			$this->assertFalse($validTest);
		}
		//function testFurniturePrice to check the passed value	
		public function testFurniturePrice(){
			$testEditFurniture =[
				'name' => 'Bed',
				'description' =>'This is nice',
				'price'=>'',
				'categoryId' =>'1',
				'image'=>'1.jpg',
				'item_type'=>'first-hand'
			];
			$validTest = furnitureTest($testEditFurniture);
			$this->assertFalse($validTest);
		}
		//function testFurnitureCategoryId to check the passed value	
		public function testFurnitureCategoryId(){
			$testEditFurniture =[
				'name' => 'Bed',
				'description' =>'This is nice',
				'price'=>'',
				'categoryId' =>'',
				'image'=>'1.jpg',
				'item_type'=>'first-hand'
			];
			$validTest = furnitureTest($testEditFurniture);
			$this->assertFalse($validTest);
		}
		//function testFurnitureImage to check the passed value	
		public function testFurnitureImage(){
			$testEditFurniture =[
				'name' => 'Bed',
				'description' =>'This is nice',
				'price'=>'200',
				'categoryId' =>'1',
				'image'=>'',
				'item_type'=>'first-hand'
			];
			$validTest = furnitureTest($testEditFurniture);
			$this->assertFalse($validTest);
		}
		//function testFurnitureItemType to check the passed value	
		public function testFurnitureItemType(){
			$testEditFurniture =[
				'name' => 'Bed',
				'description' =>'This is nice',
				'price'=>'200',
				'categoryId' =>'',
				'image'=>'1.jpg',
				'item_type'=>''
			];
			$validTest = furnitureTest($testEditFurniture);
			$this->assertFalse($validTest);
		}
		//function testFurnitureAll to check the passed value	
		public function testFurnitureAll(){
			$testEditFurniture =[
				'name' => 'Bed',
				'description' =>'This is nice',
				'price'=>'200',
				'categoryId' =>'',
				'image'=>'1.jpg',
				'item_type'=>'first-hand'
			];
			$validTest = furnitureTest($testEditFurniture);
			$this->assertFalse($validTest);
		}
	}
?> 