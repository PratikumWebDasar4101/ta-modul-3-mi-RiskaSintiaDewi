<?php  
include "koneksi.php";

$sql = "select * from tb_user";
$result = mysqli_query($conn, $sql);
$rowcount = mysqli_num_rows($result);

if ($rowcount > 0) {
	while ($row = mysqli_fetch_array($result)) {
		echo "<br>Nama : ". $row["Nama"];
		echo "<br>Nim : ". $row["Nim"];
		echo "<br>Jenis Kelamin : ". $row["Jenis_Kelamin"];
		echo "<br>Fakultas : ". $row["Fakultas"];
		echo "<br><img width='500px' src='upload/". $row["File_gbr"] . "'>";
	}
}
?>