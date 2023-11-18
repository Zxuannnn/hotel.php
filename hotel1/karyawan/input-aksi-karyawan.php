<?php
include 'koneksih.php';

$idkrywn = $_POST['idkrywn'];
$idnma = $_POST['idnma'];
$NoTelp = $_POST['NoTelp'];
$gndr = $_POST['gndr'];
$pkr = $_POST['pkr'];

mysqli_query($koneksi, "insert into karyawan values ('$idkrywn', '$idnma', '$NoTelp', '$gndr', '$pkr')");
header("location: karyawan.php");
?>