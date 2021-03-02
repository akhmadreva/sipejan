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

mysqli_query($conn, "UPDATE data_menit SET tanggal='$tanggal', lima='$lima', sepuluh='$sepuluh', limabelas='$limabelas', tigapuluh='$tigapuluh'
, empatlima='$empatlima', enampuluh='$enampuluh', seratusduapuluh='$seratusduapuluh', tigajam='$tigajam', enamajam='$enamjam', duabelasjamm='$duabelasjam' WHERE id='$id'");

header("location:data-menit.php?pesan=update");

?>
