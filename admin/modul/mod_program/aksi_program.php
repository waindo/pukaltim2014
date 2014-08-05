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

// Input Program
if ($module=='programsda' AND $act=='input'){
  mysql_query("INSERT INTO program_kegiatan(kategori,nama_program,tahun,aktif) 
  				VALUES('$_POST[kategori]','$_POST[nama_program]','$_POST[tahun]','$_POST[aktif]')");
  header('location:../../media.php?module='.$module);
}

// Update Program
elseif ($module=='programsda' AND $act=='update'){
  mysql_query("UPDATE program_kegiatan SET kategori='$_POST[kategori]', nama_program='$_POST[nama_program]', tahun='$_POST[tahun]', aktif='$_POST[aktif]' 
               WHERE id_program = '$_POST[id]'");
  header('location:../../media.php?module='.$module);
}
}
?>
