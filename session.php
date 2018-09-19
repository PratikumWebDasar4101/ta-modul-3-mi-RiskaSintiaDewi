<?php  

$username=$_POST['username']? $_POST['username']:"Input tidak boleh kosong";
$password=$_POST['password']? $_POST['password']:"Input tidak boleh kosong";

if($username == "aku" && $password == "12345"){
	$_SESSION["username"]=$username;
	header("Location:index.php");
}else{
	echo "Maaf Anda salah inputkan";
}

?>