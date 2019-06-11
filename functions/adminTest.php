<!--function to test admin-->
 <?php
	function adminTest($testAdmin){//function admintest
		$testAdmin = true;

		if ($testAdmin['firstName'] == '') {
			$validTest = false;//firstName made false
		}

		if ($testAdmin['surName'] == '') {
			$validTest = false;//surName made false
		}

		if ($testAdmin['phone_no'] == '') {
			$validTest = false;//phone_no made false
		}

		if ($testAdmin['email'] == '') {
			$validTest = false;//email made false
		}

		if ($testAdmin['username'] == '') {
			$validTest = false;//username made false
		}
		if ($testAdmin['password'] == '') {
			$validTest = false;//password made false
		}
		return $validTest;
	}
?> 