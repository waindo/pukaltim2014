<?php    
session_start();
 if (empty($_SESSION['username']) AND empty($_SESSION['passuser'])){
  echo "<link href='style.css' rel='stylesheet' type='text/css'>
 <center>Untuk mengakses modul, Anda harus login <br>";
  echo "<a href=../../index.php><b>LOGIN</b></a></center>";
}
else{

function GetCheckboxes($table, $key, $Label, $Nilai='') {
  $s = "select * from $table order by nama_tag";
  $r = mysql_query($s);
  $_arrNilai = explode(',', $Nilai);
  $str = '';
  while ($w = mysql_fetch_array($r)) {
    $_ck = (array_search($w[$key], $_arrNilai) === false)? '' : 'checked';
    $str .= "<input type=checkbox name='".$key."[]' value='$w[$key]' $_ck>$w[$Label] ";
  }
  return $str;
}

$aksi="modul/mod_artikel/aksi_artikel.php";
switch($_GET[act]){
  // Tampil Artikel
  default:
    echo "<h4>Artikel</h4>";
	echo" <p><a href='?module=artikel&act=tambahartikel';\" class='btn btn-success'>Tambah artikel</a>
	<a href='?module=kategori';\" class='btn btn-success'>Kategori</a> <a href='?module=tag';\" class='btn btn-success'>Tag</a>
	</p>
		  <p><form method=get action='$_SERVER[PHP_SELF]'>
          <input type=hidden name=module value=artikel>
          Masukkan Judul artikel : <input type=text name='kata'> <input type=submit value=Cari class='btn'>
          </form></p>";
    if (empty($_GET['kata'])){
    echo "<table class='table table-bordered'><thead>  
          <tr><th>No.</th>
          <th>Judul</th>
          <th>Tgl. posting</th>
          <th>#</th>
          </tr></thead>";

    $p      = new Paging;
    $batas  = 10;
    $posisi = $p->cariPosisi($batas);

    if ($_SESSION[leveluser]=='admin'){
      $tampil = mysql_query("SELECT * FROM artikel ORDER BY id_artikel DESC LIMIT $posisi,$batas");
    }
    else{
      $tampil=mysql_query("SELECT * FROM artikel 
                           WHERE username='$_SESSION[namauser]'       
                           ORDER BY id_artikel DESC LIMIT $posisi,$batas");
    }
  
    $no = $posisi+1;
    while($r=mysql_fetch_array($tampil)){
      $tgl_posting=tgl_indo($r[tanggal]);
      echo "<tr><td width='25'>$no</td>
                <td>$r[judul]</td>
                <td>$tgl_posting</td>
		            <td width='40'><a href=?module=artikel&act=editartikel&id=$r[id_artikel] title='Edit'><i class='icon-edit'></i></a>
		                <a href='$aksi?module=artikel&act=hapus&id=$r[id_artikel]&namafile=$r[gambar]' title='Hapus'><i class='icon-trash'></i> </a></td>
		        </tr>";
      $no++;
    }
    echo "</table>";

    if ($_SESSION[leveluser]=='admin'){
      $jmldata = mysql_num_rows(mysql_query("SELECT * FROM artikel"));
    }
    else{
      $jmldata = mysql_num_rows(mysql_query("SELECT * FROM artikel WHERE username='$_SESSION[namauser]'"));
    }  
    $jmlhalaman  = $p->jumlahHalaman($jmldata, $batas);
    $linkHalaman = $p->navHalaman($_GET[halaman], $jmlhalaman);

echo "<div class=\"pagination\"><ul> $linkHalaman</ul></div>";
 
    break;    
    }
    else{
    echo "<table class='table table-bordered'><thead>  
          <tr><th>No.</th>
          <th>Judul</th>
          <th>Tgl. posting</th>
          <th>#</th>
          </tr></thead>";

    $p      = new Paging9;
    $batas  = 10;
    $posisi = $p->cariPosisi($batas);

    if ($_SESSION[leveluser]=='admin'){
      $tampil = mysql_query("SELECT * FROM artikel WHERE judul LIKE '%$_GET[kata]%' ORDER BY id_artikel DESC LIMIT $posisi,$batas");
    }
    else{
      $tampil=mysql_query("SELECT * FROM artikel 
                           WHERE username='$_SESSION[namauser]'
                           AND judul LIKE '%$_GET[kata]%'       
                           ORDER BY id_artikel DESC LIMIT $posisi,$batas");
    }
  
    $no = $posisi+1;
    while($r=mysql_fetch_array($tampil)){
      $tgl_posting=tgl_indo($r[tanggal]);
      echo "<tr><td>$no</td>
                <td>$r[judul]</td>
                <td>$tgl_posting</td>
		            <td><a href=?module=artikel&act=editartikel&id=$r[id_artikel] class='btn btn-primary'><i class='icon-edit'></i> Edit</a>
		                <a href='$aksi?module=artikel&act=hapus&id=$r[id_artikel]&namafile=$r[gambar]' class='btn btn-danger'><i class='icon-trash'></i> Hapus</a></td>
		        </tr>";
      $no++;
    }
    echo "</table>";

    if ($_SESSION[leveluser]=='admin'){
      $jmldata = mysql_num_rows(mysql_query("SELECT * FROM artikel WHERE judul LIKE '%$_GET[kata]%'"));
    }
    else{
      $jmldata = mysql_num_rows(mysql_query("SELECT * FROM artikel WHERE username='$_SESSION[namauser]' AND judul LIKE '%$_GET[kata]%'"));
    }  
    $jmlhalaman  = $p->jumlahHalaman($jmldata, $batas);
    $linkHalaman = $p->navHalaman($_GET[halaman], $jmlhalaman);

echo "<div class=\"pagination\"><ul> $linkHalaman</ul></div>";
 
    break;    
    }

  
  case "tambahartikel":
    echo "<h4>Tambah artikel</h4>
          <form method=POST action='$aksi?module=artikel&act=input' enctype='multipart/form-data'>
          <table class='table'><tbody>
          <tr><td>Judul</td>     <td><input type=text name='judul' class='input-xxlarge'></td></tr>
          <tr><td>Kategori</td>  <td> 
          <select name='kategori'>
            <option value=0 selected>- Pilih Kategori -</option>";
            $tampil=mysql_query("SELECT * FROM kategori ORDER BY nama_kategori");
            while($r=mysql_fetch_array($tampil)){
              echo "<option value=$r[id_kategori]>$r[nama_kategori]</option>";
            }
    echo "</select></td></tr>
          <tr><td>Isi artikel</td>  <td> <textarea name='isi_artikel' class='ckeditor' style='width: 800px; height: 350px;'></textarea></td></tr>
          <tr><td>Gambar</td>      <td> <input type=file name='fupload' size=40> 
                                          <br>Tipe gambar harus JPG/JPEG dan ukuran lebar maks: 400 px</td></tr>";

    $tag = mysql_query("SELECT * FROM tag ORDER BY tag_seo");
    echo "<tr><td>Tag (Label)</td><td> ";
    while ($t=mysql_fetch_array($tag)){
      echo "<input type=checkbox value='$t[tag_seo]' name=tag_seo[]>$t[nama_tag] ";
    }
    
    echo "</td></tr>
          <tr><td colspan=2><input type=submit value=Simpan class='btn'>
                            <input type=button value=Batal onclick=self.history.back() class='btn'></td></tr>
          </tbody></table></form>";
     break;
    
    
  case "editartikel":
    if ($_SESSION[leveluser]=='admin'){
      $edit = mysql_query("SELECT * FROM artikel WHERE id_artikel='$_GET[id]'");
    }
    else{
      $edit = mysql_query("SELECT * FROM artikel WHERE id_artikel='$_GET[id]' AND username='$_SESSION[namauser]'");
    }

    $r    = mysql_fetch_array($edit);

    echo "<h2>Edit artikel</h2>
          <form method=POST enctype='multipart/form-data' action=$aksi?module=artikel&act=update>
          <input type=hidden name=id value=$r[id_artikel]>
          <table class='table'><tbody>
          <tr><td width=70>Judul</td>     <td> : <input type=text name=\"judul\" size=60 value=\"$r[judul]\"></td></tr>
          <tr><td>Kategori</td>  <td> : <select name='kategori'>";
 
          $tampil=mysql_query("SELECT * FROM kategori ORDER BY nama_kategori");
          if ($r[id_kategori]==0){
            echo "<option value=0 selected>- Pilih Kategori -</option>";
          }   

          while($w=mysql_fetch_array($tampil)){
            if ($r[id_kategori]==$w[id_kategori]){
              echo "<option value=$w[id_kategori] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[id_kategori]>$w[nama_kategori]</option>";
            }
          }

    echo "</select></td></tr>";

   if ($r[headline]=='Y'){
      echo "<tr><td>Headline</td> <td> : <input type=radio name='headline' value='Y' checked>Y  
                                        <input type=radio name='headline' value='N'> N</td></tr>";
    }
    else{
      echo "<tr><td>Headline</td> <td> : <input type=radio name='headline' value='Y'>Y  
                                        <input type=radio name='headline' value='N' checked>N</td></tr>";
    }
      echo "<tr><td>Isi artikel</td>   <td> <textarea class='ckeditor' name='isi_artikel' style='width: 800px; height: 350px;'>$r[isi_artikel]</textarea></td></tr>
          <tr><td>Gambar</td>       <td> :  ";
          if ($r[gambar]!=''){
              echo "<img src='../assets/foto_artikel/small_$r[gambar]'>";  
          }
    echo "</td></tr>
          <tr><td>Ganti Gbr</td>    <td> : <input type=file name='fupload' size=30> *)Apabila gambar tidak diubah, dikosongkan saja.</td></tr>";

    $d = GetCheckboxes('tag', 'tag_seo', 'nama_tag', $r[tag]);


    echo "<tr><td>Tag (Label)</td><td> $d </td></tr>";
 
    echo  "<tr><td colspan=2><input type=submit value=Update class='btn'>
                            <input type=button value=Batal onclick=self.history.back() class='btn'></td></tr>
         </tbody></table></form>";
    break;  
}

}
?>
