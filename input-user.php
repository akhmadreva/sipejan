<?php 
include 'koneksi.php';
$nip = $_POST['nip'];
$nama = $_POST['nama'];
$jabatan = $_POST['jabatan'];
$email = $_POST['email'];
$password = $_POST['password'];
 
$sql = "INSERT INTO user VALUES('','$nip','$nama','$jabatan','$email','$password')";
mysqli_query($conn,$sql);
header("location:data-user.php?pesan=input");
?>