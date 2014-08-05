<?php    
session_start();
 if (empty($_SESSION['username']) AND empty($_SESSION['passuser'])){
  echo "<link href='style.css' rel='stylesheet' type='text/css'>
 <center>Untuk mengakses modul, Anda harus login <br>";
  echo "<a href=../../index.php><b>LOGIN</b></a></center>";
}
else{

$aksi="modul/mod_sumurdalam/aksi_sumurdalam.php";
switch($_GET[act]){
  // Tampil Jaringan Sumur Dalam
  default:
    echo "<h4>Sumur Dalam</h4>";
	echo" <p><a href='?module=sumurdalam&act=tambah';\" class='btn btn-success'>Tambah Sumur Dalam</a></p>";
		  /*<p><form method=get action='$_SERVER[PHP_SELF]'>
          <input type=hidden name=module value=kegiatansda>
          Masukkan Nama Bendung : <input type=text name='kata'> <input type=submit value=Cari class='btn'>
          </form></p>";*/
    if (empty($_GET['kata'])){
    echo "<table class='table table-bordered'><thead>  
          <tr><th>No.</th>
          <th>Kode Bendungan</th>
          <th>Nama Sumur</th>
		  <th>Lokasi</th>
		  <th>Tahun Konstruksi</th>
		  <th>Kedalaman (m)</th>
		  <th>Pemanfaatan Air Baku (I/det)</th>
		  <th>Pengelola</th>
		  <th>Keterangan</th>
		  <th>#</th>
          </tr></thead>";

    $p      = new Paging;
    $batas  = 10;
    $posisi = $p->cariPosisi($batas);

      $tampil = mysql_query("SELECT * FROM air_baku WHERE jenis='Sumur Dalam' ORDER BY id_airbaku DESC LIMIT $posisi,$batas");
  
    $no = $posisi+1;
    while($r=mysql_fetch_array($tampil)){
      echo "<tr><td width='25'>$no</td>
                <td>$r[kode_airbaku]</td>
                <td>$r[nama]</td>
				<td>$r[kota] $r[kecamatan] $r[desa]</td>
				<td>$r[tahun_bangun]</td>
				<td>$r[kedalaman]</td>
				<td>$r[pemanfaatan_irigasi]</td>
				<td>$r[pengelola]</td>
				<td>$r[keterangan]</td>
				<td width='40'><a href=?module=sumurdalam&act=edit&id=$r[id_airbaku] title='Edit'><i class='icon-edit'></i></a>
		                <a href='$aksi?module=sumurdalam&act=hapus&id=$r[id_airbaku]&namafile=$r[booklet]' title='Hapus'><i class='icon-trash'></i> </a></td>
		        </tr>";
      $no++;
    }
    echo "</table>";

    $jmldata = mysql_num_rows(mysql_query("SELECT * FROM air_baku WHERE jenis = 'Sumur Dalam'"));
  
    $jmlhalaman  = $p->jumlahHalaman($jmldata, $batas);
    $linkHalaman = $p->navHalaman($_GET[halaman], $jmlhalaman);

echo "<div class=\"pagination\"><ul> $linkHalaman</ul></div>";
 
    break;    
    }
    else{
    echo "<table class='table table-bordered'><thead>  
          <tr><th>No.</th>
          <th>Kode Bendungan</th>
          <th>Nama Sumur</th>
		  <th>Lokasi</th>
		  <th>Tahun Konstruksi</th>
		  <th>Kedalaman (m)</th>
		  <th>Pemanfaatan Air Baku (I/det)</th>
		  <th>Pengelola</th>
		  <th>Keterangan</th>
		  <th>#</th>
          </tr></thead>";

    $p      = new Paging9;
    $batas  = 10;
    $posisi = $p->cariPosisi($batas);

    $tampil = mysql_query("SELECT * FROM air_baku WHERE nama LIKE '%$_GET[kata]%' AND jenis = 'Sumur Dalam' ORDER BY id_airbaku DESC LIMIT $posisi,$batas");
  
  
    $no = $posisi+1;
    while($r=mysql_fetch_array($tampil)){
        echo "<tr><td width='25'>$no</td>
                <td>$r[kode_airbaku]</td>
                <td>$r[nama]</td>
				<td>$r[kota] $r[kecamatan] $r[desa]</td>
				<td>$r[tahun_bangun]</td>
				<td>$r[kedalaman]</td>
				<td>$r[pemanfaatan_irigasi]</td>
				<td>$r[pengelola]</td>
				<td>$r[keterangan]</td>
				<td width='40'><a href=?module=sumurdalam&act=edit&id=$r[id_airbaku] title='Edit'><i class='icon-edit'></i></a>
		                <a href='$aksi?module=sumurdalam&act=hapus&id=$r[id_airbaku]&namafile=$r[booklet]' title='Hapus'><i class='icon-trash'></i> </a></td>
		        </tr>";
      $no++;
    }
    echo "</table>";

    $jmldata = mysql_num_rows(mysql_query("SELECT * FROM air_baku WHERE nama LIKE '%$_GET[kata]%' AND jenis='Sumur Dalam'"));
    
    $jmlhalaman  = $p->jumlahHalaman($jmldata, $batas);
    $linkHalaman = $p->navHalaman($_GET[halaman], $jmlhalaman);

echo "<div class=\"pagination\"><ul> $linkHalaman</ul></div>";
 
    break;    
    }

  
  case "tambah":
    echo "<h4>Tambah Sumur Dalam</h4>
          <form method=POST action='$aksi?module=sumurdalam&act=input' enctype='multipart/form-data'>
          <table class='table'><tbody>
          <tr><td>Kode Bendungan</td>     <td><input type=text name='kode' class='input-small'></td></tr>
          <tr><td>Nama Sumur</td>     <td><input type=text name='nama' class='input-xxlarge'></td></tr>
          <tr><td>Lokasi</td>  		<td><input type=text name='kota' class='input-large'></td></tr>
          <tr><td></td>  		<td><input type=text name='kecamatan' class='input-large'></td></tr>
          <tr><td></td>  		<td><input type=text name='desa' class='input-large'></td></tr>
          <tr><td>Tahun Konstruksi</td>	<td><input type=text name='thn_bangun' class='input-small'></td></tr>
          <tr><td>Kedalaman (m)</td>  			<td><input type=text name='kedalaman' class='input-small'></td></tr>
          <tr><td>Pemanfaatan Air baku(I/det)</td>  			<td><input type=text name='pemanfaatan' class='input-small'></td></tr>
          <tr><td>Pengelola</td>  			<td><input type=text name='pengelola' class='input-xxmedium'></td></tr>
          <tr><td>Keterangan</td>  			<td><input type=text name='keterangan' class='input-xxmedium'></td></tr>
          <tr><td>Booklet</td>      	 <td> <input type=file name='fupload' size=40> 
                                         <br>Tipe gambar harus JPG/JPEG dan ukuran lebar maks: 400 px</td></tr>";
    
    echo "</td></tr>
          <tr><td colspan=2><input type=submit value=Simpan class='btn'>
                            <input type=button value=Batal onclick=self.history.back() class='btn'></td></tr>
          </tbody></table></form>";
     break;
    
    
  case "edit":
    $edit = mysql_query("SELECT * FROM air_baku WHERE id_airbaku='$_GET[id]'");
    
    $r    = mysql_fetch_array($edit);

    echo "<h2>Edit Bendungan</h2>
          <form method=POST enctype='multipart/form-data' action=$aksi?module=sumurdalam&act=update>
          <input type=hidden name=id value=$r[id_airbaku]>
          <table class='table'><tbody>
          <tr><td>Kode Bendungan</td>     <td><input type=text name='kode' value='$r[kode_airbaku]' class='input-small'></td></tr>
          <tr><td>Nama Sumur</td>     <td><input type=text name='nama' value='$r[nama]' class='input-xxlarge'></td></tr>
          <tr><td>Lokasi</td>  		<td><input type=text name='kota' value='$r[kota]' class='input-large'></td></tr>
          <tr><td></td>  		<td><input type=text name='kecamatan' value='$r[kecamatan]' class='input-large'></td></tr>
          <tr><td></td>  		<td><input type=text name='desa' value='$r[desa]' class='input-large'></td></tr>
          <tr><td>Tahun Bangun</td>	<td><input type=text name='thn_bangun' value='$r[tahun_bangun]' class='input-small'></td></tr>
          <tr><td>Kedalaman (m)</td>  			<td><input type=text name='kedalaman' value='$r[kedalaman]' class='input-small'></td></tr>
          <tr><td>Pemanfaatan Air Baku(I/det)</td>  			<td><input type=text name='pemanfaatan' value='$r[pemanfaatan_irigasi]' class='input-small'></td></tr>
          <tr><td>Pengelola</td>  			<td><input type=text name='pengelola' value='$r[pengelola]' class='input-xxmedium'></td></tr>
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
	
	case "detail":
	    echo "<h4>Detail Jaringan Irigasi</h4>";
	echo" <p><a href='?module=jaririgasi&act=tambahdetail&id=$_GET[id]';\" class='btn btn-success'>Tambah Detail Jaringan</a></p>";
    echo "<table class='table table-bordered'><thead>  
          <tr><th rowspan='2'>No.</th>
          <th rowspan='2'>Tahun</th>
          <th colspan='2'>Saluran Pembawa Primer</th>
		  <th colspan='2'>Saluran Pembawa Sekunder</th>
		  <th rowspan='2'>Saluran Pembuang (m)</th>
		  <th rowspan='2'>Bangunan Bagi Sadap (Buah)</th>
		  <th rowspan='2'>Bangunan Pelengkap (Buah)</th>
		  <th rowspan='2'>Keterangan</th>
		  <th rowspan='2'>#</th>
          </tr>
		  <tr>
		  <th>Tanah (m)</th>
		  <th>Linning (m)</th>
		  <th>Tanah (m)</th>
		  <th>Linning (m)</th>
		  </tr></thead>";

    $p      = new Paging;
    $batas  = 10;
    $posisi = $p->cariPosisi($batas);

      $tampil = mysql_query("SELECT * FROM detail_jar_irigasi WHERE id_jaringan = $_GET[id] ORDER BY id_detail DESC LIMIT $posisi,$batas");
  
    $no = $posisi+1;
    while($r=mysql_fetch_array($tampil)){
      echo "<tr><td width='25'>$no</td>
                <td>$r[tahun_pelaksanaan]</td>
                <td>$r[tnh_primer]</td>
				<td>$r[linning_primer]</td>
				<td>$r[tnh_sekunder]</td>
				<td>$r[tnh_sekunder]</td>
				<td>$r[saluran_pembuangan]</td>
				<td>$r[bgn_sadap]</td>
				<td>$r[bgn_pelengkap]</td>
				<td>$r[keterangan]</td>
				<td width='40'><a href=?module=jaririgasi&act=editdetail&id=$r[id_detail] title='Edit'><i class='icon-edit'></i></a>
		                <a href='$aksi?module=jaririgasi&act=hapusdetail&id=$r[id_detail]&jaringan=$_GET[id] title='Hapus'><i class='icon-trash'></i> </a></td>
		        </tr>";
      $no++;
    }
    echo "</table>";

    $jmldata = mysql_num_rows(mysql_query("SELECT * FROM jar_irigasi"));
  
    $jmlhalaman  = $p->jumlahHalaman($jmldata, $batas);
    $linkHalaman = $p->navHalaman($_GET[halaman], $jmlhalaman);

echo "<div class=\"pagination\"><ul> $linkHalaman</ul></div>";
 
    break;
 
}

}
?>
