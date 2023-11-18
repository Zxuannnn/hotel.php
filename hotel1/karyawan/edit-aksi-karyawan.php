<?php
include 'koneksih.php';

$id_karyawan = $_POST['id_karyawan'];
$nama = $_POST['nama'];
$nomor_telepon = $_POST['nomor_telepon'];
$gender = $_POST['gender'];
$pekerjaan = $_POST['pekerjaan'];

mysqli_query($koneksi, "update karyawan set id_karyawan='$id_karyawan', nama='$nama', nomor_telepon='$nomor_telepon', gender='$gender', pekerjaan='$pekerjaan' where id_karyawan='$id_karyawan'");

header("location: karyawan.php");
?>