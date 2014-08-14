<?php
	include 'db_config.php';

//prepare query
$ammo_add_query = $db_connect->prepare("INSERT INTO ammo_inventory(count, caliber) VALUES('$ammo_count','$ammo_caliber')");

//execute query
$ammo_add_query->execute();

?>

<!doctype html>
<html>
<head>
	<title></title>
</head>
<body>
	<a href="firearm.php">Add More Guns!</a><br>
	<a href="ammo.php">Add Ammo!</a>
</body>
</html>