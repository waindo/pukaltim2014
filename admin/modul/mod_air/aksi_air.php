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

// Input kategori
if ($module=='air' AND $act=='input'){
	mysql_query("INSERT INTO keb_air (waktu,ws,jenis,jumlah) VALUES(STR_TO_DATE('$_POST[waktu]','%Y %M'),'$_POST[WS]','$_POST[jenis]','$_POST[jumlah]')");
	header('location:../../media.php?module='.$module);
}// Input debit
if ($module=='air' AND $act=='inputdebit'){
	mysql_query("INSERT INTO debit_air (waktu,ws,jumlah) VALUES(STR_TO_DATE('$_POST[waktu]','%Y %M'),'$_POST[WS]','$_POST[jumlah]')");
	header('location:../../media.php?module='.$module);
}
//hapus data
if ($module=='air' AND $act=='hapus'){
  mysql_query("DELETE FROM keb_air WHERE id ='$_GET[id]'");
  header('location:../../media.php?module='.$module);
}
//hapus debit
if ($module=='air' AND $act=='hapusdebit'){
  mysql_query("DELETE FROM debit_air WHERE id ='$_GET[id]'");
  header('location:../../media.php?module='.$module);
}

// Update kategori
elseif ($module=='air' AND $act=='update'){
  $kategori_seo = seo_title($_POST['jumlah']);
  mysql_query("UPDATE keb_air SET jumlah='$_POST[jumlah]'
               WHERE id = '$_POST[id]'");
  header('location:../../media.php?module='.$module);
}
// Update debit
elseif ($module=='air' AND $act=='updatedebit'){
  $kategori_seo = seo_title($_POST['jumlah']);
  mysql_query("UPDATE debit_air SET jumlah='$_POST[jumlah]'
               WHERE id = '$_POST[id]'");
  header('location:../../media.php?module='.$module);
}
}
?>
