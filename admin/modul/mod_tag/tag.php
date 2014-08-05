<?php
session_start();
 if (empty($_SESSION['username']) AND empty($_SESSION['passuser'])){
  echo "<link href='style.css' rel='stylesheet' type='text/css'>
 <center>Untuk mengakses modul, Anda harus login <br>";
  echo "<a href=../../index.php><b>LOGIN</b></a></center>";
}
else{
$aksi="modul/mod_tag/aksi_tag.php";
switch($_GET[act]){
  // Tampil Tag
  default:
    echo "<h4>Kategori</h4>
          <p><a href='?module=tag&act=tambahtag';\" class='btn btn-success'><i class='icon-plus'></i> Tambah Tag</a></p>
          <table class='table table-bordered'><thead>
          <tr><th>No.</th><th>Tag</td><th>#</th></tr></thead>"; 
    $tampil=mysql_query("SELECT * FROM tag ORDER BY id_tag DESC");
    $no=1;
    while ($r=mysql_fetch_array($tampil)){
       echo "<tbody><tr><td width='25'>$no</td>
             <td>$r[nama_tag]</td>
             <td width='40'><a href=?module=tag&act=edittag&id=$r[id_tag] title='Edit'><i class='icon-edit'></i></a>
	               <a href=$aksi?module=tag&act=hapus&id=$r[id_tag] title='Hapus'><i class='icon-trash'></i></a>
             </td></tr>";
      $no++;
    }
    echo "</tbody></table>";
    break;
  
  // Form Tambah Tag
  case "tambahtag":
    echo "<h4>Tambah Tag</h4>
          <form method=POST action='$aksi?module=tag&act=input'>
          <table class='table'><tbody>
          <tr><td>Nama Tag</td><td> <input type=text name='nama_tag' class='input-medium'></td></tr>
          <tr><td colspan=2><input type=submit name=submit value=Simpan class='btn'>
                            <input type=button value=Batal onclick=self.history.back() class='btn'></td></tr>
          </tbody></table></form>";
     break;
  
  // Form Edit Kategori  
  case "edittag":
    $edit=mysql_query("SELECT * FROM tag WHERE id_tag='$_GET[id]'");
    $r=mysql_fetch_array($edit);

    echo "<h4>Edit Tag</h4>
          <form method=POST action=$aksi?module=tag&act=update>
          <input type=hidden name=id value='$r[id_tag]'>
          <table class='table'>
          <tr><td>Nama Tag</td><td> <input type=text name='nama_tag' value='$r[nama_tag]' class='input-medium'></td></tr>
          <tr><td colspan=2><input type=submit value=Update class='btn'>
                            <input type=button value=Batal onclick=self.history.back() class='btn'></td></tr>
          </table></form>";
    break;  
}
}
?>
