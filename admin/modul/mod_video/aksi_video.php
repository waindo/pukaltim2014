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
$module=$_GET['module'];
$act=$_GET['act'];

// Judul Seo
$judul      = seo_title($_POST['judul']);

// Hapus video
if ($module=='video' AND $act=='hapus'){
  mysql_query("DELETE FROM video WHERE id_video='$_GET[id]'");
  header('location:../../media.php?module='.$module);
}

// Input video
elseif ($module=='video' AND $act=='input'){
    mysql_query("INSERT INTO video(judul,id_kategori_video,
								   judul_seo,
                                    url) 
                            VALUES('$_POST[judul]','$_POST[kategori]',
							       '$judul',
                                   '$_POST[url]')");
  header('location:../../media.php?module='.$module);
}

// Update video
elseif ($module=='video' AND $act=='update'){	
mysql_query("UPDATE video SET judul     = '$_POST[judul]',id_kategori_video     = '$_POST[kategori]',
								  judul_seo = '$judul',
                                  url       = '$_POST[url]'
                             WHERE id_video = '$_POST[id]'");
header('location:../../media.php?module='.$module);
}
}
?>
