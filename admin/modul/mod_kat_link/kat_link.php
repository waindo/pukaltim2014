<?php
session_start();
 if (empty($_SESSION['username']) AND empty($_SESSION['passuser'])){
  echo "<link href='style.css' rel='stylesheet' type='text/css'>
 <center>Untuk mengakses modul, Anda harus login <br>";
  echo "<a href=../../index.php><b>LOGIN</b></a></center>";
}
else{
$aksi="modul/mod_kat_link/aksi_kat_link.php";
switch($_GET[act]){
  // Tampil kat_link
  default:
    echo "<h4>Kategori Link</h4>
          <p><a href='?module=kat_link&act=tambahkat_link';\" class='btn btn-success'>Tambah Kategori Link</a> 
		  <a href='?module=link';\" class='btn btn-success'>Daftar Link</a>
		  </p>
          <table  class='table table-bordered'><thead>
          <tr>
		  <th width='20'>No.</th>
          <th width='200'>Kategori Link</th>
		  <th width='100'>Status</th>
          <th width='40'>#</th></tr></thead><tbody>"; 
    $tampil=mysql_query("SELECT * FROM kat_link ORDER BY id_kat_link DESC");
    $no=1;
    while ($r=mysql_fetch_array($tampil)){
       echo "<tr><td width='25'>$no</td>
             <td>$r[nama_kat_link]</td>
			 <td>$r[aktif]</td>
             <td width='40'><a href=?module=kat_link&act=editkat_link&id=$r[id_kat_link] class='btn btn-primary'><i class='icon-edit'></i> Edit</a>
             </td></tr>";
      $no++;
    }
    echo "</tbody></table>";
    echo "<div id=paging>*) Kategori Link tidak bisa dihapus, tapi bisa di non-aktifkan melalui Edit.</div><br>";
    break;
  
  // Form Tambah kat_link
  case "tambahkat_link":
    echo "<h4>Tambah Kategori Link</h4>
          <form method=POST action='$aksi?module=kat_link&act=input'>
          <table class='table'>
          <tr><td>Nama Kategori Link</td><td> : <input type=text name='nama_kat_link'></td></tr>
          <tr><td colspan=2><input type=submit name=submit value=Simpan class='btn'>
                            <input type=button value=Batal onclick=self.history.back() class='btn'></td></tr>
          </table></form>";
     break;
  
  // Form Edit kat_link  
  case "editkat_link":
    $edit=mysql_query("SELECT * FROM kat_link WHERE id_kat_link='$_GET[id]'");
    $r=mysql_fetch_array($edit);

    echo "<h4>Edit Kategori Link</h4>
          <form method=POST action=$aksi?module=kat_link&act=update>
          <input type=hidden name=id value='$r[id_kat_link]'>
          <table class='table'>
          <tr><td>Nama Kategori Link</td><td> : <input type=text name='nama_kat_link' value='$r[nama_kat_link]'></td></tr>";
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
