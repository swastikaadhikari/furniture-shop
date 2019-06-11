<!--load the template complete message-->
<?php
	$title = "Fran's Furniture - Enquiry";
	$enquiry = new DatabaseTableClass('contact');//connect to contact table
	$admin = new DatabaseTableClass('admin');//connect to admin table

	$var =[
		'completemsg'=>$enquiry,
		'user'=>$admin,
		'enquiry' => $enquiry,
		'adminlogin'=>$admin
	];//passes the value as array
	$content = loadTemplate('../../templates/admin/completemsgtemplate.php',$var);//load the template
?>