<!--function to special offer form-->
 <?php
	function specialOfferTest($testSpecialOffer){//function specialOfferTest which takes the variable testSpecialOffer
		$testSpecialOffer = true;

		if ($testSpecialOffer['title'] == '') {
			$validTest = false;//title made false
		}

		if ($testSpecialOffer['description'] == '') {
			$validTest = false;//description made false
		}

		if ($testSpecialOffer['start_date'] == '') {
			$validTest = false;//start_date made false
		}

		if ($testSpecialOffer['end_date'] == '') {
			$validTest = false;//end_date made false
		}

		if ($testSpecialOffer['image'] == '') {
			$validTest = false;//image made false
		}

		return $validTest;
	}
?> 