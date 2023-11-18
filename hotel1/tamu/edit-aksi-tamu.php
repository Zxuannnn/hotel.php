<?php
include 'koneksih.php';

$id_tamu = $_POST['id_tamu'];
$nama = $_POST['nama'];
$nik = $_POST['nik'];
$alamat = $_POST['alamat'];
$gender = $_POST['gender'];
$status_pernikahan = $_POST['status_pernikahan'];
$nomor_telepon = $_POST['nomor_telepon'];
$nomor_kamar = $_POST['nomor_kamar'];
$jumlah_tamu_dikamar = $_POST['jumlah_tamu_dikamar'];
$check_in = $_POST['check_in'];
$check_out = $_POST['check_out'];

mysqli_query($koneksi, "update tamu set id_tamu='$id_tamu', nama='$nama', nik='$nik', alamat='$alamat', gender='$gender', status_pernikahan='$status_pernikahan', nomor_telepon='$nomor_telepon', nomor_kamar='$nomor_kamar', jumlah_tamu_dikamar='$jumlah_tamu_dikamar', check_in='$check_in', check_out='$check_out' where id_tamu='$id_tamu'");

header("location: tamu.php");
?>