<?php
include 'koneksih.php';

$idtmu = $_POST['idtmu'];
$idnma = $_POST['idnma'];
$nik = $_POST['nik'];
$alamat = $_POST['alamat'];
$gender = $_POST['gender'];
$sts = $_POST['sts'];
$NoTelp = $_POST['NoTelp'];
$nokmr = $_POST['nokmr'];
$jmlh = $_POST['jmlh'];
$cin = $_POST['cin'];
$cot = $_POST['cot'];

mysqli_query($koneksi, "insert into tamu values ('$idtmu', '$idnma', '$nik', '$alamat', '$gender', '$sts', '$NoTelp', '$nokmr', '$jmlh', '$cin', '$cot')");
header("location: tamu.php");
?>