<?php include "templates/header.php";

session_start();

?>

<div class="row">
    <div class="col-md-8 col-md-offset-2">
    <img src="download.png" height="9%" width="9%" align="left" border=20>
    <img src="smk.jpg" height="9%" width="9%" align="right" border=20>
          <center><h2 class="page-header">Pendaftaran Anggota</h2></center>

          <div class="panel panel-success">
            <div class="panel panel-heading"> 
                Form Pendaftaran
            </div> 
            <div class="panel-body">  
                <form action="prosesregister.php" method="post">  
                     <div class ="form-group">
                          <label for="nama">Nama Lengkap</label>
                          <input type="text"   name="nama" 
                          class="form-control" placeholder="Nama Lengkap..." required>
                    </div>
                   <div class ="form-group">
                        <label for="password">Password</label>
                        <input type="text"   name="password" 
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

              <div class="row" style="margin-top: 15px; margin-left: 5px">
                <button type="submit" class="btn btn-success">Tambah Data</button>
              <a href="login.php" class="btn btn-danger">Batal</a>
              </div>
        </form>
            </div>
          </div>
    </div>
</div>
<?php include "templates/footer.php"; ?>