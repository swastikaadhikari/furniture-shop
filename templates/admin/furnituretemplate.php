<!---tempalte for displaying furniture--->
<section class="right">
<?php
	session_start();//start the session
		if (isset($_GET['hideid'])) {//checks the hide id is set or not
			$criterion =[
				'hide'=>1,
				'id'=>$_GET['hideid']
			];//checks the id criteria
			$hidefur->update($criterion,'id');//update the id
		}
		else
			if (isset($_GET['unhideid'])) {//checks the unhide id is set or not
			$criterion=[
					'hide' =>0,
					'id'=>$_GET['unhideid']
			];//checks the id criteria
			$hidefur->update($criterion,'id');//update the id
		}

		if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {//checks if the logged in is set or not
		?>
		<h2>Furniture</h2>
		<a class="new" href="addfurniture">Add new furniture</a>
		<?php
		echo '<table>';
		echo '<thead>';
		echo '<tr>';
		echo '<tr>';
		echo '<th>Name</th>';
		echo '<th style="width: 10%">Price</th>';
		echo '<th style="width: 5%">Condition</th>';
		echo '<th style="width: 5%">&nbsp;</th>';
		echo '<th style="width: 5%">&nbsp;</th>';
		echo '<th style="width: 5%">&nbsp;</th>';
		echo  '</tr>';

		$queryFurniture = $furnitureselect->findAll();//find all the furniture

		//dispplay all the furniture details
		foreach ($queryFurniture as $furniture) {
			echo '<tr>';
			echo '<td>'.$furniture['name'] .'</td>';
			echo '<td>£'.$furniture['price'] .'</td>';
			
			echo '<td>' . $furniture['item_type'] . '</td>';
			//to hide or show the furniture
			//get the id and hide the furniture
			if ($furniture['hide'] ==0) {
				echo '<td><a style="float:right"href="furniture&hideid='.$furniture['id'].'">Hide</a></td>';

			}
			else{
					//get the id and show the furniture
				echo '<td><a style="float:right"href="furniture&unhideid='.$furniture['id'].'">Show</a></td>';
			}
			//get the id and edit the furniture
			echo '<td><a style="float :right"href="editfurniture&eid='.$furniture['id'].'&id=' .$furniture['id'].'">Edit</a></td>';
?>
			<!--get the id and delete the furniture-->
			<td align ="center"><a href="#" onclick="javascript:if(confirm('Are you sure?')){
				document.location='addfurniture&did=<?php echo $furniture['id']?>';}"./>Delete<a>
				</td>
			<?php
				echo '</tr>';
		}
		echo '</thead>';
		echo '</table>';
		}
		?>
</section>