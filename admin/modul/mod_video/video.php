<?php
session_start();
 if (empty($_SESSION['username']) AND empty($_SESSION['passuser'])){
  echo "<link href='style.css' rel='stylesheet' type='text/css'>
 <center>Untuk mengakses modul, Anda harus login <br>";
  echo "<a href=../../index.php><b>LOGIN</b></a></center>";
}
else{
$aksi="modul/mod_video/aksi_video.php";
switch($_GET[act]){
  // Tampil video
  default:
    echo "<h4>Video Litbang</h4>
          <p><a href='?module=video&act=tambahvideo' class='btn btn-success'>Tambah Video</a>
		  <a href='?module=kategori_video' class='btn btn-success'>Kategori Video</a>
		  </p>
          <table class='table table-bordered'><thead>
          <tr>
		  <th>No</th>
		  <th>Judul</th>
		  <th>Url</th>
		  <th>#</th></tr></thead><tbody>";
    $tampil=mysql_query("SELECT * FROM video ORDER BY id_video DESC");
    $no=1;
    while ($r=mysql_fetch_array($tampil)){
      $tgl=tgl_indo($r[tgl_posting]);
      echo "<tr><td>$no</td>
                <td>$r[judul]</td>
                <td><a href=http://www.youtube.com/watch?v=$r[url] target=_blank>$r[url]</a></td>
                <td><a href=?module=video&act=editvideo&id=$r[id_video]><i class='icon-edit'></i></a>
	                  <a href='$aksi?module=video&act=hapus&id=$r[id_video]'><i class='icon-trash'></i></a>
		        </tr>";
    $no++;
    }
    echo "</table></tbody>";
    break;
  
  case "tambahvideo":
    echo "<h4>Tambah Video</h4>
          <form method=POST action='$aksi?module=video&act=input'>
          <table class='table'>
          <tr><td>Kategori Video</td>  <td> 
          <select name='kategori'>
            <option value=0 selected>- Pilih Kategori -</option>";
            $tampil=mysql_query("SELECT * FROM kategori_video ORDER BY nama_kategori_video");
            while($r=mysql_fetch_array($tampil)){
              echo "<option value=$r[id_kategori_video]>$r[nama_kategori_video]</option>";
            }
    echo "</select></td></tr>
		  <tr><td>Judul</td><td>  : <input type=text name='judul' class='input-xxlarge'></td></tr>
          <tr><td>Video Youtube</td><td>   : <input type=text name='url' class='input-medium' ><br>
		   <i>Masukan Kode Video contoh : <b>http://www.youtube.com/watch?v=8O1ZVpoF3Vw</b>, yang di masukan ke kolom Video Youtube hanya kode <b>8O1ZVpoF3Vw</b></i>
		  </td></tr>
         
          <tr><td colspan=2><input type=submit value=Simpan class='btn'>
                            <input type=button value=Batal onclick=self.history.back() class='btn'></td></tr>
          </table></form><br><br><br>";
     break;
    
  case "editvideo":
    $edit = mysql_query("SELECT * FROM video WHERE id_video='$_GET[id]'");
    $r    = mysql_fetch_array($edit);

    echo "<h4>Edit Video</h4>
          <form method=POST action=$aksi?module=video&act=update>
          <input type=hidden name=id value=$r[id_video]>
          <table class='table'>
          <tr><td>Kategori Video</td>  <td> : <select name='kategori'>";
 
          $tampil=mysql_query("SELECT * FROM kategori_video ORDER BY nama_kategori_video");
          if ($r[id_kategori_video]==0){
            echo "<option value=0 selected>- Pilih Kategori -</option>";
          }   

          while($w=mysql_fetch_array($tampil)){
            if ($r[id_kategori_video]==$w[id_kategori_video]){
              echo "<option value=$w[id_kategori_video] selected>$w[nama_kategori_video]</option>";
            }
            else{
              echo "<option value=$w[id_kategori_video]>$w[nama_kategori_video]</option>";
            }
          }

    echo "</select></td></tr>
		  <tr><td>Judul</td><td>     : <input type=text name='judul' class='input-xxlarge' value='$r[judul]'></td></tr>
          <tr><td>Video Youtube</td><td>      : <input type=text name='url' class='input-medium' value='$r[url]'>
		  <br />
* <i>Masukan Kode Video contoh : <b>http://www.youtube.com/watch?v=8O1ZVpoF3Vw</b>, yang di masukan ke kolom Video Youtube hanya kode <b>8O1ZVpoF3Vw</b></i>
		  </td></tr>
         
          <tr><td colspan=2><input type=submit value=Update class='btn'>
                            <input type=button value=Batal onclick=self.history.back() class='btn'></td></tr>
          </table></form>";
    break;  
}
}
?>
