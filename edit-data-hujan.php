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
	
	<a href="data-hujan-all.php">Lihat Semua Data</a>
 
	<br/>
	<h3>Edit data</h3>
 
	<?php 
	include "koneksi.php";
	$id = $_GET['id'];
	$query_mysql = mysqli_query($conn,"SELECT * FROM data_hujan WHERE id='$id'")or die(mysqli_error($conn));
	$nomor = 1;
	while($data = mysqli_fetch_array($query_mysql)){
	?>
	<form action="update-data-hujan.php" method="post">		
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
				<td><input type="decimal" name="lima_mnt" value="<?php echo $data['lima_mnt']; ?>"></td>					
				<td>10 Menit</td>
				<td><input type="decimal" name="sepuluh_mnt" value="<?php echo $data['sepuluh_mnt']; ?>"></td>					
				<td>15 Menit</td>
				<td><input type="decimal" name="limabelas_mnt" value="<?php echo $data['limabelas_mnt']; ?>"></td>					
				<td>30 Menit</td>
				<td><input type="decimal" name="tigapuluh_mnt" value="<?php echo $data['tigapuluh_mnt']; ?>"></td>
            </tr>
            <tr>					
				<td>45 Menit</td>
				<td><input type="decimal" name="empatlima_mnt" value="<?php echo $data['empatlima_mnt']; ?>"></td>					
				<td>60 Menit</td>
				<td><input type="decimal" name="enampuluh_mnt" value="<?php echo $data['enampuluh_mnt']; ?>"></td>					
				<td>120 Menit</td>
				<td><input type="decimal" name="seratusduapuluh" value="<?php echo $data['seratusduapuluh']; ?>"></td>					
			</tr>
			<tr>
				<td>3 Jam</td>
				<td><input type="decimal" name="tiga_jm" value="<?php echo $data['tiga_jm']; ?>"></td>					
				<td>6 Jam</td>
				<td><input type="decimal" name="enam_jm" value="<?php echo $data['enam_jm']; ?>"></td>					
				<td>12 Jam</td>
				<td><input type="decimal" name="duabelas_jm" value="<?php echo $data['duabelas_jm']; ?>"></td>					
			</tr>
			<tr>
				<td>07-08</td>
				<td><input type="decimal" name="tujuh" value="<?php echo $data['tujuh']; ?>"></td>
				<td>08-09</td>
				<td><input type="decimal" name="delapan" value="<?php echo $data['delapan']; ?>"></td>
				<td>09-10</td>
				<td><input type="decimal" name="sembilan" value="<?php echo $data['sembilan']; ?>"></td>
				<td>10-11</td>
				<td><input type="decimal" name="sepuluh" value="<?php echo $data['sepuluh']; ?>"></td>
			</tr>
			<tr>
				<td>11-12</td>
				<td><input type="decimal" name="sebelas" value="<?php echo $data['sebelas']; ?>"></td>
				<td>12-13</td>
				<td><input type="decimal" name="duabelas" value="<?php echo $data['duabelas']; ?>"></td>
				<td>13-14</td>
				<td><input type="decimal" name="tigabelas" value="<?php echo $data['tigabelas']; ?>"></td>
				<td>14-15</td>
				<td><input type="decimal" name="empatbelas" value="<?php echo $data['empatbelas']; ?>"></td>
			</tr>
			<tr>
				<td>15-16</td>
				<td><input type="decimal" name="limabelas" value="<?php echo $data['limabelas']; ?>"></td>
				<td>16-17</td>
				<td><input type="decimal" name="enambelas" value="<?php echo $data['enambelas']; ?>"></td>
				<td>17-18</td>
				<td><input type="decimal" name="tujuhbelas" value="<?php echo $data['tujuhbelas']; ?>"></td>
				<td>18-19</td>
				<td><input type="decimal" name="delapanbelas" value="<?php echo $data['delapanbelas']; ?>"></td>
			</tr>
			<tr>
				<td>19-20</td>
				<td><input type="decimal" name="sembilanbelas" value="<?php echo $data['sembilanbelas']; ?>"></td>
				<td>20-21</td>
				<td><input type="decimal" name="duapuluh" value="<?php echo $data['duapuluh']; ?>"></td>
				<td>21-22</td>
				<td><input type="decimal" name="duasatu" value="<?php echo $data['duasatu']; ?>"></td>
				<td>22-23</td>
				<td><input type="decimal" name="duadua" value="<?php echo $data['duadua']; ?>"></td>
			</tr>
			<tr>
				<td>23-24</td>
				<td><input type="decimal" name="duatiga" value="<?php echo $data['duatiga']; ?>"></td>
				<td>24-01</td>
				<td><input type="decimal" name="duaempat" value="<?php echo $data['duaempat']; ?>"></td>
				<td>01-02</td>
				<td><input type="decimal" name="satu" value="<?php echo $data['satu']; ?>"></td>
				<td>02-03</td>
				<td><input type="decimal" name="dua" value="<?php echo $data['dua']; ?>"></td>
			</tr>
			<tr>
				<td>03-04</td>
				<td><input type="decimal" name="tiga" value="<?php echo $data['tiga']; ?>"></td>
				<td>04-05</td>
				<td><input type="decimal" name="empat" value="<?php echo $data['empat']; ?>"></td>
				<td>05-06</td>
				<td><input type="decimal" name="lima" value="<?php echo $data['lima']; ?>"></td>
				<td>06-07</td>
				<td><input type="decimal" name="enam" value="<?php echo $data['enam']; ?>"></td>
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