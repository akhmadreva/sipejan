<?php 
include 'koneksi.php';
$tanggal = $_POST['tanggal'];
$tanggal = date('Y-m-d', strtotime($tanggal));
$lima = $_POST['lima'];
$sepuluh = $_POST['sepuluh'];
$limabelas = $_POST['limabelas'];
$tigapuluh = $_POST['tigapuluh'];
$empatlima = $_POST['empatlima'];
$enampuluh = $_POST['enampuluh'];
$seratusduapuluh = $_POST['seratusduapuluh'];
$tigajam = $_POST['tigajam'];
$enamjam = $_POST['enamjam'];
$duabelasjam = $_POST['duabelasjam'];
 
$sql = "INSERT INTO hujan VALUES('','$tanggal','$lima','$sepuluh','$limabelas','$tigapuluh','$empatlima','$enampuluh','$seratusduapuluh','$tigajam','$enamjam','$duabelasjam')";
mysqli_query($conn,$sql);

header("location:data-menit.php?pesan=input");
?>