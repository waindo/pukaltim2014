<?php
session_start();
if (empty($_SESSION['username']) AND empty($_SESSION['passuser'])){
  echo "<link href='style.css' rel='stylesheet' type='text/css'>
 <center>Untuk mengakses modul, Anda harus login <br>";
  echo "<a href=../../index.php><b>LOGIN</b></a></center>";
}
else{
include "../../../config/koneksi.php";
include "../../../config/library.php";
include "../../../config/fungsi_thumb.php";
include "../../../config/fungsi_seo.php";

$module=$_GET['module'];
$act=$_GET['act'];

// Hapus kegiatan
if ($module=='kegiatansda' AND $act=='hapus'){
  $data=mysql_fetch_array(mysql_query("SELECT foto FROM kegiatan_sda WHERE id_kegiatan='$_GET[id]'"));
  if ($data['foto']!=''){
     mysql_query("DELETE FROM kegiatan_sda WHERE id_kegiatan='$_GET[id]'");
 	 unlink("../../../assets/foto_kegiatan/$_GET[namafile]");   
     unlink("../../../assets/foto_kegiatan/medium_$_GET[namafile]");   
  }
  else{
     mysql_query("DELETE FROM kegiatan_sda WHERE id_kegiatan='$_GET[id]'");
  }
  header('location:../../media.php?module='.$module);
}

// Input Kegiatan
elseif ($module=='kegiatansda' AND $act=='input'){
  $lokasi_file    = $_FILES['fupload']['tmp_name'];
  $tipe_file      = $_FILES['fupload']['type'];
  $nama_file      = $_FILES['fupload']['name'];
 
  // Apabila ada gambar yang diupload
  if (!empty($lokasi_file)){
    if ($tipe_file != "image/jpeg" AND $tipe_file != "image/pjpeg"){
    echo "<script>window.alert('Upload Gagal, Pastikan File yang di Upload bertipe *.JPG');
        window.location=('../../media.php?module=kegiatansda)</script>";
    }
    else{
    UploadKegiatan($nama_file);

    mysql_query("INSERT INTO kegiatan_sda(id_program,
										pekerjaan,
										lokasi,
										rekanan,
										volume,
										nilai_kontrak,
										foto) 
                            VALUES('$_POST[program]',
                                   '$_POST[pekerjaan]',
                                   '$_POST[lokasi]',
                                   '$_POST[rekanan]', 
                                   '$_POST[volume]', 
                                   '$_POST[nilai_kontrak]',
                                   '$nama_file')");
  header('location:../../media.php?module='.$module);
  }
  }
  else{
    mysql_query("INSERT INTO kegiatan_sda(id_program,
										pekerjaan,
										lokasi,
										rekanan,
										volume,
										nilai_kontrak) 
                            VALUES('$_POST[program]',
                                   '$_POST[pekerjaan]',
                                   '$_POST[lokasi]',
                                   '$_POST[rekanan]', 
                                   '$_POST[volume]', 
                                   '$_POST[nilai_kontrak]')");
								   
  header('location:../../media.php?module='.$module);
  }
 
}

// Update Kegiatan
elseif ($module=='kegiatansda' AND $act=='update'){
  $lokasi_file    = $_FILES['fupload']['tmp_name'];
  $tipe_file      = $_FILES['fupload']['type'];
  $nama_file      = $_FILES['fupload']['name'];
  
  // Apabila gambar tidak diganti
  if (empty($lokasi_file)){
    mysql_query("UPDATE kegiatan_sda SET id_program		        = '$_POST[program]',
										 pekerjaan		        = '$_POST[pekerjaan]',
										 lokasi			        = '$_POST[lokasi]',
										 rekanan		        = '$_POST[rekanan]',
										 volume			        = '$_POST[volume]',
										 nilai_kontrak	        = '$_POST[nilai_kontrak]'
                                    
                             WHERE 		 id_kegiatan   = '$_POST[id]'");
  header('location:../../media.php?module='.$module);
  }
  else{
    if ($tipe_file != "image/jpeg" AND $tipe_file != "image/pjpeg"){
    echo "<script>window.alert('Upload Gagal, Pastikan File yang di Upload bertipe *.JPG');
        window.location=('../../media.php?module=kegiatansda')</script>";
    }
    else{
    UploadKegiatan($nama_file);
    mysql_query("UPDATE kegiatan_sda SET id_program		        = '$_POST[program]',
										 pekerjaan		        = '$_POST[pekerjaan]',
										 lokasi			        = '$_POST[lokasi]',
										 rekanan		        = '$_POST[rekanan]',
										 volume			        = '$_POST[volume]',
										 nilai_kontrak	        = '$_POST[nilai_kontrak]',
                                   		 foto      				= '$nama_file'   
                             WHERE id_kegiatan   = '$_POST[id]'");
   header('location:../../media.php?module='.$module);
   }
  }
}
}
?>
