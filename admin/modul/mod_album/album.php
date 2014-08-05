<?php
session_start();
 if (empty($_SESSION['username']) AND empty($_SESSION['passuser'])){
  echo "<link href='style.css' rel='stylesheet' type='text/css'>
 <center>Untuk mengakses modul, Anda harus login <br>";
  echo "<a href=../../index.php><b>LOGIN</b></a></center>";
}
else{
$aksi="modul/mod_album/aksi_album.php";
switch($_GET[act]){
  // Tampil Album
  default:
    echo "<h4>Album</h4>
          <p><a href='?module=album&act=tambahalbum';\" class='btn btn-success'>Tambah Album</a></p>
          <table class='table table-bordered'><thead>
          <tr>
          <th>No.</th>
          <th>Gambar</th>
          <th>Judul album</th>
          <th>Link</th>
		  <th>#</th>
          </tr></thead><tbody>"; 
    $tampil=mysql_query("SELECT * FROM album ORDER BY id_album DESC");
    $no=1;
    while ($r=mysql_fetch_array($tampil)){
       echo "<tr><td width='25'>$no</td>             
             <td width='120'><img src='../assets/img_album/kecil_$r[gbr_album]'></td>
             <td>$r[jdl_album]</td>
			 <td>album-$r[id_album]-$r[album_seo].html</td>
             <td width='40'><a href=?module=album&act=editalbum&id=$r[id_album] title='Edit'><i class='icon-edit'></i></a>
             </td></tr>";
      $no++;
    }
    echo "</tbody></table>";
    echo "<div id=paging>*) Data pada Album tidak bisa dihapus, tapi bisa di non-aktifkan melalui Edit Album.</div><br>";
    break;
  
  // Form Tambah Album
  case "tambahalbum":
    echo "<h4>Tambah Album</h4>
          <form method=POST action='$aksi?module=album&act=input' enctype='multipart/form-data'>
          <table class='table'><tbody>
          <tr><td>Judul Album</td><td> <input type=text name='jdl_album'></td></tr>
          <tr><td>Gambar</td><td> <input type=file name='fupload' size=40></td></tr>
          <tr><td colspan=2><input type=submit name=submit value=Simpan class='btn'>
                            <input type=button value=Batal onclick=self.history.back() class='btn'></td></tr>
          </tbody></table></form>";
     break;
  
  // Form Edit Album  
  case "editalbum":
    $edit=mysql_query("SELECT * FROM album WHERE id_album='$_GET[id]'");
    $r=mysql_fetch_array($edit);

    echo "<h4>Edit Album</h4>
          <form method=POST enctype='multipart/form-data' action=$aksi?module=album&act=update>
          <input type=hidden name=id value='$r[id_album]'>
          <table class='table'><tbody>
          <tr><td>Judul Album</td><td> <input type=text name='jdl_album' value='$r[jdl_album]'></td></tr>
          <tr><td>Gambar</td><td>    <img src='../assets/img_album/kecil_$r[gbr_album]'></td></tr>
          <tr><td>Ganti Gbr</td><td> <input type=file name='fupload' size=30></td></tr>";
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
