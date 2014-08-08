<?php
session_start();
$koneksi = mysql_connect("localhost","root","") or die("Koneksi Gagal !" . mysql_error());
 
$db = mysql_select_db("sda_db") or die("Database tidak ada !" . mysql_error());

 if (empty($_SESSION['username']) AND empty($_SESSION['passuser'])){
  echo "<link href='style.css' rel='stylesheet' type='text/css'>
 <center>Untuk mengakses modul, Anda harus login <br>";
  echo "<a href=../../index.php><b>LOGIN</b></a></center>";
}
else{
$aksi="modul/mod_lapor/aksi_lapor.php";
switch($_GET[act]){
  // Manajemen stasiun
  default:
    echo "<h2>LAPORAN DARI MASYARAKAT</h2>
         
          <table>
          "; 
    //Query
       $query = mysql_query("select * from lapol ORDER BY lapolident ASC ", $koneksi);
    //Membentuk table dari hasil query
       echo "<table border=1>";
        echo "<tr></td><td>Nama Pelapor</td><td>Alamat</td> <td>Waktu Kejadian</td><td>Jenis Kejadian</td><td>Ketinggian Air</td><td>Kondisi Cuaca</td><td>Situasi Lalulintas</td><td>Lokasi Kejadian</td><td>Deskripsi</td><td>update</td></tr>";
        while ($r = mysql_fetch_array($query, MYSQL_ASSOC)) {
                printf("<tr><td>$r[lapolnames]</td><td>$r[lapoladdrs]</td><td>$r[lapoltimes]</td> <td>$r[lapoljenkj]</td><td>$r[lapolktair]</td><td>$r[lapolcuaca]</td><td>$r[lapollalin]</td><td>$r[lapollocat]</td><td>$r[lapoldescr]</td>
				<td> <a href='$aksi?module=lapor&act=hapus&id=$r[lapolident]'>Hapus</a></td></tr>");
        }
		
        echo "</table>";
	    break;	
	
    break;  
    }
   

	
   
  
}

?>
