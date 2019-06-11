<!--This page displays the information about contact page-->
<?php
	$contact = new DatabaseTableClass('contact');//include the table contact from classes
	//it is used to check whether a variable is set or not
		if (isset($_POST['submit'])) {
			$criterian =[
			'firstname' => $_POST['firstname'],
			'lastname' => $_POST['lastname'],
			'email' => $_POST['email'],
			'phone_no' => $_POST['phone_no'],
			'enquiry' => $_POST['enquiry']
									];
			$contact->save($criterian, 'contact_id');//used to isnert the object in the database

	// 	else{
	// 		header('Location:index.php?pages=contact&msg=Enter valid data');
	// 	}
	 }
?>

<?php
	$title = "Fran's Furniture - Contact";
	$content = loadTemplate('../../templates/user/contacttemplate.php', []);
?>