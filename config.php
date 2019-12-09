<?php

$host		= "us-cdbr-iron-east-05.cleardb.net";
$username	= "b02a5dfa8b82eb";
$password	= "6e3b2186";
$dbname		= "heroku_36e15a00f7508f8";

$link = mysqli_connect($host, $username, $password, $dbname);

//$link = mysqli_connect($host, $username, $password, $dbname);

// Check Connection
/* if ($link->connect_error) {
	die("Connection failed: " . $link->connect_error);
}
else {
	echo "Connected successfully";
} */
?>