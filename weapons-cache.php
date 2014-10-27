<!DOCTYPE html>
<html>
<head>
	<title>Your Weapons Cache</title>
	<meta charset="utf-8">
    <title>Add some guns</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- If adding Bootstrap, un-comment below and remove normalize, add the bootstrap file to CSS dir -->
    <!-- <link rel="stylesheet" href="css/bootstrap.css"> -->
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/main.css">
    <script type="text/javascript" src="/js/vendor/jquery-1.10.2.min.js"></script>
</head>
<body>
	<div class="container left">
		<table>
			<thead >
				<tr>
					<th>Type</th>
					<th>Model</th>
					<th>Caliber</th>
					<th>Serial Number</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>Pistol</td>
					<td>Ruger Speed Six</td>
					<td>.38spc</td>
					<td>NULL</td>
				</tr>
				<tr>
					<td>Shotgun</td>
					<td>Winchester SXP Pump</td>
					<td>.12ga</td>
					<td>NULL</td>
				</tr>
				<tr>
					<td>Rifle</td>
					<td>Remington A-Bolt</td>
					<td>.25-06</td>
					<td>NULL</td>
				</tr>
			</tbody>
		</table>
	</div>
<<<<<<< HEAD
=======
<?php	
	//prepare a query
	$inventory_query = $db_connect->prepare("SELECT style, model, firearm_inventory.caliber, count, ammo_inventory.caliber FROM firearm_inventory , ammo_inventory WHERE firearm_id = ammo_id
");
	//execute query
	$inventory_query->execute();
	$result_set = $inventory_query->fetchAll(PDO::FETCH_OBJ);

	$test = '<table>';

	//now you have the data, next: display that data
	foreach ($result_set as $key) {
		$test .= "<tr><td>{$key->style}</td><td>{$key->model}</td><td>{$key->caliber}</td></tr>";
	}

	echo $test;

?>

>>>>>>> 38ae8b9ab9247e77e6d38f278532ac3ca0ebf9c7
</body>
</html>