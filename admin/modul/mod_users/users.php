<?php
session_start();
 if (empty($_SESSION['username']) AND empty($_SESSION['passuser'])){
  echo "<link href='style.css' rel='stylesheet' type='text/css'>
 <center>Untuk mengakses modul, Anda harus login <br>";
  echo "<a href=../../index.php><b>LOGIN</b></a></center>";
}
else{

$aksi="modul/mod_users/aksi_users.php";
switch($_GET[act]){
  // Tampil User
  default:
    if ($_SESSION[leveluser]=='admin'){
      $tampil = mysql_query("SELECT * FROM users ORDER BY username");
      echo "<h4>User</h4>
          <p><a href='?module=user&act=tambahuser';\" class='btn btn-success'>Tambah User</a></p>";
    }
    else{
      $tampil=mysql_query("SELECT * FROM users 
                           WHERE username='$_SESSION[namauser]'");
      echo "<h2>User</h2>";
    }
    
    echo "<table class='table table-bordered'><thead>
          <tr>
          <th>No.</th>
          <th>Username</th>
          <th>Nama lengkap</th>
          <th>Email</th>
          <th>No.Telp/HP</th>
          <th>Level</th>
          <th>Blokir</th>
          <th>#</th>
          </tr></thead> "; 
    $no=1;
    while ($r=mysql_fetch_array($tampil)){
       echo "<tr><td width='25'>$no</td>
             <td>$r[username]</td>
             <td>$r[nama_lengkap]</td>
		         <td><a href=mailto:$r[email]>$r[email]</a></td>
		         <td>$r[no_telp]</td>
		         <td>$r[level]</td>
		         <td>$r[blokir]</td>
             <td width='20'><a href='?module=user&act=edituser&id=$r[id_session]' title='Edit'><i class='icon-edit'></i></a></td></tr>";
      $no++;
    }
    echo "</table>";
    break;
  
  case "tambahuser":
    if ($_SESSION[leveluser]=='admin'){
    echo "<h4>Tambah User</h4>
          <form method=POST action='$aksi?module=user&act=input'>
          <table class='table'>
          <tr><td>Username</td>     <td> <input type=text name='username'></td></tr>
          <tr><td>Password</td>     <td> <input type=text name='password'></td></tr>
          <tr><td>Nama Lengkap</td> <td> <input type=text name='nama_lengkap'></td></tr>  
          <tr><td>E-mail</td>       <td> <input type=text name='email' ></td></tr>
          <tr><td>No.Telp/HP</td>   <td> <input type=text name='no_telp' ></td></tr>
          <tr><td colspan=2><input type=submit value=Simpan class='btn'>
                            <input type=button value=Batal onclick=self.history.back() class='btn'></td></tr>
          </table></form>";
    }
    else{
      echo "Anda tidak berhak mengakses halaman ini.";
    }
     break;
    
  case "edituser":
    $edit=mysql_query("SELECT * FROM users WHERE id_session='$_GET[id]'");
    $r=mysql_fetch_array($edit);

    if ($_SESSION[leveluser]=='admin'){
    echo "<h4>Edit User</h4>
          <form method=POST action=$aksi?module=user&act=update>
          <input type=hidden name=id value='$r[id_session]'>
          <table class='table'>
          <tr><td>Username</td>     <td> <input type=text name='username' value='$r[username]' disabled> **)</td></tr>
          <tr><td>Password</td>     <td> <input type=text name='password'> *) </td></tr>
          <tr><td>Nama Lengkap</td> <td> <input type=text name='nama_lengkap' size=30  value='$r[nama_lengkap]'></td></tr>
          <tr><td>E-mail</td>       <td> <input type=text name='email' size=30 value='$r[email]'></td></tr>
          <tr><td>No.Telp/HP</td>   <td> <input type=text name='no_telp' size=30 value='$r[no_telp]'></td></tr>";

    if ($r[blokir]=='N'){
      echo "<tr><td>Blokir</td>     <td> <input type=radio name='blokir' value='Y'> Y   
                                           <input type=radio name='blokir' value='N' checked> N </td></tr>";
    }
    else{
      echo "<tr><td>Blokir</td>     <td> <input type=radio name='blokir' value='Y' checked> Y  
                                          <input type=radio name='blokir' value='N'> N </td></tr>";
    }
    
    echo "<tr><td colspan=2>*) Apabila password tidak diubah, dikosongkan saja.<br />
                            **) Username tidak bisa diubah.</td></tr>
          <tr><td colspan=2><input type=submit value=Update class='btn'>
                            <input type=button value=Batal onclick=self.history.back() class='btn'></td></tr>
          </table></form>";     
    }
    else{
    echo "<h4>Edit User</h4>
          <form method=POST action=$aksi?module=user&act=update>
          <input type=hidden name=id value='$r[id_session]'>
          <input type=hidden name=blokir value='$r[blokir]'>
          <table class='table'>
          <tr><td>Username</td>     <td> <input type=text name='username' value='$r[username]' disabled> **)</td></tr>
          <tr><td>Password</td>     <td> <input type=text name='password'> *) </td></tr>
          <tr><td>Nama Lengkap</td> <td> <input type=text name='nama_lengkap' size=30  value='$r[nama_lengkap]'></td></tr>
          <tr><td>E-mail</td>       <td> <input type=text name='email' size=30 value='$r[email]'></td></tr>
          <tr><td>No.Telp/HP</td>   <td> <input type=text name='no_telp' size=30 value='$r[no_telp]'></td></tr>";    
    echo "<tr><td colspan=2>*) Apabila password tidak diubah, dikosongkan saja.<br />
                            **) Username tidak bisa diubah.</td></tr>
          <tr><td colspan=2><input type=submit value=Update class='btn'>
                            <input type=button value=Batal onclick=self.history.back() class='btn'></td></tr>
          </table></form>";     
    }
    break;  
}
}
?>
