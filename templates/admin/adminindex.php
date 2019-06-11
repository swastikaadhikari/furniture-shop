<!--template of index page--->
<?php
session_start();//start the session
	if (isset($_POST['submit'])) {
		$query = $adminlogin->find('username',$_POST['username']);//find the eusername 
		$key =$query->fetch();//fetch the data
		if (password_verify($_POST['password'],$key['password'])) {//verify the password
				$_SESSION['loggedin'] = true;//if true then log in
				$_SESSION['username'] =$_POST['username'];
		}
		else
		{
			echo 'Invalid username and password';
		}
	}

	if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {//checks the session
			?>
		<section class="right">
			<h2>You are now logged in</h2>
			<button><a href="logout">Logout</a></button>
		</section>
		<?php
		}	
		else{
			?>
			<!---form for log in-->
			<h2>Log in</h2>
			<form action="" method="POST" style="padding: 40px">
				<label>Enter Username</label>
				<input type="username" name="username"/>
				<label>Enter Password</label>
				<input type="password" name="password">
				<input type="submit" name="submit" value="Log In"/>
			</form>
			<?php
		}
		?>
