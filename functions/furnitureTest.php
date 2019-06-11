<!--function to add furniture-->
<?php
	function furnitureTest($testFurniture){//function furnitureTest which takes the variable testFurniture
		$testFurniture = true;

		if ($testFurniture['name'] == '') {
			$validTest = false;//name made false
		}
		if ($testFurniture['description'] == '') {
			$validTest = false;//description made false
		}
		if ($testFurniture['price'] == '') {
			$validTest = false;//price made false
		}
		if ($testFurniture['categoryId'] == '') {
			$validTest = false;//categoryId made false
		}
		if ($testFurniture['image'] == '') {
			$validTest = false;//image made false
		}
		if ($testFurniture['item_type'] == '') {
			$validTest = false;//item_type made false
		}
		return $validTest;
	}
?> 