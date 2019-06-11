<?php
	include '../../db/dbconnect.php';
	 require '../../functions/loadTemplate.php';
	require '../../classes/DatabaseTableClass.php';
	//require '../templates/user/loadTemplate.php';
	
		if(isset($_GET['page'])){
			require '../../pages/user/'.$_GET['page']. '.php';
		}
		else{
			require '../../pages/user/home.php';
		}
		
		$tempVars = [
			'title' => 'Home Page',
			'content' => $content
		];
		
		echo loadTemplate('../../templates/user/layoutTemp.php', $tempVars);
?>