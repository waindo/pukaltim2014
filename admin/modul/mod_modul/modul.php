<?php
session_start();
 if (empty($_SESSION['username']) AND empty($_SESSION['passuser'])){
  echo "<link href='style.css' rel='stylesheet' type='text/css'>
 <center>Untuk mengakses modul, Anda harus login <br>";
  echo "<a href=../../index.php><b>LOGIN</b></a></center>";
}
else{
$aksi="modul/mod_modul/aksi_modul.php";
switch($_GET[act]){
  // Tampil Modul
  default:
    echo "<h4>Modul</h4>
          <p><a href='?module=modul&act=tambahmodul';\" class='btn btn-success'><i class='icon-plus'></i> Tambah Modul</a></p>
          *) Apabila PUBLISH = Y, maka Modul ditampilkan di halaman pengunjung. <br />
          **) Apabila AKTIF = Y, maka Modul ditampilkan di halaman administrator pada daftar menu yang berada di bagian kiri.
          <table class='table table-bordered'><thead> 
          <tr>
          <th>No</th>
          <th>Nama modul</th>
          <th>Link</th>
          <th>Publish</th>
          <th>Aktif</th>
          <th>Status</th>
          <th width='160'>#</th>
          </tr></thead><tbody>";
    $tampil=mysql_query("SELECT * FROM modul ORDER BY urutan");
    while ($r=mysql_fetch_array($tampil)){
      echo "
			<tr><td width='25'>$r[urutan]</td>
            <td>$r[nama_modul]</td>
            <td><a href=$r[link]>$r[link]</a></td>
            <td>$r[publish]</td>
            <td>$r[aktif]</td>
            <td>$r[status]</td>
            <td width='85'><a href=?module=modul&act=editmodul&id=$r[id_modul] class='btn btn-primary'><i class='icon-edit'></i> Edit</a>
	              <a href=$aksi?module=modul&act=hapus&id=$r[id_modul] class='btn btn-danger'><i class='icon-trash'></i> Hapus</a>
            </td></tr><tbody>";
    }
    echo "</table>";
    break;

  case "tambahmodul":
    echo "<h2>Tambah Modul</h2>
          <form method=POST action='$aksi?module=modul&act=input'>
          <table class='table'><tbody>
          <tr><td>Nama Modul</td> <td> <input type=text name='nama_modul'></td></tr>
          <tr><td>Link</td>       <td> <input type=text name='link' size=30></td></tr>
          <tr><td>Publish</td>    <td> <input type=radio name='publish' value='Y' checked>Y  
                                         <input type=radio name='publish' value='N'> N</td></tr>
          <tr><td>Aktif</td>      <td> <input type=radio name='aktif' value='Y' checked>Y  
                                         <input type=radio name='aktif' value='N'> N</td></tr>
          <tr><td>Status</td>     <td> <input type=radio name='status' value='admin' checked>admin 
                                         <input type=radio name='status' value='user'>user</td></tr>
          <tr><td colspan=2><input type=submit value=Simpan class='btn'>
                            <input type=button value=Batal onclick=self.history.back() class='btn'></td></tr>
          </tbody></table></form>";
     break;
 
  case "editmodul":
    $edit = mysql_query("SELECT * FROM modul WHERE id_modul='$_GET[id]'");
    $r    = mysql_fetch_array($edit);

    echo "<h2>Edit Modul</h2>
          <form method=POST action=$aksi?module=modul&act=update>
          <input type=hidden name=id value='$r[id_modul]'>
          <table  class='table'><tbody>
          <tr><td>Nama Modul</td>     <td> <input type=text name='nama_modul' value='$r[nama_modul]'></td></tr>
          <tr><td>Link</td>     <td> <input type=text name='link' size=30 value='$r[link]'></td></tr>";
    if ($r[publish]=='Y'){
      echo "<tr><td>Publish</td> <td> <input type=radio name='publish' value='Y' checked>Y  
                                        <input type=radio name='publish' value='N'> N</td></tr>";
    }
    else{
      echo "<tr><td>Publish</td> <td> <input type=radio name='publish' value='Y'>Y  
                                        <input type=radio name='publish' value='N' checked>N</td></tr>";
    }
    if ($r[aktif]=='Y'){
      echo "<tr><td>Aktif</td> <td> <input type=radio name='aktif' value='Y' checked>Y  
                                      <input type=radio name='aktif' value='N'> N</td></tr>";
    }
    else{
      echo "<tr><td>Aktif</td> <td> <input type=radio name='aktif' value='Y'>Y  
                                      <input type=radio name='aktif' value='N' checked>N</td></tr>";
    }
    if ($r[status]=='user'){
      echo "<tr><td>Status</td> <td> <input type=radio name='status' value='user' checked>user  
                                       <input type=radio name='status' value='admin'> admin</td></tr>";
    }
    else{
      echo "<tr><td>Status</td> <td> <input type=radio name='status' value='user'>user  
                                       <input type=radio name='status' value='admin' checked>admin</td></tr>";
    }
    echo "<tr><td>Urutan</td>       <td> <input type=text name='urutan' size=1 value='$r[urutan]'></td></tr>
          <tr><td colspan=2><input type=submit value=Update class='btn'>
                            <input type=button value=Batal onclick=self.history.back() class='btn'></td></tr>
          </tbody></table></form>";
    break;  
}
}
?>
