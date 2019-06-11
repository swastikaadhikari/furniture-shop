<!---template for editing furniture-->
<section class="right">
	<?php
		session_start();//start the session
		if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {//checks if the session is set or not
			$furniture = $furnitureselect->find('id',$_GET['id'])->fetch();//get the furniture id and fetch the data to edit
			?>
			<!---form to edit furniyure-->
			<h2>Edit Furniture</h2>
				<form action="editfurniture" method="POST" enctype="multipart/form-data">
					<!---label for id-->
					<input type="hidden" name="id" value="<?php echo $furniture['id'];?>"/>
						<!---label for name-->
					<label>Name</label>
					<input type="text" name="name" value="<?php echo $furniture['name'];?>"/>
						<!---label for description-->
					<label>Description</label>
					<textarea name="description"<?php echo $furniture['description'];?>> </textarea>
					<!---label for categoryId-->
					<label>Category</label>
					<select name="categoryId">
						<?php
						$stmt = $categoryQuery->findAll();//find the categpry id

						//displays the name of the caetgghory
						foreach ($stmt as $key) {
							echo '<option value=" '.$key['id'] . '">' .$key['name']. '</option>';	
						}
						?>
					</select>
					<?php
						//upload the image
						if (file_exists('../images/furniture/' .$furniture['id'] .'.jpg')) {
							echo '<img style="width:200px;clear:both"src="../images/furniture/' . $furniture['id'] . '.jpg"/>';
						}
						?>
						<label>Product Image</label>
						<input type="file" name="image" <?php if(isset($row['image'])) echo $row['image']; ?>/>
						<!---item type--->
						<label>First Hand</label>
						<input type="hidden" name="item_type" value="Second Hand"/>
						<input type="checkbox" name="item_type" value="First Hand" checked />
						<input type="submit" name="submit" value="Save Product"/>
				</form>
		<?php }
		?>
</section>