<?php
session_start();
 if (empty($_SESSION['username']) AND empty($_SESSION['passuser'])){
  echo "<link href='style.css' rel='stylesheet' type='text/css'>
 <center>Untuk mengakses modul, Anda harus login <br>";
  echo "<a href=../../index.php><b>LOGIN</b></a></center>";
}
else{
$aksi="modul/mod_hubungi/aksi_hubungi.php";
switch($_GET[act]){
  // Tampil Hubungi Kami
  default:
    echo "<h4>Hubungi Kami</h4>
          <div class=\"alert alert-success\">
          *) Untuk menjawab/membalas email, klik langsung pada alamat emailnya yang ada di kolom EMAIL.
          </div>
          <table class='table table-bordered'><thead>
          <tr>
		  <th>No.</th>
          <th>Nama</th>
          <th>Email</th>
          <th>Subjek</th>
          <th>Tanggal</th>
          <th>#</th>
		  </tr></thead><tbody>";

    $p      = new Paging;
    $batas  = 10;
    $posisi = $p->cariPosisi($batas);

    $tampil=mysql_query("SELECT * FROM hubungi ORDER BY id_hubungi DESC LIMIT $posisi, $batas");

    $no = $posisi+1;
    while ($r=mysql_fetch_array($tampil)){
      $tgl=tgl_indo($r[tanggal]);
      echo "<tr><td width='25'>$no</td>";
	  if ($r[dibaca]=='Y'){
                echo"<td>$r[nama]</td>";
	  }
	  elseif (($r[dibaca]=='N')){
	  echo"<td><b>$r[nama]</b></td>";
	  }
                echo"<td><a href=?module=hubungi&act=balasemail&id=$r[id_hubungi]>$r[email]</a></td>
                <td>$r[subjek]</td>
                <td>$tgl</a></td>
                <td width='40'><a href=$aksi?module=hubungi&act=hapus&id=$r[id_hubungi] title='Hapus'><i class='icon-trash'></i></a>
                </td></tr>";
    $no++;
    }
    echo "</tbody></table>";
    $jmldata=mysql_num_rows(mysql_query("SELECT * FROM hubungi"));
    $jmlhalaman  = $p->jumlahHalaman($jmldata, $batas);
    $linkHalaman = $p->navHalaman($_GET[halaman], $jmlhalaman);

    echo "<div class=\"pagination\"><ul> $linkHalaman</ul></div>";
    break;

  case "balasemail":
    $tampil = mysql_query("SELECT * FROM hubungi WHERE id_hubungi='$_GET[id]'");
    $r      = mysql_fetch_array($tampil);
	$query = mysql_query("UPDATE hubungi SET dibaca='Y' WHERE id_hubungi='$_GET[id]'");

    echo "<h4>Reply Email</h4>
          <form method=POST action='?module=hubungi&act=kirimemail'>
          <table class='table'><tbody>
          <tr><td>Kepada</td><td> : <input type=text name='email' size=30 value='$r[email]'></td></tr>
          <tr><td>Subjek</td><td> : <input type=text name='subjek' size=50 value='Re: $r[subjek]'></td></tr>
          <tr><td>Pesan</td><td> <textarea name='pesan' class='ckeditor' style='width: 600px; height: 180px;'><br><br><br><br>     
  ---------------------------------------------------------------------------------------------------------------------
  $r[pesan]</textarea></td></tr>
          <tr><td colspan=2><input type=submit value=Kirim class='btn'>
                            <input type=button value=Batal onclick=self.history.back() class='btn'></td></tr>
          </tbody></table></form>";
     break;
    
  case "kirimemail":
    mail($_POST[email],$_POST[subjek],$_POST[pesan],"From: redaksi@bukulokomedia.com");
    echo "<h2>Status Email</h2>
          <p>Email telah sukses terkirim ke tujuan</p>
          <p>[ <a href=javascript:history.go(-2)>Kembali</a> ]</p>";	 		  
    break;  
}
}
?>
