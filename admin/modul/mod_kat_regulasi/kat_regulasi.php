<?php
session_start();
 if (empty($_SESSION['username']) AND empty($_SESSION['passuser'])){
  echo "<link href='style.css' rel='stylesheet' type='text/css'>
 <center>Untuk mengakses modul, Anda harus login <br>";
  echo "<a href=../../index.php><b>LOGIN</b></a></center>";
}
else{
$aksi="modul/mod_kat_regulasi/aksi_kat_regulasi.php";
switch($_GET[act]){
  // Tampil kat_regulasi
  default:
    echo "<h4>Kategori Regulasi</h4>
          <p><a href='?module=kat_regulasi&act=tambahkat_regulasi';\" class='btn btn-success'>Tambah</a>
		  <a href='?module=regulasi';\" class='btn btn-success'>Arsip Regulasi</a>
		  </p>
          <table  class='table table-bordered'><thead>
          <tr>
		  <th>No.</th>
          <th>Kategori</th>
          <th>Aktif</th>
          <th>#</th></tr></thead><tbody>"; 
    $tampil=mysql_query("SELECT * FROM kat_regulasi ORDER BY id_kat_regulasi DESC");
    $no=1;
    while ($r=mysql_fetch_array($tampil)){
       echo "<tr><td width='25'>$no</td>
             <td>$r[judul_kat_regulasi]</td>
             <td>$r[aktif]</td>
             <td width='40'><a href=?module=kat_regulasi&act=editkat_regulasi&id=$r[id_kat_regulasi] title='Edit'><i class='icon-edit'></i></a>
             </td></tr>";
      $no++;
    }
    echo "<tbody></table>";
    echo "<div id=paging>*) Data pada kat_regulasi tidak bisa dihapus, tapi bisa di non-aktifkan melalui Edit Kategori Regulasi.</div><br>";
    break;
  
  // Form Tambah kat_regulasi
  case "tambahkat_regulasi":
    echo "<h4>Tambah</h4>
          <form method=POST action='$aksi?module=kat_regulasi&act=input'>
          <table class='table'>
          <tr><td>Judul</td><td> : <input type=text name='judul'></td></tr>
          <tr><td colspan=2><input type=submit name=submit value=Simpan class='btn'>
                            <input type=button value=Batal onclick=self.history.back() class='btn'></td></tr>
          </table></form>";
     break;
  
  // Form Edit kat_regulasi  
  case "editkat_regulasi":
    $edit=mysql_query("SELECT * FROM kat_regulasi WHERE id_kat_regulasi='$_GET[id]'");
    $r=mysql_fetch_array($edit);

    echo "<h4>Edit</h4>
          <form method=POST action=$aksi?module=kat_regulasi&act=update>
          <input type=hidden name=id value='$r[id_kat_regulasi]'>
          <table class='table'>
          <tr><td>Judul</td><td> : <input type=text name='judul' value='$r[judul_kat_regulasi]'></td></tr>";
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
