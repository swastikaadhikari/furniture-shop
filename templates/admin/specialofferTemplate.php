<!---templates to add special offer-->
<section class="right">
<?php
	session_start();//start the session
		if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {//checks whether logged in is set or not
		?>
		<!--form to add special offer-->
		<h2>Special Offers</h2>
		<form action="" method="POST" enctype="multipart/form-data">
			<!---label for title-->
		<label>Title</label>
		<input type="text" name="title" required=""/> 
			<!---label for description-->
		<label>Description</label>
		<textarea name="description"></textarea>
			<!---label for start_date-->
		<label>Start Date</label>
		<input type="start_date" name="start_date" required=""/>
			<!---label for end_date-->
		<label>Valid Till</label>
		<input type="end_date" name="end_date" required=""/>
			<!---label for image-->
		<label>Image</label>
		<input type="file" name="image" />

		<input type="submit" name="submit" value="Add"/> 
	</form>
	<?php
}
?>
	</section>