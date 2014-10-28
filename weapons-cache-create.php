<?php
	include'db_config.php';
	//prepare a query
	$inventory_query = $db_connect->prepare("SELECT style, model, firearm_inventory.caliber, count, ammo_inventory.caliber FROM firearm_inventory , ammo_inventory WHERE firearm_id = ammo_id
");
	//execute query
	$inventory_query->execute();
	$result_set = $inventory_query->fetchAll(PDO::FETCH_OBJ);

	$test = '<table>';

	//now you have the data, next: display that data
	foreach ($result_set as $key) {
		$test .= "<tr>
					<td>Type<br />{$key->style}</td>
					<td>Model<br />{$key->model}</td>
					<td>Caliber<br />{$key->caliber}</td>
					<td>Ammo Count<br />{$key->count}</td>
				</tr>";
	};
?>	