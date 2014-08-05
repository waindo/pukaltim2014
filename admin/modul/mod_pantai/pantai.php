<?php    
session_start();
 if (empty($_SESSION['username']) AND empty($_SESSION['passuser'])){
  echo "<link href='style.css' rel='stylesheet' type='text/css'>
 <center>Untuk mengakses modul, Anda harus login <br>";
  echo "<a href=../../index.php><b>LOGIN</b></a></center>";
}
else{

$aksi="modul/mod_pantai/aksi_pantai.php";
switch($_GET[act]){
  // Tampil Rawa
  default:
    echo "<h4>Pengaman Pantai</h4>";
	echo" <p><a href='?module=pantai&act=tambah';\" class='btn btn-success'>Tambah Pantai</a></p>";
		  /*<p><form method=get action='$_SERVER[PHP_SELF]'>
          <input type=hidden name=module value=kegiatansda>
          Masukkan Nama Bendung : <input type=text name='kata'> <input type=submit value=Cari class='btn'>
          </form></p>";*/
    if (empty($_GET['kata'])){
    echo "<table class='table table-bordered'><thead>  
          <tr><th>No.</th>
          <th>Kode Pengaman Pantai</th>
          <th>Nama Pantai</th>
		  <th>Lokasi</th>
		  <th>Tahun Pelaksanaan</th>
		  <th>Tipe Pengaman</th>
		  <th>Panjang Penanganan (m)</th>
		  <th>Keterangan</th>
		  <th>#</th>
          </tr></thead>";

    $p      = new Paging;
    $batas  = 10;
    $posisi = $p->cariPosisi($batas);

      $tampil = mysql_query("SELECT * FROM rawa_pantai WHERE jenis_rawapantai='P' ORDER BY id_rawapantai DESC LIMIT $posisi,$batas");
  
    $no = $posisi+1;
    while($row=mysql_fetch_array($tampil)){
      echo "<tr><td width='25'>$no</td>
                <td>$row[kode_rawapantai]</td>
                <td>$row[nama]</td>
				<td>$row[kota] $r[kecamatan] $r[desa]</td>
				<td>$row[tahun_pelaksanaan]</td>
				<td>$row[tipe_pengaman]</td>
				<td>$row[panjang]</td>
				<td>$row[keterangan]</td>
				<td width='40'><a href=?module=pantai&act=edit&id=$row[id_rawapantai] title='Edit'><i class='icon-edit'></i></a>
		                <a href='$aksi?module=pantai&act=hapus&id=$row[id_rawapantai]&namafile=$r[booklet]' title='Hapus'><i class='icon-trash'></i> </a></td>
		        </tr>";
      $no++;
    }
    echo "</table>";

    $jmldata = mysql_num_rows(mysql_query("SELECT * FROM rawa_pantai WHERE jenis_rawapantai = 'P'"));
  
    $jmlhalaman  = $p->jumlahHalaman($jmldata, $batas);
    $linkHalaman = $p->navHalaman($_GET[halaman], $jmlhalaman);

echo "<div class=\"pagination\"><ul> $linkHalaman</ul></div>";
 
    break;    
    }
    else{
    echo "<table class='table table-bordered'><thead>  
          <tr><th>No.</th>
          <th>Kode Pengaman Pantai</th>
          <th>Nama Pantai</th>
		  <th>Lokasi</th>
		  <th>Tahun Pelaksanaan</th>
		  <th>Tipe Pengaman</th>
		  <th>Panjang Penanganan (m)</th>
		  <th>Keterangan</th>
		  <th>#</th>
          </tr></thead>";

    $p      = new Paging;
    $batas  = 10;
    $posisi = $p->cariPosisi($batas);

    $tampil = mysql_query("SELECT * FROM rawa_pantai WHERE nama LIKE '%$_GET[kata]%' AND jenis_rawapantai = 'P' ORDER BY id_rawapantai DESC LIMIT $posisi,$batas");
  
  
    $no = $posisi+1;
    while($r=mysql_fetch_array($tampil)){
        echo "<tr><td width='25'>$no</td>
                <td>$row[kode_rawapantai]</td>
                <td>$row[nama]</td>
				<td>$row[kota] $r[kecamatan] $r[desa]</td>
				<td>$row[tahun_pelaksanaan]</td>
				<td>$row[tipe_pengaman]</td>
				<td>$row[panjang]</td>
				<td>$row[keterangan]</td>
				<td width='40'><a href=?module=pantai&act=edit&id=$row[id_rawapantai] title='Edit'><i class='icon-edit'></i></a>
		                <a href='$aksi?module=pantai&act=hapus&id=$row[id_rawapantai]&namafile=$r[booklet]' title='Hapus'><i class='icon-trash'></i> </a></td>
		        </tr>";
      $no++;
    }
    echo "</table>";

    $jmldata = mysql_num_rows(mysql_query("SELECT * FROM rawa_pantai WHERE nama LIKE '%$_GET[kata]%' AND jenis_rawapantai='P'"));
    
    $jmlhalaman  = $p->jumlahHalaman($jmldata, $batas);
    $linkHalaman = $p->navHalaman($_GET[halaman], $jmlhalaman);

echo "<div class=\"pagination\"><ul> $linkHalaman</ul></div>";
 
    break;    
    }

  
  case "tambah":
    echo "<h4>Tambah Pantai</h4>
          <form method=POST action='$aksi?module=pantai&act=input' enctype='multipart/form-data'>
          <table class='table'><tbody>
          <tr><td>Kode Pengaman Patai</td>     <td><input type=text name='kode' class='input-small'></td></tr>
          <tr><td>Nama Pantai</td>     <td><input type=text name='nama' class='input-xxlarge'></td></tr>
          <tr><td>Lokasi</td>  		<td><input type=text name='kota' class='input-large'></td></tr>
          <tr><td></td>  		<td><input type=text name='kecamatan' class='input-large'></td></tr>
          <tr><td></td>  		<td><input type=text name='desa' class='input-large'></td></tr>
          <tr><td>Tahun Pelaksanaan</td>	<td><input type=text name='thn_pelaksanaan' class='input-small'></td></tr>
          <tr><td>Tipe Pengaman</td>		<td><input type=text name='tipe' class='input-xxmedium'></td></tr>
          <tr><td>Panjang</td>  			<td><input type=text name='panjang' class='input-xxmedium'></td></tr>
          <tr><td>Keterangan</td>  			<td><input type=text name='keterangan' class='input-xxmedium'></td></tr>
          <tr><td>Booklet</td>      	 <td> <input type=file name='fupload' size=80> 
                                         <br>Tipe gambar harus JPG/JPEG dan ukuran lebar maks: 800 px</td></tr>";
    
    echo "</td></tr>
          <tr><td colspan=2><input type=submit value=Simpan class='btn'>
                            <input type=button value=Batal onclick=self.history.back() class='btn'></td></tr>
          </tbody></table></form>";
     break;
    
    
  case "edit":
    $edit = mysql_query("SELECT * FROM rawa_pantai WHERE id_rawapantai='$_GET[id]'");
    
    $r    = mysql_fetch_array($edit);

    echo "<h2>Edit Pantai</h2>
          <form method=POST enctype='multipart/form-data' action=$aksi?module=pantai&act=update>
          <input type=hidden name=id value=$r[id_rawapantai]>
          <table class='table'><tbody>
          <tr><td>Kode Pengaman Pantai</td>     <td><input type=text name='kode' value='$r[kode_rawapantai]' class='input-small'></td></tr>
          <tr><td>Nama Pantai</td>     <td><input type=text name='nama' value='$r[nama]' class='input-xxlarge'></td></tr>
          <tr><td>Lokasi</td>  		<td><input type=text name='kota' value='$r[kota]' class='input-large'></td></tr>
          <tr><td></td>  		<td><input type=text name='kecamatan' value='$r[kecamatan]' class='input-large'></td></tr>
          <tr><td></td>  		<td><input type=text name='desa' value='$r[desa]' class='input-large'></td></tr>
          <tr><td>Tahun Pelaksanaan</td>	<td><input type=text name='thn_pelaksanaan' value='$r[tahun_pelaksanaan]' class='input-small'></td></tr>
          <tr><td>Tipe Pengaman</td>  			<td><input type=text name='tipe' value='$r[tipe_pengaman]' class='input-xxmedium'></td></tr>
          <tr><td>Panjang</td>  			<td><input type=text name='panjang' value='$r[panjang]' class='input-xxmedium'></td></tr>
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
