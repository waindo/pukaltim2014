<?php    
session_start();
 if (empty($_SESSION['username']) AND empty($_SESSION['passuser'])){
  echo "<link href='style.css' rel='stylesheet' type='text/css'>
 <center>Untuk mengakses modul, Anda harus login <br>";
  echo "<a href=../../index.php><b>LOGIN</b></a></center>";
}
else{

$aksi="modul/mod_polder/aksi_polder.php";
switch($_GET[act]){
  // Tampil Polder
  default:
    echo "<h4>Polder</h4>";
	echo" <p><a href='?module=polder&act=tambah';\" class='btn btn-success'>Tambah Polder</a></p>";
		  /*<p><form method=get action='$_SERVER[PHP_SELF]'>
          <input type=hidden name=module value=kegiatansda>
          Masukkan Nama Bendung : <input type=text name='kata'> <input type=submit value=Cari class='btn'>
          </form></p>";*/
    if (empty($_GET['kata'])){
    echo "<table class='table table-bordered'><thead>  
          <tr><th>No.</th>
          <th>Kode Polder</th>
          <th>Nama Polder</th>
		  <th>Lokasi</th>
		  <th>Luas Polder (m2)</th>
		  <th>Kapasitas Tampungan (m3)</th>
		  <th>#</th>
          </tr></thead>";

    $p      = new Paging;
    $batas  = 10;
    $posisi = $p->cariPosisi($batas);

      $tampil = mysql_query("SELECT * FROM polder ORDER BY id_polder DESC LIMIT $posisi,$batas");
  
    $no = $posisi+1;
    while($r=mysql_fetch_array($tampil)){
      echo "<tr><td width='25'>$no</td>
                <td>$r[kode_polder]</td>
                <td>$r[nama]</td>
				<td>$r[kota] $r[kecamatan] $r[desa]</td>
				<td>$r[luas_polder]</td>
				<td>$r[kapasitas]</td>
				<td width='40'><a href=?module=polder&act=edit&id=$r[id_polder] title='Edit'><i class='icon-edit'></i></a>
		                <a href='$aksi?module=polder&act=hapus&id=$r[id_polder]&namafile=$r[booklet]' title='Hapus'><i class='icon-trash'></i> </a></td>
		        </tr>";
      $no++;
    }
    echo "</table>";

    $jmldata = mysql_num_rows(mysql_query("SELECT * FROM polder"));
  
    $jmlhalaman  = $p->jumlahHalaman($jmldata, $batas);
    $linkHalaman = $p->navHalaman($_GET[halaman], $jmlhalaman);

echo "<div class=\"pagination\"><ul> $linkHalaman</ul></div>";
 
    break;    
    }
    else{
    echo "<table class='table table-bordered'><thead>  
          <tr><th>No.</th>
          <th>Kode Polder</th>
          <th>Nama Polder</th>
		  <th>Lokasi</th>
		  <th>Luas</th>
		  <th>Kapasitas Tampungan</th>
		  <th>#</th>
          </tr></thead>";

    $p      = new Paging;
    $batas  = 10;
    $posisi = $p->cariPosisi($batas);

    $tampil = mysql_query("SELECT * FROM polder WHERE nama LIKE '%$_GET[kata]%' ORDER BY id_polder DESC LIMIT $posisi,$batas");
  
  
    $no = $posisi+1;
    while($r=mysql_fetch_array($tampil)){
        echo "<tr><td width='25'>$no</td>
                <td>$r[kode_polder]</td>
                <td>$r[nama]</td>
				<td>$r[kota] $r[kecamatan] $r[desa]</td>
				<td>$r[luas_polder]</td>
				<td>$r[kapasitas]</td>
				<td width='40'><a href=?module=polder&act=edit&id=$r[id_polder] title='Edit'><i class='icon-edit'></i></a>
		                <a href='$aksi?module=polder&act=hapus&id=$r[id_polder]&namafile=$r[booklet]' title='Hapus'><i class='icon-trash'></i> </a></td>
		        </tr>";
      $no++;
    }
    echo "</table>";

    $jmldata = mysql_num_rows(mysql_query("SELECT * FROM polder WHERE nama LIKE '%$_GET[kata]%'"));
    
    $jmlhalaman  = $p->jumlahHalaman($jmldata, $batas);
    $linkHalaman = $p->navHalaman($_GET[halaman], $jmlhalaman);

echo "<div class=\"pagination\"><ul> $linkHalaman</ul></div>";
 
    break;    
    }

  
  case "tambah":
    echo "<h4>Tambah Polder</h4>
          <form method=POST action='$aksi?module=polder&act=input' enctype='multipart/form-data'>
          <table class='table'><tbody>
          <tr><td>Kode Polder</td>     <td><input type=text name='kode' class='input-small'></td></tr>
          <tr><td>Nama Polder</td>     <td><input type=text name='nama' class='input-xxlarge'></td></tr>
          <tr><td>Lokasi</td>  		<td><input type=text name='kota' class='input-large'></td></tr>
          <tr><td></td>  		<td><input type=text name='kecamatan' class='input-large'></td></tr>
          <tr><td></td>  		<td><input type=text name='desa' class='input-large'></td></tr>
          <tr><td>Tahun Bangun</td>	<td><input type=text name='thn_bangun' class='input-small'></td></tr>
          <tr><td>Tahun Selesai</td> <td><input type=text name='thn_selesai' class='input-small'></td></tr>
          <tr><td>Tahun Rehabilitasi</td> <td><input type=text name='thn_rehab' class='input-small'></td></tr>
         <tr><td>Luas polder (m2)</td>  			<td><input type=text name='luas' class='small'></td></tr>
          <tr><td>Kapasitas Tampungan (m3)</td>  			<td><input type=text name='kapasitas' class='input-small'></td></tr>
          <tr><td>Keterangan</td>  			<td><input type=text name='keterangan' class='input-xxmedium'></td></tr>
          <tr><td>Booklet</td>      	 <td> <input type=file name='fupload' size=40> 
                                         <br>Tipe gambar harus JPG/JPEG dan ukuran lebar maks: 400 px</td></tr>";
    
    echo "</td></tr>
          <tr><td colspan=2><input type=submit value=Simpan class='btn'>
                            <input type=button value=Batal onclick=self.history.back() class='btn'></td></tr>
          </tbody></table></form>";
     break;
    
    
  case "edit":
    $edit = mysql_query("SELECT * FROM polder WHERE id_polder='$_GET[id]'");
    
    $r    = mysql_fetch_array($edit);

    echo "<h2>Edit Polder</h2>
          <form method=POST enctype='multipart/form-data' action=$aksi?module=polder&act=update>
          <input type=hidden name=id value=$r[id_polder]>
          <table class='table'><tbody>
         <tr><td>Kode Polder</td>     <td><input type=text name='kode' value='$r[kode_polder]' class='input-small'></td></tr>
          <tr><td>Nama Polder</td>     <td><input type=text name='nama' value='$r[nama]' class='input-xxlarge'></td></tr>
          <tr><td>Lokasi</td>  		<td><input type=text name='kota' value='$r[kota]' class='input-large'></td></tr>
          <tr><td></td>  		<td><input type=text name='kecamatan' value='$r[kecamatan]' class='input-large'></td></tr>
          <tr><td></td>  		<td><input type=text name='desa' value='$r[desa]' class='input-large'></td></tr>
          <tr><td>Tahun Bangun</td>	<td><input type=text name='thn_bangun' value='$r[tahun_bangun]' class='input-small'></td></tr>
          <tr><td>Tahun Selesai</td> <td><input type=text name='thn_selesai' value='$r[tahun_selesai]' class='input-small'></td></tr>
          <tr><td>Tahun Rehabilitasi</td> <td><input type=text name='thn_rehab' value='$r[tahun_rehab]' class='input-small'></td></tr>
          <tr><td>Luas polder (m)</td>  	<td><input type=text name='luas' value='$r[luas_polder]' class='input-small'></td></tr>
          <tr><td>Kapasitas Tampungan (m3)</td>  			<td><input type=text name='kapasitas' value='$r[kapasitas]' class='input-small'></td></tr>
          <tr><td>Keterangan</td>  			<td><input type=text name='keterangan' value='$r[keterangan]' class='input-xxmedium'></td></tr>
		   
          <tr><td>Booklet</td>       <td> :  ";
          if ($r[booklet]!=''){
              echo "<img src='../assets/foto_booklet/medium_$r[booklet]'>";  
          }
    echo "</td></tr>
          <tr><td>Ganti Booklet</td>    <td> : <input type=file name='fupload' size=30> *)Apabila gambar tidak diubah, dikosongkan saja.</td></tr>";

   
    echo  "<tr><td colspan=2><input type=submit value=Update class='btn'>
                            <input type=button value=Batal onclick=self.history.back() class='btn'></td></tr>
         </tbody></table></form>";
    break; 
	
}

}
?>
