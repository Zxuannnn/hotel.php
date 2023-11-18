<?php
include 'koneksih.php';

$id = $_GET['id'];
mysqli_query ($koneksi, "delete from kamar where id_kamar='$id'");
header("location: kamar.php");
?>