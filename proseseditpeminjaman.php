<?php
include "config/koneksi.php";
$id = $_POST['id'];
$id_brg = $_POST['id_barang'];
$id_anggota = $_POST['id_anggota'];
$tgl_pinjam = $_POST['tgl_pinjam'];
$status = $_POST['status'];
$penerima = $_POST['penerima'];
$denda = $_POST['denda'];


$ganti = "update peminjaman set id_brg='$id_brg', id_anggota='$id_anggota', tgl_pinjam='$tgl_pinjam', status='$status', penerima='$penerima', denda='$denda' where id_peminjaman='$id'";

if ($status == 1) {
	$tgl_kembali = date('Y-m-d');
	$insert = "INSERT INTO pengembalian(id_brg, id_peminjaman, id_anggota, tgl_kembali, penerima) values('$id_brg', '$id', '$id_anggota', '$tgl_kembali', '$penerima')";
	$mysqli->query($insert) or die('gagal menambah data pengembalian');
}

$update = $mysqli->query($ganti);

if($update) {
	header("location:peminjaman.php");
}else{
	echo $ganti;
	echo "gagal mengubah data";
}
?>