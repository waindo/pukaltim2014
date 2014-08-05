<?php
session_start();
 if (empty($_SESSION['username']) AND empty($_SESSION['passuser'])){
  echo "<link href='style.css' rel='stylesheet' type='text/css'>
 <center>Untuk mengakses modul, Anda harus login <br>";
  echo "<a href=../../index.php><b>LOGIN</b></a></center>";
}
else{
$aksi="modul/mod_logo/aksi_logo.php";
switch($_GET[act]){
  // Tampil logo
  default:
  $edit = mysql_query("SELECT * FROM logo WHERE id_logo='1'");
  $r    = mysql_fetch_array($edit);

    echo "<h4>Edit logo</h4>
          <form method=POST enctype='multipart/form-data' action=$aksi?module=logo&act=update>
          <input type=hidden name=id value=$r[id_logo]>
          <table class='table'><tbody>
          <tr><td colspan='2'>Gambar : <img src='../media/assets/logo/$r[gambar_logo]'></td></tr>
		  <tr><td colspan='2'>Upload : <input type=file name='fupload' size=30></td></td></tr>
          <tr><td colspan=2><input type=submit value=Update class='btn'>
                            <input type=button value=Batal onclick=self.history.back() class='btn'></td></tr>
          </tbody></table></form>";
    break;  
}
}
?>
