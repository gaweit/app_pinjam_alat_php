<?php
    include'config/koneksi.php';
    
//    $namafolder="upload/"; //tempat menyimpan file
//	$id_brg = $_POST ['id_brg'];
//	$nama_brg = $_POST['nama_brg'];
//	$jenis_brg = $_POST ['jenis_brg'];
//	$stok_brg = $_POST ['stok_brg'];
//	$foto = $_POST['foto'];

if (isset($_POST['tambah'])){
  $tm=md5(time());
  $fnm=$_FILES["foto"]["name"];
  $dst="./images/".$tm.$fnm;
  $dst1="images/".$tm.$fnm;
  move_uploaded_file($_FILES["foto"]["tmp_name"], $dst);
  $id_brg = $_POST ['id_brg'];
	$nama_brg = $_POST['nama_brg'];
  $kode_barang = $_POST['kode_barang'];
	$jenis_brg = $_POST ['jenis_brg'];
  $stok_brg = $_POST ['stok_brg'];

  //mysqli_query($link,"insert into barang values('','$_POST[nama_brg]','$_POST[jenis_brg]','$_POST[stokbrg]','$dst1')");

//$dir = "images/";
//$fileName = $dir.basename($_FILES['foto']['name']);
// var_dump($fileName);
// die();

// Simpan di Folder Gambar
//move_uploaded_file($fileName);
 $query = $mysqli->query("INSERT INTO barang values ('$id_brg', '$nama_brg','$kode_barang','$jenis_brg','$stok_brg','$fnm')");

}

if ($query) {
    header("location:barang.php");
} else {
    echo "gagal menambah data";
    echo "<br><a href='tambahbrg.php'>Kembali Ke Halaman Utama</a>";
  } 

?>