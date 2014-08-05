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

// Hapus Bendali
if ($module=='bendali' AND $act=='hapus'){
  $data=mysql_fetch_array(mysql_query("SELECT booklet FROM bendali WHERE id_bendali='$_GET[id]'"));
  if ($data['booklet']!=''){
     mysql_query("DELETE FROM bendali WHERE id_bendali='$_GET[id]'");
     unlink("../../../assets/foto_booklet/$_GET[namafile]");   
     unlink("../../../assets/foto_booklet/medium_$_GET[namafile]");   
  }
  else{
     mysql_query("DELETE FROM bendali WHERE id_bendali='$_GET[id]'");
  }
  header('location:../../media.php?module='.$module);
}

// Input Bendung
elseif ($module=='bendali' AND $act=='input'){
  $lokasi_file    = $_FILES['fupload']['tmp_name'];
  $tipe_file      = $_FILES['fupload']['type'];
  $nama_file      = $_FILES['fupload']['name'];
  
  // Apabila ada gambar yang diupload
  if (!empty($lokasi_file)){
    if ($tipe_file != "image/jpeg" AND $tipe_file != "image/pjpeg"){
    echo "<script>window.alert('Upload Gagal, Pastikan File yang di Upload bertipe *.JPG');
        window.location=('../../media.php?module=bendali)</script>";
    }
    else{
    UploadBooklet($nama_file);

    mysql_query("INSERT INTO bendali(kode_bendali,
									   nama_bendali,
									   sungai,
									   das,
									   ws,
									   kota,
									   kecamatan,
									   desa,
									   tahun_bangun,
									   tahun_selesai,
									   tahun_rehab,
									   tipe_bendali,
									   tinggi_bendali,
									   panjang_bendali,
									   kapasitas,
									   keterangan,
									   booklet) 
                            VALUES('$_POST[kode]',
							       'bendali',
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
								   '$_POST[panjang]',
								   '$_POST[kapasitas]',
								   '$_POST[keterangan]', 
                                   '$nama_file')");
  header('location:../../media.php?module='.$module);
  }
  }
  else{
    mysql_query("INSERT INTO bendali(kode_bendali,
									   nama_bendali,
									   sungai,
									   das,
									   ws,
									   kota,
									   kecamatan,
									   desa,
									   tahun_bangun,
									   tahun_selesai,
									   tahun_rehab,
									   tipe_bendali,
									   tinggi_bendali,
									   panjang_bendali,
									   kapasitas,
									   keterangan) 
                            VALUES('$_POST[kode]',
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
								   '$_POST[panjang]',
								   '$_POST[kapasitas]',
								   '$_POST[keterangan]')");
								   
  header('location:../../media.php?module='.$module);
  }
 
}

// Update Bendali
elseif ($module=='bendali' AND $act=='update'){
  $lokasi_file    = $_FILES['fupload']['tmp_name'];
  $tipe_file      = $_FILES['fupload']['type'];
  $nama_file      = $_FILES['fupload']['name'];
 
  // Apabila gambar tidak diganti
  if (empty($lokasi_file)){
    mysql_query("UPDATE bendali SET   kode_bendali				= '$_POST[kode]',
									   nama_bendali				= '$_POST[nama]', 
									   sungai					= '$_POST[sungai]',
									   das						= '$_POST[das]',
									   ws						= '$_POST[ws]',
									   kota						= '$_POST[kota]',
									   kecamatan				= '$_POST[kecamatan]',
									   desa						= '$_POST[desa]',
									   tahun_bangun				= '$_POST[thn_bangun]',
									   tahun_selesai			= '$_POST[thn_selesai]',
									   tahun_rehab				= '$_POST[thn_rehab]',
									   tipe_bendali				= '$_POST[tipe]',
									   tinggi_bendali			= '$_POST[tinggi]',
									   panjang_bendali			= '$_POST[panjang]',
									   kapasitas				= '$_POST[kapasitas]',
									   keterangan				= '$_POST[keterangan]'
						
                             WHERE 	   id_bendali   			= '$_POST[id]'");
  header('location:../../media.php?module='.$module);
  }
  else{
    if ($tipe_file != "image/jpeg" AND $tipe_file != "image/pjpeg"){
    echo "<script>window.alert('Upload Gagal, Pastikan File yang di Upload bertipe *.JPG');
        window.location=('../../media.php?module=bendali')</script>";
    }
    else{
    UploadBooklet($nama_file);
    mysql_query("UPDATE bendali SET  kode_bendali				= '$_POST[kode]',
									   nama_bendali						= '$_POST[nama]', 
									   sungai					= '$_POST[sungai]',
									   das						= '$_POST[das]',
									   ws						= '$_POST[ws]',
									   kota						= '$_POST[kota]',
									   kecamatan				= '$_POST[kecamatan]',
									   desa						= '$_POST[desa]',
									   tahun_bangun				= '$_POST[thn_bangun]',
									   tahun_selesai			= '$_POST[thn_selesai]',
									   tahun_rehab				= '$_POST[thn_rehab]',
									   tipe_bendali				= '$_POST[tipe]',
									   tinggi_bendali			= '$_POST[tinggi]',
									   panjang_bendali			= '$_POST[panjang]',
									   kapasitas				= '$_POST[kapasitas]',
									   keterangan				= '$_POST[keterangan]',
									   booklet					= '$nama_file'
						
                             WHERE 	   id_bendali   			= '$_POST[id]'");

   header('location:../../media.php?module='.$module);
   }
  }
}
  
}

?>
