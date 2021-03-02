<?php 
include 'koneksi.php';
$id = $_GET['id'];
mysqli_query($conn, "DELETE FROM data_hujan WHERE id='$id'");
 
header("location:data-hujan-all.php?pesan=hapus");
?>