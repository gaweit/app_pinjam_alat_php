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
                <i class="fa fa-user fa-fw"></i> Admin<i class="fa fa-caret-down"></i>
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
            <li class=""><a href="dashboard.php"><i class="fa fa-dashboard">&nbsp;&nbsp;&nbsp;Dashboard</i></a></li>
            <li><a href="barang.php"><i class="fa fa-laptop">&nbsp;&nbsp;&nbsp;Barang</i></a></li>
            <li><a href="peminjam.php"><i class="fa fa-user">&nbsp;&nbsp;&nbsp;Anggota</i></a></li>
            <li><a href="peminjaman.php"><i class="fa fa-gear">&nbsp;&nbsp;&nbsp;Peminjaman</i></a></li>
            <li><a href="pengembalian.php"><i class="fa fa-book">&nbsp;&nbsp;&nbsp;Pengembalian</i></a></li>
            <li><a href="sanksi.php"><i class="fa fa-book">&nbsp;&nbsp;&nbsp;Sanksi & Kebijakan</i></a></li>
          </ul>

        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <center><h2 class="page-header">Tambah Anggota</h2></center>
          <form role="form1" action="prosestambahpeminjam.php" method="post">
             <table>
                 <div class = "box-body">
                     <div class ="form-group">
                    </div>
                    <div class ="form-group">
                        <label for="exampleInputPassword1">Nama</label>
                        <input type="text"  name="nama" class="form-control" placeholder="Username..." required>
                    </div>
                   <div class ="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password"   name="password"
                        class="form-control" placeholder="Password..." required>
                    </div>

                        <div class="row">
                        <label>Kelas</label>
                    <div class ="form-group">
                        <div class="col-md-3">
                          <select name="kelas" class="form-control">
                            <option value="" disabled selected>- Pilih Kelas -</option>
                            <option value="10">X</option>
                            <option value="11">XI</option>
                            <option value="12">XII</option>
                          </select>
                        </div>
                        <div class="col-md-3">
                          <select name="jurusan" class="form-control">
                            <option value="" disabled selected>- Pilih Jurusan Pertanian -</option>
                            <option value="ATP1"> Agribisnis Tanaman Perkebunan 1 </option>
							<option value="ATP2"> Agribisnis Tanaman Perkebunan 2 </option>
							<option value="ATPH1"> Agribisnis Tanaman Perkebunan Hortikultural 1 </option>
							<option value="ATPH2"> Agribisnis Tanaman Perkebunan Hortikultural 2 </option>
							<option value="APKJ1"> Agribisnis Pangan dan Kultur Jaringan 1 </option>
							<option value="APKJ2"> Agribisnis Pangan dan Kultur Jaringan 2 </option>
                          </select>
                        </div>
    
						<div class ="form-group col-md-3">
                        <input type="text"   name="no"
                        class="form-control" placeholder="NISN ..." required>
                    </div>
                    </div>
                        </div>

                        <div class ="form-group">
                        <label for="exampleInputPassword1">Nomor HP</label>
                        <input type="text"  name="no_hp" class="form-control" placeholder="Masukkan Nomor HP..." required>
                    </div>

               <div class="row" style="margin-top: 20px;">
                 <button type="submit" class="btn btn-success">Tambah Data</button>
             <a href="peminjam.php" class="btn btn-danger">Back </a>
               </div>
           </div>
        </div>
      </div>
    </div>

    <?php require_once "templates/footer.php" ?>