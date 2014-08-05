<?php
session_start();
 if (empty($_SESSION['username']) AND empty($_SESSION['passuser'])){
  echo "<link href='style.css' rel='stylesheet' type='text/css'>
 <center>Untuk mengakses modul, Anda harus login <br>";
  echo "<a href=../../index.php><b>LOGIN</b></a></center>";
}
else{
$aksi="modul/mod_templates/aksi_templates.php";
switch($_GET[act]){
  // Tampil Templates
  default:
    echo "<h4>Templates</h4>
          <p><a href='?module=templates&act=tambahtemplates';\" class='btn btn-success'><i class='icon-plus'></i> Tambah Tema</a></p>
          <table class='table table-bordered'><thead>
          <tr>
          <th>No.</th>
          <th>Tema</th>
          <th>Pembuat</th>
          <th>Folder</th>
          <th>Aktif</th>
          <th>#</th>
          </tr></thead>";

    $p      = new Paging;
    $batas  = 15;
    $posisi = $p->cariPosisi($batas);

    $tampil=mysql_query("SELECT * FROM templates ORDER BY id_templates DESC LIMIT $posisi,$batas");

    $no = $posisi+1;
    while ($r=mysql_fetch_array($tampil)){
      echo "<tr><td>$no</td>
                <td>$r[judul]</td>
                <td>$r[pembuat]</td>
                <td>$r[folder]</td>
                <td>$r[aktif]</td>
                <td width='40'><a href=?module=templates&act=edittemplates&id=$r[id_templates] title='Edit'><i class='icon-edit'></i></a>
	                  <a href=$aksi?module=templates&act=aktifkan&id=$r[id_templates] title='Hapus'><i class='icon-trash'></i></a>
		        </tr>";
      $no++;
    }
    echo "</table>";
    $jmldata=mysql_num_rows(mysql_query("SELECT * FROM templates"));
    $jmlhalaman  = $p->jumlahHalaman($jmldata, $batas);
    $linkHalaman = $p->navHalaman($_GET[halaman], $jmlhalaman);

echo "<div class=\"pagination\"><ul> $linkHalaman</ul></div>";
    break;
  
  
  // Form Tambah Templates
  case "tambahtemplates":
    echo "<h4>Tambah Templates</h4>
          <form method=POST action='$aksi?module=templates&act=input'>
          <table class='table'><tbody>
          <tr><td>Nama Templates</td><td> <input type=text name='judul' class='input-medium'></td></tr>
          <tr><td>Pembuat</td><td> <input type=text name='pembuat'></td></tr>
          <tr><td>Folder</td><td> <input type=text name='folder' value='templates/'></td></tr>
          <tr><td colspan=2><input type=submit name=submit value=Simpan class='btn'>
                            <input type=button value=Batal onclick=self.history.back() class='btn'></td></tr>
          </tbody></table></form>";
     break;
  
  // Form Edit Templates 
  case "edittemplates":
    $edit=mysql_query("SELECT * FROM templates WHERE id_templates='$_GET[id]'");
    $r=mysql_fetch_array($edit);

    echo "<h4>Edit Templates</h4>
          <form method=POST action=$aksi?module=templates&act=update>
          <input type=hidden name=id value='$r[id_templates]'>
          <table class='table'><tbody>
          <tr><td width='150'>Nama Templates</td><td> <input type=text name='judul' value='$r[judul]' class='input-medium'></td></tr>
          <tr><td>Pembuat</td><td> <input type=text name='pembuat' value='$r[pembuat]'></td></tr>
          <tr><td>Folder</td><td> <input type=text name='folder' value='$r[folder]'></td></tr>
          <tr><td colspan=2><input type=submit value=Update class='btn'>
                            <input type=button value=Batal onclick=self.history.back() class='btn'></td></tr>
          </tbody></table></form>";
    break;  
}
}
?>
