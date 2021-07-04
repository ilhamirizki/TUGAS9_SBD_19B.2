  
<?php

include("koneksi.php");

if(isset($_POST['update']))
{	
	$id = $_POST['nomor_kamar'];
	
	$nomor_kamar=$_POST['nomor_kamar'];
	$tipe_kamar=$_POST['tipe_kamar'];
	$keterangan=$_POST['keterangan'];
    $harga=$_POST['harga'];
	
	$result = mysqli_query($koneksi, 
	"UPDATE kamar SET nomor_kamar='$nomor_kamar',tipe_kamar='$tipe_kamar',keterangan='$keterangan',harga='$harga' 
	WHERE nomor_kamar=$id");
	
	header("Location: index.php");
}
?>


<DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="styleubah.css" rel="stylesheet" type="text/css" />
    <title>Ubah Data Pembeli</title>
</head>

<?php

$id = $_GET['id'];

$result = mysqli_query($koneksi, "SELECT * FROM kamar WHERE nomor_kamar=$id");
 
while($user_data = mysqli_fetch_array($result))
{
	$nomor_kamar = $user_data['nomor_kamar'];
	$tipe_kamar = $user_data['tipe_kamar'];
	$keterangan = $user_data['keterangan'];
    $harga = $user_data['harga'];
}
?>
<html>
<?php include('header1.php');?>
 
<body>
	<a href="index.php">KEMBALI KE MENU</a>
	<br/><br/>
	
	<form name="update_user" method="post" action="update_kamar.php">
		<table border="0">
			<tr> 
				<td>NOMOR KAMAR</td>
				<td><input type="text" name="nomor_kamar" value=<?php echo $nomor_kamar;?>></td>
			</tr>
			<tr> 
				<td>TIPE KAMAR</td>
				<td><input type="text" name="tipe_kamar" value=<?php echo $tipe_kamar;?>></td>
			</tr>
			<tr> 
				<td>Keterangan</td>
				<td><input type="text" name="keterangan" value=<?php echo $keterangan;?>></td>
			</tr>
            <tr> 
				<td>HARGA</td>
				<td><input type="text" name="harga" value=<?php echo $harga;?>></td>
			</>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
<?php include('footer.php');?>
</html