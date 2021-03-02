<?php 

include 'koneksi.php';
$id = $_POST['id'];
$tanggal = $_POST['tanggal'];
$tanggal = date('Y-m-d', strtotime($tanggal));

$lima_mnt = $_POST['lima_mnt'];
$sepuluh_mnt = $_POST['sepuluh_mnt'];
$limabelas_mnt = $_POST['limabelas_mnt'];
$tigapuluh_ = $_POST['tigapuluh_mnt'];
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

mysqli_query($conn, "UPDATE data_hujan SET tanggal='$tanggal', lima_mnt='$lima_mnt', sepuluh_mnt='$sepuluh_mnt', limabelas_mnt='$limabelas_mnt', tigapuluh_mnt='$tigapuluh_mnt'
, empatlima_mnt='$empatlima_mnt', enampuluh_mnt='$enampuluh_mnt', seratusduapuluh='$seratusduapuluh', tiga_jm='$tiga_jm', enam_jm='$enam_jm', duabelas_jm='$duabelas_jm', tujuh='$tujuh', delapan='$delapan', sembilan='$sembilan', sepuluh='$sepuluh'
, sebelas='$sebelas', duabelas='$duabelas', tigabelas='$tigabelas', empatbelas='$empatbelas', limabelas='$limabelas', enambelas='$enambelas', tujuhbelas='$tujuhbelas', delapanbelas='$delapanbelas'
, sembilanbelas='$sembilanbelas', duapuluh='$duapuluh', duasatu='$duasatu', duadua='$duadua', duatiga='$duatiga', duaempat='$duaempat', satu='$satu', dua='$dua', tiga='$tiga'
, empat='$empat', lima='$lima', enam='$enam' WHERE id='$id'");

header("location:data-hujan-all.php?pesan=update");

?>