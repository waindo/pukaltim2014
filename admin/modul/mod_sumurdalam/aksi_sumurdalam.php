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

// Hapus Sumur Dalam
if ($module=='sumurdalam' AND $act=='hapus'){
  $data=mysql_fetch_array(mysql_query("SELECT booklet FROM air_baku WHERE id_airbaku='$_GET[id]'"));
  if ($data['booklet']!=''){
     mysql_query("DELETE FROM air_baku WHERE id_airbaku='$_GET[id]'");
     unlink("../../../assets/foto_booklet/$_GET[namafile]");   
     unlink("../../../assets/foto_booklet/medium_$_GET[namafile]");   
  }
  else{
     mysql_query("DELETE FROM air_baku WHERE id_airbaku='$_GET[id]'");
  }
  header('location:../../media.php?module='.$module);
}

// Input Sumur Dalam
elseif ($module=='sumurdalam' AND $act=='input'){
  $lokasi_file    = $_FILES['fupload']['tmp_name'];
  $tipe_file      = $_FILES['fupload']['type'];
  $nama_file      = $_FILES['fupload']['name'];
  
  // Apabila ada gambar yang diupload
  if (!empty($lokasi_file)){
    if ($tipe_file != "image/jpeg" AND $tipe_file != "image/pjpeg"){
    echo "<script>window.alert('Upload Gagal, Pastikan File yang di Upload bertipe *.JPG');
        window.location=('../../media.php?module=sumurdalam)</script>";
    }
    else{
    UploadBooklet($nama_file);

    mysql_query("INSERT INTO air_baku(kode_airbaku,
									   jenis,
									   nama,
									   kota,
									   kecamatan,
									   desa,
									   tahun_bangun,
									   kedalaman,
									   pemanfaatan_irigasi,
									   pengelola,
									   keterangan,
									   booklet) 
                            VALUES('$_POST[kode]',
							       'Sumur Dalam',
                                   '$_POST[nama]', 
                                   '$_POST[kota]',
								   '$_POST[kecamatan]',
								   '$_POST[desa]',
								   '$_POST[thn_bangun]',
								   '$_POST[kedalaman]',
								   '$_POST[pemanfaatan]',
								   '$_POST[pengelola]',
								   '$_POST[keterangan]', 
                                   '$nama_file')");
  header('location:../../media.php?module='.$module);
  }
  }
  else{
    mysql_query("INSERT INTO air_baku(kode_airbaku,
									   jenis,
									   nama,
									   kota,
									   kecamatan,
									   desa,
									   tahun_bangun,
									   kedalaman,
									   pemanfaatan_irigasi,
									   pengelola,
									   keterangan) 
                            VALUES('$_POST[kode]',
							       'Sumur Dalam',
                                   '$_POST[nama]', 
                                   '$_POST[kota]',
								   '$_POST[kecamatan]',
								   '$_POST[desa]',
								   '$_POST[thn_bangun]',
								   '$_POST[kedalaman]',
								   '$_POST[pemanfaatan]',
								   '$_POST[pengelola]',
								   '$_POST[keterangan]')");
								   
  header('location:../../media.php?module='.$module);
  }
 
}

// Update Bendung
elseif ($module=='sumurdalam' AND $act=='update'){
  $lokasi_file    = $_FILES['fupload']['tmp_name'];
  $tipe_file      = $_FILES['fupload']['type'];
  $nama_file      = $_FILES['fupload']['name'];
 
  // Apabila gambar tidak diganti
  if (empty($lokasi_file)){
    mysql_query("UPDATE air_baku SET   kode_airbaku				= '$_POST[kode]',
									   nama						= '$_POST[nama]', 
									   kota						= '$_POST[kota]',
									   kecamatan				= '$_POST[kecamatan]',
									   desa						= '$_POST[desa]',
									   tahun_bangun				= '$_POST[thn_bangun]',
									   kedalaman				= '$_POST[kedalaman]',
									   pemanfaatan_irigasi		= '$_POST[pemanfaatan]',
									   pengelola				= '$_POST[pengelola]',
									   keterangan				= '$_POST[keterangan]'
						
                             WHERE 	   id_airbaku   			= '$_POST[id]'");
  header('location:../../media.php?module='.$module);
  }
  else{
    if ($tipe_file != "image/jpeg" AND $tipe_file != "image/pjpeg"){
    echo "<script>window.alert('Upload Gagal, Pastikan File yang di Upload bertipe *.JPG');
        window.location=('../../media.php?module=sumurdalam')</script>";
    }
    else{
    UploadBooklet($nama_file);
    mysql_query("UPDATE air_baku SET  kode_airbaku				= '$_POST[kode]',
									   nama						= '$_POST[nama]', 
									   kota						= '$_POST[kota]',
									   kecamatan				= '$_POST[kecamatan]',
									   desa						= '$_POST[desa]',
									   tahun_bangun				= '$_POST[thn_bangun]',
									   kedalaman				= '$_POST[kedalaman]',
									   pemanfaatan_irigasi		= '$_POST[pemanfaatan]',
									   pengelola				= '$_POST[pengelola]',
									   keterangan				= '$_POST[keterangan]',
									   booklet					= '$nama_file'
						
                             WHERE 	   id_airbaku   			= '$_POST[id]'");

   header('location:../../media.php?module='.$module);
   }
  }
}
  
}

?>
