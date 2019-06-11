<!--pages to add admin-->
<?php
	$title="Fran's Furniture - Add Admin";
	$Add_admin = new DatabaseTableClass('admin');//connect the database table
	if (isset($_GET['did'])) {//gets the did and checks the variable did is set or not
			$admindelete= $Add_admin->delete('admin_id', $_GET['did']);//delete the admin id and get the id to delete it
			echo 'Admin deleted';
			header('Location:admin');//header location
		}

	if (isset($_POST['submit'])) {//checks the submit variable
		//variable are passed as array
		$criterian =[
				'firstName'=>$_POST['firstName'],
				'surName'=>$_POST['surName'],
				'phone_no'=>$_POST['phone_no'],
				'username'=>$_POST['username'],
				'password'=>password_hash($_POST['password'],PASSWORD_BCRYPT),//hash passowrd
				'email'=>$_POST['email']

		];
		$Add_admin->save($criterian);//save the function
		echo "New Admin Added";
		header('Location:admin');//location header
	}

	$tempAdmin=[
		'Add_admin'=> $Add_admin
	];
	$content = loadTemplate('../../templates/admin/AddAdminTemplate.php',$tempAdmin);//ccall the load template function
?>