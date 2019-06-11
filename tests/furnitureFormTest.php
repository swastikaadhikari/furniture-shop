<!--test the add furniture form-->
<?php
	require 'functions/furnitureTest.php';//includes the add furnitures test from functions
	class furnitureFormTest extends \PHPUnit_Framework_TestCase {
		public function setUp() {

		}
		//function testFurnitureNameLeave to check the passed value	
		public function testFurnitureNameLeave(){
			$testFurniture =[
				'name' => '',
				'description' =>'',
				'price'=>'',
				'categoryId' =>'',
				'image'=>'',
				'item_type'=>''
			];
			$validTest = furnitureTest($testFurniture);
			$this->assertFalse($validTest);
		}
		//function testFurnitureName to check the passed value	
		public function testFurnitureName(){
			$testFurniture =[
				'name' => '',
				'description' =>'This is nice',
				'price'=>'200',
				'categoryId' =>'1',
				'image'=>'1.jpg',
				'item_type'=>'first-hand'
			];
			$validTest = furnitureTest($testFurniture);
			$this->assertFalse($validTest);
		}
		//function testFurnitureDescription to check the passed value	
		public function testFurnitureDescription(){
			$testFurniture =[
				'name' => 'Bed',
				'description' =>'',
				'price'=>'200',
				'categoryId' =>'1',
				'image'=>'1.jpg',
				'item_type'=>'first-hand'
			];
			$validTest = furnitureTest($testFurniture);
			$this->assertFalse($validTest);
		}
		//function testFurniturePrice to check the passed value	
		public function testFurniturePrice(){
			$testFurniture =[
				'name' => 'Bed',
				'description' =>'This is nice',
				'price'=>'',
				'categoryId' =>'1',
				'image'=>'1.jpg',
				'item_type'=>'first-hand'
			];
			$validTest = furnitureTest($testFurniture);
			$this->assertFalse($validTest);
		}
		//function testFurnitureCategoryId to check the passed value	
		public function testFurnitureCategoryId(){
			$testFurniture =[
				'name' => 'Bed',
				'description' =>'This is nice',
				'price'=>'',
				'categoryId' =>'',
				'image'=>'1.jpg',
				'item_type'=>'first-hand'
			];
			$validTest = furnitureTest($testFurniture);
			$this->assertFalse($validTest);
		}
		//function testFurnitureImage to check the passed value	
		public function testFurnitureImage(){
			$testFurniture =[
				'name' => 'Bed',
				'description' =>'This is nice',
				'price'=>'200',
				'categoryId' =>'1',
				'image'=>'',
				'item_type'=>'first-hand'
			];
			$validTest = furnitureTest($testFurniture);
			$this->assertFalse($validTest);
		}
		//function testFurnitureItemType to check the passed value	
		public function testFurnitureItemType(){
			$testFurniture =[
				'name' => 'Bed',
				'description' =>'This is nice',
				'price'=>'200',
				'categoryId' =>'',
				'image'=>'1.jpg',
				'item_type'=>''
			];
			$validTest = furnitureTest($testFurniture);
			$this->assertFalse($validTest);
		}
		//function testFurnitureFillAll to check the passed value	
		public function testFurnitureFillAll(){
			$testFurniture =[
				'name' => 'Bed',
				'description' =>'This is nice',
				'price'=>'200',
				'categoryId' =>'',
				'image'=>'1.jpg',
				'item_type'=>'first-hand'
			];
			$validTest = furnitureTest($testFurniture);
			$this->assertFalse($validTest);
		}
	}
?>