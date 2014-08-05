<?php
error_reporting(0);
session_start();
include "config/koneksi.php";
include "config/library.php";

    $sql = mysql_query("INSERT INTO progres_kegiatan_sda(id_kegiatan,bulan,rencana,realisasi,deviasi,keuangan) 
                        VALUES('$_POST[id]','$_POST[bulan]','$_POST[rencana]','$_POST[realisasi]','$_POST[deviasi]','$_POST[keuangan]')");

    echo "<meta http-equiv='refresh' content='0; url=detailkeg-$_POST[jenis]-$_POST[pekerjaan].html'>";
		
?>
