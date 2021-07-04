<?php
    include 'koneksi.php';
    $id = $_GET['id'];

    $result = mysqli_query($koneksi, "DELETE FROM kamar2 WHERE nomor_kamar = '{$id}'");

    header('location: index.php');

?>