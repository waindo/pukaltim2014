<?php 
/* Koneksi ke database */

$host = "192.168.0.15";
$user = "webpuk";
$pass = "upk4lt1m";
$namadb = "dbtkaltim";

$koneksi = mysql_connect($host,$user,$pass);
if (!$koneksi){
	echo "Koneksi ke database gagal";
	           };

/* Memilih Database */
$select_db=mysql_select_db($namadb,$koneksi);
if (!$select_db){
	echo "Memilih Database gagal";
                };
	 
?>
