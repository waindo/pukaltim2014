<?php
session_start();
 if (empty($_SESSION['username']) AND empty($_SESSION['passuser'])){
  echo "<link href='style.css' rel='stylesheet' type='text/css'>
 <center>Untuk mengakses modul, Anda harus login <br>";
  echo "<a href=../../index.php><b>LOGIN</b></a></center>";
}
else{
$aksi="modul/mod_link/aksi_link.php";
switch($_GET[act]){
  // Tampil link
  default:
    echo "<h4>Kategori Link</h4>
          <p><a href='?module=link&act=tambahlink';\" class='btn btn-success'>Tambah Link</a> 
		  <a href='?module=kat_link';\" class='btn btn-success'>Kategori Link</a>
		  </p>
          <table  class='table table-bordered'><thead>
          <tr>
		  <th width='20'>No.</th>
          <th width='200'>Nama Link</th>
		  <th>Url</th>
          <th width='20'>#</th></tr></thead><tbody>"; 
    $tampil=mysql_query("SELECT * FROM link ORDER BY id_link DESC");
    $no=1;
    while ($r=mysql_fetch_array($tampil)){
       echo "<tr><td width='25'>$no</td>
             <td>$r[nama_link]</td>
			 <td>$r[url_link]</td>
             <td width='40'><a href=?module=link&act=editlink&id=$r[id_link] title='Edit'><i class='icon-edit'></i></a>
             </td></tr>";
      $no++;
    }
    echo "</tbody></table>";
    break;
  
  // Form Tambah link
  case "tambahlink":
    echo "<h4>Tambah Link</h4>
          <form method=POST action='$aksi?module=link&act=input'>
          <table class='table'>
          <tr><td>Kategori</td>  <td> :  
          <select name='kategori'>
            <option value=0 selected>- Pilih Kategori -</option>";
            $kategori_link=mysql_query("SELECT * FROM kat_link ORDER BY nama_kat_link ASC");
            while($kt=mysql_fetch_array($kategori_link)){
              echo "<option value=$kt[id_kat_link]>$kt[nama_kat_link]</option>";
            }
    echo "</select></td></tr>
		  <tr><td>Nama Link</td><td> : <input type=text name='nama_link' class='input-xlarge'></td></tr>
		  <tr><td>Url</td><td> : <input type=text name='url' class='input-xxlarge'></td></tr>
          <tr><td colspan=2><input type=submit name=submit value=Simpan class='btn'>
                            <input type=button value=Batal onclick=self.history.back() class='btn'></td></tr>
          </table></form>";
     break;
  
  // Form Edit link  
  case "editlink":
    $edit=mysql_query("SELECT * FROM link WHERE id_link='$_GET[id]'");
    $r=mysql_fetch_array($edit);

    echo "<h4>Edit Link</h4>
          <form method=POST action=$aksi?module=link&act=update>
          <input type=hidden name=id value='$r[id_link]'>
          <table class='table'>
           <tr><td>Kategori</td>  <td> : <select name='kategori'>";
 
          $tampil=mysql_query("SELECT * FROM kat_link ORDER BY nama_kat_link ASC");
          if ($r[id_kat_link]==0){
            echo "<option value='' selected>- Pilih Kategori -</option>";
          }   

          while($w=mysql_fetch_array($tampil)){
            if ($r[id_kat_link]==$w[id_kat_link]){
              echo "<option value=$w[id_kat_link] selected>$w[nama_kat_link]</option>";
            }
            else{
              echo "<option value=$w[id_kat_link]>$w[nama_kat_link]</option>";
            }
          }

    echo "</select></td></tr>
		  <tr><td>Nama Link</td><td> : <input type=text name='nama_link' value='$r[nama_link]' class='input-xlarge'></td></tr>
		  <tr><td>Url</td><td> : <input type=text name='url' value='$r[url_link]' class='input-xxlarge'></td></tr>
		  <tr><td colspan=2><input type=submit value=Update class='btn'>
                            <input type=button value=Batal onclick=self.history.back() class='btn'></td></tr>
          </table></form>";
    break;  
}
}
?>
