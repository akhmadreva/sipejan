<!DOCTYPE html>
<html>
<head>
	<title>Penakar Hujan Hellman</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="judul">		
		<h1>Penakar Hujan Hellman</h1>
	</div>
 
	<?php 
	if(isset($_GET['pesan'])){
		$pesan = $_GET['pesan'];
		if($pesan == "input"){
			echo "Data berhasil di input.";
		}else if($pesan == "update"){
			echo "Data berhasil di update.";
		}else if($pesan == "hapus"){
			echo "Data berhasil di hapus.";
		}
	}
	?>
	<br/>
    <a href="index.php">Home</a>
	<a class="tombol" href="form-input-user.php">+ Tambah Data Baru</a>
	<h3>Data Permenit dan Jam</h3>
	<table border="1" class="table">
		<tr>
			<th>No</th>
			<th>NIP</th>
			<th>Nama</th>
			<th>Jabatan</th>
			<th>Email</th>
			<th>Opsi</th>		
		</tr>
		<?php 
		include "koneksi.php";
		$sql = "SELECT * FROM user";
        $hasil=mysqli_query($conn,$sql);
		$nomor = 1;
		while($data = mysqli_fetch_array($hasil)){
		?>
		<tr>
			<td><?php echo $nomor++; ?></td>
            <td><?php echo $data['nip']; ?></td>
			<td><?php echo $data['nama']; ?></td>
			<td><?php echo $data['jabatan']; ?></td>
			<td><?php echo $data['email']; ?></td>
			<td>
				<a class="edit" href="edit.php?id=<?php echo $data['id']; ?>">Edit</a> |
				<a class="hapus" href="hapus.php?id=<?php echo $data['id']; ?>">Hapus</a>					
			</td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>