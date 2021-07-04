<?php
    include 'koneksi.php';
    $id = $_GET['id'];

    $result = mysqli_query($koneksi, "DELETE FROM data_sewa WHERE id_sewa = '{$id}'");

    header('location: index.php');

?>