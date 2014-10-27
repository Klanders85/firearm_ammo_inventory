<?php
	include'db_config.php';
?>

<!doctype html>
<html>
 <head>
        <meta charset="utf-8">
        <title>Your Weapons Cache</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- If adding Bootstrap, un-comment below and remove normalize, add the bootstrap file to CSS dir -->
        <!-- <link rel="stylesheet" href="css/bootstrap.css"> -->
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
    </head>
<body>
	<header>
		<h1 class="center">Get your weapons cache!</h1>
	</header>
	<div class="container">
		<form action="weapons-cache.php" method="get" class="center">
			<input type="submit" value="Run Report" id="submit">
		</form>
	</div>
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
		$test .= "<tr><td>{$key->style}</td><td>{$key->model}</td><td>{$key->caliber}</td><td>{$key->count}</td></tr>";
	};

	echo $test;

?>

</body>
</html>