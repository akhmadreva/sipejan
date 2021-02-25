<?php
include 'koneksi.php';
$tanggal = $_POST['tanggal'];
$tanggal = date('Y-m-d', strtotime($tanggal));

$lima_mnt = $_POST['lima_mnt'];
$sepuluh_mnt = $_POST['sepuluh_mnt'];
$limabelas_mnt = $_POST['limabelas_mnt'];
$tigapuluh_mnt = $_POST['tigapuluh_mnt'];
$empatlima_mnt = $_POST['empatlima_mnt'];
$enampuluh_mnt = $_POST['enampuluh_mnt'];
$seratusduapuluh = $_POST['seratusduapuluh'];
$tiga_jm = $_POST['tiga_jm'];
$enam_jm = $_POST['enam_jm'];
$duabelas_jm = $_POST['duabelas_jm'];
$tujuh = $_POST['tujuh'];
$delapan = $_POST['delapan'];
$sembilan = $_POST['sembilan'];
$sepuluh = $_POST['sepuluh'];
$sebelas = $_POST['sebelas'];
$duabelas = $_POST['duabelas'];
$tigabelas = $_POST['tigabelas'];
$empatbelas = $_POST['empatbelas'];
$limabelas = $_POST['limabelas'];
$enambelas = $_POST['enambelas'];
$tujuhbelas = $_POST['tujuhbelas'];
$delapanbelas = $_POST['delapanbelas'];
$sembilanbelas = $_POST['sembilanbelas'];
$duapuluh = $_POST['duapuluh'];
$duasatu = $_POST['duasatu'];
$duadua = $_POST['duadua'];
$duatiga = $_POST['duatiga'];
$duaempat = $_POST['duaempat'];
$satu = $_POST['satu'];
$dua = $_POST['dua'];
$tiga = $_POST['tiga'];
$empat = $_POST['empat'];
$lima = $_POST['lima'];
$enam = $_POST['enam'];
 
$sql = "INSERT INTO data_hujan VALUES('','$tanggal','$lima_mnt','$sepuluh_mnt','$limabelas_mnt','$tigapuluh_mnt'
,'$empatlima_mnt','$enampuluh_mnt','$seratusduapuluh','$tiga_jm','$enam_jm','$duabelas_jm'
,'$tujuh','$delapan','$sembilan','$sepuluh','$sebelas','$duabelas','$tigabelas','$empatbelas','$limabelas','$enambelas'
,'$tujuhbelas','$delapanbelas','$sembilanbelas','$duapuluh','$duasatu','$duadua','$duatiga'
,'$duaempat','$satu','$dua','$tiga','$empat','$lima','$enam')";

mysqli_query($conn,$sql);
 
header("location:data-hujan-all.php?pesan=input");
?>