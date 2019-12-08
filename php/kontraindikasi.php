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
		  <li><a class="active">Kontraindikasi</a></li>
		  <li><a>Harga</a></li>
		</ul>

		<h3>Apakah ada kondisi lain dari pasien kamu yang perlu dipertimbangkan?</h3>
		<p>Tanyakan kepada pasienmu terkait kondisi-kondisi di bawah ini.</p>

		<form action="harga.php" method="POST">
            <select name="daftar_penyakit">
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
            </select>

            <input type="submit" name="submit" value="Submit">

        </form>
	</main>
</body>
</html>