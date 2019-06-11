<!--page to load template display offer-->
<?php
	$title = "Fran's Furniture - Offer";
	$selectoffer= new DatabaseTableClass('specialoffer');//links the database table special offer
	$content = loadTemplate('../../templates/admin/displayoffertemplate.php',['selectoffer'=>$selectoffer]);//load the template
?>