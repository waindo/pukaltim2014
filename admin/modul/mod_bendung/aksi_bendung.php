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

// Hapus Bendung
if ($module=='bendung' AND $act=='hapus'){
  $data=mysql_fetch_array(mysql_query("SELECT booklet FROM bendung WHERE id_bendung='$_GET[id]'"));
  if ($data['booklet']!=''){
     mysql_query("DELETE FROM bendungan WHERE id_bendung='$_GET[id]'");
     unlink("../../../assets/foto_booklet/$_GET[namafile]");   
     unlink("../../../assets/foto_booklet/medium_$_GET[namafile]");   
  }
  else{
     mysql_query("DELETE FROM bendungan WHERE id_bendung='$_GET[id]'");
  }
  header('location:../../media.php?module='.$module);
}

// Input Bendung
elseif ($module=='bendung' AND $act=='input'){
  $lokasi_file    = $_FILES['fupload']['tmp_name'];
  $tipe_file      = $_FILES['fupload']['type'];
  $nama_file      = $_FILES['fupload']['name'];
  
  // Apabila ada gambar yang diupload
  if (!empty($lokasi_file)){
    if ($tipe_file != "image/jpeg" AND $tipe_file != "image/pjpeg"){
    echo "<script>window.alert('Upload Gagal, Pastikan File yang di Upload bertipe *.JPG');
        window.location=('../../media.php?module=bendung)</script>";
    }
    else{
    UploadBooklet($nama_file);

    mysql_query("INSERT INTO bendungan(kode_bendung,
									   jenis,
									   nama,
									   sungai,
									   das,
									   ws,
									   kota,
									   kecamatan,
									   desa,
									   tahun_bangun,
									   tahun_selesai,
									   tahun_rehab,
									   tipe_bendung,
									   tinggi_bendung,
									   lebar_bendung,
									   pemanfaatan_irigasi,
									   pengelola,
									   keterangan,
									   booklet) 
                            VALUES('$_POST[kode]',
							       'B',
                                   '$_POST[nama]', 
                                   '$_POST[sungai]',
								   '$_POST[das]',
                                   '$_POST[ws]',
								   '$_POST[kota]',
								   '$_POST[kecamatan]',
								   '$_POST[desa]',
								   '$_POST[thn_bangun]',
								   '$_POST[thn_selesai]',
								   '$_POST[thn_rehab]',
								   '$_POST[tipe]',
								   '$_POST[tinggi]',
								   '$_POST[lebar]',
								   '$_POST[pemanfaatan]',
								   '$_POST[pengelola]',
								   '$_POST[keterangan]', 
                                   '$nama_file')");
  header('location:../../media.php?module='.$module);
  }
  }
  else{
    mysql_query("INSERT INTO bendungan(kode_bendung,
									   jenis,
									   nama,
									   sungai,
									   das,
									   ws,
									   kota,
									   kecamatan,
									   desa,
									   tahun_bangun,
									   tahun_selesai,
									   tahun_rehab,
									   tipe_bendung,
									   tinggi_bendung,
									   lebar_bendung,
									   pemanfaatan_irigasi,
									   pengelola,
									   keterangan) 
                            VALUES('$_POST[kode]',
							       'B',
                                   '$_POST[nama]', 
                                   '$_POST[sungai]',
								   '$_POST[das]',
                                   '$_POST[ws]',
								   '$_POST[kota]',
								   '$_POST[kecamatan]',
								   '$_POST[desa]',
								   '$_POST[thn_bangun]',
								   '$_POST[thn_selesai]',
								   '$_POST[thn_rehab]',
								   '$_POST[tipe]',
								   '$_POST[tinggi]',
								   '$_POST[lebar]',
								   '$_POST[pemanfaatan]',
								   '$_POST[pengelola]',
								   '$_POST[keterangan]')");
								   
  header('location:../../media.php?module='.$module);
  }
 
}

// Update Bendung
elseif ($module=='bendung' AND $act=='update'){
  $lokasi_file    = $_FILES['fupload']['tmp_name'];
  $tipe_file      = $_FILES['fupload']['type'];
  $nama_file      = $_FILES['fupload']['name'];
 
  // Apabila gambar tidak diganti
  if (empty($lokasi_file)){
    mysql_query("UPDATE bendungan SET  kode_bendung				= '$_POST[kode]',
									   nama						= '$_POST[nama]', 
									   sungai					= '$_POST[sungai]',
									   das						= '$_POST[das]',
									   ws						= '$_POST[ws]',
									   kota						= '$_POST[kota]',
									   kecamata					= '$_POST[kecamatan]',
									   desa						= '$_POST[desa]',
									   tahun_bangun				= '$_POST[thn_bangun]',
									   tahun_selesai			= '$_POST[thn_selesai]',
									   tahun_rehab				= '$_POST[thn_rehab]',
									   tipe_bendung				= '$_POST[tipe]',
									   tinggi_bendung			= '$_POST[tinggi]',
									   lebar_bendung			= '$_POST[lebar]',
									   pemanfaatan_irigasi		= '$_POST[pemanfaatan]',
									   pengelola				= '$_POST[pengelola]',
									   keterangan				= '$_POST[keterangan]'
						
                             WHERE 	   id_bendung   			= '$_POST[id]'");
  header('location:../../media.php?module='.$module);
  }
  else{
    if ($tipe_file != "image/jpeg" AND $tipe_file != "image/pjpeg"){
    echo "<script>window.alert('Upload Gagal, Pastikan File yang di Upload bertipe *.JPG');
        window.location=('../../media.php?module=jaririgasi')</script>";
    }
    else{
    UploadBooklet($nama_file);
    mysql_query("UPDATE bendungan SET  kode_bendung				= '$_POST[kode]',
									   nama						= '$_POST[nama]', 
									   sungai					= '$_POST[sungai]',
									   das						= '$_POST[das]',
									   ws						= '$_POST[ws]',
									   kota						= '$_POST[kota]',
									   kecamata					= '$_POST[kecamatan]',
									   desa						= '$_POST[desa]',
									   tahun_bangun				= '$_POST[thn_bangun]',
									   tahun_selesai			= '$_POST[thn_selesai]',
									   tahun_rehab				= '$_POST[thn_rehab]',
									   tipe_bendung				= '$_POST[tipe]',
									   tinggi_bendung			= '$_POST[tinggi]',
									   lebar_bendung			= '$_POST[lebar]',
									   pemanfaatan_irigasi		= '$_POST[pemanfaatan]',
									   pengelola				= '$_POST[pengelola]',
									   keterangan				= '$_POST[keterangan]',
									   booklet					= '$nama_file'
						
                             WHERE 	   id_bendung   			= '$_POST[id]'");

   header('location:../../media.php?module='.$module);
   }
  }
}
  
}

?>
