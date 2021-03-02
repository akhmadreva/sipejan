<?php 
include 'koneksi.php';
$id = $_GET['id'];
mysqli_query($conn, "DELETE FROM hujan WHERE id='$id'");
 
header("location:data-menit.php?pesan=hapus");
?>