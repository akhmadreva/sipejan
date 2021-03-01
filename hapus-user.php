<?php 
include 'koneksi.php';
$id = $_GET['id'];
$koneksi = mysqli_connect ('localhost', 'root', '', 'hujan');
mysqli_query($koneksi, "DELETE FROM user WHERE id='$id'")or die(mysqli_error($koneksi));
 
header("location:data-user.php?pesan=hapus");
?>