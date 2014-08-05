<?php
session_start();
 if (empty($_SESSION['username']) AND empty($_SESSION['passuser'])){
  echo "<link href='style.css' rel='stylesheet' type='text/css'>
 <center>Untuk mengakses modul, Anda harus login <br>";
  echo "<a href=../../index.php><b>LOGIN</b></a></center>";
}
else{
$aksi="modul/mod_kategori_video/aksi_kategori_video.php";
switch($_GET[act]){
  // Tampil kategori_video
  default:
    echo "<h4>Kategori Video</h4>
          <p><a href='?module=kategori_video&act=tambahkategori_video';\" class='btn btn-success'>Tambah</a>
		  <a href='?module=video';\" class='btn btn-success'>Arsip Video</a>
		  </p>
          <table  class='table table-bordered'><thead>
          <tr><th>no</th>
          <th>Nama Kategori Video</th>
          <th>Link</th>
		  <th>Status</th>
          <th>#</th></tr></thead>"; 
    $tampil=mysql_query("SELECT * FROM kategori_video ORDER BY id_kategori_video DESC");
    $no=1;
    while ($r=mysql_fetch_array($tampil)){
       echo "<tbody><tr><td width='25'>$no</td>
             <td>$r[nama_kategori_video]</td>
             <td>kategori-video-$r[id_kategori_video]-$r[kategori_video_seo].html</td>
			 <td>$r[aktif]</td>
             <td width='40'><a href=?module=kategori_video&act=editkategori_video&id=$r[id_kategori_video] title='Edit'><i class='icon-edit'></i></a>
             </td></tr>";
      $no++;
    }
    echo "<tbody></table>";
    echo "<div id=paging>*) Data pada kategori video tidak bisa dihapus, tapi bisa di non-aktifkan melalui Edit Kategori Video.</div><br>";
    break;
  
  // Form Tambah kategori_video
  case "tambahkategori_video":
    echo "<h4>Tambah Kategori Video</h4>
          <form method=POST action='$aksi?module=kategori_video&act=input'>
          <table class='table'>
          <tr>
		  <td>Nama Kategori Video</td><td> : <input type=text name='nama_kategori_video'></td></tr>
          <tr><td colspan=2><input type=submit name=submit value=Simpan class='btn'>
                            <input type=button value=Batal onclick=self.history.back() class='btn'></td></tr>
          </table></form>";
     break;
  
  // Form Edit kategori_video  
  case "editkategori_video":
    $edit=mysql_query("SELECT * FROM kategori_video WHERE id_kategori_video='$_GET[id]'");
    $r=mysql_fetch_array($edit);

    echo "<h4>Edit Kategori Video</h4>
          <form method=POST action=$aksi?module=kategori_video&act=update>
          <input type=hidden name=id value='$r[id_kategori_video]'>
          <table class='table'>
          <tr><td>Nama Kategori Video</td><td> : <input type=text name='nama_kategori_video' value='$r[nama_kategori_video]'></td></tr>";
    if ($r[aktif]=='Y'){
      echo "<tr><td>Aktif</td> <td> : <input type=radio name='aktif' value='Y' checked>Y  
                                      <input type=radio name='aktif' value='N'> N</td></tr>";
    }
    else{
      echo "<tr><td>Aktif</td> <td> : <input type=radio name='aktif' value='Y'>Y  
                                      <input type=radio name='aktif' value='N' checked>N</td></tr>";
    }

    echo "<tr><td colspan=2><input type=submit value=Update class='btn'>
                            <input type=button value=Batal onclick=self.history.back() class='btn'></td></tr>
          </table></form>";
    break;  
}
}
?>
