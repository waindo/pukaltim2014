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

// Hapus 
if ($module=='lapor' AND $act=='hapus'){
  mysql_query("DELETE FROM lapol WHERE lapolident='$_GET[id]'");
  header('location:../../media.php?module='.$module);
}

}
?>