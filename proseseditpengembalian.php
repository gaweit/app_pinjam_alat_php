<?php
include "config/koneksi.php";
$id = $_POST['id'];
$id_brg = $_POST['id_brg'];
$id_anggota = $_POST['id_anggota'];
$id_peminjaman = $_POST['id_peminjaman'];
$tgl_kembali = $_POST['tgl_kembali'];


$ganti = "update pengembalian set id='$id', id_brg='$id_brg', id_anggota='$id_anggota', id_peminjaman='$id_peminjaman', tgl_kembali='$tgl_kembali' where id='$id'";
$update = $mysqli->query($ganti);

if($update) {
	header("location:pengembalian.php");
}else{
	echo $ganti;
	echo "gagal mengubah data";
}
?>