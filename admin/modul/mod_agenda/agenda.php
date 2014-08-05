<?php
session_start();
 if (empty($_SESSION['username']) AND empty($_SESSION['passuser'])){
  echo "<link href='style.css' rel='stylesheet' type='text/css'>
 <center>Untuk mengakses modul, Anda harus login <br>";
  echo "<a href=../../index.php><b>LOGIN</b></a></center>";
}
else{
$aksi="modul/mod_agenda/aksi_agenda.php";
switch($_GET[act]){
  // Tampil Agenda
  default:
    echo "<h4>Agenda</h4>
          <p><a href='?module=agenda&act=tambahagenda' class=\"btn btn-success\">Tambah Agenda</a></p>
          <table class='table table-bordered'><thead>
          <tr>
          <th>No.</th>
          <th>Tema</th>
          <th>Tgl. mulai</th>
          <th>Tgl. selesai</th>
          <th width='40'>#</th>
          </tr></thead><tbody>";

    $p      = new Paging;
    $batas  = 15;
    $posisi = $p->cariPosisi($batas);

    if ($_SESSION[leveluser]=='admin'){
      $tampil=mysql_query("SELECT * FROM agenda ORDER BY id_agenda DESC LIMIT $posisi,$batas");
    }
    else{
      $tampil=mysql_query("SELECT * FROM agenda 
                           WHERE username='$_SESSION[namauser]'       
                           ORDER BY id_agenda DESC LIMIT $posisi,$batas");
    }

    $no = $posisi+1;
    while ($r=mysql_fetch_array($tampil)){
      $tgl_mulai   = tgl_indo($r[tgl_mulai]);
      $tgl_selesai = tgl_indo($r[tgl_selesai]);
      echo "<tr><td width='25'>$no</td>
                <td width=220>$r[tema]</td>
                <td>$tgl_mulai</td>
                <td>$tgl_selesai</td>
                <td><a href=?module=agenda&act=editagenda&id=$r[id_agenda] title='Edit'><i class='icon-edit'></i></a>
	                  <a href=$aksi?module=agenda&act=hapus&id=$r[id_agenda] title='Hapus'><i class='icon-trash'></i></a>
		        </tr>";
      $no++;
    }
    echo "</tbody></table>";

    if ($_SESSION[leveluser]=='admin'){
      $jmldata = mysql_num_rows(mysql_query("SELECT * FROM agenda"));
    }
    else{
      $jmldata = mysql_num_rows(mysql_query("SELECT * FROM agenda WHERE username='$_SESSION[namauser]'"));
    }  
    $jmlhalaman  = $p->jumlahHalaman($jmldata, $batas);
    $linkHalaman = $p->navHalaman($_GET[halaman], $jmlhalaman);

echo "<div class=\"pagination\"><ul> $linkHalaman</ul></div>";

    break;

  
  case "tambahagenda":
    echo "<h4>Tambah Agenda</h4>
          <form method=POST action='$aksi?module=agenda&act=input'>
          <table class='table'><tbody>
          <tr><td>Tema</td>      <td> <input type=text name='tema' class='input-xxlarge'></td></tr>
          <tr><td>Isi Agenda</td>  <td> <textarea name='isi_agenda' class='ckeditor' style='width: 600px; height: 150px;'></textarea></td></tr>
          <tr><td>Tempat</td>    <td> <input type=text name='tempat' class='input-xlarge'></td></tr>
          <tr><td>Pukul</td>    <td>  <input type=text name='jam' class='input-mini'></td></tr>
          <tr><td>Tgl Mulai</td><td>  ";        
          combotgl(1,31,'tgl_mulai',$tgl_skrg);
          combonamabln(1,12,'bln_mulai',$bln_sekarang);
          combothn(2000,$thn_sekarang,'thn_mulai',$thn_sekarang);

    echo "</td></tr>
          <tr><td>Tgl Selesai</td><td>  ";
          combotgl(1,31,'tgl_selesai',$tgl_skrg);
          combonamabln(1,12,'bln_selesai',$bln_sekarang);
          combothn(2000,$thn_sekarang,'thn_selesai',$thn_sekarang);

    echo "</td></tr>
          <tr><td>Pengirim</td>    <td> <input type=text name='pengirim' class='input-medium'></td></tr>
          <tr><td colspan=2><input type=submit value=Simpan class='btn'>
          <input type=button value=Batal onclick=self.history.back() class='btn'></td></tr>
          </tbody></table></form>";
    break;
  

  case "editagenda":
    if ($_SESSION[leveluser]=='admin'){
      $edit = mysql_query("SELECT * FROM agenda WHERE id_agenda='$_GET[id]'");
    }
    else{
      $edit = mysql_query("SELECT * FROM agenda WHERE id_agenda='$_GET[id]' AND username='$_SESSION[namauser]'");
    }
    
    $r    = mysql_fetch_array($edit);

    echo "<h4>Edit Agenda</h4>
          <form method=POST action=$aksi?module=agenda&act=update>
          <input type=hidden name=id value=$r[id_agenda]>
          <table class='table'><tbody>
          <tr><td>Tema</td>      <td> <input type=text name='tema' value='$r[tema]' class='input-xxlarge'></td></tr>
          <tr><td>Isi Agenda</td>  <td> <textarea name='isi_agenda' class='ckeditor' style='width: 600px; height: 150px;'>$r[isi_agenda]</textarea></td></tr>
          <tr><td>Tempat</td>    <td> <input type=text name='tempat' value='$r[tempat]' class='input-xlarge'></td></tr>
          <tr><td>Pukul</td>    <td> <input type=text name='jam' value='$r[jam]' class='input-mini'></td></tr>
          <tr><td>Tgl Mulai</td><td> ";    
          $get_tgl=substr("$r[tgl_mulai]",8,2);
          combotgl(1,31,'tgl_mulai',$get_tgl);
          $get_bln=substr("$r[tgl_mulai]",5,2);
          combonamabln(1,12,'bln_mulai',$get_bln);
          $get_thn=substr("$r[tgl_mulai]",0,4);
          $thn_skrg=date("Y");
          combothn($thn_sekarang-2,$thn_sekarang+2,'thn_mulai',$get_thn);

    echo "</td></tr>
          <tr><td >Tgl Selesai</td><td> ";    
          $get_tgl2=substr("$r[tgl_selesai]",8,2);
          combotgl(1,31,'tgl_selesai',$get_tgl2);
          $get_bln2=substr("$r[tgl_selesai]",5,2);
          combonamabln(1,12,'bln_selesai',$get_bln2);
          $get_thn2=substr("$r[tgl_selesai]",0,4);
          combothn($thn_sekarang-2,$thn_sekarang+2,'thn_selesai',$get_thn2);

    echo "</td></tr>
          <tr><td >Pengirim</td>    <td> <input type=text name='pengirim' value='$r[pengirim]' class='input-medium'></td></tr>
          <tr><td  colspan=2><input type=submit value=Update class='btn'>
                            <input type=button value=Batal onclick=self.history.back() class='btn'></td></tr>
          </tbody></table></form>";
    break;  
}
}
?>
