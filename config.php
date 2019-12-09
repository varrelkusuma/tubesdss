<?php
//konfigurasi mysql dengan php
$host		= "localhost";
$username	= "root";
$password	= "";
$dbname		= "dss-db";
$link = mysqli_connect($host, $username, $password, $dbname);

// Check Connection
/* if ($link->connect_error) {
	die("Connection failed: " . $link->connect_error);
}
else {
	echo "Connected successfully";
} */
?>