<?php
$dbName = "toko_ol";

$kon = mysqli_connect("localhost","root","") or die("Gagal Konek");

try{
	$hasil = mysqli_select_db($kon, $dbName);
}
catch(Exception $e) {
	$hasil = mysqli_query($kon, "CREATE DATABASE $dbName");
	if (!$hasil){
		die("Gagal Buat Database");
	}		
	$hasil = mysqli_select_db($kon, $dbName);
}
if ($hasil) {
	echo "Berhasil Buat Database $dbName";
}
?>