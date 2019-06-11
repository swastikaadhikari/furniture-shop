<!--page to laod the tempalte edit furniture-->
<?php
$title = "Fran's Furniture - Edit Category";
$furunitureedit = new DatabaseTableClass('furniture');//links to the database table furniture
$category = new DatabaseTableClass('category');//links to the database table category
	
	if (isset($_POST['submit'])) {//checks whether the varibale submit is et ot not
		$criterian =[
				'name' => $_POST['name'],
				'description' => $_POST['description'],
				'price' =>$_POST['price'],
				'categoryId'=>$_POST['categoryId'],
				'id'=>$_POST['id']
		];
		$furedit=$furunitureedit->save($criterian,'id');//call to save  function where id and criteria is saved
		//to save the image
		if ($_FILES['image']['error'] ==0) {
			$fileName = $_POST['id'] .'.jpg';
			move_uploaded_file($_FILES['image'] ['tmp_name'], '../../images/furniture' .$fileName);
		}
		echo 'Furniture Saved';
		header('Location:furniture');
	}
	$var=[
		'furnitureselect' =>$furunitureedit,//im editfurnituretemp
		'furunitureedit' =>$furunitureedit,
		'categoryQuery'=>$category
	];
	$content = loadTemplate('../../templates/admin/editfurnituretemplate.php',$var);//load the template
	?>