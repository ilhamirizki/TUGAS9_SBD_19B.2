<DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="styletambah.css" rel="stylesheet" type="text/css" />
    <title>Tambah Data Transaksi</title>
</head> 

<body>
	<a href="index.php">KEMBALI KE MENU</a>
	<br/><br/>
 
	<form action="add_sewa.php" method="post" name="form1">
		<table width="25%" border="5">
			<tr> 
				<td>ID sewa</td>
				<td><input type="text" name="id_sewa"></td>
			</tr>
			<tr> 
				<td>ID penyewa</td>
				<td><input type="text" name="id_penyewa"></td>
			</tr>
			<tr> 
				<td>tanggal sewa</td>
				<td><input type="text" name="tanggal_sewa"></td>
			</tr>
            <tr> 
				<td>tipe kamar</td>
				<td><input type="text" name="tipe_kamar"></td>
			</tr>
			<tr>
				<td>pembayaran</td>
				<td><input type="text" name="pembayaran"></td>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" name="Submit" value="TAMBAHKAN"></td>
			</tr>
		</table>
	</form>
	
	<?php
 
	if(isset($_POST['Submit'])) {
		$id_sewa = $_POST['id_sewa'];
		$id_penyewa = $_POST['id_penyewa'];
		$tanggal_sewa = $_POST['tanggal_sewa'];
		$tipe_kamar = $_POST['tipe_kamar'];
		$pembayaran = $_POST['pembayaran'];
		
		include("koneksi.php");
				
		$result = mysqli_query($koneksi, "INSERT INTO data_sewa(id_sewa,id_penyewa,tanggal_sewa,tipe_kamar,pembayaran) 
        VALUES('$id_sewa','$id_penyewa','$tanggal_sewa','$tipe_kamar','$pembayaran')");
		

		echo "User added successfully. <a href='index.php'>View Users</a>";
	}
	?>
</body>
</html>