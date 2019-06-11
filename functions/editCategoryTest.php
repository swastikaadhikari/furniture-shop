<!--function to edit category-->
<?php
	function editCategoryTest($testEditCategory){//function editCategoryTest which takes the variable testEditCategory
		$testEditCategory = true;

		if ($testEditCategory['name'] == '') {
			$validEditTest = false;//name made false
		}
		return $validEditTest;
	}
?>