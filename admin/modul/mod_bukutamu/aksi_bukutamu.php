<?php
session_start();
 if (empty($_SESSION['username']) AND empty($_SESSION['passuser'])){
  echo "<link href='style.css' rel='stylesheet' type='text/css'>
 <center>Untuk mengakses modul, Anda harus login <br>";
  echo "<a href=../../index.php><b>LOGIN</b></a></center>";
}
else{
include "../../../config/koneksi.php";

$module=$_GET['module'];
$act=$_GET['act'];

// Hapus bukutamu
if ($module=='bukutamu' AND $act=='hapus'){
  mysql_query("DELETE FROM bukutamu WHERE id_bukutamu='$_GET[id]'");
  header('location:../../media.php?module='.$module);
}

// Publish bukutamu
elseif ($module=='bukutamu' AND $act=='publis'){
$query1=mysql_query("UPDATE bukutamu SET publis='Y' WHERE id_bukutamu='$_GET[id]'");
 header('location:../../media.php?module='.$module);
}

// Unpublish bukutamu
elseif ($module=='bukutamu' AND $act=='unpublis'){
$query1=mysql_query("UPDATE bukutamu SET publis='N' WHERE id_bukutamu='$_GET[id]'");
 header('location:../../media.php?module='.$module);
}

}
?>
