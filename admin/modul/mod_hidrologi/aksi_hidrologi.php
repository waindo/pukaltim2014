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

// Hapus Hidrologi
if ($module=='hidrologi' AND $act=='hapus'){
  $data=mysql_fetch_array(mysql_query("SELECT booklet FROM hidrologi WHERE id_hidrologi='$_GET[id]'"));
  if ($data['booklet']!=''){
     mysql_query("DELETE FROM hidrologi WHERE id_hidrologi='$_GET[id]'");
     unlink("../../../assets/foto_booklet/$_GET[namafile]");   
     unlink("../../../assets/foto_booklet/medium_$_GET[namafile]");   
  }
  else{
     mysql_query("DELETE FROM hidrologi WHERE id_hidrologi='$_GET[id]'");
  }
  header('location:../../media.php?module='.$module);
}

// Input Hidrologi
elseif ($module=='hidrologi' AND $act=='input'){
  $lokasi_file    = $_FILES['fupload']['tmp_name'];
  $tipe_file      = $_FILES['fupload']['type'];
  $nama_file      = $_FILES['fupload']['name'];
  
  // Apabila ada gambar yang diupload
  if (!empty($lokasi_file)){
    if ($tipe_file != "image/jpeg" AND $tipe_file != "image/pjpeg"){
    echo "<script>window.alert('Upload Gagal, Pastikan File yang di Upload bertipe *.JPG');
        window.location=('../../media.php?module=hidrologi)</script>";
    }
    else{
    UploadBooklet($nama_file);

    mysql_query("INSERT INTO hidrologi(kode_pos,
									   nama_pos,
									   das,
									   ws,
									   kota,
									   kecamatan,
									   desa,
									   tahun_bangun,
									   tahun_rehab,
									   x,
									   y,
									   elevansi,
									   booklet) 
                            VALUES('$_POST[kode]',
							       '$_POST[nama]', 
                                   '$_POST[das]',
                                   '$_POST[ws]',
								   '$_POST[kota]',
								   '$_POST[kecamatan]',
								   '$_POST[desa]',
								   '$_POST[thn_bangun]',
								   '$_POST[thn_rehab]',
								   '$_POST[x]',
								   '$_POST[y]',
								   '$_POST[elevansi]',
								   '$nama_file')");
								   
  header('location:../../media.php?module='.$module);
  }
  }
  else{
    mysql_query("INSERT INTO hidrologi(kode_pos,
									   nama_pos,
									   das,
									   ws,
									   kota,
									   kecamatan,
									   desa,
									   tahun_bangun,
									   tahun_rehab,
									   x,
									   y,
									   elevansi) 
                            VALUES('$_POST[kode]',
							       '$_POST[nama]', 
                                   '$_POST[das]',
                                   '$_POST[ws]',
								   '$_POST[kota]',
								   '$_POST[kecamatan]',
								   '$_POST[desa]',
								   '$_POST[thn_bangun]',
								   '$_POST[thn_rehab]',
								   '$_POST[x]',
								   '$_POST[y]',
								   '$_POST[elevansi]')");
								   
  header('location:../../media.php?module='.$module);
  }
 
}

// Update Hidrologi
elseif ($module=='hidrologi' AND $act=='update'){
  $lokasi_file    = $_FILES['fupload']['tmp_name'];
  $tipe_file      = $_FILES['fupload']['type'];
  $nama_file      = $_FILES['fupload']['name'];
 
  // Apabila gambar tidak diganti
  if (empty($lokasi_file)){
    mysql_query("UPDATE hidrologi SET  kode_pos					= '$_POST[kode]',
									   nama_pos					= '$_POST[nama]', 
									   das						= '$_POST[das]',
									   ws						= '$_POST[ws]',
									   kota						= '$_POST[kota]',
									   kecamatan				= '$_POST[kecamatan]',
									   desa						= '$_POST[desa]',
									   tahun_bangun				= '$_POST[thn_bangun]',
									   tahun_rehab				= '$_POST[thn_rehab]',
									   x						= '$_POST[x]',
									   y						= '$_POST[y]',
									   elevansi					= '$_POST[elevansi]'
									   						
                             WHERE 	   id_hidrologi   			= '$_POST[id]'");
							 
  header('location:../../media.php?module='.$module);
  }
  else{
    if ($tipe_file != "image/jpeg" AND $tipe_file != "image/pjpeg"){
    echo "<script>window.alert('Upload Gagal, Pastikan File yang di Upload bertipe *.JPG');
        window.location=('../../media.php?module=hidrologi')</script>";
    }
    else{
    UploadBooklet($nama_file);
    mysql_query("UPDATE hidrologi SET  kode_pos					= '$_POST[kode]',
									   nama_pos					= '$_POST[nama]', 
									   das						= '$_POST[das]',
									   ws						= '$_POST[ws]',
									   kota						= '$_POST[kota]',
									   kecamatan				= '$_POST[kecamatan]',
									   desa						= '$_POST[desa]',
									   tahun_bangun				= '$_POST[thn_bangun]',
									   tahun_rehab				= '$_POST[thn_rehab]',
									   x						= '$_POST[x]',
									   y						= '$_POST[y]',
									   elevansi					= '$_POST[elevansi]',
									   booklet					= '$nama_file'
									   						
                             WHERE 	   id_hidrologi   			= '$_POST[id]'");

   header('location:../../media.php?module='.$module);
   }
  }
}
  
}

?>
