 <?php

//db creds
$user = 'root';
$pass = 'root';

//input values stored in variable
$firearm_style = $_POST['firearm_style'];
$firearm_model = $_POST['firearm_model'];
$firearm_caliber = $_POST['firearm_caliber'];
$ammo_caliber = $_POST['ammo_caliber'];
$ammo_count = $_POST['ammo_added'];

//create db connection
$db_connect = new PDO('mysql:host=127.0.0.1;dbname=practice-php', $user, $pass);

?>

