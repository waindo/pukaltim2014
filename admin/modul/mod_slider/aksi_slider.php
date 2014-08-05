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
include "../../../config/fungsi_seo.php";
include "../../../config/library.php";

$module=$_GET[module];
$act=$_GET[act];

// Files
$lokasi_file = $_FILES['fupload']['tmp_name'];
$tipe_file      = $_FILES['fupload']['type'];
$nama_file   = $_FILES['fupload']['name'];

$judul_seo = seo_title($_POST['judul']);

// Input slider
if ($module=='slider' AND $act=='input'){
  if (!empty($lokasi_file)){
  UploadSlider($nama_file);	  
  mysql_query("INSERT INTO slider(tgl_slider,judul,deskripsi,link,gambar) 
  							VALUES('$tgl_sekarang','$_POST[judul]','$_POST[isi_halaman]','$judul_seo','$nama_file')");
							
  header('location:../../media.php?module='.$module);
  }
  else{
  mysql_query("INSERT INTO slider(tgl_slider,judul,deskripsi,link) 
  							VALUES('$tgl_sekarang','$_POST[judul]','$_POST[isi_halaman]','$judul_seo')");
							
  header('location:../../media.php?module='.$module);
  }
}

// Update slider
elseif ($module=='slider' AND $act=='update'){
  if (!empty($lokasi_file)){
  UploadSlider($nama_file);	  	
  mysql_query("UPDATE slider SET judul='$_POST[judul]', 
  								 deskripsi='$_POST[isi_halaman]', 
								 link='$_POST[link]',
								 gambar='$nama_file', 
								 aktif='$_POST[aktif]' 
               WHERE id_slider = '$_POST[id]'");
			   
  header('location:../../media.php?module='.$module);
  }
  else{
  mysql_query("UPDATE slider SET judul='$_POST[judul]',
  								 deskripsi='$_POST[isi_halaman]', 
  								 link='$judul_seo',
								 aktif='$_POST[aktif]' 
               WHERE id_slider = '$_POST[id]'");
			   
  header('location:../../media.php?module='.$module);	  
  }
}
}
?>
