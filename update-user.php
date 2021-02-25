<?php 

include 'koneksi.php';
$id = $_POST['id'];
$nip = $_POST['nip'];
$nama = $_POST['nama'];
$jabatan = $_POST['jabatan'];
$email = $_POST['email'];
$password = $_POST['password'];

mysql_query("UPDATE user SET nip='$nip' , nama='$nama', jabatan='$jabatan', email='$email' , password='$password' WHERE id='$id'");

header("location:data-user.php?pesan=update");

?>