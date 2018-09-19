<?php  
include "koneksi.php";

$Nama = $_POST['Nama'];
$Nim = $_POST['Nim'];
$Jenis_Kelamin = $_POST['Jenis_Kelamin'];
$Fakultas = $_POST['Fakultas'];

$dir = "upload/";
$nama_file = $_FILES["File_gbr"]["name"];
$nama_file_tmp = $_FILES["File_gbr"]["tmp_name"];
$target = $dir . $nama_file;

$sql = "insert into tb_user values('$Nim','$Nama','$Fakultas','$Jenis_Kelamin','$nama_file')";

if (mysqli_query($conn, $sql) and move_uploaded_file($nama_file_tmp, $target)) {
	echo "berhasil";
}else {
	echo "gagal";
}

?>