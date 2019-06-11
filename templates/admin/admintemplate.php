<!---template to display the admin--->
<?php
session_start();//start the session
	if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {//checks the variable logged in set or not
	?>
	<!---form to display admin-->
	<h2>Admin</h2>
	<a class="new" href="Add_admin">Add new admin</a>
		<?php
			echo '<table>';
			echo '<thead>';
			echo '<tr>';
			echo '<th>Name</th>';
			echo '<th style="width: 5%">&nbsp;</th>';
			echo '<th style="width: 5%">&nbsp;</th>';
			echo '</tr>';
			$newadmin=$selectadmin->findAll();//find all admin

			foreach ($newadmin as $admin) {//call the function itself
				echo '<tr>';
				echo '<td>' .$admin['firstName'] .'</td>';?>
				<!--delete the admin-->
				<td align="center"><a href="#" onclick="javascript: if(confirm('Are you sure?')){
					document.location='Add_admin&did=<?php echo $admin['admin_id']?>';}"./>Delete</a>
				</td>
				<?php echo '</tr>';
			}
			echo '</thead>';
			echo '</table>';
		}
		?>
	</section>