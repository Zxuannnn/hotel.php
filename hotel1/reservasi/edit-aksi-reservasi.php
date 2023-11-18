<?php
include 'koneksih.php';

$id_reservasi = $_POST['id_reservasi'];
$nama_tamu = $_POST['nama_tamu'];
$nomor_kamar = $_POST['nomor_kamar'];
$check_in = $_POST['check_in'];
$check_out = $_POST['check_out'];
$total_harga = $_POST['total_harga'];
$nama_karyawan = $_POST['nama_karyawan'];

mysqli_query($koneksi, "update reservasi set id_reservasi='$id_reservasi', nama_tamu='$nama_tamu', nomor_kamar='$nomor_kamar', check_in='$check_in', check_out='$check_out', total_harga='$total_harga', nama_karyawan='$nama_karyawan' where id_reservasi='$id_reservasi'");

header("location: reservasi.php");
?>