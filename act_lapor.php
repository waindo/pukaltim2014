<?php


mysql_connect("localhost","root","");
mysql_select_db("sda_db");
include "config/library.php";

$lapolnames=$_POST['nama'];
$lapoladdrs=$_POST['alamat'];
$lapoljenkj=$_POST['jk'];
$lapolktair=$_POST['ktair'];
$lapolcuaca=$_POST['cuaca'];
$lapollalin=$_POST['lalin'];
$lapollocat=$_POST['lokasi'];
$lapoldescr=$_POST['des'];

$sql = "INSERT INTO lapol (lapolnames,lapoladdrs,lapoltimes,lapoljenkj,lapolktair,lapolcuaca,lapollalin,lapollocat,lapoldescr) 
		VALUES ('$lapolnames','$lapoladdrs','$tgl_sekarang''$jam_sekarang','$lapoljenkj','$lapolktair','$lapolcuaca','$lapollalin','$lapollocat','$lapoldescr')";
mysql_query($sql);


 echo "data berhasil disimpan ";
 echo "<br>";
 echo "<a href=lapor.html>back</a>";
?>