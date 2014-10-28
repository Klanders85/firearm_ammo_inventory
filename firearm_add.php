<?php
 include 'db_config.php';

//prepare query
$insert_query = $db_connect->prepare("INSERT INTO firearm_inventory(style, model, caliber) VALUES(:firearm_style, :firearm_model, :firearm_caliber)");

//bind parameters to VALUES using named placeholders
$insert_query->bindParam(':firearm_style', $firearm_style);
$insert_query->bindParam(':firearm_model', $firearm_model);
$insert_query->bindParam(':firearm_caliber', $firearm_caliber);

//execute query
$insert_query->execute();

?>

<!doctype html>
<html>
<head>
	<title></title>
</head>
<body>
	<a href="index.php">Add More Guns!</a><br>
	<a href="ammo.php">Add ammo for this gun!</a><br>
	<a href="weapons-cache.php">Get your weapons cache!</a>
</body>
</html>