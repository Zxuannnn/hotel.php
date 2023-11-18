<?php
include 'koneksih.php';

$id_kamar = $_POST['id_kamar'];
$nomor_kamar = $_POST['nomor_kamar'];
$tipe_kamar = $_POST['tipe_kamar'];
$harga_per_malam = $_POST['harga_per_malam'];
$keterangan = $_POST['keterangan'];

mysqli_query($koneksi, "update kamar set id_kamar='$id_kamar', nomor_kamar='$nomor_kamar', tipe_kamar='$tipe_kamar', harga_per_malam='$harga_per_malam', keterangan='$keterangan' where id_kamar='$id_kamar'");

header("location: kamar.php");
?>