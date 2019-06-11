<!--page to edit the category-->
<?php
	$title = "Fran's Furniture - Edit Category";
	$currentcategory = new DatabaseTableClass('category');//links to the database table category
	if (isset($_POST['submit'])) {//checks whether the submit is set or or
		$criterian =[
				'id' => $_POST['id'],
				'name' => $_POST['name']
		];

		$categories = $currentcategory->save($criterian,'id');//save the id and criteria
		echo 'Category Saved';
		header('Location:dcategory');//location header
	}

	$var =[
		'selectCategory'=>$currentcategory,//in editcategorytemplate
		'currentcategory'=>$currentcategory
	];

	$content = loadTemplate('../../templates/admin/editcategorytemplate.php',$var);//load the temolate
?>