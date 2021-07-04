<?php
    include 'koneksi.php';
    $id = $_GET['id'];

    $result = mysqli_query($koneksi, "DELETE FROM data_penyewa WHERE id_penyewa = '{$id}'");

    header('location: index.php');

?>