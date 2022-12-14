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
      <a class="navbar-brand" href="#">Peminjaman Barang & Alat Pertanian</a>
    </div>
    <div id="navbar" class="navbar-collapse collapse">
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown">
            <i class="fa fa-user fa-fw"></i>Admin <i class="fa fa-caret-down"></i>
          </a>
        <ul class="dropdown-menu dropdown-user">
         <li class="divider"></li>
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
        <li class=""><a href="#"><i class="fa fa-dashboard">&nbsp;&nbsp;&nbsp;Dashboard</i></a></li>
        <li><a href="barang.php"><i class="fa fa-laptop">&nbsp;&nbsp;&nbsp;Barang</i></a></li>
        <li><a href="peminjam.php"><i class="fa fa-user">&nbsp;&nbsp;&nbsp;Anggota</i></a></li>
        <li><a href="peminjaman.php"><i class="fa fa-gear">&nbsp;&nbsp;&nbsp;Peminjaman</i></a></li>
        <li><a href="pengembalian.php"><i class="fa fa-book">&nbsp;&nbsp;&nbsp;Pengembalian</i></a></li>
      </ul>

    </div>
    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
      <center><h1 class="page-header">Edit Pengembalian</h1></center>

          <section class="row">
            <!-- left column -->
            <div class="col-md-12">
            <!-- general form element -->
            <div class="box box-danger">
            <div class="box-header with-border">
            </div><!--/.box-header-->
            <?php
              $id = $_GET['id_pengembalian'];
              $query = $mysqli->query("SELECT pengembalian.*,
                        barang.id_brg,
                        barang.nama_brg,
                        peminjaman.id_peminjaman,
                        peminjaman.tgl_pinjam,
                        peminjaman.status,
                        anggota.id_anggota,
                        anggota.nama
                        FROM pengembalian JOIN barang
                        ON pengembalian.id_brg=barang.id_brg JOIN anggota
                        ON pengembalian.id_anggota=anggota.id_anggota JOIN peminjaman
                        ON peminjaman.id_peminjaman=pengembalian.id_peminjaman
                        WHERE pengembalian.id='$id'");
              $qu = mysqli_fetch_array($query);
                ?>
              <!-- form start -->
              <form role="form" action="proseseditpengembalian.php?id=<?= $id ?>" method="post">
              <div class = "box-body">
              <div class ="form-group">
                <label for="exampleInputEmail1">ID</label>
                <input type="text" disable value="<?php echo $qu['id_peminjaman'] ?>" name="id" class="form-control" placeholder="" disabled>
                <input type="hidden" value="<?= $qu['id_peminjaman']; ?>" name="id">
                </div>
                <div class ="form-group">
                <label for="exampleInputPassword1">Nama Barang</label>
                <input type="text" name="nama_brg" readonly="" class="form-control" value="<?= $qu['nama_brg'] ?>">
                </div>
               <div class ="form-group">
                <label for="exampleInputPassword1">Nama Peminjam</label>
                <input type="text" name="nama" class="form-control" value="<?= $qu['nama'] ?>" readonly>
                </div>
                 <div class ="form-group">
                <label for="exampleInputPassword1">Tanggal Pinjam</label>
               <input type="date" value="<?php echo date('Y-m-d', strtotime($qu['tgl_pinjam'])) ?>"  name="tgl_pinjam"
                class="form-control datepicker" required readonly>
                </div>
                <div class="form-group">
                  <label>Tanggal Kembali</label>
                  <input type="date" name="tgl_kembali" class="form-control" value="<?= date('Y-m-d', strtotime($qu['tgl_kembali'])) ?>">
                </div>

         <div class="box-footer">
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="peminjaman.php" class="btn btn-danger">Back</a>
        </div>
        </form>
        </section><!-- /.content -->

      </div>
    </div>
  </div>

<?php require_once "templates/footer.php" ?>