<?php
session_start();
 if (empty($_SESSION['username']) AND empty($_SESSION['passuser'])){
  echo "<link href='style.css' rel='stylesheet' type='text/css'>
 <center>Untuk mengakses modul, Anda harus login <br>";
  echo "<a href=../../index.php><b>LOGIN</b></a></center>";
}
else{
$aksi="modul/mod_banner/aksi_banner.php";
switch($_GET[act]){
  // Tampil Banner
  default:
    echo "<h4>Banner</h4>
          <p><a href='?module=banner&act=tambahbanner' class='btn btn-success'>Tambah Banner</a></p>
          <table class='table table-bordered'><thead>
          <tr>
		  <th>No.</th>
          <th>Gambar</th>
          <th>Judul</th>
          <th>Url</th>
          <th width=\"100\">tgl. posting</th>
          <th width='40'>#</th>
		  </tr></thead><tbody>";
    $tampil=mysql_query("SELECT * FROM banner ORDER BY id_banner DESC");
    $no=1;
    while ($r=mysql_fetch_array($tampil)){
      $tgl=tgl_indo($r[tgl_posting]);
      echo "<tr><td width='25'>$no</td>
                <td><img src='../foto_banner/$r[gambar]'></td>
                <td>$r[judul]</td>
                <td><a href=$r[url] target=_blank>$r[url]</a></td>
                <td>$tgl</td>
                <td><a href=?module=banner&act=editbanner&id=$r[id_banner] title='Edit'><i class='icon-edit'></i></a>
	                  <a href='$aksi?module=banner&act=hapus&id=$r[id_banner]&namafile=$r[gambar]' title='Hapus'><i class='icon-trash'></i></a>
		        </tr>";
    $no++;
    }
    echo "</tbody></table>";
    break;
  
  case "tambahbanner":
    echo "<h4>Tambah Banner</h4>
          <form method=POST action='$aksi?module=banner&act=input' enctype='multipart/form-data'>
          <table class='table'><tbody>
          <tr><td>Judul</td><td>  : <input type=text name='judul' size=30></td></tr>
          <tr><td>Url</td><td>   : <input type=text name='url' size=50 value='http://'></td></tr>
          <tr><td>Gambar</td><td> : <input type=file name='fupload' size=40></td></tr>
          <tr><td colspan='2'><input type=submit value=Simpan class='btn'>
                            <input type=button value=Batal onclick=self.history.back() class='btn'></td></tr>
          </tbody></table></form><br><br><br>";
     break;
    
  case "editbanner":
    $edit = mysql_query("SELECT * FROM banner WHERE id_banner='$_GET[id]'");
    $r    = mysql_fetch_array($edit);

    echo "<h4>Edit Banner</h4>
          <form method=POST enctype='multipart/form-data' action=$aksi?module=banner&act=update>
          <input type=hidden name=id value=$r[id_banner]>
          <table class='table'><tbody>
          <tr><td>Judul</td><td>     : <input type=text name='judul' size=30 value='$r[judul]'></td></tr>
          <tr><td>Url</td><td>      : <input type=text name='url' size=50 value='$r[url]'></td></tr>
          <tr><td>Gambar</td><td>    : <img src='../foto_banner/$r[gambar]'></td></tr>
          <tr><td>Ganti Gbr</td><td> : <input type=file name='fupload' size=30> *)</td></tr>
          <tr><td colspan=2>*) Apabila gambar tidak diubah, dikosongkan saja.</td></tr>
          <tr><td colspan=2><input type=submit value=Update class='btn'>
                            <input type=button value=Batal onclick=self.history.back() class='btn'></td></tr>
          </tbody></table></form>";
    break;  
}
}
?>
