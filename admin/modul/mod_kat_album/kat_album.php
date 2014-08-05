<?php
session_start();
 if (empty($_SESSION['username']) AND empty($_SESSION['passuser'])){
  echo "<link href='style.css' rel='stylesheet' type='text/css'>
 <center>Untuk mengakses modul, Anda harus login <br>";
  echo "<a href=../../index.php><b>LOGIN</b></a></center>";
}
else{
$aksi="modul/mod_kat_album/aksi_kat_album.php";
switch($_GET[act]){
  // Tampil Kategori Album
  default:
    echo "<h4>Kategori Album</h4>
          <p><a href='?module=kat_album&act=tambah';\" class='btn btn-success'>Tambah Kategori Album</a></p>
          <table class='table table-bordered'><thead>
          <tr>
          <th>No.</th>
          <th>Kategori Gambar</th>
          <th>cover</th>
          <th>Link</th>
		  <th>#</th>
          </tr></thead><tbody>"; 
    $tampil=mysql_query("SELECT * FROM kat_album ORDER BY id_kat_album DESC");
    $no=1;
    while ($r=mysql_fetch_array($tampil)){
       echo "<tr><td width='25'>$no</td>             
             <td>$r[nama_kat]</td>
			 <td width='120'><img src='../assets/foto_banner/kecil_$r[gambar]'></td>
             <td>Kategori-$r[id_kat_album]-$r[kat_album_seo].html</td>
             <td width='40'><a href=?module=kat_album&act=edit&id=$r[id_kat_album] title='Edit'><i class='icon-edit'></i></a>
             </td></tr>";
      $no++;
    }
    echo "</tbody></table>";
    echo "<div id=paging>*) Data pada Kategori Album tidak bisa dihapus, tapi bisa di non-aktifkan melalui Edit Album.</div><br>";
    break;
  
  // Form Tambah Kategori Album
  case "tambah":
    echo "<h4>Tambah Kategori Album</h4>
          <form method=POST action='$aksi?module=kat_album&act=input' enctype='multipart/form-data'>
          <table class='table'><tbody>
          <tr><td>Kategori Album</td><td> <input type=text name='kat_album'></td></tr>
          <tr><td>Gambar</td><td> <input type=file name='fupload'></td></tr>
          <tr><td colspan=2><input type=submit name=submit value=Simpan class='btn'>
                            <input type=button value=Batal onclick=self.history.back() class='btn'></td></tr>
          </tbody></table></form>";
     break;
  
  // Form Edit Kategori Album  
  case "edit":
    $edit=mysql_query("SELECT * FROM kat_album WHERE id_kat_album='$_GET[id]'");
    $r=mysql_fetch_array($edit);

    echo "<h4>Edit Kategori Album</h4>
          <form method=POST enctype='multipart/form-data' action=$aksi?module=kat_album&act=update>
          <input type=hidden name=id value='$r[id_kat_album]'>
          <table class='table'><tbody>
          <tr><td>Kategori Album</td><td> <input type=text name='kat_album' value='$r[nama_kat]'></td></tr>
          <tr><td>Gambar</td><td>    <img src='../assets/foto_banner/kecil_$r[gambar]'></td></tr>
          <tr><td>Ganti Gbr</td><td> <input type=file name='fupload'></td></tr>";
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
          </tbody></table></form>";
    break;  
}
}
?>
