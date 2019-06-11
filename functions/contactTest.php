<!--function to test contact page-->
 <?php
	function contactTest($testContact){//function contactTest which takes the variable testContact
		$validContact = true;

		if ($testContact['firstname'] == '') {
			$validContact = false;//firstname made false
		}

		if ($testContact['lastname'] == '') {
			$validContact = false;//lastname made false
		}

		if ($testContact['email'] == '') {
			$validContact = false;//email made false
		}

		if ($testContact['phone_no'] == '') {
			$validContact = false;//phone_no made false
		}

		if ($testContact['enquiry'] == '') {
			$validContact = false;//enquiry made false
		}
		 return $validContact; 
	} 
?>