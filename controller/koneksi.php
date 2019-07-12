<?php

$server = 'localhost';
$user   = 'root';
$pass   = '`';
$dbName = 'vsga';

$conn = mysqli_connect($server, $user, $pass, $dbName);

if(!$conn)
	die('Koneksi gagal : ' . mysql_connect_error());


while($row = getData($conn, "SELECT * FROM peserta;")->fetch_assoc())
	var_dump($row);


function getData($con, $query) {
	return $con->query($query);
}
