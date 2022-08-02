<?php
    include'config/koneksi.php';
$id_brg = $_POST ['nama_barang'];
$kode_brg = $_POST ['kode_brg'];
$id_peminjam = $_POST ['nama_peminjam'];
$tgl_pinjam = $_POST ['tgl_pinjam'];
$deadline = $_POST ['deadline'];
$jumlah = $_POST ['jumlah'];
$date = date('Y-m-d');
        $query = $mysqli->query ("INSERT INTO peminjaman( id_brg, kode_brg, id_anggota, tgl_pinjam, deadline, jumlah) values ('$id_brg', '$kode_brg', '$id_peminjam','$date','$deadline','$jumlah')");

        if ($query) {
    header("location:peminjaman.php");
} else {
    echo "gagal menambah data";
  }

?>
