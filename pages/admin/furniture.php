<!--page to load the template furniture template-->
<?php
	$title = "Fran's Furniture - Furniture";
	$furnitureselect = new DatabaseTableClass('furniture');//connect to databse table furniture
	$var=[
		'furnitureselect'=>$furnitureselect,
		'hidefur'=>$furnitureselect
	];//passes the array
	$content= loadTemplate('../../templates/admin/furnituretemplate.php',$var);//load the template
?>