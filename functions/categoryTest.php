<!--function to test category page-->
 <?php
	function categoryTest($testCategory){//function categoryTest which takes the variable testCategory
		$testCategory = true;
		if ($testCategory['name'] == '') {
			$validTest = false;//name made false
		}
		return $validTest;
	}
?>