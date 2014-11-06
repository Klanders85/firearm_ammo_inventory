<?php
	include 'db_config.php';

//prepare query
$ammo_add_query = $db_connect->prepare("INSERT INTO ammo_inventory(count, caliber) VALUES(:ammo_count,:ammo_caliber)");

//bind parameters to VALUES using named placeholders
$ammo_add_query->bindParam(':ammo_count',$ammo_count);
$ammo_add_query->bindParam(':ammo_caliber',$ammo_caliber);

//execute query
$ammo_add_query->execute();

?>

<!doctype html>
<html>
<head>
	<head>
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
</head>
<body>
	<div class="container center">
		<h1>Ammo Added!</h1>
		<a href="index.php">Add More Guns!</a><br>
		<a href="ammo.php">Add ammo for this gun!</a><br>
		<a href="weapons-cache.php">Get your weapons cache!</a>
	</div>
</body>
</html>