<?php
include 'koneksih.php';

$id = $_GET['id'];
mysqli_query ($koneksi, "delete from tamu where id_tamu='$id'");
header("location: tamu.php");
?>