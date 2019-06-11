<!--template to add furniture-->
<section class="right">
	<?php
		session_start();//start the session
			if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {//checks the variable logged in is set ot not
				?>
				<!--form to add furniture-->
				<h2>Add Furniture</h2>
				<form action="" method="POST" enctype="multipart/form-data">
					<!--label for name-->
					<label>Name</label>
					<input type="text" name="name"/>
					<!--label for description-->
					<label>Description</label>
					<textarea name="description"></textarea>
					<!--label for price-->
					<label>Price</label>
					<input type="text" name="price"/>
					<!--label for categoryId-->
					<label>Category</label>

					<select name="categoryId">
					<?php
						$stmt = $categoryQuery->findAll();

						foreach ($stmt as $row) {
							echo '<option value="' . $row['id'] . '">' . $row['name'] . '</option>';
						}
					?>
					</select>
					<!--label for image-->
					<label>Image</label>
					<input type="file" name="image" <?php if(isset($row['image'])) echo $row['image']; ?>/>
					<!--label for item type-->
					<label>First Hand</label>
					<input type="hidden" name="item_type" value="Second Hand"/>
					<input type="checkbox" name="item_type" value="First Hand" checked />
					<input type="submit" name="submit" value="Add" />
				</form>
				<?php
			}
			?>
</section>