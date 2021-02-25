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
		include 'koneksi.php';
		?>
 
		<br/><br/>
    <a class="tombol" href="index.php">Home</a>
    <a href="data-hujan-all.php">Lihat Semua Data</a>
        <br/>
    <center>
	<form method="POST" action="" class="form-inline mt-3">
        <label for="date1">Tanggal mulai </label>
        <input type="date" name="date1" id="date1" class="form-control mr-2">
        <label for="date2">sampai </label>
        <input type="date" name="date2" id="date2" class="form-control mr-2">
        <button type="submit" name="submit" class="btn btn-primary">Cari</button>
    </form>
    </br>
		<table border="1">
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
                <th>07-08</th>
                <th>08-09</th>
                <th>09-10</th>
                <th>10-11</th>
                <th>11-12</th>
                <th>12-13</th>
                <th>13-14</th>
                <th>14-15</th>
                <th>15-16</th>
                <th>16-17</th>
                <th>17-18</th>
                <th>18-19</th>
                <th>19-20</th>
                <th>20-21</th>
                <th>21-22</th>
                <th>22-23</th>
                <th>23-24</th>
                <th>24-01</th>
                <th>01-02</th>
                <th>02-03</th>
                <th>03-04</th>
                <th>04-05</th>
                <th>05-06</th>
                <th>06-07</th>
			</tr>
			<?php 
			$no = 1;

            if (isset($_POST['submit'])) {
                $date1 = $_POST['date1'];
                $date2 = $_POST['date2'];
               
                if (!empty($date1) && !empty($date2)) {
                 // perintah tampil data berdasarkan range tanggal
                 $sql = mysqli_query($conn, "SELECT * FROM data_hujan WHERE tanggal BETWEEN '$date1' and '$date2' ORDER BY tanggal"); 
                } else {
                 // perintah tampil semua data
                 $sql = mysqli_query($conn, "SELECT * FROM data_hujan"); 
                }
			    while($data = mysqli_fetch_array($sql)){
			?>
			<tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo date ( 'd F Y' , strtotime ($data['tanggal'])); ?></td>
                <td><?php echo $data['lima_mnt']; ?></td>
                <td><?php echo $data['sepuluh_mnt']; ?></td>
                <td><?php echo $data['limabelas_mnt']; ?></td>
                <td><?php echo $data['tigapuluh_mnt']; ?></td>
                <td><?php echo $data['empatlima_mnt']; ?></td>
                <td><?php echo $data['enampuluh_mnt']; ?></td>
                <td><?php echo $data['seratusduapuluh']; ?></td>
                <td><?php echo $data['tiga_jm']; ?></td>
                <td><?php echo $data['enam_jm']; ?></td>
                <td><?php echo $data['duabelas_jm']; ?></td>
                <td><?php echo $data['tujuh']; ?></td>
                <td><?php echo $data['delapan']; ?></td>
                <td><?php echo $data['sembilan']; ?></td>
                <td><?php echo $data['sepuluh']; ?></td>
                <td><?php echo $data['sebelas']; ?></td>
                <td><?php echo $data['duabelas']; ?></td>
                <td><?php echo $data['tigabelas']; ?></td>
                <td><?php echo $data['empatbelas']; ?></td>
                <td><?php echo $data['limabelas']; ?></td>
                <td><?php echo $data['enambelas']; ?></td>
                <td><?php echo $data['tujuhbelas']; ?></td>
                <td><?php echo $data['delapanbelas']; ?></td>
                <td><?php echo $data['sembilanbelas']; ?></td>
                <td><?php echo $data['duapuluh']; ?></td>
                <td><?php echo $data['duasatu']; ?></td>
                <td><?php echo $data['duadua']; ?></td>
                <td><?php echo $data['duatiga']; ?></td>
                <td><?php echo $data['duaempat']; ?></td>
                <td><?php echo $data['satu']; ?></td>
                <td><?php echo $data['dua']; ?></td>
                <td><?php echo $data['tiga']; ?></td>
                <td><?php echo $data['empat']; ?></td>
                <td><?php echo $data['lima']; ?></td>
                <td><?php echo $data['enam']; ?></td>
			</tr>
			<?php } ?>
            <?php } ?>
		</table>
 
	</center>
</body>
</html>