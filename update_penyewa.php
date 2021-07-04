<?php

include("koneksi.php");

if(isset($_POST['update']))
{	
	$id = $_POST['id_penyewa'];
	
	$id_penyewa=$_POST['id_penyewa'];
	$nama=$_POST['nama'];
	$nomor_telepon=$_POST['nomor_telepon'];
		
	// update user dataa
	$result = mysqli_query($koneksi, "UPDATE data_penyewa SET id_penyewa='$id_penyewa',nama='$nama',nomor_telepon='$nomor_telepon' 
	WHERE id_penyewa=$id");

}
?>

<DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="styleubah.css" rel="stylesheet" type="text/css" />
    <title>Ubah Data penyewa</title>
</head>

<?php

$id = $_GET['id'];

$result = mysqli_query($koneksi, "SELECT * FROM data_penyewa WHERE id_penyewa=$id");
 
while($user_data = mysqli_fetch_array($result))
{
	$id_penyewa = $user_data['id_penyewa'];
	$nama = $user_data['nama'];
	$nomor_telepon = $user_data['nomor_telepon'];
}
?>
 
<body>
	<a href="index.php">KEMBALI KE MENU</a>
	<br/><br/>
	
	<form name="update_user" method="post" action="update_penyewa.php">
		<table border="0">
			<tr> 
				<td>ID</td>
				<td><input type="text" name="id_penyewa" value=<?php echo $id_penyewa;?>></td>
			</tr>
			<tr> 
				<td>nama</td>
				<td><input type="text" name="nama" value=<?php echo $nama;?>></td>
			</tr>
			<tr> 
				<td>nomor telpon</td>
				<td><input type="text" name="nomor_telepon" value=<?php echo $nomor_telepon;?>></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>