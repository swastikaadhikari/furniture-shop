<!--page to load template categories template-->
<?php
	$title = "Fran's Furniture - Categories";
	$sel = new DatabaseTableClass('category');//connect database table category
	$content = loadTemplate('../../templates/admin/categoriesTemplate.php',['sel' =>$sel]);//load template categories template
?>
