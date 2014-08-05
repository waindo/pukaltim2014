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

// Input Progres Kegiatan
if ($module=='progressda' AND $act=='input'){
	$id = "$_POST[id]";
  mysql_query("INSERT INTO progres_kegiatan_sda(id_kegiatan,bulan,rencana,realisasi,deviasi,keuangan) 
  			   VALUES('$_POST[id]','$_POST[bulan]','$_POST[rencana]','$_POST[realisasi]','$_POST[deviasi]','$_POST[keuangan]')");
  header('location:../../media.php?module=progressda&id='.$id);
}

// Update Progres_kegiatan
elseif ($module=='progressda' AND $act=='update'){
  $id="$_POST[kegiatan]";
  mysql_query("UPDATE progres_kegiatan SET rencana='$_POST[rencana]', realisasi='$_POST[realiasi]', deviasi='$_POST[deviasi]', keuangan='$_POST[keuangan]' 
               WHERE id_progres = '$_POST[id]'");
  header('location:../../media.php?module=progressda&id='.$id);
}
// Update Progres_kegiatan
elseif ($module=='progressda' AND $act=='hapus'){
  $id="$_GET[kegiatan]";
  mysql_query("DELETE FROM progres_kegiatan_sda
               WHERE id_progres = '$_GET[id]'");
  header('location:../../media.php?module=progressda&id='.$id);
}
}
?>
