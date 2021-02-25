<!DOCTYPE html>
<html>
<head>
	<title>Penakar Hujan Hellman</title>
	<link rel="stylesheet" type="text/css" href="style.css">

	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<link rel="stylesheet" href="/resources/demos/style.css">
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

  <script>
  $( function() {
    $( "#date" ).datepicker({
      dateFormat: "yy-mm-dd"
    });
  } );
  </script>
</head>

<body>
	<div class="judul">		
		<h1>Penakar Hujan Hellman</h1>
	</div>
	
	<br/>
  	<a href="index.php">Home</a>
	<a href="data-menit.php">Lihat Semua Data</a>
 
	<br/>
	<h3>Input data baru</h3>
	<form action="input-menit.php" method="post">

		<table>
  			<tr>
			  	<td><label >Tanggal</label></td>
  				<td><input type="text" id="date" name="tanggal"></td>
			</tr>
			<tr>
				<td>5 Menit</td>
				<td><input type="decimal" name="lima"></td>					
			</tr>
			<tr>
				<td>10 Menit</td>
				<td><input type="decimal" name="sepuluh"></td>					
			</tr>	
			<tr>
				<td>15 Menit</td>
				<td><input type="decimal" name="limabelas"></td>					
			</tr>	
			<tr>
				<td>30 Menit</td>
				<td><input type="decimal" name="tigapuluh"></td>					
			</tr>
			<tr>
				<td>45 Menit</td>
				<td><input type="decimal" name="empatlima"></td>					
			</tr>
			<tr>
				<td>60 Menit</td>
				<td><input type="decimal" name="enampuluh"></td>					
			</tr>
			<tr>
				<td>120 Menit</td>
				<td><input type="decimal" name="seratusduapuluh"></td>					
			</tr>
			<tr>
				<td>3 Jam</td>
				<td><input type="decimal" name="tigajam"></td>					
			</tr>
			<tr>
				<td>6 Jam</td>
				<td><input type="decimal" name="enamjam"></td>					
			</tr><tr>
				<td>12 Jam</td>
				<td><input type="decimal" name="duabelasjam"></td>					
			</tr>	
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>					
			</tr>				
		</table>
	</form>
</body>
</html>