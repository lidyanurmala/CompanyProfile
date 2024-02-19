<?php

$server = "localhost"; 
$user = "root"; 
$password = ""; 
$nama_database = "kontak"; 
$link = mysqli_connect($server,$user,$password,$nama_database);

if(!$link){ 
	die("Koneksi dengan database gagal : ".mysql_connect_error().
		"-".mysql_connect_error());
}
?>
