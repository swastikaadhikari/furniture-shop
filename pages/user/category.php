
<?php
include '../../db/dbconnect.php';//database connection
include '../../classes/DatabaseTableClass.php';//includes the database table of classes
$furniture = new DatabaseTableClass('furniture');//connect the furniture table from databasetable class
$offer=$furniture->display($_POST['id'],$_POST['value']);//post the id and value from category.js page

foreach ($offer as $furnitures) {
	echo '<li>';
		if (file_exists('../../images/furniture/' . $furnitures['id'] . '.jpg')) {
			echo '<a href="../../images/furniture/' . $furnitures['id'] . '.jpg"><img src="../../images/furniture/' . $furnitures['id'] . '.jpg" /></a>';
		}

		echo '<div class="details">';
		echo '<h2>' . $furnitures['name'] . '</h2>';
		echo '<h3>' . $furnitures['item_type'] . '</h3>';
		echo '<h4>£' . $furnitures['price'] . '</h4>';
		echo '<p>' . $furnitures['description'] . '</p>';

		echo '</div>';
		echo '</li>';
	}

?>