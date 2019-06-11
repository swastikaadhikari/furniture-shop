<!--pages to load template special offer-->
<?php
$title = "Fran's Furniture - Special Offers";
$specialoffer = new DatabaseTableClass('specialoffer');//connect to database tabke special offer

if (isset($_GET['did'])) {//checks the variable did is set or not and get the value
			$offerdelete = $specialoffer->delete('id',$_GET['did']);//get the id
			echo 'Offer Deleted';
			header('Location:displayoffer');
		}

		if (isset($_POST['submit'])) {//checks whether the variable submit is set ot not
	    	$criterian =[
				'title' => $_POST['title'],
				'description' => $_POST['description'],
				'start_date' =>$_POST['start_date'],
				'end_date'=>$_POST['end_date']
		];
		$specialoffer->save($criterian);//save the varibale passed in array

		//checks tp upload the image
	    if ($_FILES['image']['error'] == 0) {
			$fileName = $specialoffer->image() . '.jpg';
			move_uploaded_file($_FILES['image']['tmp_name'], '../../images/Specialoffer/' . $fileName);
		}

		echo 'Special offer added';
		header('location:displayoffer');//location header
	}

		$var=[
			'specialoffer'=>$specialoffer
		];//passed as array
		$content = loadTemplate('../../templates/admin/specialoffertemplate.php',$var);//load the template
?>