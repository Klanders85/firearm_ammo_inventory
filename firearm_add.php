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
	<meta charset="utf-8">
        <title>Firearm Added</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- If adding Bootstrap, un-comment below and remove normalize, add the bootstrap file to CSS dir -->
        <!-- <link rel="stylesheet" href="css/bootstrap.css"> -->
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <script type="text/javascript" src="/js/vendor/jquery-1.10.2.min.js"></script>
</head>
<body>
	<div class="container center">
		<h1>Firearm Added!</h1>
		<a href="index.php">Add More Guns!</a><br>
		<a href="ammo.php">Add ammo for this gun!</a><br>
		<a href="weapons-cache.php">Get your weapons cache!</a>
	</div>
</body>
</html>