<?php
session_start();
 if (empty($_SESSION['username']) AND empty($_SESSION['passuser'])){
  echo "<link href='style.css' rel='stylesheet' type='text/css'>
 <center>Untuk mengakses modul, Anda harus login <br>";
  echo "<a href=../../index.php><b>LOGIN</b></a></center>";
}
else{
$aksi="modul/mod_galerifoto/aksi_galerifoto.php";
switch($_GET[act]){
  // Tampil Galeri Foto
  default:
    echo "<h4>Galeri Foto</h4>
          <p>
		  <a href='?module=galerifoto&act=tambahgalerifoto';\" class='btn btn-success'>Tambah Foto</a>
		  <a href='?module=album';\" class='btn btn-success'>Album</a>
		  <a href='?module=kat_album';\" class='btn btn-success'>Kategori Album</a>
		  </p>
          <table class='table table-bordered'><thead>
          <tr>
		  <th>No.</th>
          <th>Gambar foto</th>
          <th>Judul foto</th>
          <th>Album</th>
          <th width='40'>#</th></tr></thead><tbody>";

    $p      = new Paging;
    $batas  = 10;
    $posisi = $p->cariPosisi($batas);

    $tampil = mysql_query("SELECT * FROM gallery,album WHERE gallery.id_album=album.id_album ORDER BY id_gallery DESC LIMIT $posisi,$batas");
  
    $no = $posisi+1;
    while($r=mysql_fetch_array($tampil)){
      echo "<tr><td width='25'>$no</td>
				<td width='120'><img src='../assets/img_galeri/kecil_$r[gbr_gallery]'></td>
                <td>$r[jdl_gallery]</td>
                <td>$r[jdl_album]</td>
		            <td><a href=?module=galerifoto&act=editgalerifoto&id=$r[id_gallery] title='Edit'><i class='icon-edit'></i></a>
		                <a href='$aksi?module=galerifoto&act=hapus&id=$r[id_gallery]&namafile=$r[gbr_gallery]' title='Hapus'><i class='icon-trash'></i></a></td>
		        </tr>";
      $no++;
    }
    echo "</tbody></table>";

    $jmldata = mysql_num_rows(mysql_query("SELECT * FROM gallery"));
  
    $jmlhalaman  = $p->jumlahHalaman($jmldata, $batas);
    $linkHalaman = $p->navHalaman($_GET[halaman], $jmlhalaman);

   echo "<div class=\"pagination\"><ul> $linkHalaman</ul></div>";
 
    break;
  
  case "tambahgalerifoto":
    echo "<h4>Tambah Galeri Foto</h4>
          <form method=POST action='$aksi?module=galerifoto&act=input' enctype='multipart/form-data'>
          <table class='table'><tbody>
          <tr><td>Judul Foto</td>     <td> <input type=text name='jdl_gallery' class='input-xxlarge'></td></tr>
          <tr><td>Album</td>  <td> 
          <select name='album'>
            <option value=0 selected>- Pilih Album -</option>";
            $tampil=mysql_query("SELECT * FROM album ORDER BY jdl_album");
            while($r=mysql_fetch_array($tampil)){
              echo "<option value=$r[id_album]>$r[jdl_album]</option>";
            }
    echo "</select></td></tr>
          <tr><td>Keterangan</td>  <td> <textarea id='loko' name='keterangan' style='width: 600px; height: 150px;'></textarea></td></tr>
          <tr><td>Gambar</td>      <td> <input type=file name='fupload' size=40> 
                                          <br>Tipe gambar harus JPG/JPEG</td></tr>
          </td></tr>
          <tr><td colspan=2><input type=submit value=Simpan class='btn'>
                            <input type=button value=Batal onclick=self.history.back() class='btn'></td></tr>
          </tbody></table></form>";
     break;
    
  case "editgalerifoto":
    $edit = mysql_query("SELECT * FROM gallery WHERE id_gallery='$_GET[id]'");
    $r    = mysql_fetch_array($edit);

    echo "<h4>Edit Galeri Foto</h4>
          <form method=POST enctype='multipart/form-data' action=$aksi?module=galerifoto&act=update>
          <input type=hidden name=id value=$r[id_gallery]>
          <table class='table'>
          <tr><td width='70'>Judul Foto</td>     <td><input type=text name=\"jdl_gallery\" class='input-xxlarge' value=\"$r[jdl_gallery]\"></td></tr>
          <tr><td>Album</td>  <td> : <select name='album'>";
 
          $tampil=mysql_query("SELECT * FROM album ORDER BY jdl_album");
          if ($r[id_album]==0){
            echo "<option value=0 selected>- Pilih Album -</option>";
          }   

          while($w=mysql_fetch_array($tampil)){
            if ($r[id_album]==$w[id_album]){
              echo "<option value=$w[id_album] selected>$w[jdl_album]</option>";
            }
            else{
              echo "<option value=$w[id_album]>$w[jdl_album]</option>";
            }
          }
    echo "</select></td></tr>
          <tr><td>Keterangan</td>   <td> <textarea id='loko' name='keterangan' style='width: 600px; height: 150px;'>$r[keterangan]</textarea></td></tr>
          <tr><td>Gambar</td>       <td> ";
          if ($r[gbr_gallery]!=''){
              echo "<img src='../assets/img_galeri/kecil_$r[gbr_gallery]'>";  
          }
    echo "</td></tr>
          <tr><td>Ganti Gbr</td>    <td> <input type=file name='fupload' size=30> *)</td></tr>
          <tr><td colspan=2>*) Apabila gambar tidak diubah, dikosongkan saja.</td></tr>
          <tr><td colspan=2><input type=submit value=Update class='btn'>
                            <input type=button value=Batal onclick=self.history.back() class='btn'></td></tr>
         </table></form>";
    break;  
}
}
?>