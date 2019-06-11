<!--edit the caegroyr-->
<section class="right">
	<?php
		session_start();//start the sesion
		if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {//checks the session
			
				$editcategory = $selectCategory->find('id',$_GET['id'])->fetch();	//find the id
		?>
			<h2>Edit Category</h2>
			<form action="editcategory" method="POST">
				<input type="hidden" name="id" value="<?php echo $editcategory['id'];?>"/><!--get the id-->

				<label>Category name</label>
				<input type="text" name="name" required="" value="<?php echo $editcategory['name'];?>"/>
				<input type="submit" name="submit" value="Save Category"/>
			</form>
			<?php } ?>
</section>