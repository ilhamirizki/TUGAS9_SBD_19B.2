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
 
	<form action="add_kamar.php" method="post" name="form1">
		<table width="25%" border="5">
			<tr> 
				<td>nomor kamar</td>
				<td><input type="text" name="nomor_kamar"></td>
			</tr>
			<tr> 
				<td>tipe kamar</td>
				<td><input type="text" name="tipe_kamar"></td>
			</tr>
			<tr> 
				<td>keterangan</td>
				<td><input type="text" name="keterangan"></td>
			</tr>
            <tr> 
				<td>harga</td>
				<td><input type="text" name="harga"></td>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" name="Submit" value="TAMBAHKAN"></td>
			</tr>
		</table>
	</form>
	
	<?php
 
	if(isset($_POST['Submit'])) {
		$nomor_kamar = $_POST['nomor_kamar'];
		$tipe_kamar = $_POST['tipe_kamar'];
		$keterangan = $_POST['keterangan'];
		$harga = $_POST['harga'];
		
		include("koneksi.php");
				
		$result = mysqli_query($koneksi, "INSERT INTO kamar(nomor_kamar,tipe_kamar,keterangan,harga) 
        VALUES('$nomor_kamar','$tipe_kamar','$keterangan','$harga')");
		

		echo "User added successfully. <a href='index.php'>View Users</a>";
	}
	?>
</body>
</html>