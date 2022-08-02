<?php
    include'config/koneksi.php';
$username = $_POST ['nama'];
$password = $_POST ['password'];
$kelas = $_POST['kelas'] . '-' . $_POST['jurusan'] . '-' . $_POST['no'];
$no_hp = $_POST ['no_hp'];
$query = $mysqli->query("INSERT INTO anggota(nama, password, kelas, no_hp ) values ('$username','$password', '$kelas', '$no_hp')");

        if ($query) {
    header("location:peminjam.php");
} else {
    echo "gagal menambah data";
  }

?>
