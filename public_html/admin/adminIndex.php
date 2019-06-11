<?php
	include '../../db/dbconnect.php';
	 require '../../functions/loadTemplate.php';
	require '../../classes/DatabaseTableClass.php';
	//require '../templates/admin/loadTemplate.php';

	if(isset($_GET['page'])){
		require '../../pages/admin/'.$_GET['page']. '.php';
	}
	else{
		require '../../pages/admin/adm_home.php';
	}
	
	$tempVars = [
		'title' => $title,
		'content' => $content
	];
	
	echo loadTemplate('../../templates/admin/admin_layouttemplate.php', $tempVars);

	?>