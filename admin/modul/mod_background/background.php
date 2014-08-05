<?php
session_start();
 if (empty($_SESSION['username']) AND empty($_SESSION['passuser'])){
  echo "<link href='style.css' rel='stylesheet' type='text/css'>
 <center>Untuk mengakses modul, Anda harus login <br>";
  echo "<a href=../../index.php><b>LOGIN</b></a></center>";
}
else{
$aksi="modul/mod_background/aksi_background.php";
switch($_GET[act]){
  // Tampil background
  default:
  $edit = mysql_query("SELECT * FROM background WHERE id_background='1'");
  $r    = mysql_fetch_array($edit);

    echo "<h4>Edit Background</h4>
          <form method=POST enctype='multipart/form-data' action=$aksi?module=background&act=update>
          <input type=hidden name=id value=$r[id_background]>
          <table class='table'><tbody>
          <tr><td colspan='2'>Gambar : <img src='../media/assets/background/$r[gambar_background]' style='width:500px;'></td></tr>
		  <tr><td colspan='2'>Upload : <input type=file name='fupload' size=30></td></td></tr>
          <tr><td colspan=2><input type=submit value=Update class='btn'>
                            <input type=button value=Batal onclick=self.history.back() class='btn'></td></tr>
          </tbody></table></form>";
    break;  
}
}
?>
