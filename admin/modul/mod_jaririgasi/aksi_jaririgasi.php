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

// Hapus jaringan irigasi
if ($module=='jaririgasi' AND $act=='hapus'){
  $data=mysql_fetch_array(mysql_query("SELECT booklet FROM jar_irigasi WHERE id_jaringan='$_GET[id]'"));
  if ($data['booklet']!=''){
     mysql_query("DELETE FROM jar_irigasi WHERE id_jaringan='$_GET[id]'");
     unlink("../../../assets/foto_booklet/$_GET[namafile]");   
     unlink("../../../assets/foto_booklet/medium_$_GET[namafile]");   
  }
  else{
     mysql_query("DELETE FROM jar_irigasi WHERE id_jaringan='$_GET[id]'");
  }
  header('location:../../media.php?module='.$module);
}

// Input Jaringan Irigasi
elseif ($module=='jaririgasi' AND $act=='input'){
  $lokasi_file    = $_FILES['fupload']['tmp_name'];
  $tipe_file      = $_FILES['fupload']['type'];
  $nama_file      = $_FILES['fupload']['name'];
  
  // Apabila ada gambar yang diupload
  if (!empty($lokasi_file)){
    if ($tipe_file != "image/jpeg" AND $tipe_file != "image/pjpeg"){
    echo "<script>window.alert('Upload Gagal, Pastikan File yang di Upload bertipe *.JPG');
        window.location=('../../media.php?module=jaririgasi)</script>";
    }
    else{
    UploadBooklet($nama_file);

    mysql_query("INSERT INTO jar_irigasi(kode_jaringan,
										 nama_jaringan,
										 lokasi,
										 luas_daerah,
										 booklet) 
                            VALUES('$_POST[kode]',
                                   '$_POST[nama]', 
                                   '$_POST[lokasi]',
                                   '$_POST[luas]', 
                                   '$nama_file')");
  header('location:../../media.php?module='.$module);
  }
  }
  else{
    mysql_query("INSERT INTO jar_irigasi(kode_jaringan,
										 nama_jaringan,
										 lokasi,
										 luas_daerah) 
                            VALUES('$_POST[kode]',
                                   '$_POST[nama]', 
                                   '$_POST[lokasi]',
                                   '$_POST[luas]')");
								   
  header('location:../../media.php?module='.$module);
  }
 
}

// Update Jaringan Irigasi
elseif ($module=='jaririgasi' AND $act=='update'){
  $lokasi_file    = $_FILES['fupload']['tmp_name'];
  $tipe_file      = $_FILES['fupload']['type'];
  $nama_file      = $_FILES['fupload']['name'];
 
  // Apabila gambar tidak diganti
  if (empty($lokasi_file)){
    mysql_query("UPDATE jar_irigasi SET  kode_jaringan	        = '$_POST[kode]',
										 nama_jaringan	        = '$_POST[nama]',
										 lokasi			        = '$_POST[lokasi]',
										 luas_daerah	        = '$_POST[luas]'
										 
                             WHERE 		 id_jaringan   = '$_POST[id]'");
  header('location:../../media.php?module='.$module);
  }
  else{
    if ($tipe_file != "image/jpeg" AND $tipe_file != "image/pjpeg"){
    echo "<script>window.alert('Upload Gagal, Pastikan File yang di Upload bertipe *.JPG');
        window.location=('../../media.php?module=jaririgasi')</script>";
    }
    else{
    UploadBooklet($nama_file);
    mysql_query("UPDATE jar_irigasi SET  kode_jaringan       = '$_POST[kode]',
										 nama_jaringan       = '$_POST[nama]',
										 lokasi		         = '$_POST[lokasi]',
										 luas_daerah         = '$_POST[luas]',
                                   		 booklet   		     = '$nama_file'
										    
                             WHERE id_jaringan   = '$_POST[id]'");
   header('location:../../media.php?module='.$module);
   }
  }
}

// Input Detail Jaringan Irigasi
elseif ($module=='jaririgasi' AND $act=='detailinput'){
  
 	$id=$_POST[id];
    mysql_query("INSERT INTO detail_jar_irigasi(id_jaringan,
										 tahun_pelaksanaan,
										 tnh_primer,
										 linning_primer,
										 tnh_sekunder,
										 linning_sekunder,
										 saluran_pembuangan,
										 bgn_sadap,
										 bgn_pelengkap,
										 keterangan) 
                            VALUES('$_POST[id]',
                                   '$_POST[tahun]', 
                                   '$_POST[tnh_p]',
                                   '$_POST[linning_p]', 
                                   '$_POST[tnh_s]',
								   '$_POST[linning_s]',
								   '$_POST[sp]', 
                                   '$_POST[bs]', 
                                   '$_POST[bp]',
								   '$_POST[ket]'                      
                                   )");
  header('location:../../media.php?module=jaririgasi&act=detail&id='.$id);}
 
 // Update Detail Jaringan Irigasi
elseif ($module=='jaririgasi' AND $act=='detailupdate'){
  
 $id=$_POST[jaringan];
    mysql_query("UPDATE detail_jar_irigasi SET  tahun_pelaksanaan	= '$_POST[tahun]',
										 	    tnh_primer			= '$_POST[tnh_p]',
										 		linning_primer		= '$_POST[linning_p]',
												tnh_sekunder		= '$_POST[tnh_s]',
												linning_sekunder	= '$_POST[linning_s]',
										 		saluran_pembuangan	= '$_POST[sp]',
										 		bgn_sadap			= '$_POST[bs]',
										 		bgn_pelengkap		= '$_POST[bp]',
										 		keterangan			= '$_POST[ket]'
                                                 
                                   WHERE id_detail = '$_POST[id]'");
  header('location:../../media.php?module=jaririgasi&act=detail&id='.$id);}
 
 elseif ($module=='jaririgasi' AND $act=='hapusdetail'){
  
 $id=$_GET[jaringan];
    mysql_query("DELETE FROM detail_jar_irigasi WHERE id_detail = '$_GET[id]'");
  header('location:../../media.php?module=jaririgasi&act=detail&id='.$id);}
  
}

?>
