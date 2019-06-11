<!--page ro load admin index-->
<?php
	$title = "Fran's Furniture - Admin_Home";
	$admin = new DatabaseTableClass('admin');//connect database table admin
	$tempAdmin = [
		'adminlogin' => $admin
	];
	$content = loadTemplate('../../templates/admin/adminindex.php', $tempAdmin);//load template function to load adminindex template
?>