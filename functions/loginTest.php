<!--function to test login page-->
<?php
	function loginTest($testLogin) {//function login test which takes the variable testlogin
	     $validLogin = true;
	     
	     if ($testLogin['username'] == '') {
	        $validLogin = false;//username made false
	     }

	     if ($testLogin['password'] == '') {
	        $validLogin = false;//password made false
	     }
	     return $validLogin; 
	} 
?>