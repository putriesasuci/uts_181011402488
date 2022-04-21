<?php
include "koneksi.php";
?>
 
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
  <title>Data Pemantauan Covid19</title>
   <link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
 
<h1>Data Pemantauan Covid19 Wilayah</h1>
 
<p>Menampilkan isi database Covid19 </p>
 
<a href="forminput.php">Input Data Covid19 Baru</a><br>
 
 
<table class="table table-bordered table-striped table-hover">
 
<tr>
  <th>NIM</th>
  <th>Nama Operator</th>
  <th>Nama Wilayah</th>
  <th>Jumlah Positif</th>
  <th>Jumlah Dirawat</th>
  <th>Jumlah Sembuh</th>
  <th>Jumlah Meninggal</th>
</tr>
 
<?php
$query ="select * from datacovid";
$hasil = mysqli_query($koneksi, $query);


?>
  </table>
  </body>
</html>