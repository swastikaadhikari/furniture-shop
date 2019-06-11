<!--template for admin layout-->
<!DOCTYPE html>
<html>
	<head>
		<!--link to css-->
		<link rel="stylesheet" href="../../css/styles.css"/>
		<title><?php echo $title ?></title>
	</head>
	<body>
	<header>
		<section>
			<aside>
				<h3>Opening Hours:</h3>
				<p>Mon-Fri: 09:00-17:30</p>
				<p>Sat: 09:00-17:00</p>
				<p>Sun: 10:00-16:00</p>
			</aside>
			<h1>Fran's Furniture</h1>

		</section>
	</header>
	<nav>
		<ul>
			<!--links to different pages--->
			<li><a href="../user/home">Home</a></li>
			<li><a href="../user/furniture">Our Furniture</a></li>
			<li><a href="../user/about">About Us</a></li>
			<li><a href="../user/contact">Contact us</a></li>
			<li><a href="../user/faq">FAQs</a></li>
		</ul>
	</nav>
 <img src="../../images/randombanner.php"/><!---image link-->
 <main class="admin">
			<?php
				if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) { ?><!---checks the logged in is set or not-->
					<section class="left">
					<ul>
						<li><a href="adm_home">Admin Home</a></li>
						<li><a href="dcategory">Category</a></li>
						<li><a href="furniture">Furniture</a></li>
						<li><a href="admin">Admin</a></li>
						<li><a href="adm_contact_display">Enquiries</a></li>
						<li><a href="displayoffer">Special Offer</a></li>
					</ul>
				
</section>
<?php }  echo $content;  ?>
</main>
<!---to display the date-->
<footer>
	&copy; Fran's Furniture <?php echo date('Y'); ?>

</footer>
	</body>
</html>
