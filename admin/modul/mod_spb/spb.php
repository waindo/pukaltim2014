<?php    
session_start();
 if (empty($_SESSION['username']) AND empty($_SESSION['passuser'])){
  echo "<link href='style.css' rel='stylesheet' type='text/css'>
 <center>Untuk mengakses modul, Anda harus login <br>";
  echo "<a href=../../index.php><b>LOGIN</b></a></center>";
}
else{

$aksi="modul/mod_spb/aksi_spb.php";
switch($_GET[act]){
  // Tampil SPB
  default:
    echo "<h4>Sistem Pengendali Banjir</h4>";
	echo" <p><a href='?module=spb&act=tambah';\" class='btn btn-success'>Tambah SPB</a></p>
		  <p><form method=get action='$_SERVER[PHP_SELF]'>
          <input type=hidden name=module value=kegiatansda>
          Masukkan Nama Jaringan : <input type=text name='kata'> <input type=submit value=Cari class='btn'>
          </form></p>";
    if (empty($_GET['kata'])){
    echo "<table class='table table-bordered'><thead>  
          <tr><th>No.</th>
          <th>Kode Sistem</th>
          <th>Nama SPB</th>
		  <th>Lokasi</th>
		  <th>#</th>
          </tr></thead>";

    $p      = new Paging;
    $batas  = 10;
    $posisi = $p->cariPosisi($batas);

      $tampil = mysql_query("SELECT * FROM spb ORDER BY id_sistem DESC LIMIT $posisi,$batas");
  
    $no = $posisi+1;
    while($r=mysql_fetch_array($tampil)){
      echo "<tr><td width='25'>$no</td>
                <td><a href='?module=spb&act=detail&id=$r[id_sistem]'>$r[kode_sistem]</a></td>
                <td>$r[nama_sistem]</td>
				<td>$r[kota]</td>
				<td width='40'><a href=?module=spb&act=edit&id=$r[id_sistem] title='Edit'><i class='icon-edit'></i></a>
		                <a href='$aksi?module=spb&act=hapus&id=$r[id_sistem]&namafile=$r[booklet]' title='Hapus'><i class='icon-trash'></i> </a></td>
		        </tr>";
      $no++;
    }
    echo "</table>";

    $jmldata = mysql_num_rows(mysql_query("SELECT * FROM spb"));
  
    $jmlhalaman  = $p->jumlahHalaman($jmldata, $batas);
    $linkHalaman = $p->navHalaman($_GET[halaman], $jmlhalaman);

echo "<div class=\"pagination\"><ul> $linkHalaman</ul></div>";
 
    break;    
    }
    else{
    echo "<table class='table table-bordered'><thead>  
          <tr><th>No.</th>
          <th>Kode Sistem</th>
          <th>Nama SPB</th>
		  <th>Lokasi</th>
		  <th>#</th>
          </tr></thead>";

    $p      = new Paging9;
    $batas  = 10;
    $posisi = $p->cariPosisi($batas);

    $tampil = mysql_query("SELECT * FROM spb WHERE nama_sistem LIKE '%$_GET[kata]%' ORDER BY id_sistem DESC LIMIT $posisi,$batas");
  
  
    $no = $posisi+1;
    while($r=mysql_fetch_array($tampil)){
        echo "<tr><td width='25'>$no</td>
                <td><a href='?module=spb&act=detail&id=$r[id_sistem]'>$r[kode_sistem]</a></td>
                <td>$r[nama_sistem]</td>
				<td>$r[kota]</td>
				<td width='40'><a href=?module=spb&act=edit&id=$r[id_sistem] title='Edit'><i class='icon-edit'></i></a>
		                <a href='$aksi?module=spb&act=hapus&id=$r[id_sistem]&namafile=$r[booklet]' title='Hapus'><i class='icon-trash'></i> </a></td>
		        </tr>";
      $no++;
    }
    echo "</table>";

    $jmldata = mysql_num_rows(mysql_query("SELECT * FROM spb WHERE nama_sistem LIKE '%$_GET[kata]%'"));
    
    $jmlhalaman  = $p->jumlahHalaman($jmldata, $batas);
    $linkHalaman = $p->navHalaman($_GET[halaman], $jmlhalaman);

echo "<div class=\"pagination\"><ul> $linkHalaman</ul></div>";
 
    break;    
    }

  
  case "tambah":
    echo "<h4>Tambah SPB</h4>
          <form method=POST action='$aksi?module=spb&act=input' enctype='multipart/form-data'>
          <table class='table'><tbody>
          <tr><td>Kode Sistem</td>     <td><input type=text name='kode' class='input-small'></td></tr>
          <tr><td>Nama Sistem</td>     <td><input type=text name='nama' class='input-xxlarge'></td></tr>
          <tr><td>Lokasi</td>     		 <td><input type=text name='lokasi' class='input-xxmedium'></td></tr>
          <tr><td>Booklet</td>      	 <td> <input type=file name='fupload' size=40> 
                                         <br>Tipe gambar harus JPG/JPEG dan ukuran lebar maks: 400 px</td></tr>";
    
    echo "</td></tr>
          <tr><td colspan=2><input type=submit value=Simpan class='btn'>
                            <input type=button value=Batal onclick=self.history.back() class='btn'></td></tr>
          </tbody></table></form>";
     break;
    
    
  case "edit":
    $edit = mysql_query("SELECT * FROM spb WHERE id_sistem='$_GET[id]'");
    
    $r    = mysql_fetch_array($edit);

    echo "<h2>Edit SPB</h2>
          <form method=POST enctype='multipart/form-data' action=$aksi?module=spb&act=update>
          <input type=hidden name=id value=$r[id_sistem]>
          <table class='table'><tbody>
          <tr><td width=100>Kode Sistem</td>     <td> : <input type=text name=\"kode\" size=60 value=\"$r[kode_sistem]\"></td></tr>
		  <tr><td width=70>Nama Sistem</td>     <td> : <input type=text name=\"nama\" size=120 value=\"$r[nama_sistem]\"></td></tr>
		  <tr><td width=70>Lokasi</td>     <td> : <input type=text name=\"lokasi\" size=100 value=\"$r[kota]\"></td></tr>
		   
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
	    echo "<h4>Detail SPB</h4>";
	echo" <p><a href='?module=spb&act=tambahdetail&id=$_GET[id]';\" class='btn btn-success'>Tambah Detail SPB</a></p>";
    echo "<table class='table table-bordered'><thead>  
          <tr><th>No.</th>
          <th>Tahun</th>
          <th>Normalisasi Sungai (m)</th>
		  <th>Pasangan Batu (m)</th>
		  <th>Beton (m)</th>
		  <th>Sheet Pile (m)</th>
		  <th>#</th>
          </tr>
		  </thead>";

    $p      = new Paging;
    $batas  = 10;
    $posisi = $p->cariPosisi($batas);

      $tampil = mysql_query("SELECT * FROM detail_spb WHERE id_sistem = $_GET[id] ORDER BY id_detail DESC LIMIT $posisi,$batas");
  
    $no = $posisi+1;
    while($r=mysql_fetch_array($tampil)){
      echo "<tr><td width='25'>$no</td>
                <td>$r[tahun_pelaksanaan]</td>
                <td>$r[normalisasi]</td>
                <td>$r[pasangan_batu]</td>
                <td>$r[beton]</td>
                <td>$r[sheet_pile]</td>
				<td width='40'><a href=?module=spb&act=editdetail&id=$r[id_detail] title='Edit'><i class='icon-edit'></i></a>
		                <a href='$aksi?module=spb&act=hapusdetail&id=$r[id_detail]&sistem=$_GET[id]' title='Hapus'><i class='icon-trash'></i> </a></td>
		        </tr>";
      $no++;
    }
    echo "</table>";

    $jmldata = mysql_num_rows(mysql_query("SELECT * FROM spb"));
  
    $jmlhalaman  = $p->jumlahHalaman($jmldata, $batas);
    $linkHalaman = $p->navHalaman($_GET[halaman], $jmlhalaman);

echo "<div class=\"pagination\"><ul> $linkHalaman</ul></div>";
 
    break;
	
	case "tambahdetail":
    echo "<h4>Tambah Detail SPB</h4>
          <form method=POST action='$aksi?module=spb&act=detailinput'>
		  <table class='table'><tbody>
          <tr><td width='150px'>Tahun</td>     <td><input type=text name='tahun' class='input-small'></td></tr>
          <tr><td>Normalisasi Sungai (m)</td>     <td><input type=text name='normalisasi' class='input-small'></td></tr>
          <tr><td>Pasangan Batu (m)</td>     <td><input type=text name='pasangan_batu' class='input-small'></td></tr>
          <tr><td>Beton (m)</td>     <td><input type=text name='beton' class='input-small'></td></tr>
          <tr><td>Sheet Pile (m)</td>     <td><input type=text name='sheet_pile' class='input-small'></td></tr>
          <input type='hidden' name='id' value='$_GET[id]'>
    	  </td></tr>
          <tr><td colspan=2><input type=submit value=Simpan class='btn'>
                            <input type=button value=Batal onclick=self.history.back() class='btn'></td></tr>
          </tbody></table></form>";
     break;    
	 
	 case "editdetail":
    echo "<h4>Edit Detail Sistem</h4>";
	$edit = mysql_query("SELECT * FROM detail_spb WHERE id_detail='$_GET[id]'");
    
    $r    = mysql_fetch_assoc($edit);
    echo "<form method=POST action='$aksi?module=spb&act=detailupdate'>
	<input type='hidden' name='id' value='$_GET[id]'>
	<input type='hidden' name='sistem' value='$r[id_sistem]'>
		  <table class='table'><tbody>
          <tr><td width='150px'>Tahun</td>     <td><input type=text name='tahun' value='$r[tahun_pelaksanaan]' class='input-small'></td></tr>
          <tr><td>Normalisasi Sungai (m)</td>     <td><input type=text name='normalisasi' value='$r[normalisasi]' class='input-small'></td></tr>
          <tr><td>Pasangan Batu (m)</td>     <td><input type=text name='pasangan_batu' value='$r[pasangan_batu]' class='input-small'></td></tr>
          <tr><td>Beton (m)</td>     <td><input type=text name='beton' value='$r[beton]' class='input-small'></td></tr>
          <tr><td>Sheet Pile (m)</td>     <td><input type=text name='sheet_pile' value='$r[sheet_pile]' class='input-small'></td></tr>
          <tr><td colspan=2><input type=submit value=Simpan class='btn'>
                            <input type=button value=Batal onclick=self.history.back() class='btn'></td></tr>
          </tbody></table></form>";
     break;    
 
}

}
?>
