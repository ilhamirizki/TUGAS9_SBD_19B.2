<?php include('header.php');?>

<html>
<head>
	<title>Add Users</title>
</head>
 
<body>
	<a href="index.php">Go to Home</a>
	<br/><br/>
 
	<form action="add_penyewa.php" method="post" name="form1">
		<table width="25%" border="5">
			<tr> 
				<td>ID</td>
				<td><input type="text" name="id_penyewa"></td>
			</tr>
			<tr> 
				<td>Nama</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr> 
				<td>Nomor Telpon</td>
				<td><input type="text" name="nomor_telepon"></td>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" name="Submit" value="Add"></td>
			</tr>
		</table>
	</form>
	
	<?php
 
	if(isset($_POST['Submit'])) {
		$id_penyewa = $_POST['id_penyewa'];
		$nama = $_POST['nama'];
		$nomor_telepon = $_POST['nomor_telepon'];
		
		
		include("koneksi.php");
				
		$result = mysqli_query($koneksi, "INSERT INTO data_penyewa(id_penyewa,nama,nomor_telepon) 
        VALUES('$id_penyewa','$nama','$nomor_telepon')");
		
		echo "User added successfully. <a href='index.php'>View Users</a>";
	}
	?>
</body>
<?php include('footer.php');?>
</html>