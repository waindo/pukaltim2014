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
include "../../../config/fungsi_thumb.php";

$module=$_GET['module'];
$act=$_GET['act'];

// Input album
if ($module=='kat_album' AND $act=='input'){
  $lokasi_file = $_FILES['fupload']['tmp_name'];
  $nama_file   = $_FILES['fupload']['name'];
  $tipe_file   = $_FILES['fupload']['type'];
  
  $kat_seo = seo_title($_POST['kat_album']);

  // Apabila ada gambar yang diupload
  if (!empty($lokasi_file)){
    if ($tipe_file != "image/jpeg" AND $tipe_file != "image/pjpeg"){
    echo "<script>window.alert('Upload Gagal, Pastikan File yang di Upload bertipe *.JPG');
        window.location=('../../media.php?module=kat_album')</script>";
    }
    else{
    UploadKatAlbum($nama_file);
    mysql_query("INSERT INTO kat_album(nama_kat,
                                    kat_album_seo,
                                    gambar) 
                            VALUES('$_POST[kat_album]',
                                   '$kat_seo',
                                   '$nama_file')");
								   
  header('location:../../media.php?module='.$module);
  }
  }
  else{
    mysql_query("INSERT INTO kat_album(nama_kat,
                                    kat_album_seo) 
                            VALUES('$_POST[kat_album]',
                                   '$kat_seo')");
			
header('location:../../media.php?module='.$module);
  }
}

// Update album
elseif ($module=='kat_album' AND $act=='update'){
  $lokasi_file = $_FILES['fupload']['tmp_name'];
  $nama_file   = $_FILES['fupload']['name'];
  $tipe_file   = $_FILES['fupload']['type'];
  
  $kat_seo = seo_title($_POST['kat_album']);

  // Apabila gambar tidak diganti
  if (empty($lokasi_file)){
    mysql_query("UPDATE kat_album SET nama_kat		     = '$_POST[kat_album]',
                                  kat_album_seo 	 = '$kat_seo', 
                                  aktif				 ='$_POST[aktif]' 
                             WHERE id_kat_album 	 = '$_POST[id]'");
							 
  header('location:../../media.php?module='.$module);
  }
  else{
    if ($tipe_file != "image/jpeg" AND $tipe_file != "image/pjpeg"){
    echo "<script>window.alert('Upload Gagal, Pastikan File yang di Upload bertipe *.JPG');
        window.location=('../../media.php?module=kat_album')</script>";
    }
    else{
    UploadKatAlbum($nama_file);
    mysql_query("UPDATE kat_album SET nama_kat		     = '$_POST[kat_album]',
                                  kat_album_seo 	 = '$kat_seo',
								  gambar 			 = '$nama_file', 
                                  aktif				 ='$_POST[aktif]'
								  
                             WHERE id_kat_album = '$_POST[id]'");
							 
  header('location:../../media.php?module='.$module);
  }
  }
}
}
?>
