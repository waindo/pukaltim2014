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

// Input link
if ($module=='link' AND $act=='input'){
  mysql_query("INSERT INTO link(nama_link,url_link,id_kat_link) VALUES('$_POST[nama_link]','$_POST[url]','$_POST[kategori]')");
  header('location:../../media.php?module='.$module);
}

// Update link
elseif ($module=='link' AND $act=='update'){
  mysql_query("UPDATE link SET nama_link='$_POST[nama_link]', 
  							   url_link='$_POST[url]',
							   id_kat_link='$_POST[kategori]'   
               WHERE id_link = '$_POST[id]'");
  header('location:../../media.php?module='.$module);
}
}
?>
