<?php
require_once "../config/koneksi.php";
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title> Selesai </title>
	<link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap-responsive.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
</head>
<body>
<!--start: Wrapper-->
	<div id="wrapper">

		<!-- start: Container -->
		<div class="container">
			<!-- start: Table -->
                 <div class="table-responsive">
                 <div class="title"><h3>Peminjaman Selesai</h3></div>
                 <div class="hero-unit"><h3>Selamat Anda telah berhasil checkout</h3></div>
                 <div class="hero-unit">
    <?php
			if(isset($_POST['finish']))	{
				echo '<h4>Terima kasih Anda sudah meminjam alat di SMK Negeri 1 Pangkalan Kuras.</h4>';
				echo '<p>Nama  : '.$_POST['nama'].'<br>';
				echo '<p>Kelas : '.$_POST['kelas'].'<br>';
				echo '<p>Tanggal Pinjam : '.$_POST['tgl_pinjam'].'<br>';
				echo '<p>Deadline Pengembalian : '.$_POST['deadline'].'<br>';
				echo '<p>Kode Barang yang Dipinjam: '.$_POST['kode_brg'].'<br>';
				echo '<p>Jumlah Pinjam Barang : '.$_POST['jumlah'].'<br>';
				echo '<p>NOTE : Jika barang tidak dikembalikan sesuai DEADLINE PENGEMBALIAN, maka siswa 
						akan terkena denda Rp. 1.000 per hari';
				echo '<p>PERINGATAN : Jika barang hilang, maka siswa wajib mengganti atau membayar uang seharga barang yang hilang';

				$nama = $_POST['nama'];
				$kelas = $_POST['kelas'];
				$tgl = $_POST['tgl_pinjam'];
				$dead = $_POST['deadline'];
				$kod = $_POST['kode_brg'];
				$jum = $_POST['jumlah'];

				$item = $_SESSION['items'];
				$id_anggota = $_SESSION['id_anggota'];
				// print_r($id_anggota);
				// die();
				foreach ($item as $key => $value) {
					// echo $value;
					// echo "INSERT INTO peminjaman(id_brg, id_anggota, tgl_pinjam, deadline) VALUES (
					// 						'$key',
					// 						'$id_anggota',
					// 						'$tgl'
					// 						)" . '<br>';

					$d = $mysqli->query("INSERT INTO peminjaman(id_brg, id_anggota, tgl_pinjam, deadline, kode_brg, jumlah) VALUES (  			 '$key',
											'$id_anggota',
											'$tgl',
											'$dead',
											'$kod',
											'$jum'
											)") or die(mysqli_error());
				}

			}
				session_destroy();
				echo '<a href="javascript:window.print()"><h3>Cetak</h3></a></font>';
				echo "<a href='logout.php'>Logout</a>";

	?>

                   </div>

			<!-- end: Table -->

		</div>
		<!-- end: Container -->

	</div>
	<!-- end: Wrapper  -->
</body>
</html>