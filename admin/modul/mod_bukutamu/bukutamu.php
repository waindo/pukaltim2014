<?php
session_start();
 if (empty($_SESSION['username']) AND empty($_SESSION['passuser'])){
  echo "<link href='style.css' rel='stylesheet' type='text/css'>
 <center>Untuk mengakses modul, Anda harus login <br>";
  echo "<a href=../../index.php><b>LOGIN</b></a></center>";
}
else{
$aksi="modul/mod_bukutamu/aksi_bukutamu.php";
switch($_GET[act]){
  // Tampil bukutamu
  default:
    echo "<h4>Bukutamu</h4>
          <table class='table table-bordered'><thead>
          <tr>
		  <td>No</td>
          <td>Nama</td>
          <td>Email</td>
		  <td>Pesan</td>
		  <td>Waktu</td>
		  <td>IP</td>
          <td>Publis</td>
          <td>#</td></tr></thead>";

    $p      = new Paging;
    $batas  = 10;
    $posisi = $p->cariPosisi($batas);

    $tampil=mysql_query("SELECT * FROM bukutamu ORDER BY id_bukutamu DESC LIMIT $posisi,$batas");

    $no = $posisi+1;
    while ($r=mysql_fetch_array($tampil)){
      echo "<tr><td width='25'>$no</td>
                <td width='80'>$r[pengirim]</td>
                <td>$r[email]</td>
				<td>$r[pesan]</td>
				<td>".tgl_indo($r['tgl_kirim'])."</td>
				<td>$r[ip]</td>
                <td width='100'>";
				if ($r['publis']=='N'){
				echo"<span class=\"label label-important\">N</span> <a href='$aksi?module=bukutamu&act=publis&id=$r[id_bukutamu]'><span class=\"label label-success\">Publis</span></a>";
				}
				else{
				echo"<span class=\"label label-success\">Y</span> <a href='$aksi?module=bukutamu&act=unpublis&id=$r[id_bukutamu]'><span class=\"label label-important\">Unpublis</span></a>";
				}
				
				echo"</td>
                <td width='20'><a href=$aksi?module=bukutamu&act=hapus&id=$r[id_bukutamu] title='Hapus'><i class='icon-trash'></i></a>
		        </tr>";
      $no++;
    }
    echo "</table>";
    $jmldata=mysql_num_rows(mysql_query("SELECT * FROM bukutamu"));
    $jmlhalaman  = $p->jumlahHalaman($jmldata, $batas);
    $linkHalaman = $p->navHalaman($_GET[halaman], $jmlhalaman);

echo "<div class=\"pagination\"> <ul>$linkHalaman</ul></div>";
    break;
  
  case "editbukutamu":
    $edit = mysql_query("SELECT * FROM bukutamu WHERE id_bukutamu='$_GET[id]'");
    $r    = mysql_fetch_array($edit);

    echo "<h4>Edit bukutamu</h4>
          <form method=POST action=$aksi?module=bukutamu&act=update>
          <input type=hidden name=id value=$r[id_bukutamu]>
          <table class='list'><tbody>
          <tr><td>Nama</td><td>     : <input type=text name='nama_bukutamu' size=30 value='$r[nama_bukutamu]'></td></tr>
          <tr><td>Website</td><td>  : <input type=text name='url' size=30 value='$r[url]'></td></tr>
          <tr><td>Isi bukutamu</td><td> <textarea name='isi_bukutamu' id='loko' style='width: 600px; height: 150px;'>$r[isi_bukutamu]</textarea></td></tr>";

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
          </tbody></table></form>";
    break;  
}
}
?>
