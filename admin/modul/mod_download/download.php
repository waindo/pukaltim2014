<?php
session_start();
 if (empty($_SESSION['username']) AND empty($_SESSION['passuser'])){
  echo "<link href='style.css' rel='stylesheet' type='text/css'>
 <center>Untuk mengakses modul, Anda harus login <br>";
  echo "<a href=../../index.php><b>LOGIN</b></a></center>";
}
else{
$aksi="modul/mod_download/aksi_download.php";
switch($_GET[act]){
  // Tampil Download
  default:
    echo "<h4>Download</h4>
          <p><a href='?module=download&act=tambahdownload' class='btn btn-success'>Tambah File</a></p>
          <table class='table table-bordered'><thead>
          <tr><th>No.</th>
          <th>Judul</th>
          <th>Nama file</th>
          <th>Tgl. posting</th>
          <th class='center'>#</th></tr></thead><tbody>";

    $p      = new Paging;
    $batas  = 15;
    $posisi = $p->cariPosisi($batas);

    $tampil=mysql_query("SELECT * FROM download ORDER BY id_download DESC LIMIT $posisi,$batas");

    $no = $posisi+1;
    while ($r=mysql_fetch_array($tampil)){
      $tgl=tgl_indo($r[tgl_posting]);
      echo "<tr><td width='25'>$no</td>
                <td>$r[judul]</td>
                <td>$r[nama_file]</td>
                <td>$tgl</td>
                <td width='40'><a href=?module=download&act=editdownload&id=$r[id_download] title='Edit'><i class='icon-edit'></i></a>
	                  <a href=$aksi?module=download&act=hapus&id=$r[id_download] title='Hapus'><i class='icon-trash'></i></a>
		        </tr>";
    $no++;
    }
    echo "</tbody></table>";
    $jmldata=mysql_num_rows(mysql_query("SELECT * FROM download"));
    $jmlhalaman  = $p->jumlahHalaman($jmldata, $batas);
    $linkHalaman = $p->navHalaman($_GET[halaman], $jmlhalaman);

    echo "<div class=\"pagination\"><ul> $linkHalaman</ul></div>";   
    break;
  
  case "tambahdownload":
    echo "<h4>Tambah Download</h4>
          <form method=POST action='$aksi?module=download&act=input' enctype='multipart/form-data'>
          <table class='table'><tbody>
          <tr><td>Judul</td><td> <input type=text name='judul' class='input-xxlarge'></td></tr>
          <tr><td>File</td><td> <input type=file name='fupload' ></td></tr>
          <tr><td colspan=2><input type=submit value=Simpan class='btn'>
                            <input type=button value=Batal onclick=self.history.back() class='btn'></td></tr>
          </tbody></table></form><br><br><br>";
     break;
    
  case "editdownload":
    $edit = mysql_query("SELECT * FROM download WHERE id_download='$_GET[id]'");
    $r    = mysql_fetch_array($edit);

    echo "<h4>Edit Download</h4>
          <form method=POST enctype='multipart/form-data' action=$aksi?module=download&act=update>
          <input type=hidden name=id value=$r[id_download]>
          <table class='table'><tbody>
          <tr><td>Judul</td><td>     <input type=text name='judul' value='$r[judul]' class='input-xxlarge'></td></tr>
          <tr><td>File</td><td>   $r[nama_file]</td></tr>
          <tr><td>Ganti File</td><td> <input type=file name='fupload'> *)</td></tr>
          <tr><tdcolspan=2>*) Apabila file tidak diubah, dikosongkan saja.</td></tr>
          <tr><td colspan=2><input type=submit value=Update class='btn'>
                            <input type=button value=Batal onclick=self.history.back() class='btn'></td></tr>
          </tbody></table></form>";
    break;  
}
}
?>
