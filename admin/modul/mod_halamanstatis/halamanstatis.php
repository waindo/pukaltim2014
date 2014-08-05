<?php
session_start();
 if (empty($_SESSION['username']) AND empty($_SESSION['passuser'])){
  echo "<link href='style.css' rel='stylesheet' type='text/css'>
 <center>Untuk mengakses modul, Anda harus login <br>";
  echo "<a href=../../index.php><b>LOGIN</b></a></center>";
}
else{
$aksi="modul/mod_halamanstatis/aksi_halamanstatis.php";
switch($_GET[act]){
  // Tampil Halaman Statis
  default:
    echo "<h4>Halaman Statis</h4>
          <p>
		  <a href='?module=halamanstatis&act=tambahhalamanstatis';\" class='btn btn-success'>Tambah Halaman</a></p>
          <table class='table table-bordered'><thead>
          <tr><th>No.</th>
          <th>Judul</th>
		  <th>Link Seo</th>
          <th>#</th></tr></thead><tbody>";
	$p      = new Paging;
    $batas  = 8;
    $posisi = $p->cariPosisi($batas);
    $tampil = mysql_query("SELECT * FROM halamanstatis ORDER BY id_halaman DESC LIMIT $posisi,$batas");
  
    $no = 1;
    while($r=mysql_fetch_array($tampil)){
      $tgl_posting=tgl_indo($r[tgl_posting]);

      // membuat info link statis untuk halaman statis
      $huruf_kecil  = strtolower($r[judul]);
      $pisah_huruf  = explode(" ",$huruf_kecil);
      $gabung_huruf = implode("",$pisah_huruf);

      echo "<tr><td width='25'>$no</td>
                <td>$r[judul]</td>
				<td>page-$r[id_halaman]-$r[judul_seo].html</td>
		        <td width='40'><a href=?module=halamanstatis&act=edithalamanstatis&id=$r[id_halaman] title='Edit'><i class='icon-edit'></i> </a></a>
		                <a href='$aksi?module=halamanstatis&act=hapus&id=$r[id_halaman]&namafile=$r[gambar]' title='Hapus'><i class='icon-trash'></i></a></td>
		        </tr>";
      $no++;
    }
    echo "</tbody></table>";
    $jmldata = mysql_num_rows(mysql_query("SELECT * FROM halamanstatis"));
    $jmlhalaman  = $p->jumlahHalaman($jmldata, $batas);
    $linkHalaman = $p->navHalaman($_GET[halaman], $jmlhalaman);

echo "<div class=\"pagination\"><ul> $linkHalaman</ul></div>";
    break;

  case "tambahhalamanstatis":
    echo "<h4>Tambah Halaman Statis</h4>
          <form method=POST action='$aksi?module=halamanstatis&act=input' enctype='multipart/form-data'>
          <table class='table'><tbody>
          <tr><td>Judul</td>     <td> <input type=text name='judul' class='input-xxlarge'></td></tr>
          <tr><td>Isi Halaman</td>  <td> <textarea name='isi_halaman' class='ckeditor' style='width: 800px; height: 350px;'></textarea></td></tr>
          <tr><td>Gambar</td>  <td> <input type=file name='fupload' size=40> 
                                          <br>Tipe gambar harus JPG/JPEG dan ukuran lebar maks: 400 px</td></tr>
          <tr><td colspan=2><input type=submit value=Simpan class='btn'>
                            <input type=button value=Batal onclick=self.history.back() class='btn'></td></tr>
          </tbody></table></form>";
     break;
    
  case "edithalamanstatis":
    $edit = mysql_query("SELECT * FROM halamanstatis WHERE id_halaman='$_GET[id]'");
    $r    = mysql_fetch_array($edit);

    echo "<h4>Edit Halaman Statis</h4>
          <form method=POST enctype='multipart/form-data' action=$aksi?module=halamanstatis&act=update>
          <input type=hidden name=id value=$r[id_halaman]>
          <table class='table'><tbody>
          <tr><td width=70>Judul</td>  <td> <input type=text name='judul' size=60 value='$r[judul]' class='input-xxlarge'></td></tr>
          <tr><td>Isi Halaman</td>   <td> <textarea name='isi_halaman' class='ckeditor' style='width: 800px; height: 350px;'>$r[isi_halaman]</textarea></td></tr>
          <tr><td>Gambar</td>       <td> ";
          if ($r[gambar]!=''){
              echo "<img src='../foto_banner/$r[gambar]'>";  
          }
    echo "</td></tr>
          <tr><td>Ganti Gbr</td>    <td> <input type=file name='fupload' size=40> *)</td></tr>
          <tr><td colspan=2>*) Apabila gambar tidak diubah, dikosongkan saja.</td></tr>";

    echo  "<tr><td colspan=2><input type=submit value=Update class='btn'>
                            <input type=button value=Batal onclick=self.history.back() class='btn'></td></tr>
         </table></form>";
    break;  
}

}
?>
