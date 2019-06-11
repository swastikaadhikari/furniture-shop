<!--This page displays the information about home page-->
<?php
	$title = "Fran's Furniture - Home";
	$furniture = new DatabaseTableClass('specialoffer');//include the table specialoffer from classes
	$offer = $furniture->findAll();
	$content = loadTemplate('../../templates/user/indexTemp.php', ['furnitureQuery'=>$offer]);
?>