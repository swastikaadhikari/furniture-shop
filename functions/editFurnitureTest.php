<!--function to edit furniture-->
 <?php
	function editFurnitureTest($testEditFurniture){//function editFurnitureTest which takes the variable testEditFurniture
		$testEditFurniture = true;

		if ($testEditFurniture['name'] == '') {
			$validTest = false;//name made false
		}
		if ($testEditFurniture['description'] == '') {
			$validTest = false;//description made false
		}
		if ($testEditFurniture['price'] == '') {
			$validTest = false;//price made false
		}
		if ($testEditFurniture['categoryId'] == '') {
			$validTest = false;//categoryId made false
		}
		if ($testEditFurniture['image'] == '') {
			$validTest = false;//image made false
		}
		if ($testEditFurniture['item_type'] == '') {
			$validTest = false;//item_type made false
		}
		return $validTest;
	}
?> 