<?php
include "config/koneksi.php";
$id_peminjam = $_POST ['id_peminjam'];
$username = $_POST ['username'];
$password = $_POST ['password'];
$no_hp = $_POST ['no_hp'];

$ganti = "update anggota set no_hp='$no_hp', password='$password', nama='$username' where id_anggota='$id_peminjam'";
$update = $mysqli->query($ganti);

if($update) {
	header("location:peminjam.php");
}else{
	echo $ganti;
	echo "gagal mengubah data";
}
?>