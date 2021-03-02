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
	<a class="tombol" href="form-input-menit.php">+ Tambah Data Baru</a>
	<h3>Data Permenit dan Jam</h3>
	<table border="1" class="table">
		<tr>
			<th>No</th>
            <th>Tanggal</th>
			<th>5 Menit</th>
			<th>10 Menit</th>
			<th>15 Menit</th>
			<th>30 Menit</th>
			<th>45 Menit</th>
			<th>60 Menit</th>
			<th>120 Menit</th>
			<th>3 Jam</th>
			<th>6 Jam</th>
			<th>12 Jam</th>
			<th>Opsi</th>		
		</tr>
		<?php 
		include "koneksi.php";
		$sql = "SELECT * FROM hujan";
        $hasil=mysqli_query($conn,$sql);
		$nomor = 1;
		while($data = mysqli_fetch_array($hasil)){
		?>
		<tr>
			<td><?php echo $nomor++; ?></td>
            <td><?php echo date ( 'd F Y' , strtotime ($data['tanggal'])); ?></td>
			<td><?php echo $data['lima']; ?></td>
			<td><?php echo $data['sepuluh']; ?></td>
			<td><?php echo $data['limabelas']; ?></td>
			<td><?php echo $data['tigapuluh']; ?></td>
			<td><?php echo $data['empatlima']; ?></td>
			<td><?php echo $data['enampuluh']; ?></td>
			<td><?php echo $data['seratusduapuluh']; ?></td>
			<td><?php echo $data['tigajam']; ?></td>
			<td><?php echo $data['enamjam']; ?></td>
			<td><?php echo $data['duabelasjam']; ?></td>
			<td>
				<a class="edit" href="edit-data-menit.php?id=<?php echo $data['id']; ?>">Edit</a> |
				<a class="hapus" href="hapus-data-menit.php?id=<?php echo $data['id']; ?>">Hapus</a>					
			</td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>