<?php
$aksi="modul/mod_identitas/aksi_identitas.php";
switch($_GET[act]){
  // Tampil identitas
  default:
    $sql  = mysql_query("SELECT * FROM identitas LIMIT 1");
    $r    = mysql_fetch_array($sql);

    echo "<h4>Profil Website</h4>
          <form method=POST enctype='multipart/form-data' action=$aksi?module=identitas&act=update>
          <input type=hidden name=id value=$r[id_identitas]>
          <table class='table'><tbody>
          <tr><td>Nama Website</td><td> <input type=text name='nama_website' value='$r[nama_website]' class='input-xxlarge'></td></tr>
          <tr><td>Alamat Website</td><td> <input type=text name='alamat_website' value='$r[alamat_website]' size=75></td></tr>
          <tr><td>Meta Deskripsi</td><td> <textarea name='meta_deskripsi' style='width: 500px; height: 50px;'>$r[meta_deskripsi]</textarea></td></tr>
          <tr><td>Meta Keyword</td><td> <textarea name='meta_keyword' style='width: 500px; height: 50px;'>$r[meta_keyword]</textarea></td></tr>
		  <tr><td>Alamat Kantor</td><td> <input type=text name='alamat_kantor' value='$r[alamat_kantor]' class='input-xxlarge'></td></tr>
		  <tr><td>Email</td><td> <input type=text name='email' value='$r[email]' size=50></td></tr>
		  <tr><td>Telp</td><td> <input type=text name='telp' value='$r[telp]' size=50></td></tr>
		  <tr><td>Facebook</td><td> <input type=text name='fb' value='$r[fb]' class='input-xxlarge'></td></tr>
		  <tr><td>Twitter</td><td> <input type=text name='twitter' value='$r[twitter]' class='input-xxlarge'></td></tr>
          <tr><td>Gambar Favicon</td><td> <img src=../$r[favicon]></td></tr>
          <tr><td>Ganti Favicon</td><td> <input type=file size=20 name=fupload>
          &nbsp;NB: nama file gambar favicon harus favicon.ico
          </td></tr>
          <tr><td colspan=2><input type=submit value=Update class='btn'>
                           <input type=button value=Batal onclick=self.history.back() class='btn'></td></tr>
         <tbody></form></table>";
    break;  
}
?>
