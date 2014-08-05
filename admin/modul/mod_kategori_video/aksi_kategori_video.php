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

// Input kategori_video
if ($module=='kategori_video' AND $act=='input'){
  $kategori_video_seo = seo_title($_POST['nama_kategori_video']);
  mysql_query("INSERT INTO kategori_video(nama_kategori_video,kategori_video_seo) VALUES('$_POST[nama_kategori_video]','$kategori_video_seo')");
  header('location:../../media.php?module='.$module);
}

// Update kategori_video
elseif ($module=='kategori_video' AND $act=='update'){
  $kategori_video_seo = seo_title($_POST['nama_kategori_video']);
  mysql_query("UPDATE kategori_video SET nama_kategori_video='$_POST[nama_kategori_video]', kategori_video_seo='$kategori_video_seo', aktif='$_POST[aktif]' 
               WHERE id_kategori_video = '$_POST[id]'");
  header('location:../../media.php?module='.$module);
}
}
?>
