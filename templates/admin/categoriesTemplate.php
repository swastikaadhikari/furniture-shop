<!--categorues template-->
<?php
session_start();//sets the session
	if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {//checks the seesion
		?>
			<h2>Categories</h2>

			<a class="new" href="addCategory">Add new category</a><!--add the cateogry-->
			<?php
			echo '<table>';
			echo '<thead>';
			echo '<tr>';
			echo '<th>Name</th>';
			echo '<th style="width: 5%">&nbsp;</th>';
			echo '<th style="width: 5%">&nbsp;</th>';
			echo '</tr>';

			$categories = $sel->findAll();//find all function

			foreach ($categories as $category) {//passed the arguments
				echo '<tr>';
				echo '<td>' . $category['name'] . '</td>';//disolay the name
				echo '<td><a style="float: right" href="editcategory&eid=' . $category['id'] . '&id=' .$category['id'].'">Edit</a></td>';?><!--edit the catgepry-->
				<td align="center"><a href="#" onclick="javascript:if (confirm('Are you sure?')) {
					document.location ='addCategory&did=<?php echo $category['id']?>';}">Delete</a><!--delete the catgepry-->
					
				</td>
		
			<?php echo '</tr>';
			}

			echo '</thead>';
			echo '</table>';

		}
		?>
	</section>