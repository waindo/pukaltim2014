<?php

include "config/koneksi.php";
date_default_timezone_set('Asia/Jakarta');
$tgl_sekarang = date ('y-m-d');
$jam_sekarang = date ('H:i:s');

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