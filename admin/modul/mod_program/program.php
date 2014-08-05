<?php
session_start();
 if (empty($_SESSION['username']) AND empty($_SESSION['passuser'])){
  echo "<link href='style.css' rel='stylesheet' type='text/css'>
 <center>Untuk mengakses modul, Anda harus login <br>";
  echo "<a href=../../index.php><b>LOGIN</b></a></center>";
}
else{
$aksi="modul/mod_program/aksi_program.php";
switch($_GET[act]){
  // Tampil Program
  default:
    echo "<h4>Program SDA</h4>
          <p><input type=button value='Tambah Program' 
          onclick=\"window.location.href='?module=programsda&act=tambahprogram';\" class='btn btn-success'>
		  </p>
          <table  class='table table-bordered'><thead>
          <tr>
		  <th>No.</td>
          <th>Kategori</th>
          <th>Nama Program</th>
          <th>Tahun</th>
		  <th>Aktif</th>
          <th>#</th></tr></thead><tbody>"; 
    $tampil=mysql_query("SELECT * FROM program_kegiatan ORDER BY id_program DESC");
    $no=1;
    while ($r=mysql_fetch_array($tampil)){
       echo "<tr><td width='25'>$no</td>
             <td>$r[kategori]</td>
             <td>$r[nama_program]</td>
             <td>$r[tahun]</td>
             <td>$r[aktif]</td>
             <td width='40'><a href=?module=programsda&act=editprogram&id=$r[id_program] title='Edit'><i class='icon-edit'></i></a>
             </td></tr>";
      $no++;
    }
    echo "<tbody></table>";
    echo "<div id=paging style='color:red;'>*) Data Program tidak bisa dihapus, tapi bisa di non-aktifkan melalui Edit Program.</div><br>";
    break;
  
  
  // Form Tambah Program
  case "tambahprogram":
    echo "<h4>Tambah Program</h4>
          <form method=POST action='$aksi?module=programsda&act=input'>
          <table class='table'>
          <tr><td>Kategori Program</td><td> : <select name='kategori'>
		  									  <option value='konstruksi'>Konstruksi</option>
											  <option value='perencanaan'>Perencanaan</option>
											  </select></td></tr>
          <tr><td>Nama Program</td><td> : <input type=text name='nama_program' class='input-xxlarge'></td></tr>
          <tr><td>Tahun</td><td> : <input type=text name='tahun' class='input-small'></td></tr>
          <tr><td>Aktif</td><td> : <input type=radio name='aktif' value='Y' checked>Y <input type=radio name='aktif' value='N'>N</td></tr>
          <tr><td colspan=2><input type=submit name=submit value=Simpan class='btn'>
                            <input type=button value=Batal onclick=self.history.back() class='btn'></td></tr>
          </table></form>";
     break;
  
  // Form Edit Program  
  case "editprogram":
    $edit=mysql_query("SELECT * FROM program_kegiatan WHERE id_program='$_GET[id]'");
    $r=mysql_fetch_array($edit);

    echo "<h4>Edit Program</h4>
          <form method=POST action=$aksi?module=programsda&act=update>
          <input type=hidden name=id value='$r[id_program]'>
          <table class='table'>
          <tr><td>Kategori Program</td><td> : <select name='kategori'>
		  									  	<option value='$r[kategori]' selected>$r[kategori]</option>
												<option value='konstruksi'>Konstruksi</option>
												<option value='perencanaan'>Perencanaan</option>
											  </select></td></tr>
		  <tr><td>Nama Program</td><td> : <input type=text name='nama_program' class='input-xxlarge' value='$r[nama_program]'></td></tr>
		  <tr><td>Tahun</td><td> : <input type=text name='tahun' class='input-small' value='$r[tahun]'></td></tr>";
    if ($r[aktif]=='Y'){
      echo "<tr><td>Aktif</td> <td> : <input type=radio name='aktif' value='Y' checked>Y  
                                      <input type=radio name='aktif' value='N'> N</td></tr>";
    }
    else{
      echo "<tr><td>Aktif</td> <td> : <input type=radio name='aktif' value='Y'>Y  
                                      <input type=radio name='aktif' value='N' checked>N</td></tr>";
    }

    echo "<tr><td colspan=2><input type=submit value=Update>
                            <input type=button value=Batal onclick=self.history.back()></td></tr>
          </table></form>";
    break;  
}
}
?>
