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
    <center><h4>PENAKAR HUJAN OTOMATIS/HELLMAN</h4>
    <table>
        <tr>
            <td>Nama Stasiun</td>
            <td>:</td>
            <td>Klimatologi Semarang</td>
            <td>Laporan Bulan</td>
            <td>:</td>
            <td><?php
                echo date  ( 'F' , strtotime ($_POST['date1']));
                $query = "SELECT * FROM data_hujan WHERE tanggal='".$_POST['date1']."'";
                ?></td>
            <td>Form</td>
            <td>:</td>
            <td>A</td>
        </tr>
        <tr>
            <td>No. Stasiun</td>
            <td>:</td>
            <td>96835</td>
            <td>Tahun</td>
            <td>:</td>
            <td><?php
                echo date  ( 'Y' , strtotime ($_POST['date1']));
                    $query = "SELECT * FROM data_hujan WHERE tanggal='".$_POST['date1']."'";
                ?></td>
            <td colspan="3"> </td>
        </tr>
        <tr>
            <td>Kabupaten</td>
            <td>:</td>
            <td>Semarang</td>
            <td colspan="3"></td>
            <td colspan="3"></td>
        </tr>
        <tr>
            <td>Ketinggian</td>
            <td>:</td>
            <td>3m/dpl</td>
            <td colspan="3"></td>
            <td>Nama Pengamat</td>
            <td>:</td>
            <td></td>
        </tr>
    </table>
    </center>
    <br/>
		<table border="1">
            <tr>
                <td colspan="10"><center>Jumlah pada masing-masing periode waktu (mm)</center></td>
                <td rowspan="2">Tanggal</td>
                <td colspan="24"><center>JUMLAH HUJAN TIAP JAM (MILIMETER)</center></td>
                <td rowspan="2">Jumlah 24 Jam</td>
            </tr>
            <tr>
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
            $t=0;
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
                    $jumlah = $data['tujuh']+$data['delapan']+$data['sembilan']+$data['sepuluh']+$data['sebelas']+$data['duabelas']+$data['tigabelas']+$data['empatbelas']
                    +$data['limabelas']+$data['enambelas']+$data['tujuhbelas']+$data['delapanbelas']+$data['sembilanbelas']+$data['duapuluh']+$data['duasatu']+$data['duadua']
                    +$data['duatiga']+$data['duaempat']+$data['satu']+$data['dua']+$data['tiga']+$data['empat']+$data['lima']+$data['enam'];

                    $t += $jumlah;
			?>
			<tr>
                
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
                <td><?php echo date ( 'd' , strtotime ($data['tanggal'])); ?></td>
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
                <td><?php echo $jumlah?></td>
			</tr>
			<?php } ?>
            <?php } ?>
            <?php
                $j=mysqli_query($conn, "SELECT SUM(tujuh) AS jml_7, SUM(delapan) AS jml_8, SUM(sembilan) AS jml_9, SUM(sepuluh) AS jml_10, SUM(sebelas) AS jml_11, SUM(duabelas) AS jml_12, SUM(tigabelas) AS jml_13
                , SUM(empatbelas) AS jml_14, SUM(limabelas) AS jml_15, SUM(enambelas) AS jml_16, SUM(tujuhbelas) AS jml_17, SUM(delapanbelas) AS jml_18, SUM(sembilanbelas) AS jml_19, SUM(duapuluh) AS jml_20, SUM(duasatu) AS jml_21, SUM(duadua) AS jml_22
                , SUM(duatiga) AS jml_23, SUM(duaempat) AS jml_24, SUM(satu) AS jml_1, SUM(dua) AS jml_2, SUM(tiga) AS jml_3, SUM(empat) AS jml_4, SUM(lima) AS jml_5, SUM(enam) AS jml_6 FROM data_hujan");
                while($total = mysqli_fetch_array($j)){
            ?>
            <tr>
                    <td colspan="10">Tanggal dan Intensitas Max</td>
                    <td rowspan="2">Jml</td>
                    <td rowspan="2"><?php echo $total['jml_7'];?></td>
                    <td rowspan="2"><?php echo $total['jml_8'];?></td>
                    <td rowspan="2"><?php echo $total['jml_9'];?></td>
                    <td rowspan="2"><?php echo $total['jml_10'];?></td>
                    <td rowspan="2"><?php echo $total['jml_11'];?></td>
                    <td rowspan="2"><?php echo $total['jml_12'];?></td>
                    <td rowspan="2"><?php echo $total['jml_13'];?></td>
                    <td rowspan="2"><?php echo $total['jml_14'];?></td>
                    <td rowspan="2"><?php echo $total['jml_15'];?></td>
                    <td rowspan="2"><?php echo $total['jml_16'];?></td>
                    <td rowspan="2"><?php echo $total['jml_17'];?></td>
                    <td rowspan="2"><?php echo $total['jml_18'];?></td>
                    <td rowspan="2"><?php echo $total['jml_19'];?></td>
                    <td rowspan="2"><?php echo $total['jml_20'];?></td>
                    <td rowspan="2"><?php echo $total['jml_21'];?></td>
                    <td rowspan="2"><?php echo $total['jml_22'];?></td>
                    <td rowspan="2"><?php echo $total['jml_23'];?></td>
                    <td rowspan="2"><?php echo $total['jml_24'];?></td>
                    <td rowspan="2"><?php echo $total['jml_1'];?></td>
                    <td rowspan="2"><?php echo $total['jml_2'];?></td>
                    <td rowspan="2"><?php echo $total['jml_3'];?></td>
                    <td rowspan="2"><?php echo $total['jml_4'];?></td>
                    <td rowspan="2"><?php echo $total['jml_5'];?></td>
                    <td rowspan="2"><?php echo $total['jml_6'];?></td>
                    <td rowspan="2"><?php echo $t?></td>
            </tr>
            <?php }?>
            <?php
                $m=mysqli_query($conn, "SELECT MAX(tujuh) AS jml_7, MAX(delapan) AS jml_8, MAX(sembilan) AS jml_9, MAX(sepuluh) AS jml_10, MAX(sebelas) AS jml_11, MAX(duabelas) AS jml_12, MAX(tigabelas) AS jml_13
                , MAX(empatbelas) AS jml_14, MAX(limabelas) AS jml_15, MAX(enambelas) AS jml_16, MAX(tujuhbelas) AS jml_17, MAX(delapanbelas) AS jml_18, MAX(sembilanbelas) AS jml_19, MAX(duapuluh) AS jml_20, MAX(duasatu) AS jml_21, SUM(duadua) AS jml_22
                , MAX(duatiga) AS jml_23, MAX(duaempat) AS jml_24, MAX(satu) AS jml_1, MAX(dua) AS jml_2, MAX(tiga) AS jml_3, MAX(empat) AS jml_4, MAX(lima) AS jml_5, MAX(enam) AS jml_6 FROM data_hujan");
                while($maks = mysqli_fetch_array($m)){
            ?>
            <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
            </tr>
                
            <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>Max</td>
                    <td><?php echo $maks['jml_7'];?></td>
                    <td><?php echo $maks['jml_8'];?></td>
                    <td><?php echo $maks['jml_9'];?></td>
                    <td><?php echo $maks['jml_10'];?></td>
                    <td><?php echo $maks['jml_11'];?></td>
                    <td><?php echo $maks['jml_12'];?></td>
                    <td><?php echo $maks['jml_13'];?></td>
                    <td><?php echo $maks['jml_14'];?></td>
                    <td><?php echo $maks['jml_15'];?></td>
                    <td><?php echo $maks['jml_16'];?></td>
                    <td><?php echo $maks['jml_17'];?></td>
                    <td><?php echo $maks['jml_18'];?></td>
                    <td><?php echo $maks['jml_19'];?></td>
                    <td><?php echo $maks['jml_20'];?></td>
                    <td><?php echo $maks['jml_21'];?></td>
                    <td><?php echo $maks['jml_22'];?></td>
                    <td><?php echo $maks['jml_23'];?></td>
                    <td><?php echo $maks['jml_24'];?></td>
                    <td><?php echo $maks['jml_1'];?></td>
                    <td><?php echo $maks['jml_2'];?></td>
                    <td><?php echo $maks['jml_3'];?></td>
                    <td><?php echo $maks['jml_4'];?></td>
                    <td><?php echo $maks['jml_5'];?></td>
                    <td><?php echo $maks['jml_6'];?></td>
                    <td></td>
            </tr>
            <?php } ?>
            <tr>
                    <td colspan="36">Jam Pemeriksaan hujan model Obs (Waktu setempat)
                    <br /> 
                    Jam : 07.00 WIB
                    </td>
            </tr>
		</table>
 
	</center>

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