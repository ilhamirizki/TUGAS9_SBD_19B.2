  
<?php

include("koneksi.php");

if(isset($_POST['update']))
{	
	$id = $_POST['id_sewa'];
	
	$id_sewa=$_POST['id_sewa'];
	$id_penyewa=$_POST['id_penyewa'];
	$tanggal_sewa=$_POST['tanggal_sewa'];
    $tipe_kamar=$_POST['tipe_kamar'];
    $pembayaran=$_POST['pembayaran'];
	
	$result = mysqli_query($koneksi, 
	"UPDATE data_sewa SET id_sewa='$id_sewa',id_penyewa='id_penyewa',tanggal_sewa='$tanggal_sewa',tipe_kamar='$tipe_kamar' ,pembayaran='$pembayaran'
	WHERE id_sewa=$id");
	
	header("Location: index.php");
}
?>


<DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="styleubah.css" rel="stylesheet" type="text/css" />
    <title>Ubah Data </title>
</head>

<?php

$id = $_GET['id'];

$result = mysqli_query($koneksi, "SELECT * FROM data_sewa WHERE id_sewa=$id");
 
while($user_data = mysqli_fetch_array($result))
{
	$id_sewa = $user_data['id_sewa'];
	$id_penyewa = $user_data['id_penyewa'];
	$tanggal_sewa = $user_data['tanggal_sewa'];
    $tipe_kamar = $user_data['tipe_kamar'];
    $pembayaran = $user_data['pembayaran'];
}
?>
<html>
<?php include('header1.php');?>
 
<body>
	<a href="index.php">KEMBALI KE MENU</a>
	<br/><br/>
	
	<form name="update_user" method="post" action="update_sewa.php">
		<table border="0">
			<tr> 
				<td>id sewa</td>
				<td><input type="text" name="id_sewa" value=<?php echo $id_sewa;?>></td>
			</tr>
			<tr> 
				<td>id Penyewa</td>
				<td><input type="text" name="id_penyewa" value=<?php echo $id_penyewa;?>></td>
			</tr>
			<tr> 
				<td>Tanggal_sewa</td>
				<td><input type="text" name="tanggal_sewa" value=<?php echo $tanggal_sewa;?>></td>
			</tr>
			<tr> 
				<td>tipe Kamar</td>
				<td><input type="text" name="tipe_kamar" value=<?php echo $tipe_kamar;?>></td>
			</tr>
            <tr> 
				<td>Pembayaran</td>
				<td><input type="text" name="pembayaran" value=<?php echo $pembayaran;?>></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
<?php include('footer.php');?>
</html