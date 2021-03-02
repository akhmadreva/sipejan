<?php 
include 'koneksi.php';
$id = $_GET['id'];
mysqli_query($conn, "DELETE FROM hujanperjam WHERE id='$id'");
 
header("location:data-hujan.php?pesan=hapus");
?>