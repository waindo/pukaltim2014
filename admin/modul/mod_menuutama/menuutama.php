<?php
session_start();
 if (empty($_SESSION['username']) AND empty($_SESSION['passuser'])){
  echo "<link href='style.css' rel='stylesheet' type='text/css'>
 <center>Untuk mengakses modul, Anda harus login <br>";
  echo "<a href=../../index.php><b>LOGIN</b></a></center>";
}
else{
$aksi="modul/mod_menuutama/aksi_menuutama.php";
switch($_GET[act]){
  // Tampil Menu Utama
  default:
    echo "<h4>Menu Utama</h4>
          <p><a href='?module=menuutama&act=tambahmenuutama';\" class='btn btn-success'>Tambah Menu</a> <a href='?module=submenu&act=tambahsubmenu';\" class='btn btn-success'>Tambah Submenu</a></p>
          <table class='table table-bordered'><thead>
          <tr>
		  <th>No.</th>
          <th>Menu utama</th>
          <th>link</th>
          <th>Aktif</th>
          <th>Posisi</th>
          <th>#</th></tr></thead><tbody>";
          
    $tampil=mysql_query("SELECT * FROM mainmenu order by posisi asc");
    $no=1;
    while ($r=mysql_fetch_array($tampil)){
       echo "<tr><td width='25'>$no</td>
             <td><b>$r[nama_menu]</b></td>
             <td><b>$r[link]</b></td>
             <td><b>$r[aktif]</b></td>
			 <td><b>$r[posisi]</b></td>
             <td width='40'><a href=?module=menuutama&act=editmenuutama&id=$r[id_main] title='Edit'><i class='icon-edit'></i></a>
             </td></tr>";
			 
			 $selectSubMenu = mysql_query("select * from submenu where id_main='$r[id_main]'");
			 while($r2 = mysql_fetch_array($selectSubMenu)){
			 echo "<tr><td width='25'></td>
             <td><i class='icon-chevron-down'></i> $r2[nama_sub]</td>
             <td>$r2[link_sub]</td>
             <td>$r2[aktif]</td>
			 <td>$r2[posisi_sub]</td>
             <td><a href=?module=submenu&act=editsubmenu&id=$r2[id_sub] title='Edit'><i class='icon-edit'></i></a>
		                <a href=$aksi?module=submenu&act=hapus&id=$r2[id_sub] title='Hapus'><i class='icon-trash'></i></a>
             </td></tr>";
			 }
      $no++;
    }
    echo "</tbody></table>";
    echo "<div id=paging>*) Data pada Menu tidak bisa dihapus, tapi bisa di non-aktifkan melalui Edit Menu Utama.<br>
                         **) Untuk link menu Beranda (Home) harus diubah ketika online menjadi http://NamaDomainAnda.com
          </div><br>";
    break;
  
  // Form Tambah Menu Utama
  case "tambahmenuutama":
    echo "<h4>Tambah Menu Utama</h4>
          <form method=POST action='$aksi?module=menuutama&act=input'>
          <table class='table'><tbody>
          <tr><td width='70'>Nama Menu</td><td> : <input type=text name='nama_menu'></td></tr>
          <tr><td>Link</td><td> : <input type=text name='link'></td></tr>
          <tr><td>Aktif</td><td> : <input type=radio name='aktif' value='Y' checked>Y 
                                                             <input type=radio name='aktif' value='N'>N</td></tr>
          <tr><td>Posisi</td><td> : <input type=text name='posisi' class='input-mini'></td></tr>
		  <tr><td colspan=2><input type=submit name=submit value=Simpan class='btn'>
                            <input type=button value=Batal onclick=self.history.back() class='btn'></td></tr>
          </tbody></table></form>
          <div id=paging>*) Apabila Aktif = Y dan Admin Menu = N, maka Menu Utama akan ditampilkan di halaman pengunjung. <br />
 	                      **) Apabila Aktif = N dan Admin Menu = Y, maka Menu Utama akan ditampilkan di halaman administrator.
         </div><br>";
     break;
  
  // Form Edit Menu Utama
  case "editmenuutama":
    $edit=mysql_query("SELECT * FROM mainmenu WHERE id_main='$_GET[id]'");
    $r=mysql_fetch_array($edit);

    echo "<h4>Edit Menu Utama</h4>
          <form method=POST action=$aksi?module=menuutama&act=update>
          <input type=hidden name=id value='$r[id_main]'>
          <table class='table'>
          <tr><td width='70'>Nama Menu</td><td> : <input type=text name='nama_menu' value='$r[nama_menu]'></td></tr>
          <tr><td>Link</td><td> : <input type=text name='link' value='$r[link]'></td></tr>";
    if ($r[aktif]=='Y'){
      echo "<tr><td>Aktif</td> <td> : <input type=radio name='aktif' value='Y' checked>Y  
                                      <input type=radio name='aktif' value='N'> N</td></tr>";
    }
    else{
      echo "<tr><td>Aktif</td> <td> : <input type=radio name='aktif' value='Y'>Y  
                                      <input type=radio name='aktif' value='N' checked>N</td></tr>";
    }
	echo"<tr><td>Posisi</td><td> : <input type=text name='posisi' class='input-mini' value='$r[posisi]'></td></tr>";
    echo "<tr><td colspan=2><input type=submit value=Update class='btn'>
                            <input type=button value=Batal onclick=self.history.back() class='btn'></td></tr>
          </table></form>
          <div id=paging>*) Apabila Aktif = Y dan Admin Menu = N, maka Menu Utama akan ditampilkan di halaman pengunjung. <br />
 	                      **) Apabila Aktif = N dan Admin Menu = Y, maka Menu Utama akan ditampilkan di halaman administrator.
         </div>";
    break;  
}
}
?>
