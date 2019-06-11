<!--template for contact page-->
<body>
<main class="home">
	<form action ="" method="POST">
		<!--gets the id-->
		 	<input type="hidden" name="contact_id" value="<?php if(isset($row['contact_id'])) echo $row['contact_id']; ?>" />
		 	
		<!--label for firstname-->
			<label>First name:</label>
			<input type="text" name="firstname" value="<?php if(isset($row['firstname'])) echo $row['firstname']; ?>" />

		<!--label for surname-->
			<label>Surname:</label>
			<input type="text" name="lastname" value="<?php if(isset($row['lastname'])) echo $row['lastname']; ?>" />

		<!--label for email-->
			<label>Email:</label>
			<input type="email" name="email" value="<?php if(isset($row['email'])) echo $row['email']; ?>" />

		<!--label for phonenumber-->
			<label>Phone Number:</label>
			<input type="number" name="phone_no" value="<?php if(isset($row['phone_no'])) echo $row['phone_no']; ?>" />

		<!--label for enquiry-->
			<label>Enquiry :</label>
			<textarea name=" enquiry" name="enquiry" value="<?php if(isset($row['enquiry'])) echo $row['enquiry']; ?>" /></textarea>
				<input type="submit" value="Save" name="submit">
	</form>	
</main>
</body>
		
