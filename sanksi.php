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

        <title>Pemberian Sanksi</title>

        <!-- Bootstrap core CSS -->
            <link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

            <link href="bootstrap/dist/css/global.css" rel="stylesheet">
        <!-- Custom Fonts -->
            <link href="bootstrap/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

            <style>
              body {
                        background-color: #93B874;
                    }
                    h1 {
                        background-color: #00b33c;
                    }
                    p {
                        background-color: #FFFFFF);
                    }
            </style>
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
              <li><a href="dashboard.php"><i class="fa fa-dashboard">&nbsp;&nbsp;&nbsp;Dashboard</i></a></li>
              <li><a href="barang.php"><i class="fa fa-laptop">&nbsp;&nbsp;&nbsp;Barang</i></a></li>
              <li><a href="peminjam.php"><i class="fa fa-user">&nbsp;&nbsp;&nbsp;Anggota</i></a></li>
              <li><a href="peminjaman.php"><i class="fa fa-gear">&nbsp;&nbsp;&nbsp;Peminjaman</i></a></li>
              <li><a href="pengembalian.php"><i class="fa fa-book">&nbsp;&nbsp;&nbsp;Pengembalian</i></a></li>
              <li><a href="sanksi.php"><i class="fa fa-book">&nbsp;&nbsp;&nbsp;Sanksi & Kebijakan</i></a></li>
          </ul>

        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
        <center><h1 class="page-header">Halaman Sanksi</h1></center>
    
     <h1>Sanksi Keterlambatan Pengembalian</h1></br>
     <p><font size="3">Pada setiap keterlambatan pengembalian maka siswa akan dikenakan denda 
      sebesar Rp. 1.000 perhari. <br><br>
     
     </font></p>
  
      <h1>Sanksi Kehilangan Barang</h1></br>
     <p>Jika barang atau alat yang dipinjam hilang maka siswa wajib mengganti dengan jenis barang yang sama, atau juga bisa dengan
      membayar denda dengan seharga barang atau hilang tersebut.</p>
    
</body>
</html>