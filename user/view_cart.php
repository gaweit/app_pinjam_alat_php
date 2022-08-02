<?php require_once "config.inc.php";
session_start();
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
    <link href="../bootstrap/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">


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
<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
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
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                </ul>
                 <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown">
                <i class="fa fa-user fa-fw"></i><?php   echo $_SESSION['anggota'] ?><i class="fa fa-caret-down"></i>
              </a>
            <ul class="dropdown-menu dropdown-user">
              <li><a href="logout.php"><i class="fa fa-sign-out"></i> Logout</a></li>
            </ul>

          </li>
          </ul>

            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->

    </nav>
    
<div class="container">

<center><h3>Keranjang Peminjam</h3></center>

                <form action="index.php" method="post" id="cart">
                    <a href="proses_pinjam.php?id_anggota=<?php echo $_SESSION['id_anggota']; ?>" class="btn btn-primary pull-right">Proses Pinjam</a><br><br>
                    
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>Id Barang</th>
                          <th>Nama Barang</th>
                          <th>Kode Barang</th>
                          <th>Stok Barang</th>
                          
                          <th>Foto</th>
                          <th>Hapus</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                      if (isset($_SESSION['items'])) {
                            foreach ($_SESSION['items'] as $key => $val){
                                $query = $mysqli->query("SELECT barang.id_brg, barang.nama_brg, barang.kode_barang, barang.stok_brg, barang.foto FROM barang WHERE barang.id_brg = '$key'");
                                $rs = mysqli_fetch_array($query);

                      ?>
                      <tr>
                        <td><?php echo $rs['id_brg']; ?></td>
                        <td><?php echo $rs['nama_brg']; ?></td>
                        <td><?php echo $rs['kode_barang']; ?></td>
                        <td><?php echo $rs['stok_brg']; ?></td>
                       
                        <td><img src="../images/<?php echo $rs['foto']; ?>" width="50" height="25" alt=""></td>
                        <td><a href="cartfunction.php?act=del&amp;id_product=<?php echo $key; ?>&amp;ref=view_cart.php"><i class="fa fa-trash"></i></a></td>
                      </tr>
                      <?php
                                mysqli_free_result($query);
                            }
                      }
                      ?>
                      <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td><a href="cartfunction.php?act=clear&amp;ref=index.php">Hapus Semua</a></td>
                      </tr>
                      </tbody>
                    </table>
                    <button type="submit" class="btn btn-danger">Kembali</button>
                  </form>
            </div>

            <font color="black" face="Times new roman"><center><marquee behavior="alternate" scrollamount="10"><h4>pastikan
              barang yang ingin anda pinjam sudah benar !!!<BR></marquee></font></center>

<!-- Placed at the end of the document so the pages load faster -->
    <script src="bootstrap/dist/js/jquery.js"></script>
    <script src="bootstrap/dist/js/bootstrap.min.js"></script>
  </body>
</html>