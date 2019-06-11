<!--page to add category-->
<?php
	$title = "Fran's Furniture - Add Category";
	$categoryadd = new DatabaseTableClass('category');//connect the database table category

	if (isset($_GET['did'])) {//gets the did and checks the variable did is set or not
			$categorydelete = $categoryadd->delete('id',$_GET['did']);//delete the admin id and get the id to delete it

			echo 'Category Added';
			header('Location:dcategory');//location header
		}

	if (isset($_POST['submit'])) {//checks the variable submit is set or not
			unset($_POST['submit']);//unset the variable 
			$categoryadd->save($_POST);//save the database
			echo 'Category Added.';
			header('Location:dcategory');//location header
		}	
	$content = loadTemplate('../../templates/admin/addcategorytemplate.php',['categoryadd'=>$categoryadd]);//load the template
?>