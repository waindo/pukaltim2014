<?php
session_start();
 if (empty($_SESSION['username']) AND empty($_SESSION['passuser'])){
  echo "<link href='style.css' rel='stylesheet' type='text/css'>
 <center>Untuk mengakses modul, Anda harus login <br>";
  echo "<a href=../../index.php><b>LOGIN</b></a></center>";
}
else{
$aksi="modul/mod_poling/aksi_poling.php";
switch($_GET[act]){
  // Tampil Modul
  default:
    echo "<h4>Poling</h4>
          <p><a href='?module=poling&act=tambahpoling';\" class='btn btn-success'>Tambah Poling</a></p>
          <table class='table table-bordered'><thead>
          <tr>
		  <th width='25'>No.</th>
          <th>Pilihan</th>
          <th>Status</th>
          <th>Rating</th>
          <th>Aktif</th>
          <th width='40'>#</th>
		  </tr></thead><tbody>";
          
    $no = 1;
    $tampil=mysql_query("SELECT * FROM poling ORDER BY id_poling DESC");
    while ($r=mysql_fetch_array($tampil)){
      echo "<tr>
            <td>$no</td>
            <td>$r[pilihan]</td>
            <td>$r[status]</td>
            <td>$r[rating]</td>
            <td>$r[aktif]</td>
            <td><a href=?module=poling&act=editpoling&id=$r[id_poling]><i class='icon-edit'></i></a>
            </td></tr>";
      $no++;
    }
    echo "</tbody></table>";
    break;

  case "tambahpoling":
    echo "<h4>Tambah Poling</h4>
          <form method=POST action='$aksi?module=poling&act=input'>
          <table class='table'>
          <tr><td>Pilihan</td> <td> : <input type=text name='pilihan' size=50></td></tr>
          <tr><td>Status</td>   <td> : <input type=radio name='status' value='Jawaban' checked>Jawaban 
                                      <input type=radio name='status' value='Pertanyaan'>Pertanyaan  </td></tr>
          <tr><td>Aktif</td>   <td> : <input type=radio name='aktif' value='Y' checked>Y 
                                      <input type=radio name='aktif' value='N'>N  </td></tr>
          <tr><td colspan=2><input type=submit value=Simpan class='btn'>
                            <input type=button value=Batal onclick=self.history.back() class='btn'></td></tr>
          </table></form>";
     break;
 
  case "editpoling":
    $edit = mysql_query("SELECT * FROM poling WHERE id_poling='$_GET[id]'");
    $r    = mysql_fetch_array($edit);

    echo "<h4>Edit Poling</h4>
          <form method=POST action=$aksi?module=poling&act=update>
          <input type=hidden name=id value='$r[id_poling]'>
          <table class='table'>
          <tr><td>Pilihan</td> <td> : <input type=text name='pilihan' value='$r[pilihan]' size=50></td></tr>";
          
    if ($r[aktif]=='Y'){
      echo "<tr><td>Aktif</td> <td> : <input type=radio name='aktif' value='Y' checked>Y  
                                      <input type=radio name='aktif' value='N'> N</td></tr>";
    }
    else{
      echo "<tr><td>Aktif</td> <td> : <input type=radio name='aktif' value='Y'>Y  
                                      <input type=radio name='aktif' value='N' checked>N</td></tr>";
    }

    if ($r[status]=='Jawaban'){
      echo "<tr><td>Status</td> <td> : <input type=radio name='status' value='Jawaban' checked>Jawaban  
                                       <input type=radio name='status' value='Pertanyaan'> Pertanyaan</td></tr>";
    }
    else{
      echo "<tr><td>Status</td> <td> : <input type=radio name='status' value='Jawaban'>Jawaban  
                                      <input type=radio name='status' value='Pertanyaan' checked>Pertanyaan</td></tr>";
    }

    echo "<tr><td colspan=2><input type=submit value=Update class='btn'>
                            <input type=button value=Batal onclick=self.history.back() class='btn'></td></tr>
          </table></form>";
    break;  
}
}
?>
