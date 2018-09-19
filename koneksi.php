<?php

$server = "localhost";
$user = "root";
$password = "";
$db_name = "formulir";

$conn = mysqli_connect($server, $user, $password, $db_name);
if (!$conn) {
    echo "Error: " . mysqli_connect_error();
	exit();
} else {
	echo 'Connected to MySQL';
}
?>
<a href="http://localhost/data/tampil.php">Melihat Tampilan</a>