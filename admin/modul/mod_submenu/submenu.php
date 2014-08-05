<?php
session_start();
 if (empty($_SESSION['username']) AND empty($_SESSION['passuser'])){
  echo "<link href='style.css' rel='stylesheet' type='text/css'>
        <center>Untuk mengakses modul, Anda harus login <br>";
  echo "<a href=../../index.php><b>LOGIN</b></a></center>";
}
else{
$aksi="modul/mod_submenu/aksi_submenu.php";
switch($_GET[act]){
  // Tampil Sub Menu
  default:
    echo "<h4>Sub Menu</h4>
          <p><a href='?module=submenu&act=tambahsubmenu';\" class='btn btn-success'><i class='icon-plus'></i> Tambah Submenu</a></p>
          <table class='table table-bordered'><thead>
          <tr>
		  <th>No.</th>
          <th>Sub menu</th>
          <th>Menu utama</th>
          <th>Link submenu</th>
          <th>Aktif</th>
          <th>Posisi</th>
          <th>#</th></tr></thead><tbody>";          

    $tampil = mysql_query("SELECT * FROM submenu,mainmenu WHERE submenu.id_main=mainmenu.id_main");
  
    $no = 1;
    while($r=mysql_fetch_array($tampil)){
	if($r[id_submain]!=0){
		$sub = mysql_fetch_array(mysql_query("SELECT * FROM submenu WHERE id_sub=$r[id_submain]"));
		$mainmenu = $r[nama_menu]." &gt; ".$sub[nama_sub];
	} else {
		$mainmenu = $r[nama_menu];
	}
      echo "<tr><td width='25'>$no</td>
                <td>$r[nama_sub]</td>
                <td>$mainmenu</td>
                <td>$r[link_sub]</td>
                <td>$r[aktif]</td>
                <td>$r[posisi_sub]</td>
		            <td width='160'><a href=?module=submenu&act=editsubmenu&id=$r[id_sub] class='btn btn-primary'><i class='icon-edit'></i> Edit</a>
		                <a href=$aksi?module=submenu&act=hapus&id=$r[id_sub] class='btn btn-danger'><i class='icon-trash'></i> Hapus</a></td>
		        </tr>";
      $no++;
    }
    echo "</tbody></table>";
    break;
  
  case "tambahsubmenu":
    echo "<h4>Tambah Sub Menu</h4>
          <form method=POST action='$aksi?module=submenu&act=input'>
          <table class='table'><tbody>
          <tr><td width='100'>Sub Menu</td>     <td> <input type=text name='nama_sub' size='40'></td></tr>
          <tr><td>Menu Utama</td>  <td>
          <select name='menu_utama'>
            <option value=0 selected>- Pilih Menu Utama -</option>";
            $tampil=mysql_query("SELECT * FROM mainmenu ORDER BY nama_menu");
            while($r=mysql_fetch_array($tampil)){
              echo "<option value=$r[id_main]>$r[nama_menu]</option>";
            }
    echo "</select></td></tr>
          <tr><td>Link Sub Menu</td><td> <input type=text name='link_sub' size='60'></td></tr>
          
          <tr><td>Aktif</td><td> <input type=radio name='aktif' value='Y' checked>Y 
                                                             <input type=radio name='aktif' value='N'>N</td></tr>
           <tr><td>Posisi</td><td> : <input type=text name='posisi_sub' class='input-mini'></td></tr>
		  <tr><td colspan=2><input type=submit name=submit value=Simpan class='btn'>
                            <input type=button value=Batal onclick=self.history.back() class='btn'></td></tr>
          </tbody></table></form>
          <div id=paging>*) Apabila Aktif = Y dan Admin Sub Menu = N, maka Sub Menu akan ditampilkan di halaman pengunjung. <br />
 	                      **) Apabila Aktif = N dan Admin Sub Menu = Y, maka Sub Menu akan ditampilkan di halaman administrator. <br /><br />
                        ***) Pilih <b>Menu Utama</b> jika ingin membuat Sub Menu dari Menu Utama <br />
	                      ****) Pilih <b>Sub Menu</b> jika ingin membuat Sub Menu dari Sub Menu (hanya berlaku untuk halaman pengunjung)
         </div><br>";
     break;
    
  case "editsubmenu":
    $edit = mysql_query("SELECT * FROM submenu WHERE id_sub='$_GET[id]'");
    $r    = mysql_fetch_array($edit);

    echo "<h2>Edit Sub Menu</h2>
          <form method=POST action=$aksi?module=submenu&act=update>
          <input type=hidden name=id value=$r[id_sub]>
          <table class='table'><tbody>
          <tr><td width=100>Sub Menu</td>     <td> <input type=text name='nama_sub' value='$r[nama_sub]'></td></tr>
          <tr><td>Menu Utama</td>  <td> : <select name='menu_utama'>";
 
          $tampil=mysql_query("SELECT * FROM mainmenu WHERE aktif='Y' ORDER BY nama_menu");
          if ($r[id_main]==0){
            echo "<option value=0 selected>- Pilih Menu Utama -</option>";
          }   
          while($w=mysql_fetch_array($tampil)){
            if ($r[id_main]==$w[id_main]){
              echo "<option value=$w[id_main] selected>$w[nama_menu]</option>";
            }
            else{
              echo "<option value=$w[id_main]>$w[nama_menu]</option>";
            }
          }
    echo "</select></td></tr>
          <tr><td>Link Sub Menu</td><td> <input type=text name='link_sub' value='$r[link_sub]'></td></tr>";
    if ($r[aktif]=='Y'){
      echo "<tr><td>Aktif</td> <td> : <input type=radio name='aktif' value='Y' checked>Y  
                                      <input type=radio name='aktif' value='N'> N</td></tr>";
    }
    else{
      echo "<tr><td>Aktif</td> <td> : <input type=radio name='aktif' value='Y'>Y  
                                      <input type=radio name='aktif' value='N' checked>N</td></tr>";
    }
	echo" <tr><td>Posisi</td><td> : <input type=text name='posisi_sub' class='input-mini' value='$r[posisi_sub]'></td></tr>";
    echo "<tr><td colspan=2><input type=submit value=Update class='btn'>
                            <input type=button value=Batal onclick=self.history.back() class='btn'></td></tr>
          </tbody></table></form>
          <div id=paging>*) Apabila Aktif = Y dan Admin Sub Menu = N, maka Sub Menu akan ditampilkan di halaman pengunjung. <br />
 	                      **) Apabila Aktif = N dan Admin Sub Menu = Y, maka Sub Menu akan ditampilkan di halaman administrator. <br /><br />
                        ***) Pilih <b>Menu Utama</b> jika ingin membuat Sub Menu dari Menu Utama <br />
	                      ****) Pilih <b>Sub Menu</b> jika ingin membuat Sub Menu dari Sub Menu (hanya berlaku untuk halaman pengunjung)
         </div><br>";
    break;  
}
}
?>
