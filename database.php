<?php
//konfigurasi mysql dengan php

$url = parse_url(getenv("CLEAR_DATABASE_URL"));

$host		= $url["host"];
$username	= $url["user"];
$password	= $url["pass"];
$dbname		= substr($url["path"], 1);

$link = mysqli_connect($host, $username, $password, $dbname);

// Check Connection
/* if ($link->connect_error) {
	die("Connection failed: " . $link->connect_error);
}
else {
	echo "Connected successfully";
} */
?>