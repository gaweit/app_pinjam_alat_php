<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
 
	<center>
		<h2>DATA  LAPORAN  ANGGOTA/PEMINJAM</h2>
	</center>

    <?php
        include "config/koneksi.php" 
        ?>

<center><table border="4" style="width: 80%"></center>
        <tr>
			<th width="1%">No</th>
                      <th>Username</th>
                      <th>Kelas</th>
                      <th>Nomor HP</th>
		</tr>

        <?php
                 $query = $mysqli->query("SELECT * FROM anggota");
                 $id_peminjam=1;
                 while ($lihat = mysqli_fetch_array($query)){
                  ?>
		<tbody>
                        <tr>
                    <td><?php echo $lihat['id_anggota']; ?></td>
                      <td><?php echo $lihat['nama'];?></td>
                      <td><?php echo $lihat['kelas'];?></td>
                      <td><?php echo $lihat['no_hp'];?></td>
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