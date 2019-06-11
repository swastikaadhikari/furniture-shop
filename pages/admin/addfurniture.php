<!--page to add furniture-->
<?php
	$title = "Fran's Furniture - Add Furniture";
	$furnitureadd = new DatabaseTableClass('furniture');//connect database table furniture
	$category = new DatabaseTableClass('category');//connect database table category

	if (isset($_GET['did'])) {//get the did 
			$furnituredelete = $furnitureadd->delete('id',$_GET['did']);//delete the admin id and get the did
			echo 'Furniture Deleted';
			header('Location:furniture');
		}

		if (isset($_POST['submit'])) {//checks the variable submit
			$data = $_POST;//post the data
			unset($data['submit']);//unset the submit
			$furnitureadd->save($data);//save the data

			//add the image
			if($_FILES['image']['error'] == 0){
			$fileName =$furnitureadd->image() . '.jpg'; 
			move_uploaded_file($_FILES['image'],['tmp_name'],'../images/furniture/' . $fileName);
		}
			echo "Furniture Added";
			header('Location:furniture');//location header
		}

		$tempFurniture =[
				'furnitureadd' =>$furnitureadd,
				'categoryQuery' => $category
		];
		$content=loadTemplate('../../templates/admin/addfurnituretemplate.php',$tempFurniture);//calls the load template
?>

