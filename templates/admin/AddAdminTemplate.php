<!--templates to add the admin-->
<section class="right">
	<?php
		session_start();//initialize the session
		if (isset($_SESSION['loggedin']) &&$_SESSION['loggedin']==true) { ?> <!--checks the function is set or not-->
			<h2>ADD ADMIN</h2>
				<form action="Add_admin" method="POST"> 
				<!--label for firstname-->
				<label>First Name</label>
				<input type="text" name="firstName" required="">
				<!--label for surname-->
				<label>Surname</label>
				<input type="text" name="surName" required="">
				<!--label for contact number-->
				<label>Contact Number</label>
				<input type="text" name="phone_no" required="">
				<!--label for email-->
				<label>Email</label>
				<input type="email" name="email" required="">
				<!--label for username-->
				<label>Username</label>
				<input type="text" name="username" required=""> 
				<!--label for password--> 
				<label>Password</label>
				<input type="password" name="password" required=""> 
				<input type="submit" name="submit" value="ADD"> 
		</form>
		<?php } ?>
</section>