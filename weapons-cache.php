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
	<div class="container">
		<!-- prints out the value of $test in weapons-cache-create.php -->
		<?php
			echo $test;
		?>
	</div>
</body>
</html>