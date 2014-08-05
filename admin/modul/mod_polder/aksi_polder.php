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

$module=$_GET['module'];
$act=$_GET['act'];

// Hapus polder
if ($module=='polder' AND $act=='hapus'){
  $data=mysql_fetch_array(mysql_query("SELECT booklet FROM polder WHERE id_polder='$_GET[id]'"));
  if ($data['booklet']!=''){
     mysql_query("DELETE FROM polder WHERE id_polder='$_GET[id]'");
     unlink("../../../assets/foto_booklet/$_GET[namafile]");   
     unlink("../../../assets/foto_booklet/medium_$_GET[namafile]");   
  }
  else{
     mysql_query("DELETE FROM polder WHERE id_polder='$_GET[id]'");
  }
  header('location:../../media.php?module='.$module);
}

// Input Bendung
elseif ($module=='polder' AND $act=='input'){
  $lokasi_file    = $_FILES['fupload']['tmp_name'];
  $tipe_file      = $_FILES['fupload']['type'];
  $nama_file      = $_FILES['fupload']['name'];
  
  // Apabila ada gambar yang diupload
  if (!empty($lokasi_file)){
    if ($tipe_file != "image/jpeg" AND $tipe_file != "image/pjpeg"){
    echo "<script>window.alert('Upload Gagal, Pastikan File yang di Upload bertipe *.JPG');
        window.location=('../../media.php?module=polder)</script>";
    }
    else{
    UploadBooklet($nama_file);

    mysql_query("INSERT INTO polder(kode_polder,
									   nama,
									   kota,
									   kecamatan,
									   desa,
									   tahun_bangun,
									   tahun_selesai,
									   tahun_rehab,
									   luas_polder,
									   kapasitas,
									   keterangan,
									   booklet) 
                            VALUES('$_POST[kode]',
							       '$_POST[nama]', 
                                   '$_POST[kota]',
								   '$_POST[kecamatan]',
								   '$_POST[desa]',
								   '$_POST[thn_bangun]',
								   '$_POST[thn_selesai]',
								   '$_POST[thn_rehab]',
								   '$_POST[luas]',
								   '$_POST[kapasitas]',
								   '$_POST[keterangan]', 
                                   '$nama_file')");
  header('location:../../media.php?module='.$module);
  }
  }
  else{
    mysql_query("INSERT INTO polder(kode_polder,
									   nama,
									   kota,
									   kecamatan,
									   desa,
									   tahun_bangun,
									   tahun_selesai,
									   tahun_rehab,
									   luas_polder,
									   kapasitas,
									   keterangan) 
                            VALUES('$_POST[kode]',
							       '$_POST[nama]', 
                                   '$_POST[kota]',
								   '$_POST[kecamatan]',
								   '$_POST[desa]',
								   '$_POST[thn_bangun]',
								   '$_POST[thn_selesai]',
								   '$_POST[thn_rehab]',
								   '$_POST[luas]',
								   '$_POST[kapasitas]',
								   '$_POST[keterangan]')");
								   
  header('location:../../media.php?module='.$module);
  }
 
}

// Update Polder
elseif ($module=='polder' AND $act=='update'){
  $lokasi_file    = $_FILES['fupload']['tmp_name'];
  $tipe_file      = $_FILES['fupload']['type'];
  $nama_file      = $_FILES['fupload']['name'];
 
  // Apabila gambar tidak diganti
  if (empty($lokasi_file)){
    mysql_query("UPDATE polder SET     kode_polder				= '$_POST[kode]',
									   nama						= '$_POST[nama]', 
									   kota						= '$_POST[kota]',
									   kecamatan				= '$_POST[kecamatan]',
									   desa						= '$_POST[desa]',
									   tahun_bangun				= '$_POST[thn_bangun]',
									   tahun_selesai			= '$_POST[thn_selesai]',
									   tahun_rehab				= '$_POST[thn_rehab]',
									   luas_polder				= '$_POST[luas]',
									   kapasitas				= '$_POST[kapasitas]',
									   keterangan				= '$_POST[keterangan]'
						
                             WHERE 	   id_polder   			= '$_POST[id]'");
  header('location:../../media.php?module='.$module);
  }
  else{
    if ($tipe_file != "image/jpeg" AND $tipe_file != "image/pjpeg"){
    echo "<script>window.alert('Upload Gagal, Pastikan File yang di Upload bertipe *.JPG');
        window.location=('../../media.php?module=polder')</script>";
    }
    else{
    UploadBooklet($nama_file);
    mysql_query("UPDATE polder SET     kode_polder				= '$_POST[kode]',
									   nama						= '$_POST[nama]', 
									   kota						= '$_POST[kota]',
									   kecamatan				= '$_POST[kecamatan]',
									   desa						= '$_POST[desa]',
									   tahun_bangun				= '$_POST[thn_bangun]',
									   tahun_selesai			= '$_POST[thn_selesai]',
									   tahun_rehab				= '$_POST[thn_rehab]',
									   luas_polder				= '$_POST[luas]',
									   kapasitas				= '$_POST[kapasitas]',
									   keterangan				= '$_POST[keterangan]',
									   booklet					= '$nama_file'
						
                             WHERE 	   id_polder   			= '$_POST[id]'");

   header('location:../../media.php?module='.$module);
   }
  }
}
  
}

?>
