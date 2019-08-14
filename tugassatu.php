<?php
$nama_a="Siti Mariam";
$umur_a= 16;
$tinggi_badan_a= 165;
$hobby_a="Bernyanyi";

$nama_b="Siti Nur Sakilah";
$umur_b= 16;
$tinggi_badan_b= 155;
$hobby_b="Dengerin Musik";

$nama_c ="Ramadhan Vidho";
$umur_c = 16;
$tinggi_badan_c = 160;
$hobby_c ="Grass Track";

$hasil = ($tinggi_badan_a + $tinggi_badan_b + $tinggi_badan_c) /3;
		?>
<!DOCTYPE html>
<html>
<head>
	<title>Tugas satu</title>
	<style type="text/css">
		*{
			margin: 0px;
			padding: 0px;
		}
		.profile_1{
			width: 200px;
			height: 300px;
			border: 2px solid;
			display: inline-block;
			margin: 20px;
		}
		.isi-kotak{
			margin: 20px;
			text-align: center;		
		}
		.profile_2{
			width: 200px;
			height: 300px;
			border: 2px solid;
			display: inline-block;
			margin: 20px;
		}
		.isi-kotak2{
			margin: 20px;
			text-align: center;		
		}
		.profile_3{
			width: 200px;
			height: 300px;
			border: 2px solid;
			display: inline-block;
			margin: 20px;
		}
		.isi-kotak3{
			margin: 18px;
			text-align: center;
		}
		.card {
			text-align: center;
			margin: 100px;
		}
	</style>
</head>
<body style="background: white;">
	<div class="card">
		<div class="profile_1">
			<div class="isi-kotak">
				
				<img src="mariam.jpg" width="150px" height="150px">
				 <br>
				 <ul>
				 <?php 
				 	echo "<li> Nama : $nama_a </li><br>";
				 	echo "<li>Umur :$umur_a tahun</li><br>";
				 	echo "<li>Tinggi : $tinggi_badan_a</li><br>";
				 	echo "<li>Hobi : $hobby_a </li><br>";
				 	?> 

				 </ul>
			</div>
		</div>
		<div class="profile_2">
			<div class="isi-kotak2">
				
				<img src="sakilah.jpg" width="150px" height="150px">
				 <br>
				 <ul>
				 <?php 
				 	echo "<li> Nama : $nama_b </li><br>";
				 	echo "<li>Umur :$umur_b tahun</li><br>";
				 	echo "<li>Tinggi : $tinggi_badan_b</li><br>";
				 	echo "<li>Hobi : $hobby_b </li><br>";
				 	?> 

				 </ul>
			</div>
		</div>
		<div class="profile_3">
			<div class="isi-kotak3">
				
				<img src="vidho.jpg" width="150px" height="150px">
				 <br>
				 <ul>
				 <?php 
				 	echo "<li> Nama : $nama_c </li><br>";
				 	echo "<li>Umur :$umur_c tahun</li><br>";
				 	echo "<li>Tinggi : $tinggi_badan_c</li><br>";
				 	echo "<li>Hobi : $hobby_c </li><br>";
				 	?> 

				 </ul>
			</div>
		</div>
	</div>
	<div class="footer">
		<?php
				echo "<center> Hasil Tinggi rata rata : $hasil cm </center>";
		  ?>
</body>
</html>
