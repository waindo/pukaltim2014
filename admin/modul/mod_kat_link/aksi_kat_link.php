<?php
session_start();
 if (empty($_SESSION['username']) AND empty($_SESSION['passuser'])){
  echo "<link href='style.css' rel='stylesheet' type='text/css'>
 <center>Untuk mengakses modul, Anda harus login <br>";
  echo "<a href=../../index.php><b>LOGIN</b></a></center>";
}
else{
include "../../../config/koneksi.php";

$module=$_GET[module];
$act=$_GET[act];

// Input kat_link
if ($module=='kat_link' AND $act=='input'){
  mysql_query("INSERT INTO kat_link(nama_kat_link) VALUES('$_POST[nama_kat_link]')");
  header('location:../../media.php?module='.$module);
}

// Update kat_link
elseif ($module=='kat_link' AND $act=='update'){
  mysql_query("UPDATE kat_link SET nama_kat_link='$_POST[nama_kat_link]', aktif='$_POST[aktif]' 
               WHERE id_kat_link = '$_POST[id]'");
  header('location:../../media.php?module='.$module);
}
}
?>
