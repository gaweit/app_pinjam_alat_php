<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
 
	<center>
		<h2>DATA LAPORAN PENGEMBALIAN</h2>
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
                          <th>Deadline Pengembalian</th>
                          <th>Tanggal Kembali</th>
                          <th>Jumlah</th>
                          <th>Penerima Barang</th>
                          <th>Denda</th>
		</tr>

        <?php
                     $sql = "SELECT pengembalian.*,
                            barang.id_brg,
                            barang.nama_brg,
                            peminjaman.kode_brg,
                            peminjaman.id_peminjaman,
                            peminjaman.tgl_pinjam,
                            peminjaman.deadline,
                            peminjaman.jumlah,
                            peminjaman.denda,
                            peminjaman.status,
                            anggota.id_anggota,
                            anggota.nama
                            FROM pengembalian JOIN barang ON pengembalian.id_brg=barang.id_brg JOIN anggota ON pengembalian.id_anggota=anggota.id_anggota JOIN peminjaman ON
                            peminjaman.id_peminjaman=pengembalian.id_peminjaman WHERE peminjaman.status=1";
                     $query = $mysqli->query($sql);
                     $no = 1;
                     while ($lihat=mysqli_fetch_array($query)){
                      ?>

		<tbody>
                        <tr>
                        <td><?php echo $no++; ?></td>
                          <td><?php echo $lihat['nama_brg']; ?></td>
                          <td><?php echo $lihat['kode_brg']; ?></td>
                          <td><?php echo $lihat['nama'];?></td>
                          <td><?php echo $lihat['tgl_pinjam']; ?></td>
                          <td><?php echo $lihat['deadline']; ?> Jam 08:00</td>
                          <td><?php echo $lihat['tgl_kembali']; ?></td>
                          <td><?php echo $lihat['jumlah']; ?></td>
                          <td><?php echo $lihat['penerima']; ?></td>
                          <td><?php echo $lihat['denda']; ?></td>
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