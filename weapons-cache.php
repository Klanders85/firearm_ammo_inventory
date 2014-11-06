<?php
	include 'weapons-cache-create.php';
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
		<h1 class="center">Weapons Cache!</h1>
	</header>
	<div class="container center">
		<?php
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

		echo $test;	
		?>
	</div>
</body>
</html>