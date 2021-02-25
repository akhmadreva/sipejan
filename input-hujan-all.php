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
 
$sql1 = "INSERT INTO hujanperjam VALUES('','$tanggal','$tujuh','$delapan','$sembilan','$sepuluh'
,'$sebelas','$duabelas','$tigabelas','$empatbelas','$limabelas','$enambelas','$tujuhbelas','$delapanbelas'
,'$sembilanbelas','$duapuluh','$duasatu','$duadua','$duatiga','$duaempat','$satu','$dua','$tiga'
,'$empat','$lima','$enam')";
$sql2 = "INSERT INTO hujan VALUES('','$tanggal','$lima','$sepuluh','$limabelas','$tigapuluh'
,'$empatlima','$enampuluh','$seratusduapuluh','$tigajam','$enamjam','$duabelasjam')";
mysqli_query($conn,$sql1);
mysqli_query($conn,$sql2);
 
header("location:data-hujan-all.php?pesan=input");
?>