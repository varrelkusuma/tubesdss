<?php

session_start();
require("database.php");
$query = "SELECT * FROM `hospital`";
$connect = new mysqli($host, $username, $password, $dbname);

$result = mysqli_query($link, $query);
$harga = $_POST['Harga'];
$_SESSION["harga"] = $harga;


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
		  <li><a>Penyakit</a></li>
		  <li><a>Kontraindikasi</a></li>
		  <li><a>Harga</a></li>
		  <li><a class="active">Rumah Sakit</a></li>
		</ul>

		<h3>Apakah ada preferensi rumah sakit yang diinginkan?</h3>
		<p>Pilih nama rumah sakit yang Anda harapkan.</p>

		<form action="result.php" method="POST">

        <select name="RumahSakit">
			
            <?php
            
            $rumahsakit = "SELECT * FROM `hospital`";
            $queryRS = mysqli_query($link, $rumahsakit);
            
            while($row = mysqli_fetch_array($queryRS)):;?>

                <option value="<?php echo $row[1];?>"><?php echo $row[1];?></option>
            <?php endwhile;?>
        
        </select>

            <input type="submit" name="submit" value="Submit">

        </form>
	</main>
</body>
</html>