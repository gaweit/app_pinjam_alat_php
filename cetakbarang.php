<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
 
	<center>
		<h2>DATA LAPORAN BARANG</h2>
	</center>

    <?php
        include "config/koneksi.php" 
        ?>

<center><table border="4" style="width: 80%"></center>
        <tr>
			<th width="1%">ID Barang</th>
                          <th>Nama Barang</th>
                          <th>Kode Barang</th>
                          
                          <th>Stok Barang</th>
                          <th>Foto</th>
		</tr>

        <?php
                     $query = $mysqli->query("SELECT * FROM barang ");
                     $id_brg=1;
                     while ($lihat=mysqli_fetch_array($query)){
                      ?>

		<tbody>
                        <tr>
                        <td><center><?php echo $id_brg++; ?></center></td>
                          <td><?php echo $lihat['nama_brg']; ?></td>
                          <td><?php echo $lihat['kode_barang']; ?></td>
                         
                          <td><center><?php echo $lihat['stok_brg']; ?></center></td>
                          <td><center><img src="images/<?php echo $lihat['foto']; ?>" alt="" width="50" height="25"></center></td>
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