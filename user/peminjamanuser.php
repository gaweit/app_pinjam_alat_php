<?php
session_start();
include("config.inc.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Peminjaman Alat</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="style/style.css" rel="stylesheet" type="text/css">

    <!-- Custom CSS -->
    <link href="css/shop-homepage.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

    <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            
<ul class="nav navbar-nav" >
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                </ul>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                    <li>
                        <a href="sanksiuser.php">Syarat & Kebijakan</a>
                    </li>
            </ul>

          <center><h2 class="page-header">Peminjaman</h2></center>
          <div class="row">
          <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
          </div>
              <table id="tabelpeminjaman" class="table table-bordered table-striped table-hover">
                     <thead>
                        <tr>
                          <th>No</th>
                          <th>Nama Barang</th>
                          <th>Kode Barang</th>
                          <th>Nama Peminjam</th>
                          <th>Tanggal Pinjam</th>
                          <td>Deadline Pengembalian</th>
                          <th>Status</th>
                        </tr>
                     </thead>
                     <?php
                     $sql = "SELECT peminjaman.id_peminjaman, peminjaman.status,  peminjaman.id_anggota, peminjaman.kode_brg, peminjaman.tgl_pinjam, peminjaman.deadline, barang.nama_brg, anggota.nama FROM peminjaman JOIN barang ON peminjaman.id_brg=barang.id_brg JOIN anggota ON anggota.id_anggota=peminjaman.id_anggota ORDER BY peminjaman.id_peminjaman DESC";
                     $query = $mysqli->query($sql);
                     $no = 1;
                     while ($lihat=mysqli_fetch_array($query)){
                      ?>
                      <tbody>
                        <tr>
                         <td><?php echo $no++ ?></td>
                          <td><?php echo $lihat ['nama_brg']; ?></td>
                          <td><?php echo $lihat ['kode_brg']; ?></td>
                          <td><?php echo $lihat ['nama'];?></td>
                          <td><?php echo date('d-m-Y',strtotime($lihat['tgl_pinjam'])); ?></td>
                          <td><?php echo $lihat ['deadline'] ; ?></td>
                          <td><span class="btn btn-xs btn-<?php echo $lihat['status'] == 1 ? 'success' : 'danger' ?>"><?php echo $lihat['status'] == 1 ? 'sudah dikembalikan' : 'belum dikembalikan'; ?></span></td>
                        </tr>

                        <?php
                        } ?>
                        </tbody>
              </table>
        </div>
      </div>
    </div>

    </body>
    </html>