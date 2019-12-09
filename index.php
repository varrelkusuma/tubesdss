<?php

session_start();
require("config.php");
$query = "SELECT * FROM `disease`";
$connect = new mysqli($host, $username, $password, $dbname);

$result = mysqli_query($link, $query);

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
		  <li><a class="active">Penyakit</a></li>
		  <li><a>Kontraindikasi</a></li>
		  <li><a>Harga</a></li>
		</ul>

		<h3>Penyakit apa yang diderita pasienmu?</h3>
		<p>Pilih penyakit yang tersedia di bawah ini.</p>

		<form action="kontraindikasi.php" method="POST">
            <!-- <select name="daftar_penyakit">
                <option value="alergi rinitis">Alergi Rinitis</option>
                <option value="asthma">Asthma</option>
                <option value="asthma akut">Asthma Akut</option>
                <option value="kanker">Kanker</option>
                <option value="kolesterol">Kolesterol</option>
                <option value="nyeri">Nyeri</option>
                <option value="eczema">Eczema</option>
                <option value="eczema mulut">Eczema Mulut</option>
                <option value="eczema tenggorokan">Eczema Tenggorokan</option>
                <option value="diabetes">Diabetes</option>
            </select> -->
			<select name="Disease">
			
				<?php 
				while($row = mysqli_fetch_array($result)):;?>
					<option value="<?php echo $row[1];?>"><?php echo $row[1];?></option>
				<?php endwhile;?>
			
			</select>

            <input type="submit" name="disease" value="Submit">

        </form>
	</main>
</body>
</html>