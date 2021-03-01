<html>
  <head>
    <meta charset="utf-8">
    <title>Demo Grafik Garis</title>
    <script src="chartjs/Chart.js"></script>
    <style type="text/css">
            .container {
                width: 50%;
                margin: 15px auto;
            }
    </style>
  </head>
  <body>

  <form method="POST" action="" class="form-inline mt-3">
        <label for="date1">Tanggal</label>
        <input type="date" name="date" id="date" class="form-control mr-2">
        <button type="submit" name="submit" class="btn btn-primary">Tampilkan</button>
    </form>

    <?php
    echo '<center><b>Grafik Hujan Tanggal ', date  ( 'd F Y' , strtotime ($_POST['date'])), '</b></center>';
        $query = "SELECT * FROM data_hujan WHERE tanggal='".$_POST['date']."'";
    ?>

    <div class="container">
            <canvas id="hujan" width="200" height="80"></canvas>
    </div>
    <div class="container">
            <canvas id="hujanperjam" width="200" height="80"></canvas>
    </div>

    <?php include 'koneksi.php';?>

    <?php

    if (isset($_POST['submit'])) {
        $date = $_POST['date'];
            $sql = mysqli_query($conn, "SELECT lima_mnt, sepuluh_mnt, limabelas_mnt, tigapuluh_mnt, empatlima_mnt, enampuluh_mnt, seratusduapuluh, tiga_jm, enam_jm, duabelas_jm FROM data_hujan WHERE tanggal='$date'");
            $sql2 = mysqli_query($conn, "SELECT tujuh, delapan, sembilan, sepuluh, sebelas, duabelas, tigabelas, empatbelas, limabelas, enambelas, tujuhbelas, delapanbelas, sembilanbelas, duapuluh, duasatu, duadua, duatiga, duaempat, satu, dua, tiga, empat, lima, enam FROM data_hujan WHERE tanggal='$date'");
        }
     ?>

      	<script  type="text/javascript">

    	  var ctx = document.getElementById("hujan").getContext("2d");
    	  var data = {
    	            labels: ["5 Menit","10 Menit","15 Menit","30 Menit","45 Menit","60 Menit","120 Menit","3 Jam","6 Jam","12 Jam"],
    	            datasets: [
    	            {
    	              label: "Data Hujan",
                    fill: false,
                    lineTension: 0.1,
                    backgroundColor: "rgba(59, 100, 222, 1)",
                    borderColor: "rgba(59, 100, 222, 1)",
                    pointHoverBackgroundColor: "rgba(59, 100, 222, 1)",
						        pointHoverBorderColor: "rgba(59, 100, 222, 1)",
    	              data: [<?php while ($p = mysqli_fetch_array($sql)) { echo '"' . $p['lima_mnt'] . '","' . $p['sepuluh_mnt'] . '","' . $p['limabelas_mnt'] . '","' . $p['tigapuluh_mnt'] . '"
                            ,"' . $p['empatlima_mnt'] . '","' . $p['enampuluh_mnt'] . '", "' . $p['seratusduapuluh'] . '", "' . $p['tiga_jm'] . '", "' . $p['enam_jm'] . '", "' . $p['duabelas_jm'] . '", ';}?>]
    	            },
    	            ]
    	            };

    	  var myBarChart = new Chart(ctx, {
    	            type: 'line',
    	            data: data,
    	            options: {
    	            barValueSpacing: 20,
    	            scales: {
    	              yAxes: [{
    	                  ticks: {
    	                      min: 0,
    	                  }
    	              }],
    	              xAxes: [{
    	                          gridLines: {
    	                              color: "rgba(0, 0, 0, 0)",
    	                          }
    	                      }]
    	              }
    	          }
    	        });

    	</script>
        <br />
        <script  type="text/javascript">

        var ctx = document.getElementById("hujanperjam").getContext("2d");
        var data = {
                labels: ["07-08","08-09","09-10","10-11","11-12","12-13","13-14","14-15","15-16","16-17","17-18","18-20","20-21","21-22","22-23","23-24","24-01","01-02","02-03","03-04","04-05","05-06","06-07"],
                datasets: [
                {
                    label: "Data Hujan Perjam",
                fill: false,
                lineTension: 0.1,
                backgroundColor: "rgba(249, 19, 147)",
                borderColor: "rgba(249, 19, 147)",
                pointHoverBackgroundColor: "rgba(249, 19, 147)",
                            pointHoverBorderColor: "rgba(249, 19, 147)",
                    data: [<?php while ($q = mysqli_fetch_array($sql2)) { echo '"' . $q['tujuh'] . '","' . $q['delapan'] . '","' . $q['sembilan'] . '","' . $q['sepuluh'] . '"
                        ,"' . $q['sebelas'] . '","' . $q['duabelas'] . '", "' . $q['tigabelas'] . '", "' . $q['empatbelas'] . '", "' . $q['limabelas'] . '", "' . $q['enambelas'] . '"
                        ,"' . $q['tujuhbelas'] . '","' . $q['delapanbelas'] . '","' . $q['sembilanbelas'] . '","' . $q['duapuluh'] . '","' . $q['duasatu'] . '","' . $q['duadua'] . '"
                        ,"' . $q['duatiga'] . '","' . $q['duaempat'] . '","' . $q['satu'] . '","' . $q['dua'] . '","' . $q['tiga'] . '","' . $q['empat'] . '","' . $q['lima'] . '","' . $q['enam'] . '",';}?>]
                },
                ]
                };

        var myBarChart = new Chart(ctx, {
                type: 'line',
                data: data,
                options: {
                barValueSpacing: 20,
                scales: {
                    yAxes: [{
                        ticks: {
                            min: 0,
                        }
                    }],
                    xAxes: [{
                                gridLines: {
                                    color: "rgba(0, 0, 0, 0)",
                                }
                            }]
                    }
                }
            });

        </script>

  </body>
</html>