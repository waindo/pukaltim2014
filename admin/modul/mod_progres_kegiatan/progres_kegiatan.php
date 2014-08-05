<?php
session_start();
 if (empty($_SESSION['username']) AND empty($_SESSION['passuser'])){
  echo "<link href='style.css' rel='stylesheet' type='text/css'>
 <center>Untuk mengakses modul, Anda harus login <br>";
  echo "<a href=../../index.php><b>LOGIN</b></a></center>";
}
else{
$aksi="modul/mod_progres_kegiatan/aksi_progres_kegiatan.php";
switch($_GET[act]){
	
  // Tampil Progres Kegiatan
  default:
  	
    echo "<h4>Progres Kegiatan SDA</h4>
          <p><input type=button value='Tambah Progres' 
          onclick=\"window.location.href='?module=progressda&act=tambahprogres&id=$_GET[id]';\" class='btn btn-success'>
		  </p>
          <table  class='table table-bordered'><thead>
          <tr>
		  <th>No.</td>
          <th>Bulan</th>
          <th>Rencana</th>
		  <th>Realisasi</th>
		  <th>Deviasi</th>
		  <th>Keuangan</th>
          <th>#</th></tr></thead><tbody>";
	
	$tampil=mysql_query("SELECT * FROM progres_kegiatan_sda WHERE id_kegiatan = $_GET[id] ORDER BY bulan ASC"); 
    $no=1;
    while ($r=mysql_fetch_array($tampil)){
	   $bln = getBulan($r[bulan]);
       echo "<tr><td width='25'>$no</td>
             <td>$bln</td>
             <td>$r[rencana]</td>
             <td>$r[realisasi]</td>
             <td>$r[deviasi]</td>
             <td>$r[keuangan]</td>
             <td width='40'><a href=?module=progressda&act=editprogres&id=$r[id_progres] title='Edit'><i class='icon-edit'></i></a> 
			 				<a href=$aksi?module=progressda&act=hapus&id=$r[id_progres]&kegiatan=$r[id_kegiatan] title='Hapus'><i class='icon-trash'></i></a>
             </td></tr>";
      $no++;
    }
    echo "<tbody></table>";
    break;
  
  
  // Form Tambah Progres Kegiatan
  case "tambahprogres":
    echo "<h4>Tambah Progres Kegiatan</h4>
          <form method=POST action='$aksi?module=progressda&act=input'>
		  <input type='hidden' name='id' value='$_GET[id]'>
          <table class='table'>
          <tr><td width='100px'>Bulan</td><td> : <select name='bulan'>
		  <option value='1'>Januari</option>
		  <option value='2'>Februari</option>
		  <option value='3'>Maret</option>
		  <option value='4'>April</option>
		  <option value='5'>Mei</option>
		  <option value='6'>Juni</option>
		  <option value='7'>Juli</option>
		  <option value='8'>Agustus</option>
		  <option value='9'>September</option>
		  <option value='10'>Oktober</option>
		  <option value='11'>November</option>
		  <option value='12'>Desember</option>
		  </select></td></tr>
          <tr><td>Rencana (Progres Fisik)</td><td> : <input type=text name='rencana' class='input-small'> %</td></tr>
          <tr><td>Realisasi (Progres Fisik)</td><td> : <input type=text name='realisasi' class='input-small'> %</td></tr>
		  <tr><td>Deviasi (Progres Fisik)</td><td> : <input type=text name='deviasi' class='input-small'> %</td></tr>
		  <tr><td>Keuangan</td><td> : <input type=text name='keuangan' class='input-small'> %</td></tr>
          <tr><td colspan=2><input type=submit name=submit value=Simpan class='btn'>
                            <input type=button value=Batal onclick=self.history.back() class='btn'></td></tr>
          </table></form>
		  <div class='pagination'>*) Untuk koma menggunakan titik</div>";
     break;
  
  // Form Edit Progres Kegiatan  
  case "editprogres":
    $edit=mysql_query("SELECT * FROM progres_kegiatan_sda WHERE id_progres='$_GET[id]'");
    $r=mysql_fetch_array($edit);
	$bln = getBulan($r[bulan]);
    echo "<h4>Edit Progres Kegiatan</h4>
          <form method=POST action=$aksi?module=progressda&act=update>
          <input type=hidden name=id value='$r[id_progres]'>
		  <input type=hidden name=kegiatan value='$r[id_kegiatan]'>
         <table class='table'>
          <tr><td width='100px'>Bulan</td><td> : <select name='bulan' disabled>
		  <option value='$r[bulan]'>$bln</option>
		  </select></td></tr>
          <tr><td>Rencana (Progres Fisik)</td><td> : <input type=text name='rencana' value='$r[rencana]' class='input-small'> %</td></tr>
          <tr><td>Realisasi (Progres Fisik)</td><td> : <input type=text name='realisasi' value='$r[realisasi]' class='input-small'> %</td></tr>
		  <tr><td>Deviasi (Progres Fisik)</td><td> : <input type=text name='Deviasi' value='$r[deviasi]' class='input-small'> %</td></tr>
		  <tr><td>Keuangan</td><td> : <input type=text name='keuangan' value='$r[keuangan]' class='input-small'> %</td></tr>
          <tr><td colspan=2><input type=submit name=submit value=Simpan class='btn'>
                            <input type=button value=Batal onclick=self.history.back() class='btn'></td></tr>
          </table></form>";
    break;  
}
}
?>
