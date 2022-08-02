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
         <center><h2 class="page-header">Tambah Peminjaman</h2></center>

          <form role="form1" action="prosestambahpeminjaman.php" method="post">
             <table>
                 <div class = "box-body">

                    <div class ="form-group">
                    <label for="">Pilih Barang</label>
                   <select name="nama_barang" class="form-control">
                        <option value="" selected disabled>- Pilih Barang -</option>
                        <?php
                          $sql = "select * from barang";
                          $query = $mysqli->query($sql);
                          while ($data = mysqli_fetch_array($query)) {
                         ?>

                         <option value="<?php echo $data['id_brg'] ?>"><?php echo $data['nama_brg'] ?></option>
                         <?php } ?>
                      </select><br>

                      <form method="POST" action="" class="form-inline pull-right">
                        Kode Barang
                        <select class="form-control mr-2" name="kode_brg">
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
                   <div class ="form-group">
                   <label for="">Nama Peminjam</label>
                      <select name="nama_peminjam" class="form-control">
                        <option value="" selected disabled>- Nama Peminjam -</option>
                        <?php
                          $sql = "select * from anggota";
                          $query = $mysqli->query($sql);
                          while ($data = mysqli_fetch_array($query)) {
                         ?>

                         <option value="<?php echo $data['id_anggota'] ?>"><?php echo $data['nama'] ?></option>
                         <?php } ?>
                      </select>
                    </div>

                     <div class ="form-group">
                     <div style="text-align: left;">Tanggal Peminjaman :</div>
                     <input type="text" placeholder="<?php date_default_timezone_set("Asia/Jakarta");echo date("d / m / Y"); ?>" class="form-control" name="tgl_pinjam" disabled/>
                    </div>

                    <div class="form-group">
                        <?php
                            date_default_timezone_set('Asia/Jakarta');
                            $date = date('d' . '-' . 'F' . '-' . 'Y');
                            $deadline = mktime(0,0,0,date("n"),date("j")+2,date("Y"));
                            $kembali = date('d' . '-' . 'F' . '-' . 'Y', $deadline);
                        ?>
							<label for="">Deadline Pengembalian</label>
							<input type="date" name="deadline" class="datepicker form-control" value="<?php echo $kembali; ?>">
								</div>


                <div class="form-group">
                    <label for="">Jumlah Pinjam</label>
                        <input type="text" class="form-control" placeholder="Jumlah Pinjam" value="" name="jumlah">
                    </div>


           
              <div class="box=footer">
            </div>
            <tr>
            <td><button type="submit" class="btn btn-success">Tambah Data</button></td>
            <td><a href="peminjaman.php" class="btn btn-danger">Back</td>
            </tr>
            </div>
        </div>
      </div>
    </div>

    <?php require_once "templates/footer.php" ?>