<?php
include 'koneksih.php';

$idrsr = $_POST['idrsr'];
$nmtmu = $_POST['nmtmu'];
$nokmr = $_POST['nokmr'];
$cin = $_POST['cin'];
$cot = $_POST['cot'];
$toha = $_POST['toha'];
$nmkry = $_POST['nmkry'];

mysqli_query($koneksi, "insert into reservasi values ('$idrsr', '$nmtmu', '$nokmr', '$cin', '$cot', '$toha', '$nmkry')");
header("location: reservasi.php");
?>