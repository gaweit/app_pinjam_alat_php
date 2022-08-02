<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
 
	<center>
		<h2>DATA LAPORAN PEMINJAMAN</h2>
	</center>

    <?php
        include "config/koneksi.php" 
        ?>

<table border="4" style="width: 100%">
        <tr>
			<th width="1%">No</th>
                          <th>Nama Barang</th>
                          <th>Kode Barang</th>
                          <th>Nama Peminjam</th>
                          <th>Tanggal Pinjam</th>
                          <td>Deadline</th>
                          <td>Jumlah</th>
                          <th>Status</th>
                          <th>Penerima</th>
                          <th>Denda</th>
		</tr>

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
                          <td><?php echo date('d-m-Y',strtotime($lihat['tgl_pinjam'])); ?></td>
                          <td><?php echo $lihat ['deadline']; ?></td>
                          <td><?php echo $lihat ['jumlah']; ?></td>
                          <td><span class="btn btn-xs btn-<?php echo $lihat['status'] == 1 ? 'success' : 'danger' ?>"><?php echo $lihat['status'] == 1 ? 'Sudah Dikembalikan' : 'Belum Dikembalikan'; ?></span></td>
                          <td><?php echo $lihat ['penerima']; ?></td>
                          <td><?php echo $lihat ['denda']; ?></td>
                        </tr>
                        
                        <?php
                        } ?>
                        </tbody>
	</table>
 
	<script>
		window.print();
	</script>
 
</body>
</html>