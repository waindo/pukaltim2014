<?php    
session_start();
 if (empty($_SESSION['username']) AND empty($_SESSION['passuser'])){
  echo "<link href='style.css' rel='stylesheet' type='text/css'>
 <center>Untuk mengakses modul, Anda harus login <br>";
  echo "<a href=../../index.php><b>LOGIN</b></a></center>";
}
else{

$aksi="modul/mod_hidrologi/aksi_hidrologi.php";
switch($_GET[act]){
  // Tampil Hidrologi
  default:
    echo "<h4>Hidrologi</h4>";
	echo" <p><a href='?module=hidrologi&act=tambah';\" class='btn btn-success'>Tambah Hidrologi</a></p>";
		  /*<p><form method=get action='$_SERVER[PHP_SELF]'>
          <input type=hidden name=module value=kegiatansda>
          Masukkan Nama Bendung : <input type=text name='kata'> <input type=submit value=Cari class='btn'>
          </form></p>";*/
    if (empty($_GET['kata'])){
    echo "<table class='table table-bordered'><thead>  
          <tr><th>No.</th>
          <th>Kode POS</th>
          <th>Nama POS Hidrologi</th>
		  <th>DAS</th>
		  <th>WS</th>
		  <th>#</th>
          </tr></thead>";

    $p      = new Paging;
    $batas  = 10;
    $posisi = $p->cariPosisi($batas);

      $tampil = mysql_query("SELECT * FROM hidrologi ORDER BY id_hidrologi DESC LIMIT $posisi,$batas");
  
    $no = $posisi+1;
    while($r=mysql_fetch_array($tampil)){
      echo "<tr><td width='25'>$no</td>
                <td>$r[kode_pos]</td>
                <td>$r[nama_pos]</td>
				<td>$r[das]</td>
				<td>$r[ws]</td>
				<td width='40'><a href=?module=hidrologi&act=edit&id=$r[id_hidrologi] title='Edit'><i class='icon-edit'></i></a>
		                <a href='$aksi?module=hidrologi&act=hapus&id=$r[id_hidrologi]&namafile=$r[booklet]' title='Hapus'><i class='icon-trash'></i> </a></td>
		        </tr>";
      $no++;
    }
    echo "</table>";

    $jmldata = mysql_num_rows(mysql_query("SELECT * FROM hidrologi"));
  
    $jmlhalaman  = $p->jumlahHalaman($jmldata, $batas);
    $linkHalaman = $p->navHalaman($_GET[halaman], $jmlhalaman);

echo "<div class=\"pagination\"><ul> $linkHalaman</ul></div>";
 
    break;    
    }
    else{
    echo "<table class='table table-bordered'><thead>  
          <tr><th>No.</th>
          <th>Kode POS</th>
          <th>Nama POS Hidrologi</th>
		  <th>DAS</th>
		  <th>WS</th>
		  <th>#</th>
          </tr></thead>";

    $p      = new Paging9;
    $batas  = 10;
    $posisi = $p->cariPosisi($batas);

    $tampil = mysql_query("SELECT * FROM hidrologi WHERE nama_pos LIKE '%$_GET[kata]%' ORDER BY id_hidrologi DESC LIMIT $posisi,$batas");
  
  
    $no = $posisi+1;
    while($r=mysql_fetch_array($tampil)){
        echo "<tr><td width='25'>$no</td>
                <td>$r[kode_pos]</td>
                <td>$r[nama_pos]</td>
				<td>$r[das]</td>
				<td>$r[ws]</td>
				<td width='40'><a href=?module=hidrologi&act=edit&id=$r[id_hidrologi] title='Edit'><i class='icon-edit'></i></a>
		                <a href='$aksi?module=hidrologi&act=hapus&id=$r[id_hidrologi]&namafile=$r[booklet]' title='Hapus'><i class='icon-trash'></i> </a></td>
		        </tr>";
      $no++;
    }
    echo "</table>";

    $jmldata = mysql_num_rows(mysql_query("SELECT * FROM hidrologi WHERE nama_pos LIKE '%$_GET[kata]%'"));
    
    $jmlhalaman  = $p->jumlahHalaman($jmldata, $batas);
    $linkHalaman = $p->navHalaman($_GET[halaman], $jmlhalaman);

echo "<div class=\"pagination\"><ul> $linkHalaman</ul></div>";
 
    break;    
    }

  
  case "tambah":
    echo "<h4>Tambah Hidrologi</h4>
          <form method=POST action='$aksi?module=hidrologi&act=input' enctype='multipart/form-data'>
          <table class='table'><tbody>
          <tr><td>Kode POS</td>     		<td><input type=text name='kode' class='input-small'></td></tr>
          <tr><td>Nama POS</td>    			<td><input type=text name='nama' class='input-xxlarge'></td></tr>
          <tr><td>DAS</td>     		 		<td><input type=text name='das' class='input-large'></td></tr>
          <tr><td>WS</td>     		 		<td><input type=text name='ws' class='input-large'></td></tr>
          <tr><td>Lokasi</td>  				<td><input type=text name='kota' class='input-large'></td></tr>
          <tr><td></td>  					<td><input type=text name='kecamatan' class='input-large'></td></tr>
          <tr><td></td>  					<td><input type=text name='desa' class='input-large'></td></tr>
          <tr><td>Tahun Bangun</td>			<td><input type=text name='thn_bangun' class='input-small'></td></tr>
          <tr><td>Tahun Rehabilitasi</td> 	<td><input type=text name='thn_rehab' class='input-small'></td></tr>
          <tr><td>Koordinat X</td>  		<td><input type=text name='x' class='input-xxmedium'></td></tr>
          <tr><td>Koordinat Y</td>  		<td><input type=text name='y' class='small'></td></tr>
          <tr><td>Elevansi</td>  			<td><input type=text name='elevansi' class='input-small'></td></tr>
          <tr><td>Booklet</td>      	 	<td> <input type=file name='fupload' size=40> 
          
		  <br>Tipe gambar harus JPG/JPEG dan ukuran lebar maks: 400 px</td></tr>";
    
    echo "</td></tr>
          <tr><td colspan=2><input type=submit value=Simpan class='btn'>
                            <input type=button value=Batal onclick=self.history.back() class='btn'></td></tr>
          </tbody></table></form>";
     break;
    
    
  case "edit":
    $edit = mysql_query("SELECT * FROM hidrologi WHERE id_hidrologi='$_GET[id]'");
    
    $r    = mysql_fetch_array($edit);

    echo "<h2>Edit Hidrologi</h2>
          <form method=POST enctype='multipart/form-data' action=$aksi?module=hidrologi&act=update>
          <input type=hidden name=id value=$r[id_hidrologi]>
          <table class='table'><tbody>
         <tr><td>Kode POS</td>     <td><input type=text name='kode' value='$r[kode_pos]' class='input-small'></td></tr>
          <tr><td>Nama POS</td>     <td><input type=text name='nama' value='$r[nama_pos]' class='input-xxlarge'></td></tr>
          <tr><td>DAS</td>     		 <td><input type=text name='das' value='$r[das]' class='input-large'></td></tr>
          <tr><td>WS</td>     		 <td><input type=text name='ws' value='$r[ws]' class='input-large'></td></tr>
          <tr><td>Lokasi</td>  		<td><input type=text name='kota' value='$r[kota]' class='input-large'></td></tr>
          <tr><td></td>  		<td><input type=text name='kecamatan' value='$r[kecamatan]' class='input-large'></td></tr>
          <tr><td></td>  		<td><input type=text name='desa' value='$r[desa]' class='input-large'></td></tr>
          <tr><td>Tahun Bangun</td>	<td><input type=text name='thn_bangun' value='$r[tahun_bangun]' class='input-small'></td></tr>
          <tr><td>Tahun Rehabilitasi</td> <td><input type=text name='thn_rehab' value='$r[tahun_rehab]' class='input-small'></td></tr>
          <tr><td>Koordinat X</td>  	  <td><input type=text name='x' value='$r[x]' class='input-xxmedium'></td></tr>
          <tr><td>Koordinat Y</td>  	  <td><input type=text name='y' value='$r[y]' class='small'></td></tr>
          <tr><td>Elevansi</td>  		  <td><input type=text name='elevansi' value='$r[elevansi]' class='input-small'></td></tr>
           
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
