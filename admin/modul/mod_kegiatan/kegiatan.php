<?php    
session_start();
 if (empty($_SESSION['username']) AND empty($_SESSION['passuser'])){
  echo "<link href='style.css' rel='stylesheet' type='text/css'>
 <center>Untuk mengakses modul, Anda harus login <br>";
  echo "<a href=../../index.php><b>LOGIN</b></a></center>";
}
else{

$aksi="modul/mod_kegiatan/aksi_kegiatan.php";
switch($_GET[act]){
  // Tampil Kegiatan
  default:
    echo "<h4>Kegiatan</h4>";
	echo" <p><a href='?module=kegiatansda&act=tambahkegiatan';\" class='btn btn-success'>Tambah Kegiatan</a></p>
		  <p><form method=get action='$_SERVER[PHP_SELF]'>
          <input type=hidden name=module value=kegiatansda>
          Masukkan Nama Program : <input type=text name='kata'> <input type=submit value=Cari class='btn'>
          </form></p>";
    if (empty($_GET['kata'])){
    echo "<table class='table table-bordered'><thead>  
          <tr><th>No.</th>
          <th>Program</th>
          <th>Pekerjaan</th>
		  <th>Lokasi</th>
		  <th>Rekanan</th>
          <th>#</th>
          </tr></thead>";

    $p      = new Paging;
    $batas  = 10;
    $posisi = $p->cariPosisi($batas);

      $tampil = mysql_query("SELECT * FROM kegiatan_sda ORDER BY id_kegiatan DESC LIMIT $posisi,$batas");
  
    $no = $posisi+1;
    while($r=mysql_fetch_array($tampil)){
	$program = mysql_query("SELECT * FROM program_kegiatan WHERE id_program = $r[id_program]");
	$rowprogram = mysql_fetch_assoc($program);
      echo "<tr><td width='25'>$no</td>
                <td>$rowprogram[nama_program]</td>
                <td><a href='?module=progressda&id=$r[id_kegiatan]'>$r[pekerjaan]</a></td>
				<td>$r[lokasi]</td>
				<td>$r[rekanan]</td>
		            <td width='40'><a href=?module=kegiatansda&act=editkegiatan&id=$r[id_kegiatan] title='Edit'><i class='icon-edit'></i></a>
		                <a href='$aksi?module=kegiatansda&act=hapus&id=$r[id_kegiatan]&namafile=$r[foto]' title='Hapus'><i class='icon-trash'></i> </a></td>
		        </tr>";
      $no++;
    }
    echo "</table>";

    $jmldata = mysql_num_rows(mysql_query("SELECT * FROM kegiatan_sda"));
  
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

    $tampil = mysql_query("SELECT * FROM kegiatan_sda WHERE program_kegiatan LIKE '%$_GET[kata]%' ORDER BY id_kegiatan DESC LIMIT $posisi,$batas");
  
  
    $no = $posisi+1;
    while($r=mysql_fetch_array($tampil)){
        echo "<tr><td width='25'>$no</td>
                <td>$r[program_kegiatan]</td>
                <td><a href='?module=progressda&id=$r[id_kegiatan]'>$r[pekerjaan]</a></td>
				<td>$r[lokasi]</td>
				<td>$r[rekanan]</td>
		            <td width='40'><a href=?module=kegiatansda&act=editkegiatan&id=$r[id_kegiatan] title='Edit'><i class='icon-edit'></i></a>
		                <a href='$aksi?module=kegiatansda&act=hapus&id=$r[id_kegiatan]&namafile=$r[foto]' title='Hapus'><i class='icon-trash'></i> </a></td>
		        </tr>";
      $no++;
    }
    echo "</table>";

    $jmldata = mysql_num_rows(mysql_query("SELECT * FROM kegiatan_sda WHERE program_kegiatan LIKE '%$_GET[kata]%'"));
    
    $jmlhalaman  = $p->jumlahHalaman($jmldata, $batas);
    $linkHalaman = $p->navHalaman($_GET[halaman], $jmlhalaman);

echo "<div class=\"pagination\"><ul> $linkHalaman</ul></div>";
 
    break;    
    }

  
  case "tambahkegiatan":
    echo "<h4>Tambah Kegiatan</h4>
          <form method=POST action='$aksi?module=kegiatansda&act=input' enctype='multipart/form-data'>
          <table class='table'><tbody>
          <tr><td>Program Kegiatan</td>     <td><select name='program' class='input-xxlarge'>";
		  $thn = date("Y");
		  $program = mysql_query("SELECT * FROM program_kegiatan WHERE tahun='$thn' AND aktif='Y' ORDER BY nama_program ASC");
		  while($row=mysql_fetch_assoc($program)){
			echo "<option value='$row[id_program]'>$row[nama_program]</option>";  
		  }
		  echo"</select></td></tr>
          <tr><td>Pekerjaan</td>     <td><input type=text name='pekerjaan' class='input-xxlarge'></td></tr>
          <tr><td>Lokasi</td>     <td><input type=text name='lokasi' class='input-xxmedium'></td></tr>
          <tr><td>Rekanan</td>     <td><input type=text name='rekanan' class='input-xxmedium'></td></tr>
          <tr><td>Volume</td>     <td><input type=text name='volume' class='input-small'></td></tr>
          <tr><td>nilai_kontrak</td>     <td><input type=text name='nilai_kontrak' class='input-medium'></td></tr>
          <tr><td>Gambar</td>      <td> <input type=file name='fupload' size=40> 
                                          <br>Tipe gambar harus JPG/JPEG dan ukuran lebar maks: 400 px</td></tr>";
    
    echo "</td></tr>
          <tr><td colspan=2><input type=submit value=Simpan class='btn'>
                            <input type=button value=Batal onclick=self.history.back() class='btn'></td></tr>
          </tbody></table></form>";
     break;
    
    
  case "editkegiatan":
    $edit = mysql_query("SELECT * FROM kegiatan_sda WHERE id_kegiatan='$_GET[id]'");
    
    $r    = mysql_fetch_array($edit);

    echo "<h2>Edit kegiatan</h2>
          <form method=POST enctype='multipart/form-data' action=$aksi?module=kegiatansda&act=update>
          <input type=hidden name=id value=$r[id_kegiatan]>
          <table class='table'><tbody>
          <tr><td width=70>Program</td>     <td> : <select name='program' class='input-xxlarge'>";
		   $thn = date("Y");
		  $program = mysql_query("SELECT * FROM program_kegiatan WHERE tahun='$thn' AND aktif='Y' ORDER BY nama_program ASC");
		  while($row=mysql_fetch_assoc($program)){
			if ($r[id_program] == $row[id_program]){
			echo "<option value='$row[id_program]' selected>$row[nama_program]</option>";  
			}
			echo "<option value='$row[id_program]'>$row[nama_program]</option>";  
		  }
		  echo "</select></td></tr>
		  <tr><td width=70>Pekerjaan</td>     <td> : <input type=text name=\"pekerjaan\" size=60 value=\"$r[pekerjaan]\" class='input-xxlarge'></td></tr>
		   <tr><td width=70>Lokasi</td>     <td> : <input type=text name=\"lokasi\" size=60 value=\"$r[lokasi]\"></td></tr>
		   <tr><td width=70>Rekanan</td>     <td> : <input type=text name=\"rekanan\" size=60 value=\"$r[rekanan]\"></td></tr>
		   <tr><td width=70>Volume</td>     <td> : <input type=text name=\"volume\" size=60 value=\"$r[volume]\" class='input-small'></td></tr>
		   <tr><td width=70>Nilai Kontrak</td>     <td> : <input type=text name=\"nilai_kontrak\" size=60 value=\"$r[nilai_kontrak]\" class='input-medium'></td></tr>
		   
          <tr><td>Gambar</td>       <td> :  ";
          if ($r[foto]!=''){
              echo "<img src='../assets/foto_kegiatan/medium_$r[foto]'>";  
          }
    echo "</td></tr>
          <tr><td>Ganti Gbr</td>    <td> : <input type=file name='fupload' size=30> *)Apabila gambar tidak diubah, dikosongkan saja.</td></tr>";

   
    echo  "<tr><td colspan=2><input type=submit value=Update class='btn'>
                            <input type=button value=Batal onclick=self.history.back() class='btn'></td></tr>
         </tbody></table></form>";
    break;  
}

}
?>
