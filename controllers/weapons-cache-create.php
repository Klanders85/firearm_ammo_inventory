<?php
	include'db_config.php';
	
	//prepare a query
	$inventory_query = $db_connect->prepare("SELECT style, model, firearm_inventory.caliber, count, ammo_inventory.caliber FROM firearm_inventory , ammo_inventory WHERE firearm_id = ammo_id
");
	//execute query
	$inventory_query->execute();

	//retrieve query
	$result_set = $inventory_query->fetchAll(PDO::FETCH_OBJ);
?>	