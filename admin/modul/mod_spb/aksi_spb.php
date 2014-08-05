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

// Hapus SPB
if ($module=='spb' AND $act=='hapus'){
  $data=mysql_fetch_array(mysql_query("SELECT booklet FROM spb WHERE id_sistem='$_GET[id]'"));
  if ($data['booklet']!=''){
     mysql_query("DELETE FROM spb WHERE id_sistem='$_GET[id]'");
     unlink("../../../assets/foto_booklet/$_GET[namafile]");   
     unlink("../../../assets/foto_booklet/medium_$_GET[namafile]");   
  }
  else{
     mysql_query("DELETE FROM spb WHERE id_sistem='$_GET[id]'");
  }
  header('location:../../media.php?module='.$module);
}

// Input Jaringan Irigasi
elseif ($module=='spb' AND $act=='input'){
  $lokasi_file    = $_FILES['fupload']['tmp_name'];
  $tipe_file      = $_FILES['fupload']['type'];
  $nama_file      = $_FILES['fupload']['name'];
  
  // Apabila ada gambar yang diupload
  if (!empty($lokasi_file)){
    if ($tipe_file != "image/jpeg" AND $tipe_file != "image/pjpeg"){
    echo "<script>window.alert('Upload Gagal, Pastikan File yang di Upload bertipe *.JPG');
        window.location=('../../media.php?module=spb)</script>";
    }
    else{
    UploadBooklet($nama_file);

    mysql_query("INSERT INTO spb(kode_sistem,
								 nama_sistem,
								 kota,
								 booklet) 
                            VALUES('$_POST[kode]',
                                   '$_POST[nama]', 
                                   '$_POST[lokasi]',
                                   '$nama_file')");
								   
  header('location:../../media.php?module='.$module);
  }
  }
  else{
    mysql_query("INSERT INTO spb(kode_sistem,
								 nama_sistem,
								 kota) 
                            VALUES('$_POST[kode]',
                                   '$_POST[nama]', 
                                   '$_POST[lokasi]')");
								   
  header('location:../../media.php?module='.$module);
  }
 
}

// Update SPB
elseif ($module=='spb' AND $act=='update'){
  $lokasi_file    = $_FILES['fupload']['tmp_name'];
  $tipe_file      = $_FILES['fupload']['type'];
  $nama_file      = $_FILES['fupload']['name'];
 
  // Apabila gambar tidak diganti
  if (empty($lokasi_file)){
    mysql_query("UPDATE spb SET  kode_sistem	        = '$_POST[kode]',
								 nama_sistem	        = '$_POST[nama]',
								 kota			        = '$_POST[lokasi]'
										 
                       WHERE 	 id_sistem   = '$_POST[id]'");
  header('location:../../media.php?module='.$module);
  }
  else{
    if ($tipe_file != "image/jpeg" AND $tipe_file != "image/pjpeg"){
    echo "<script>window.alert('Upload Gagal, Pastikan File yang di Upload bertipe *.JPG');
        window.location=('../../media.php?module=spb')</script>";
    }
    else{
    UploadBooklet($nama_file);
    mysql_query("UPDATE spb SET  kode_sistem       = '$_POST[kode]',
								 nama_sistem       = '$_POST[nama]',
								 kota		       = '$_POST[lokasi]',
								 booklet   		   = '$nama_file'
										    
                             WHERE id_sistem   = '$_POST[id]'");
   header('location:../../media.php?module='.$module);
   }
  }
}

// Input Detail Jaringan Irigasi
elseif ($module=='spb' AND $act=='detailinput'){
  
 	$id=$_POST[id];
    mysql_query("INSERT INTO detail_spb(id_sistem,
										tahun_pelaksanaan,
										normalisasi,
										pasangan_batu,
										beton,
										sheet_pile) 
                            VALUES('$_POST[id]',
                                   '$_POST[tahun]', 
                                   '$_POST[normalisasi]', 
                                   '$_POST[pasangan_batu]', 
                                   '$_POST[beton]',
								   '$_POST[sheet_pile]'                      
                                   )");
  header('location:../../media.php?module=spb&act=detail&id='.$id);}
 
 // Update Detail Jaringan Irigasi
elseif ($module=='spb' AND $act=='detailupdate'){
  
 $id=$_POST[sistem];
    mysql_query("UPDATE detail_spb SET  tahun_pelaksanaan	= '$_POST[tahun]',
										normalisasi			= '$_POST[normalisasi]',
										pasangan_batu		= '$_POST[pasangan_batu]',
										beton				= '$_POST[beton]',
										sheet_pile			= '$_POST[sheet_pile]'
                                                 
                                   WHERE id_detail = '$_POST[id]'");
  header('location:../../media.php?module=spb&act=detail&id='.$id);}
 
 elseif ($module=='spb' AND $act=='hapusdetail'){
  
 $id=$_GET[sistem];
    mysql_query("DELETE FROM detail_spb WHERE id_detail = '$_GET[id]'");
  header('location:../../media.php?module=spb&act=detail&id='.$id);}
  
}

?>
