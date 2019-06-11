<!--This page displays the information about furniture page-->
<?php
	$title = "Fran's Furniture - Furniture";
	$furniture = new DatabaseTableClass('furniture');//include the table furniture from classes
	$furni = $furniture->findAll();//find the funiture

	
	if (isset($_GET['id'])) {
		$furni = $furniture->find('categoryId', $_GET['id']);//gets the id
	}
	else{
		$furni=$furniture->find('hide','0');//hide
	}

		$category = new DatabaseTableClass('category');//include the table category from classes
		
	$cate =$category->findAll();//find all the id
	$sortCate = $category->findAll();//find all the id
	$content = loadTemplate('../../templates/user/furnituretemplate.php', ['furnitureQuery'=>$furni, 'category'=>$cate,'value'=>$sortCate]);//gets the valye
?>