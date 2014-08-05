<?php    
session_start();
 if (empty($_SESSION['username']) AND empty($_SESSION['passuser'])){
  echo "<link href='style.css' rel='stylesheet' type='text/css'>
 <center>Untuk mengakses modul, Anda harus login <br>";
  echo "<a href=../../index.php><b>LOGIN</b></a></center>";
}
else{

$aksi="modul/mod_das/aksi_das.php";
switch($_GET[act]){
  // Tampil DAS
  default:
    echo "<h4>DAS</h4>";
	echo" <p><a href='?module=das&act=tambah';\" class='btn btn-success'>Tambah DAS</a></p>";
		  /*<p><form method=get action='$_SERVER[PHP_SELF]'>
          <input type=hidden name=module value=kegiatansda>
          Masukkan Nama Bendung : <input type=text name='kata'> <input type=submit value=Cari class='btn'>
          </form></p>";*/
    if (empty($_GET['kata'])){
    echo "<table class='table table-bordered'><thead>  
          <tr><th>No.</th>
          <th>Kode DAS</th>
          <th>Nama DAS</th>
		  <th>Panjang DAS (Km2)</th>
		  <th>Luas DAS (Km3)</th>
		  <th>#</th>
          </tr></thead>";

    $p      = new Paging;
    $batas  = 10;
    $posisi = $p->cariPosisi($batas);

      $tampil = mysql_query("SELECT * FROM das ORDER BY id_das DESC LIMIT $posisi,$batas");
  
    $no = $posisi+1;
    while($r=mysql_fetch_array($tampil)){
      echo "<tr><td width='25'>$no</td>
                <td>$r[kode_das]</td>
                <td>$r[nama_das]</td>
				<td>$r[panjang_das]</td>
				<td>$r[luas_das]</td>
				<td width='40'><a href=?module=das&act=edit&id=$r[id_das] title='Edit'><i class='icon-edit'></i></a>
		                <a href='$aksi?module=das&act=hapus&id=$r[id_das]&namafile=$r[booklet]' title='Hapus'><i class='icon-trash'></i> </a></td>
		        </tr>";
      $no++;
    }
    echo "</table>";

    $jmldata = mysql_num_rows(mysql_query("SELECT * FROM das"));
  
    $jmlhalaman  = $p->jumlahHalaman($jmldata, $batas);
    $linkHalaman = $p->navHalaman($_GET[halaman], $jmlhalaman);

echo "<div class=\"pagination\"><ul> $linkHalaman</ul></div>";
 
    break;    
    }
    else{
    echo "<table class='table table-bordered'><thead>  
          <tr><th>No.</th>
          <th>Kode DAS</th>
          <th>Nama DAS</th>
		  <th>Panjang DAS (Km2)</th>
		  <th>Luas DAS (Km3)</th>
		  <th>#</th>
          </tr></thead>";

    $p      = new Paging;
    $batas  = 10;
    $posisi = $p->cariPosisi($batas);

    $tampil = mysql_query("SELECT * FROM das WHERE nama_das LIKE '%$_GET[kata]%' ORDER BY id_das DESC LIMIT $posisi,$batas");
  
  
    $no = $posisi+1;
    while($r=mysql_fetch_array($tampil)){
        echo "<tr><td width='25'>$no</td>
                <td>$r[kode_das]</td>
                <td>$r[nama_das]</td>
				<td>$r[panjang_das]</td>
				<td>$r[luas_das]</td>
				<td width='40'><a href=?module=das&act=edit&id=$r[id_das] title='Edit'><i class='icon-edit'></i></a>
		                <a href='$aksi?module=das&act=hapus&id=$r[id_das]&namafile=$r[booklet]' title='Hapus'><i class='icon-trash'></i> </a></td>
		        </tr>";
      $no++;
    }
    echo "</table>";

    $jmldata = mysql_num_rows(mysql_query("SELECT * FROM das WHERE nama_das LIKE '%$_GET[kata]%' "));
    
    $jmlhalaman  = $p->jumlahHalaman($jmldata, $batas);
    $linkHalaman = $p->navHalaman($_GET[halaman], $jmlhalaman);

echo "<div class=\"pagination\"><ul> $linkHalaman</ul></div>";
 
    break;    
    }

  
  case "tambah":
    echo "<h4>Tambah DAS</h4>
          <form method=POST action='$aksi?module=das&act=input' enctype='multipart/form-data'>
          <table class='table'><tbody>
          <tr><td>Kode DAS</td>     <td><input type=text name='kode' class='input-small'></td></tr>
          <tr><td>Nama DAS</td>     <td><input type=text name='nama' class='input-xxlarge'></td></tr>
          <tr><td>Panjang DAS</td>  <td><input type=text name='panjang' class='input-large'></td></tr>
          <tr><td>Luas DAS</td>		<td><input type=text name='luas' class='input-small'></td></tr>
          <tr><td>Booklet</td>      	 <td> <input type=file name='fupload' size=40> 
                                         <br>Tipe gambar harus JPG/JPEG dan ukuran lebar maks: 400 px</td></tr>";
    
    echo "</td></tr>
          <tr><td colspan=2><input type=submit value=Simpan class='btn'>
                            <input type=button value=Batal onclick=self.history.back() class='btn'></td></tr>
          </tbody></table></form>";
     break;
    
    
  case "edit":
    $edit = mysql_query("SELECT * FROM das WHERE id_das='$_GET[id]'");
    
    $r    = mysql_fetch_array($edit);

    echo "<h2>Edit DAS</h2>
          <form method=POST enctype='multipart/form-data' action=$aksi?module=das&act=update>
          <input type=hidden name=id value=$r[id_das]>
          <table class='table'><tbody>
          <tr><td>Kode DAS</td>     <td><input type=text name='kode' value='$r[kode_das]' class='input-small'></td></tr>
          <tr><td>Nama DAS</td>     <td><input type=text name='nama' value='$r[nama_das]' class='input-xxlarge'></td></tr>
          <tr><td>Panjang DAS</td>  <td><input type=text name='panjang' value='$r[panjang_das]' class='input-large'></td></tr>
          <tr><td>Luas DAS</td>  	<td><input type=text name='luas' value='$r[luas_das]' class='input-large'></td></tr>
            
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
