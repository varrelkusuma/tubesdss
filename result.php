<?php

session_start();
require("config.php");
$query = "SELECT * FROM `medicine`";
$connect = new mysqli($host, $username, $password, $dbname);

$result = mysqli_query($link, $query);
$penyakit = $_SESSION["disease"];
$kontraindikasi = $_SESSION["cure"];
$harga = $_POST['Harga']

?>

<!DOCTYPE html>
<html>
<head>
	<title>Drugs Recommendation</title>
	<link href="https://fonts.googleapis.com/css?family=Righteous|Slabo+27px&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<main>
		<div>
		  <img src="Logo.png" class="logo">
		</div>

		<p class="description">Hai, dok! Sistem ini akan membantu Anda dalam menentukan resep obat pasien Anda berdasarkan penyakit, kontraindikasi, dan harga obat. Pastikan hasil diagnosa Anda benar ya!</p>

		<ul>
		  <li class="result"><a>Rekomendasi Terbaik Kami</a></li>
		</ul>

		<h2 style="text-align: center;">Silakan pilih salah satu dari hasil rekomendasi kami!</h2>

		<!--<table>
		  <tr>
		    <th>Nama Obat</th>
		    <th>Deskripsi</th>
		  </tr>
		  <tr>
		    <td>Obat 1</td>
		    <td>Deskripsi 1</td>
		  </tr>
		  <tr>
		    <td>Obat 2</td>
		    <td>Deskripsi 2</td>
		  </tr>
		</table>-->

		<table>
			
			<?php
			
			$medicineID = "SELECT DISTINCT
								m.name,
								m.price,
								m.description
							FROM medicine m
							INNER JOIN cure c
								ON c.medicineID = m.medicineID
							WHERE c.diseaseName = '$penyakit' AND c.kondisi = '$kontraindikasi'";
			//$listobat = "SELECT * FROM `medicine` WHERE diseaseName = '$disease'";
			$queryObat = mysqli_query($link, $medicineID);
			?>

			<tr>
		    	<th>Nama Obat</th>
				<th>Harga</th>
		    	<th>Deskripsi</th>
		  	</tr>

			<?php
				while($row = mysqli_fetch_array($queryObat)):;?>
				<tr>
					<td><?= $row['name'];?></td>
					<td><?= $row['price'];?></td>
					<td><?= $row['description'];?></td>
				<tr>
			<?php endwhile;?>

		</table>
	</main>
</body>
</html>