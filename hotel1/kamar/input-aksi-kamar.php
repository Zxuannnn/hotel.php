<?php
include 'koneksih.php';

$idkmr = $_POST['idkmr'];
$nokmr = $_POST['nokmr'];
$tipekmr = $_POST['tipekmr'];
$hargapr = $_POST['hargapr'];
$keter = $_POST['keter'];

mysqli_query($koneksi, "insert into kamar values ('$idkmr', '$nokmr', '$tipekmr', '$hargapr', '$keter')");
header("location: kamar.php");
?>