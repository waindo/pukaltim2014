<?php    
session_start();
 if (empty($_SESSION['username']) AND empty($_SESSION['passuser'])){
  echo "<link href='style.css' rel='stylesheet' type='text/css'>
 <center>Untuk mengakses modul, Anda harus login <br>";
  echo "<a href=../../index.php><b>LOGIN</b></a></center>";
}
else{

$aksi="modul/mod_jaririgasi/aksi_jaririgasi.php";
switch($_GET[act]){
  // Tampil Jaringan Irigasi
  default:
    echo "<h4>Jaringan Irigasi</h4>";
	echo" <p><a href='?module=jaririgasi&act=tambah&id=$_GET[id]';\" class='btn btn-success'>Tambah Jaringan Irigasi</a></p>
		  <p><form method=get action='$_SERVER[PHP_SELF]'>
          <input type=hidden name=module value=kegiatansda>
          Masukkan Nama Jaringan : <input type=text name='kata'> <input type=submit value=Cari class='btn'>
          </form></p>";
    if (empty($_GET['kata'])){
    echo "<table class='table table-bordered'><thead>  
          <tr><th>No.</th>
          <th>Kode Jaringan</th>
          <th>Nama Jaringan Irigasi</th>
		  <th>Lokasi</th>
		  <th>#</th>
          </tr></thead>";

    $p      = new Paging;
    $batas  = 10;
    $posisi = $p->cariPosisi($batas);

      $tampil = mysql_query("SELECT * FROM jar_irigasi ORDER BY id_jaringan DESC LIMIT $posisi,$batas");
  
    $no = $posisi+1;
    while($r=mysql_fetch_array($tampil)){
      echo "<tr><td width='25'>$no</td>
                <td><a href='?module=jaririgasi&act=detail&id=$r[id_jaringan]'>$r[kode_jaringan]</a></td>
                <td>$r[nama_jaringan]</td>
				<td>$r[lokasi]</td>
				<td width='40'><a href=?module=jaririgasi&act=edit&id=$r[id_jaringan] title='Edit'><i class='icon-edit'></i></a>
		                <a href='$aksi?module=jaririgasi&act=hapus&id=$r[id_jaringan]&namafile=$r[booklet]' title='Hapus'><i class='icon-trash'></i> </a></td>
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
    else{
    echo "<table class='table table-bordered'><thead>  
          <tr><th>No.</th>
          <th>Kode Jaringan</th>
          <th>Nama Jaringan Irigasi</th>
		  <th>Lokasi</th>
		  <th>#</th>
          </tr></thead>";

    $p      = new Paging9;
    $batas  = 10;
    $posisi = $p->cariPosisi($batas);

    $tampil = mysql_query("SELECT * FROM jar_irigasi WHERE nama_jaringan LIKE '%$_GET[kata]%' ORDER BY id_jaringan DESC LIMIT $posisi,$batas");
  
  
    $no = $posisi+1;
    while($r=mysql_fetch_array($tampil)){
        echo "<tr><td width='25'>$no</td>
                <td><a href='?module=jaririgasi&act=detail&id=$r[id_jaringan]'>$r[kode_jaringan]</a></td>
                <td>$r[nama_jaringan]</td>
				<td>$r[lokasi]</td>
				<td width='40'><a href=?module=jaririgasi&act=edit&id=$r[id_jaringan] title='Edit'><i class='icon-edit'></i></a>
		                <a href='$aksi?module=jaririgasi&act=hapus&id=$r[id_jaringan]&namafile=$r[booklet]' title='Hapus'><i class='icon-trash'></i> </a></td>
		        </tr>";
      $no++;
    }
    echo "</table>";

    $jmldata = mysql_num_rows(mysql_query("SELECT * FROM jar_irigasi WHERE nama_jaringan LIKE '%$_GET[kata]%'"));
    
    $jmlhalaman  = $p->jumlahHalaman($jmldata, $batas);
    $linkHalaman = $p->navHalaman($_GET[halaman], $jmlhalaman);

echo "<div class=\"pagination\"><ul> $linkHalaman</ul></div>";
 
    break;    
    }

  
  case "tambah":
    echo "<h4>Tambah Jaringan Irigasi</h4>
          <form method=POST action='$aksi?module=jaririgasi&act=input' enctype='multipart/form-data'>
          <table class='table'><tbody>
          <tr><td>Kode jaringan</td>     <td><input type=text name='kode' class='input-small'></td></tr>
          <tr><td>Nama Jaringan</td>     <td><input type=text name='nama' class='input-xxlarge'></td></tr>
          <tr><td>Lokasi</td>     		 <td><input type=text name='lokasi' class='input-xxmedium'></td></tr>
          <tr><td>Luas Daerah (Ha)</td>  <td><input type=text name='luas' class='input-xxmedium'></td></tr>
          <tr><td>Booklet</td>      	 <td> <input type=file name='fupload' size=40> 
                                         <br>Tipe gambar harus JPG/JPEG dan ukuran lebar maks: 400 px</td></tr>";
    
    echo "</td></tr>
          <tr><td colspan=2><input type=submit value=Simpan class='btn'>
                            <input type=button value=Batal onclick=self.history.back() class='btn'></td></tr>
          </tbody></table></form>";
     break;
    
    
  case "edit":
    $edit = mysql_query("SELECT * FROM jar_irigasi WHERE id_jaringan='$_GET[id]'");
    
    $r    = mysql_fetch_array($edit);

    echo "<h2>Edit Jaringan</h2>
          <form method=POST enctype='multipart/form-data' action=$aksi?module=jaririgasi&act=update>
          <input type=hidden name=id value=$r[id_jaringan]>
          <table class='table'><tbody>
          <tr><td width=100>Kode Jaringan</td>     <td> : <input type=text name=\"kode\" size=60 value=\"$r[kode_jaringan]\"></td></tr>
		  <tr><td width=70>Nama Jaringan</td>     <td> : <input type=text name=\"nama\" size=120 value=\"$r[nama_jaringan]\"></td></tr>
		   <tr><td width=70>Lokasi</td>     <td> : <input type=text name=\"lokasi\" size=100 value=\"$r[lokasi]\"></td></tr>
		   <tr><td width=70>Luas Daerah (Ha)</td>     <td> : <input type=text name=\"luas\" size=60 value=\"$r[luas_daerah]\"></td></tr>
		   
          <tr><td>Booklet</td>       <td> :  ";
          if ($r[booklet]!=''){
              echo "<img src='../assets/foto_booklet/medium_$r[booklet]'>";  
          }
    echo "</td></tr>
          <tr><td>Ganti Booklet</td>    <td> : <input type=file name='fupload'> *)Apabila gambar tidak diubah, dikosongkan saja.</td></tr>";

   
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
	
	case "tambahdetail":
    echo "<h4>Tambah Detail Jaringan Irigasi</h4>
          <form method=POST action='$aksi?module=jaririgasi&act=detailinput'>
		  <table class='table'><tbody>
          <tr><td width='150px'>Tahun</td>     <td><input type=text name='tahun' class='input-small'></td></tr>
          <tr><td>Tanah Primer (m)</td>     <td><input type=text name='tnh_p' class='input-small'></td></tr>
          <tr><td>Linning Primer (m)</td>     <td><input type=text name='linning_p' class='input-small'></td></tr>
          <tr><td>Tanah Sekunder (m)</td>     <td><input type=text name='tnh_s' class='input-small'></td></tr>
          <tr><td>Linning Sekunder (m)</td>     <td><input type=text name='linning_s' class='input-small'></td></tr>
          <tr><td>Saluran Pembuangan (m)</td>     		 <td><input type=text name='sp' class='input-small'></td></tr>
          <tr><td>Bangunan Sadap (Buah)</td>  <td><input type=text name='bs' class='input-small'></td></tr>
          <tr><td>Bangunan Pelengkap (Buah)</td>  <td><input type=text name='bp' class='input-small'></td></tr>
          <tr><td>Keterangan</td>  <td><input type=text name='ket' class='input-xxlarge'></td></tr>
          <input type='hidden' name='id' value='$_GET[id]'>
    	  </td></tr>
          <tr><td colspan=2><input type=submit value=Simpan class='btn'>
                            <input type=button value=Batal onclick=self.history.back() class='btn'></td></tr>
          </tbody></table></form>";
     break;    
	 
	 case "editdetail":
    echo "<h4>Edit Detail Jaringan Irigasi</h4>";
	$edit = mysql_query("SELECT * FROM detail_jar_irigasi WHERE id_detail='$_GET[id]'");
    
    $r    = mysql_fetch_assoc($edit);
    echo "<form method=POST action='$aksi?module=jaririgasi&act=detailupdate'>
	<input type='hidden' name='id' value='$_GET[id]'>
	<input type='hidden' name='jaringan' value='$r[id_jaringan]'>
		  <table class='table'><tbody>
          <tr><td width='150px'>Tahun</td>     <td><input type=text name='tahun' value='$r[tahun_pelaksanaan]' class='input-small'></td></tr>
          <tr><td>Tanah Primer (m)</td>     <td><input type=text name='tnh_p' value='$r[tnh_primer]' class='input-small'></td></tr>
          <tr><td>Linning Primer (m)</td>     <td><input type=text name='linning_p' value='$r[linning_primer]' class='input-small'></td></tr>
          <tr><td>Tanah Sekunder (m)</td>     <td><input type=text name='tnh_s' value='$r[tnh_sekunder]' class='input-small'></td></tr>
          <tr><td>Linning Sekunder (m)</td>     <td><input type=text name='linning_s' value='$r[linning_sekunder]' class='input-small'></td></tr>
          <tr><td>Saluran Pembuangan (m)</td>     		 <td><input type=text name='sp' value='$r[saluran_pembuangan]' class='input-small'></td></tr>
          <tr><td>Bangunan Sadap (Buah)</td>  <td><input type=text name='bs' value='$r[bgn_sadap]' class='input-small'></td></tr>
          <tr><td>Bangunan Pelengkap (Buah)</td>  <td><input type=text name='bp' value='$r[bgn_pelengkap]' class='input-small'></td></tr>
          <tr><td>Keterangan</td>  <td><input type=text name='ket' value='$r[keterangan]' class='input-xxlarge'></td></tr>
          </td></tr>
          <tr><td colspan=2><input type=submit value=Simpan class='btn'>
                            <input type=button value=Batal onclick=self.history.back() class='btn'></td></tr>
          </tbody></table></form>";
     break;    
 
}

}
?>
