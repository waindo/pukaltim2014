<?php
session_start();
if (empty($_SESSION['username']) AND empty($_SESSION['passuser'])){
  echo "<link href='style.css' rel='stylesheet' type='text/css'>
 <center>Untuk mengakses modul, Anda harus login <br>";
  echo "<a href=../../index.php><b>LOGIN</b></a></center>";
}
else{
include "../../../config/koneksi.php";
include "../../../config/fungsi_thumb.php";

$module=$_GET['module'];
$act=$_GET['act'];

if ($module=='background' AND $act=='update'){
  $lokasi_file = $_FILES['fupload']['tmp_name'];
  $tipe_file      = $_FILES['fupload']['type'];
  $nama_file   = $_FILES['fupload']['name'];
  if (!empty($lokasi_file)){
  // Hapus background Lama
  $data=mysql_fetch_array(mysql_query("SELECT gambar_background FROM background WHERE id_background='1'"));
  unlink("../../../media/assets/background/$data[gambar_background]");   
  UploadBackground($nama_file);
  mysql_query("UPDATE background SET gambar_background    = '$nama_file'   
                             WHERE id_background = '$_POST[id]'");
  header('location:../../media.php?module='.$module);
}
}
}
?>
