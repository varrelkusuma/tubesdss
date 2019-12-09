<?php

$active_group = 'default';
$query_builder = TRUE;

//konfigurasi mysql dengan php
$db['default'] = array (
	'dsn' = '',
	'hostname' => 'us-cdbr-iron-east-05.cleardb.net',
	'username' => 'b02a5dfa8b82eb',
	'password' => '6e3b2186',
	'database' => 'heroku_36e15a00f7508f8',
	'dbdriver' => 'mysqli',
	'dbprefix' => '',
	'pconnect' => FALSE,
	'db_debug' => (ENVIRONMENT !== 'production'),
	'cache_on' => FALSE,
	'cachedir' => '',
	'char_set' => 'utf8',
	'dbcollat' => 'utf8_general_ci',
	'swap_pre' => '',
	'encrypt' => FALSE,
	'compress' => FALSE,
	'stricton' => FALSE,
	'failover' => array(),
	'save_queries' => TRUE
);

//$link = mysqli_connect($host, $username, $password, $dbname);

// Check Connection
/* if ($link->connect_error) {
	die("Connection failed: " . $link->connect_error);
}
else {
	echo "Connected successfully";
} */
?>