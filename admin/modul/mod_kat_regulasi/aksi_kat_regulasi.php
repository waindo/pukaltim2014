<?php
session_start();
 if (empty($_SESSION['username']) AND empty($_SESSION['passuser'])){
  echo "<link href='style.css' rel='stylesheet' type='text/css'>
 <center>Untuk mengakses modul, Anda harus login <br>";
  echo "<a href=../../index.php><b>LOGIN</b></a></center>";
}
else{
include "../../../config/koneksi.php";
include "../../../config/fungsi_seo.php";

$module=$_GET[module];
$act=$_GET[act];

// Input kat_regulasi
if ($module=='kat_regulasi' AND $act=='input'){
  $kat_regulasi_seo = seo_title($_POST['judul']);
  mysql_query("INSERT INTO kat_regulasi(judul_kat_regulasi,judul_kat_regulasi_seo) VALUES('$_POST[judul]','$kat_regulasi_seo')");
  header('location:../../media.php?module='.$module);
}

// Update kat_regulasi
elseif ($module=='kat_regulasi' AND $act=='update'){
  $kat_regulasi_seo = seo_title($_POST['judul']);
  mysql_query("UPDATE kat_regulasi SET judul_kat_regulasi='$_POST[judul]', judul_kat_regulasi_seo='$kat_regulasi_seo', aktif='$_POST[aktif]' 
               WHERE id_kat_regulasi = '$_POST[id]'");
  header('location:../../media.php?module='.$module);
}
}
?>
