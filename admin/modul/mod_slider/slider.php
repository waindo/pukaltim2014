<?php
session_start();
 if (empty($_SESSION['username']) AND empty($_SESSION['passuser'])){
  echo "<link href='style.css' rel='stylesheet' type='text/css'>
 <center>Untuk mengakses modul, Anda harus login <br>";
  echo "<a href=../../index.php><b>LOGIN</b></a></center>";
}
else{
$aksi="modul/mod_slider/aksi_slider.php";
switch($_GET[act]){
  // Tampil slider
  default:
    echo "<h4>Slider</h4>
          <p><a href='?module=slider&act=tambahslider';\" class='btn btn-success'>Tambah Slide</a></p>
          <table  class='table table-bordered'><thead>
          <tr><th>No.</th>
          <th>Judul</th>
          <th>Status</th>
          <th>#</th></tr></thead>"; 
    $tampil=mysql_query("SELECT * FROM slider ORDER BY id_slider DESC");
    $no=1;
    while ($r=mysql_fetch_array($tampil)){
       echo "<tbody><tr><td width='25'>$no</td>
             <td>$r[judul]</td>
             <td>$r[aktif]</td>
             <td width='40'><a href=?module=slider&act=editslider&id=$r[id_slider]><i class='icon-edit'></i></a>
             </td></tr>";
      $no++;
    }
    echo "<tbody></table>";
    echo "<div id=paging>*) Data pada slider tidak bisa dihapus, tapi bisa di non-aktifkan melalui Edit slider.</div><br>";
    break;
  
  // Form Tambah slider
  case "tambahslider":
    echo "<h4>Tambah Slider</h4>
          <form method=POST action='$aksi?module=slider&act=input' enctype='multipart/form-data'>
          <table class='table'>
          <tr><td>Judul</td><td> <input type=text name='judul' class='input-xxlarge'></td></tr>
		  <tr><td>Isi Halaman</td>  <td> <textarea name='isi_halaman' class='ckeditor' style='width: 800px; height: 350px;'></textarea></td></tr>
		  <tr><td>Gambar</td><td> : <input type=file name='fupload' size=40>* width:1000px;</td></tr>
		  <tr><td colspan=2><input type=submit name=submit value=Simpan class='btn'>
                            <input type=button value=Batal onclick=self.history.back() class='btn'></td></tr>
          </table></form>";
     break;
  
  // Form Edit slider  
  case "editslider":
    $edit=mysql_query("SELECT * FROM slider WHERE id_slider='$_GET[id]'");
    $r=mysql_fetch_array($edit);

    echo "<h4>Edit Slider</h4>
          <form method='POST' action='$aksi?module=slider&act=update' enctype='multipart/form-data'>
          <input type=hidden name=id value='$r[id_slider]'>
          <table class='table'>
          <tr><td>Judul</td><td> <input type=text name='judul' class='input-xxlarge' value='$r[judul]'></td></tr>
		  <tr><td>Isi Halaman</td>   <td> <textarea name='isi_halaman' class='ckeditor' style='width: 800px; height: 350px;'>$r[deskripsi]</textarea></td></tr>
		  <tr><td>Gambar</td><td>    : <img src='../assets/slider/$r[gambar]'></td></tr>
          <tr><td>Ganti Gbr</td><td> : <input type=file name='fupload' size=30> *)</td></tr>";
    if ($r[aktif]=='Y'){
      echo "<tr><td>Aktif</td> <td> <input type=radio name='aktif' value='Y' checked>Y  
                                      <input type=radio name='aktif' value='N'> N</td></tr>";
    }
    else{
      echo "<tr><td>Aktif</td> <td> <input type=radio name='aktif' value='Y'>Y  
                                      <input type=radio name='aktif' value='N' checked>N</td></tr>";
    }

    echo "<tr><td colspan=2><input type=submit value=Update class='btn'>
                            <input type=button value=Batal onclick=self.history.back() class='btn'></td></tr>
          </table></form>";
    break;  
}
}
?>
