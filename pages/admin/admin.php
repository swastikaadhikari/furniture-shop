<!--page to load admin template-->
<?php
	$title = "Fran's Furniture - Admin";
	$selectadmin = new DatabaseTableClass('admin');//connect database table admi
	$content = loadTemplate('../../templates/admin/admintemplate.php',['selectadmin'=>$selectadmin]);//load the function
?>