<!--template to add catgepr-->
<section class="right">
	<?php
		session_start();//session starts
		if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {//checks the session
			?>
			<h2>Add Catgeory</h2>
			<form action="addCategory"method="POST">
				<!--label fro anme-->
				<label>Category name</label>
				<input type="text" name="name" required=""/> 
				<input type="submit" name="submit" value="Add Category"/> 
			</form>
			<?php
		}
	?>
</section>