<?php 
include 'koneksi.php';
$id = $_GET['id'];
$koneksi = mysqli_connect ('localhost', 'root', '', 'hujan');
mysql_query("DELETE FROM user WHERE id='$id'")or die(mysql_error($koneksi));
 
header("location:data-user.php?pesan=hapus");
?>