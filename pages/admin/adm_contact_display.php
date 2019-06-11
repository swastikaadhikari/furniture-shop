<!--to display the conntact-->
<?php
	$title ="Fran's Furniture - View Message";
	$enquiry = new DatabaseTableClass('contact');//connect database table contact
	$users = new DatabaseTableClass('admin');//connect database table admin
	$tempContact = [
	  'list'=>$enquiry,
	  'user'=>$users,
	  'updatemsg'=>$enquiry
	];
	$content = loadTemplate('../../templates/admin/adm_contact_display_template.php',$tempContact);//load template function to display the template
?>