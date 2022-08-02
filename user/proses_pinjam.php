<?php
    require_once("config.inc.php");
    if (!isset($_SESSION)) {
        session_start();
    }

 //    if(!isset($_SESSION['myusername']))
	// {
	// 	header("location:newlogin.php");
	// }

	// $username = $_SESSION['myusername'];
	// //query data user
	// $query = mysql_query("SELECT * FROM peminjam where username='$username'");
 //                  while ($qu = mysql_fetch_array($query))
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Proses Pinjam</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="style/style.css" rel="stylesheet" type="text/css">
    <link href="../bootstrap/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>
<body>


		<div class="container">
			<div class="row" style="margin-top: 50px">
				<div class="col-md-6">
				<div class="panel panel-success">
					<div class="panel-heading">
						<h4>Proses Pendataan</h4>
					</div>
					<div class="panel-body">
					<form action="proses_transaksi.php?id_anggota=<?php echo $_SESSION['id_anggota']; ?>" method="post">
						<div class="form-group">
							<label for="">Nama</label>
							<input type="text" name="nama" class="form-control" disabled value="<?php echo $_SESSION['anggota']; ?>">
							<input type="hidden" name="nama" class="form-control" value="<?php echo $_SESSION['anggota']; ?>">
						</div>
<?php
$anggota = $_SESSION['id_anggota'];
$query = $mysqli->query("SELECT * FROM anggota WHERE id_anggota = '$anggota'");
	while ($data = mysqli_fetch_assoc($query)) {
?>


<input type="hidden" name="id_anggota" value="<?php echo $data['id_anggota']; ?>">
<label for="">Kelas</label>
        	<div class="form-group">
      		<input type="text" name="kelas" value="<?php echo $data['kelas']; ?>" disabled class="form-control">
      		<input type="hidden" name="kelas" value="<?php echo $data['kelas']; ?>" class="form-control">
        	</div>
	<?php	}
 ?>

					<div class ="form-group">
                     <div style="text-align: left;">Tanggal Peminjaman :</div>
                     <input type="date" placeholder="<?php date_default_timezone_set("Asia/Jakarta");echo date("d / m / Y"); ?>" class="form-control" name="tgl_pinjam"/>
                    </div>

						
					<div class="form-group">
                        <?php
                            date_default_timezone_set('Asia/Jakarta');
                            $date = date('d' . '-' . 'F' . '-' . 'Y');
                            $deadline = mktime(0,0,0,date("n"),date("j")+2,date("Y"));
                            $kembali = date('d' . '-' . 'F' . '-' . 'Y', $deadline);
                        ?>
							<label for="">Deadline Pengembalian (Peminjaman Maksimal Hanya 2 Hari)</label>
							<input type="date" name="deadline" class="datepicker form-control" value="<?php echo $kembali; ?>">
								</div>

			<?php
			$anggota = $_SESSION['id_anggota'];
			$query = $mysqli->query("SELECT * FROM peminjaman WHERE id_anggota = '$anggota'");
				while ($data = mysqli_fetch_assoc($query)) {
			?>	
			<label for="">Kode Barang</label>
			<select name="kode_brg" class="form-control selectpicker">
						<option value="">-</option>
						<option value="">- Kode Dodos Kelapa Sawit -</option>
						<option value="DKS1">DKS1</option>
						<option value="DKS2">DKS2</option>   
						<option value="DKS3">DKS3</option> 
						<option value="DKS4">DKS4</option> 
						<option value="DKS5">DKS5</option> 
						<option value="DKS6">DKS6</option>
						<option value="">- Kode Egrek Sawit -</option>  
						<option value="ES01">ES01</option> 
						<option value="ES02">ES02</option>
						<option value="ES03">ES03</option>
						<option value="ES04">ES04</option>
						<option value="ES05">ES05</option>
						<option value="ES06">ES06</option>
						<option value="ES07">ES07</option> 
						<option value="ES07">ES07</option>   
						<option value="">- Kode Parang -</option>     
						<option value="P001">P001</option>   
						<option value="P002">P002</option>
						<option value="P003">P003</option>
						<option value="P004">P004</option>
						<option value="P005">P005</option>
						<option value="P006">P006</option>
						<option value="P007">P007</option>
						<option value="P008">P008</option>
						<option value="P009">P009</option>
						<option value="P010">P010</option>    
						<option value="">- Kode Kampak -</option>
						<option value="K001">K001</option>  
						<option value="K002">K002</option>
						<option value="K003">K003</option>
						<option value="K004">K004</option>
						<option value="K005">K005</option>
						<option value="K006">K006</option>
						<option value="K007">K007</option>
						<option value="K008">K008</option>
						<option value="K009">K009</option>
						<option value="K010">K010</option>
						<option value="K011">K011</option>  
						<option value="">- Kode Tojok Sawit -</option>
						<option value="TS01">TS01</option>  
						<option value="TS02">TS02</option>
						<option value="TS03">TS03</option>
						<option value="TS04">TS04</option>
						<option value="TS05">TS05</option>
						<option value="TS06">TS06</option>
						<option value="TS07">TS07</option>
						<option value="TS08">TS08</option>
						<option value="TS09">TS09</option> 
						<option value="">- Kode Tajak -</option>   
						<option value="T001">T001</option>    
						<option value="T002">T002</option>
						<option value="T003">T003</option>
						<option value="T004">T004</option>
						<option value="T005">T005</option>
						<option value="T006">T006</option>
						<option value="T007">T007</option>
						<option value="T008">T008</option>
						<option value="T009">T009</option>
						<option value="T010">T010</option> 
						<option value="">- Kode Aangkong -</option>   
						<option value="A001">A001</option>  
						<option value="A002">A002</option>
						<option value="A003">A003</option>
						<option value="A004">A004</option>
						<option value="A005">A005</option>
						<option value="A006">A006</option>  
						<option value="">- Kode Kep Elektik -</option>   
						<option value="KE01">KE01</option>   
						<option value="KE02">KE02</option>
						<option value="KE03">KE03</option>
						<option value="KE04">KE04</option>
						<option value="KE05">KE05</option> 
						<option value="">- Kode Kep Semprot Solo -</option>   
						<option value="KS01">KS01</option> 
						<option value="KS02">KS02</option>
						<option value="KS03">KS03</option>
						<option value="KS04">KS04</option>
						<option value="KS05">KS05</option>
						<option value="KS06">KS06</option>   
						<option value="">- Kode Cangkul -</option>   
						<option value="C001">C001</option>  
						<option value="C002">C002</option>
						<option value="C003">C003</option>
						<option value="C004">C004</option>
						<option value="C005">C005</option>
						<option value="C006">C006</option>
						<option value="C007">C007</option>
						<option value="C008">C008</option>					
				</select>
				
				<br>
				<label for="">Jumlah Pinjam</label>
				<input type="text" class="form-control" placeholder="Jumlah Pinjam" value="" name="jumlah">
				<br>

				<?php	}
				?>


						<button type="submit" name="finish" class="btn btn-block btn-success">Proses</button>
		<div id="footer" style="margin-top: 40px">
			<p id="footnote">
			Peminjaman Alat SMK Negeri 1 Pangkalan Kuras.
			</p>
		</div>
					</div>
				</div>
				</div>

				<div class="col-md-4 ">
					<h3>Barang yang Di Pinjam</h3>
					<?php

							  if (isset($_SESSION['items'])) {
							        foreach ($_SESSION['items'] as $key => $val){
							            $query = $mysqli->query("SELECT * FROM barang WHERE barang.id_brg = '$key'");
							            $rs = mysqli_fetch_array($query);
							  ?>
						<img src="../images/<?php echo $rs['foto']; ?>" class="thumbnail" width="250" height="100" alt="">
						<h3><?php echo $rs['nama_brg']; ?></h3>
						<input type="hidden" name="id_brg" value="<?php echo $val; ?>" class="form-control">
					<?php
					            mysqli_free_result($query);
					        }
					 	 }
					  ?>
				</div>
					</form>
			</div>
	</div>
	 <script src="bootstrap/dist/js/jquery.js"></script>
    <script src="bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>
