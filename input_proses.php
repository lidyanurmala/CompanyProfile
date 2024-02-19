<?php

include 'koneksi.php';

if(isset($_POST['input'])){
	$nama = $_POST['nama'];
	$email = $_POST['email'];
	$no_hp = $_POST['no_hp'];
	$saran = $_POST['saran'];

	$query = "INSERT INTO data VALUES ('$nama', '$email', '$no_hp', '$saran', NULL)";
	$result = mysqli_query($link, $query);

	if(!$result){
		die ("Query gagal dijalankan: ".mysqli_errno($link)."-".mysqli_error($link));
	}
}

header("location:kontak.php");
?>