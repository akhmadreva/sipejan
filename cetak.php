<?php
//Jika download plugin mpdf tanpa composer (versi lama)
//define('_MPDF_PATH','mpdf/');
//include(_MPDF_PATH . "mpdf.php");
//$mpdf=new mPDF('utf-8', 'A4', 11, 'Georgia');

//Jika download plugin mpdf dengan composer (versi baru)
require_once __DIR__ . '/vendor/autoload.php';
$mpdf = new \Mpdf\Mpdf(['orientation' => 'L']);

//Menggabungkan dengan file koneksi yang telah kita buat
include 'koneksi_n.php';

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
		<h2>Cara Ekspor Data/Laporan ke PDF Dengan Mudah Menggunakan Mpdf pada PHP</h2>

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
	    		</tr>
	    	</thead>
	    	<tbody>
            <?php
			        $no = 1;
			        $query = "SELECT * FROM data_hujan ORDER BY tanggal ASC";
			        $dewan1 = $db1->prepare($query);
			        $dewan1->execute();
			        $res1 = $dewan1->get_result();
 
			        if ($res1->num_rows > 0) {
				        while ($row = $res1->fetch_assoc()) {
				            $tanggal = $row['tanggal'];
				            $lima_mnt = $row['lima_mnt'];
				            $sepuluh_mnt = $row['sepuluh_mnt'];
				            $limabelas_mnt = $row['limabelas_mnt'];
                            $tigapuluh_mnt = $row['tigapuluh_mnt'];
				            $empatlima_mnt = $row['empatlima_mnt'];
				            $enampuluh_mnt = $row['enampuluh_mnt'];
                            $seratusduapuluh = $row['seratusduapuluh'];
 
							echo "<tr>";
								echo "<td>".$no++."</td>";
								echo "<td>".$tanggal."</td>";
								echo "<td>".$lima_mnt."</td>";
								echo "<td>".$sepuluh_mnt."</td>";
								echo "<td>".$limabelas_mnt."</td>";
                                echo "<td>".$tigapuluh_mnt."</td>";
								echo "<td>".$empatlima_mnt."</td>";
                                echo "<td>".$enampuluh_mnt."</td>";
								echo "<td>".$seratusduapuluh."</td>";
							echo "</tr>";
			    	} } else { 
			    		echo "<tr>";
			    			echo "<td colspan='5'>Tidak ada data ditemukan</td>";
			    		echo "</tr>";
			     	}
			    ?>
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