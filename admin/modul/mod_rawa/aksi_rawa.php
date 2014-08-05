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

// Hapus Rawa
if ($module=='rawa' AND $act=='hapus'){
  $data=mysql_fetch_array(mysql_query("SELECT booklet FROM rawa_pantai WHERE id_rawapantai='$_GET[id]'"));
  if ($data['booklet']!=''){
     mysql_query("DELETE FROM rawa_pantai WHERE id_rawapantai='$_GET[id]'");
     unlink("../../../assets/foto_booklet/$_GET[namafile]");   
     unlink("../../../assets/foto_booklet/medium_$_GET[namafile]");   
  }
  else{
     mysql_query("DELETE FROM rawa_pantai WHERE id_rawapantai='$_GET[id]'");
  }
  header('location:../../media.php?module='.$module);
}

// Input Sumur Dalam
elseif ($module=='rawa' AND $act=='input'){
  $lokasi_file    = $_FILES['fupload']['tmp_name'];
  $tipe_file      = $_FILES['fupload']['type'];
  $nama_file      = $_FILES['fupload']['name'];
  
  // Apabila ada gambar yang diupload
  if (!empty($lokasi_file)){
    if ($tipe_file != "image/jpeg" AND $tipe_file != "image/pjpeg"){
    echo "<script>window.alert('Upload Gagal, Pastikan File yang di Upload bertipe *.JPG');
        window.location=('../../media.php?module=rawa)</script>";
    }
    else{
    UploadBooklet($nama_file);

    mysql_query("INSERT INTO rawa_pantai(kode_rawapantai,
									   jenis_rawapantai,
									   nama,
									   luas_rawa,
									   jenis_rawa,
									   kota,
									   kecamatan,
									   desa,
									   tahun_pelaksanaan,
									   panjang,
									   keterangan,
									   booklet) 
                            VALUES('$_POST[kode]',
							       'R',
                                   '$_POST[nama]', 
                                   '$_POST[luas]', 
                                   '$_POST[jenis]', 
                                   '$_POST[kota]',
								   '$_POST[kecamatan]',
								   '$_POST[desa]',
								   '$_POST[thn_pelaksanaan]',
								   '$_POST[panjang]',
								   '$_POST[keterangan]', 
                                   '$nama_file')");
  header('location:../../media.php?module='.$module);
  }
  }
  else{
    mysql_query("INSERT INTO rawa_pantai(kode_rawapantai,
									   jenis_rawapantai,
									   nama,
									   luas_rawa,
									   jenis_rawa,
									   kota,
									   kecamatan,
									   desa,
									   tahun_pelaksanaan,
									   panjang,
									   keterangan) 
                            VALUES('$_POST[kode]',
							       'R',
                                   '$_POST[nama]', 
                                   '$_POST[luas]', 
                                   '$_POST[jenis]', 
                                   '$_POST[kota]',
								   '$_POST[kecamatan]',
								   '$_POST[desa]',
								   '$_POST[thn_pelaksanaan]',
								   '$_POST[panjang]',
								   '$_POST[keterangan]')");
								   
  header('location:../../media.php?module='.$module);
  }
 
}

// Update Rawa
elseif ($module=='rawa' AND $act=='update'){
  $lokasi_file    = $_FILES['fupload']['tmp_name'];
  $tipe_file      = $_FILES['fupload']['type'];
  $nama_file      = $_FILES['fupload']['name'];
 
  // Apabila gambar tidak diganti
  if (empty($lokasi_file)){
    mysql_query("UPDATE rawa_pantai SET kode_rawapantai			= '$_POST[kode]',
									   nama						= '$_POST[nama]', 
									   luas_rawa				= '$_POST[luas]', 
									   jenis_rawa				= '$_POST[jenis]', 
									   kota						= '$_POST[kota]',
									   kecamatan				= '$_POST[kecamatan]',
									   desa						= '$_POST[desa]',
									   tahun_pelaksanaan		= '$_POST[thn_pelaksanaan]',
									   panjang					= '$_POST[panjang]',
									   keterangan				= '$_POST[keterangan]'
						
                             WHERE 	   id_rawapantai   			= '$_POST[id]'");
  header('location:../../media.php?module='.$module);
  }
  else{
    if ($tipe_file != "image/jpeg" AND $tipe_file != "image/pjpeg"){
    echo "<script>window.alert('Upload Gagal, Pastikan File yang di Upload bertipe *.JPG');
        window.location=('../../media.php?module=rawa')</script>";
    }
    else{
    UploadBooklet($nama_file);
    mysql_query("UPDATE rawa_pantai SET kode_rawapantai			= '$_POST[kode]',
									   nama						= '$_POST[nama]', 
									   luas_rawa				= '$_POST[luas]', 
									   jenis_rawa				= '$_POST[jenis]', 
									   kota						= '$_POST[kota]',
									   kecamatan				= '$_POST[kecamatan]',
									   desa						= '$_POST[desa]',
									   tahun_pelaksanaan		= '$_POST[thn_pelaksanaan]',
									   panjang					= '$_POST[panjang]',
									   keterangan				= '$_POST[keterangan]'
									   booklet					= '$nama_file'
						
                             WHERE 	   id_rawapantai   			= '$_POST[id]'");

   header('location:../../media.php?module='.$module);
   }
  }
}
  
}

?>
