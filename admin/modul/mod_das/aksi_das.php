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

// Hapus DAS
if ($module=='das' AND $act=='hapus'){
  $data=mysql_fetch_array(mysql_query("SELECT booklet FROM das WHERE id_das='$_GET[id]'"));
  if ($data['booklet']!=''){
     mysql_query("DELETE FROM das WHERE id_das='$_GET[id]'");
     unlink("../../../assets/foto_booklet/$_GET[namafile]");   
     unlink("../../../assets/foto_booklet/medium_$_GET[namafile]");   
  }
  else{
     mysql_query("DELETE FROM das WHERE id_das='$_GET[id]'");
  }
  header('location:../../media.php?module='.$module);
}

// Input DAS
elseif ($module=='das' AND $act=='input'){
  $lokasi_file    = $_FILES['fupload']['tmp_name'];
  $tipe_file      = $_FILES['fupload']['type'];
  $nama_file      = $_FILES['fupload']['name'];
  
  // Apabila ada gambar yang diupload
  if (!empty($lokasi_file)){
    if ($tipe_file != "image/jpeg" AND $tipe_file != "image/pjpeg"){
    echo "<script>window.alert('Upload Gagal, Pastikan File yang di Upload bertipe *.JPG');
        window.location=('../../media.php?module=das)</script>";
    }
    else{
    UploadBooklet($nama_file);

    mysql_query("INSERT INTO das(kode_das,
								 nama_das,
								 panjang_das,
								 luas_das,
							     booklet) 
                            VALUES('$_POST[kode]',
							       '$_POST[nama]', 
                                   '$_POST[panjang]',
								   '$_POST[luas]',
                                   '$nama_file')");
  header('location:../../media.php?module='.$module);
  }
  }
  else{
    mysql_query("INSERT INTO das(kode_das,
								  nama_das,
								  panjang_das,
								  luas_das) 
                            VALUES('$_POST[kode]',
							       '$_POST[nama]', 
                                   '$_POST[panjang]',
								   '$_POST[luas]')");
								   
  header('location:../../media.php?module='.$module);
  }
 
}

// Update DAS
elseif ($module=='das' AND $act=='update'){
  $lokasi_file    = $_FILES['fupload']['tmp_name'];
  $tipe_file      = $_FILES['fupload']['type'];
  $nama_file      = $_FILES['fupload']['name'];
 
  // Apabila gambar tidak diganti
  if (empty($lokasi_file)){
    mysql_query("UPDATE das SET   kode_das						= '$_POST[kode]',
									   nama_das					= '$_POST[nama]', 
									   panjang_das				= '$_POST[panjang]',
									   luas_das					= '$_POST[luas]'		
                             WHERE 	   id_das		   			= '$_POST[id]'");
  header('location:../../media.php?module='.$module);
  }
  else{
    if ($tipe_file != "image/jpeg" AND $tipe_file != "image/pjpeg"){
    echo "<script>window.alert('Upload Gagal, Pastikan File yang di Upload bertipe *.JPG');
        window.location=('../../media.php?module=das')</script>";
    }
    else{
    UploadBooklet($nama_file);
    mysql_query("UPDATE das SET  kode_das			= '$_POST[kode]',
								 nama_das			= '$_POST[nama]', 
								 panjang_das		= '$_POST[panjang]',
								 luas_das			= '$_POST[luas]',
								 booklet			= '$nama_file'
					WHERE 	     id_das   			= '$_POST[id]'");

   header('location:../../media.php?module='.$module);
   }
  }
}
  
}

?>
