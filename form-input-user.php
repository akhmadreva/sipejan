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
  	<a href="index.php">Home</a>
	<a href="data-user.php">Lihat Semua Data</a>
 
	<br/>
	<h3>Input data baru</h3>
	<form action="input-user.php" method="post">

		<table>
			<tr>
				<td>NIP</td>
				<td><input type="number" name="nip"></td>					
			</tr>
			<tr>
				<td>Nama</td>
				<td><input type="nama" name="nama"></td>					
			</tr>	
			<tr>
				<td>Jabatan</td>
				<td><input type="jabatan" name="jabatan"></td>					
			</tr>	
			<tr>
				<td>Email</td>
				<td><input type="email" name="email"></td>					
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="password"></td>					
			</tr>	
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>					
			</tr>				
		</table>
	</form>
</body>
</html>