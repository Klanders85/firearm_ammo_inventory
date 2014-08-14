<?php
 include 'db_config.php';

//prepare query
$insert_query = $db_connect->prepare("INSERT INTO firearm_inventory(type, model, caliber) VALUES('$firearm_type','$firearm_model','$firearm_caliber')");
//execute query
$insert_query->execute();

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