<?php
session_start();
if(!isset($_SESSION['admin'])) {
   header('location:login.php');
} else {
   $username = $_SESSION['admin'];
}
?>
<?php
include "config/koneksi.php" ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="bootstrap/dist/css/global.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="bootstrap/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  </head>


  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <img src="download.png" height="9%" width="9%" align="left" border=20>
          <a class="navbar-brand" href="#">Peminjaman Barang & Alat Pertanian</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown">
                <i class="fa fa-user fa-fw"></i>Admin <i class="fa fa-caret-down"></i>
              </a>
            <ul class="dropdown-menu dropdown-user">
              <li><a href="logout.php"><i class="fa fa-sign-out"></i> Logout</a></li>
            </ul>

          </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li class=""><a href="dashboard.php"><i class="fa fa-dashboard">&nbsp;&nbsp;&nbsp;Dashboard</i></a></li>
            <li><a href="barang.php"><i class="fa fa-laptop">&nbsp;&nbsp;&nbsp;Barang</i></a></li>
            <li><a href="peminjam.php"><i class="fa fa-user">&nbsp;&nbsp;&nbsp;Anggota</i></a></li>
            <li><a href="peminjaman.php"><i class="fa fa-gear">&nbsp;&nbsp;&nbsp;Peminjaman</i></a></li>
            <li><a href="pengembalian.php"><i class="fa fa-book">&nbsp;&nbsp;&nbsp;Pengembalian</i></a></li>
            <li><a href="sanksi.php"><i class="fa fa-book">&nbsp;&nbsp;&nbsp;Sanksi & Kebijakan</i></a></li>
          </ul>

        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <center><h2 class="page-header">Peminjaman</h2></center>
          <div class="row">

          <form name="form1" action="" method="post">
                            
                       
            <a href="tambahpeminjaman.php" class="btn btn-success pull-right"><i class="fa fa-plus"></i> Tambah</a>
            </form>
          </div>
         
  <div class="alert alert-info">
   <small>
    * Waktu peminjaman barang hanya 2 hari<br/>
    * Set waktu > 2 hari sebelum tanggal sekarang<br/>
    * Denda keterlambatan 1000/hari<br/>
    
   </small>
  </div>
              <table id="tabelpeminjaman" class="table table-bordered table-striped table-hover">
                     <thead>
                        <tr>
                          <th>No</th>
                          <th>Nama Barang</th>
                          <th>Kode Barang</th>
                          <th>Nama Peminjam</th>
                          <th>Tanggal Pinjam</th>
                          <td>Deadline</th>
                          <td>Jumlah</th>
                          <th>Status</th>
                          <th>Penerima</th>
                          <th>Denda</th>
                          <th>Action</th>
                        </tr>
                     </thead>
                     <?php
                     $sql = "SELECT peminjaman.id_peminjaman, peminjaman.status, peminjaman.penerima, peminjaman.denda, peminjaman.id_anggota, peminjaman.kode_brg, peminjaman.tgl_pinjam, peminjaman.deadline, peminjaman.jumlah, barang.nama_brg, anggota.nama FROM peminjaman JOIN barang ON peminjaman.id_brg=barang.id_brg JOIN anggota ON anggota.id_anggota=peminjaman.id_anggota ORDER BY peminjaman.id_peminjaman DESC";
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
                          <td><?php echo date('Y-m-d',strtotime($lihat['tgl_pinjam'])); ?></td>
                          <td><?php echo $lihat ['deadline']; ?></td>
                          <td><?php echo $lihat ['jumlah']; ?></td>
                          <td><span class="btn btn-xs btn-<?php echo $lihat['status'] == 1 ? 'success' : 'danger' ?>"><?php echo $lihat['status'] == 1 ? 'Sudah Dikembalikan' : 'Belum Dikembalikan'; ?></span></td>
                          <td><?php echo $lihat ['penerima']; ?></td>
                          <td><?php echo $lihat ['denda']; ?></td>
                          <td> <a href="editpeminjaman.php?id_peminjaman=<?php echo $lihat['id_peminjaman']; ?>" class="btn btn-primary">Edit</a>
                          <a href="hapuspeminjaman.php?id=<?php echo $lihat['id_peminjaman']; ?>" class="btn btn-danger">Hapus</a></td>

                        </tr>


                        
                        <?php
                        } ?>
                        </tbody>
              </table>
        </div>
      </div>
    </div>

    <?php require_once "templates/footer.php" ?>