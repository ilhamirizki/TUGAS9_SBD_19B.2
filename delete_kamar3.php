<?php
    include 'koneksi.php';
    $id = $_GET['id'];

    $result = mysqli_query($koneksi, "DELETE FROM kamar3 WHERE nomor_kamar = '{$id}'");

    header('location: index.php');

?>