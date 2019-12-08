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
		  <li><a class="active">Harga</a></li>
		</ul>

		<h3>Apakah ada harga terentu yang diinginkan?</h3>
		<p>Pilih kelas harga dari obat yang Anda harapkan.</p>

		<form action="result.php" method="POST">
            <select name="daftar_penyakit">
                <option value="semua">Semua</option>
                <option value="murah">Murah</option>
                <option value="menengah">Menengah</option>
            </select>

            <input type="submit" name="submit" value="Submit">

        </form>
	</main>
</body>
</html>