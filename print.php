<?php
//Jika download plugin mpdf tanpa composer (versi lama)
//define('_MPDF_PATH','mpdf/');
//include(_MPDF_PATH . "mpdf.php");
//$mpdf=new mPDF('utf-8', 'A4', 11, 'Georgia');

//Jika download plugin mpdf dengan composer (versi baru)
require_once __DIR__ . '/vendor/autoload.php';
$mpdf = new \Mpdf\Mpdf(['orientation' => 'L']);

//Menggabungkan dengan file koneksi yang telah kita buat
include 'koneksi.php';

$nama_dokumen='hasil-ekspor';
ob_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta http-equiv=\"Content-Type\" content=\"text/html; charset=Windows-1252\">
</head>
<body>
	<div>
    <center>
		<h2>PENAKAR HUJAN OTOMATIS / HELLMAN</h2>
    </center>
		<table border="1">
	    	<thead>
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
	    	</thead>
	    	<tbody>
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
	    	</tbody>
	    </table>

    </div>

</body>
</html>
<?php
$html = ob_get_contents();
ob_end_clean();

$mpdf->WriteHTML(utf8_encode($html));
$mpdf->Output();
$db1->close();
?>