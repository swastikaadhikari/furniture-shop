<!--template to display offer-->
<?php
session_start();//start the session
	if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {//checks whther the variable logged in is set or not
		?>
			<!---to display the special offer-->
			<h2>Special Offer</h2>
			<a class="new" href="specialoffer">Add Special Offer</a>
			<!---display the details of special offer-->
			<?php
			echo '<table>';
			echo '<thead>';
			echo '<tr>';
			echo '<th>Title</th>';
			echo '<th style="width: 10%">Description</th>';
			echo '<th style="width: 10%">Start Date</th>';
			echo '<th style="width: 10%">Valid Till</th>';
			echo '<th style="width: 5%">&nbsp;</th>';
			echo '<th style="width: 5%">&nbsp;</th>';
			echo '<th style="width: 5%">&nbsp;</th>';
			echo '</tr>';

			$offerquery = $selectoffer->findAll();//find all 

			foreach ($offerquery as $offer) {//calls the function itself
				echo '<tr>';
			echo '<td>'.$offer['title'] .'</td>';
			echo '<td>'.$offer['description'] .'</td>';
			echo '<td>'.$offer['start_date'] .'</td>';
			echo '<td>'.$offer['end_date'] .'</td>';
			?>
			<!---delete the offer-->
			<td align="center"><a href="#" onclick="javascript:if (confirm('Are you sure?')) {
					document.location ='specialoffer&did=<?php echo $offer['id']?>';}">Delete</a>
					
				</td>
		
			<?php echo '</tr>';
			}

			echo '</thead>';
			echo '</table>';

		}
		?>
	</section>