<?php
include 'koneksih.php';

$id = $_GET['id'];
mysqli_query ($koneksi, "delete from reservasi where id_reservasi='$id'");
header("location: reservasi.php");
?>