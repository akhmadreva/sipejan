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
	
	<br/>
	
	<a href="data-menit.php">Lihat Semua Data</a>
 
	<br/>
	<h3>Edit data</h3>
 
	<?php 
	include "koneksi.php";
	$id = $_GET['id'];
	$query_mysql = mysqli_query($conn,"SELECT * FROM hujan WHERE id='$id'")or die(mysqli_error($conn));
	$nomor = 1;
	while($data = mysqli_fetch_array($query_mysql)){
	?>
	<form action="update-data-menit.php" method="post">		
		<table>
        <tr>
				<td>Intensitas Hujan</td>					
			</tr>
			<tr>
				<td><label for="tanggal">Tanggal mulai </label></td>
                <input type="hidden" name="id" value="<?php echo $data['id'] ?>">
        		<td><input type="date" name="tanggal" id="date" value="<?php echo $data['tanggal'] ?>" class="form-control mr-2"></td>
			</tr>
            <tr>
				<td>5 Menit</td>
				<td><input type="decimal" name="lima" value="<?php echo $data['lima']; ?>"></td>					
				<td>10 Menit</td>
				<td><input type="decimal" name="sepuluh" value="<?php echo $data['sepuluh']; ?>"></td>					
				<td>15 Menit</td>
				<td><input type="decimal" name="limabelas" value="<?php echo $data['limabelas']; ?>"></td>					
				<td>30 Menit</td>
				<td><input type="decimal" name="tigapuluh" value="<?php echo $data['tigapuluh']; ?>"></td>
            </tr>
            <tr>					
				<td>45 Menit</td>
				<td><input type="decimal" name="empatlima" value="<?php echo $data['empatlima']; ?>"></td>					
				<td>60 Menit</td>
				<td><input type="decimal" name="enampuluh" value="<?php echo $data['enampuluh']; ?>"></td>					
				<td>120 Menit</td>
				<td><input type="decimal" name="seratusduapuluh" value="<?php echo $data['seratusduapuluh']; ?>"></td>					
			</tr>
			<tr>
				<td>3 Jam</td>
				<td><input type="decimal" name="tigajam" value="<?php echo $data['tigajam']; ?>"></td>					
				<td>6 Jam</td>
				<td><input type="decimal" name="enamjam" value="<?php echo $data['enamjam']; ?>"></td>					
				<td>12 Jam</td>
				<td><input type="decimal" name="duabelasjam" value="<?php echo $data['duabelasajam']; ?>"></td>					
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Update"></td>					
			</tr>				
		</table>
	</form>
	<?php } ?>
</body>
</html>