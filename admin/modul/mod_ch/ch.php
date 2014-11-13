<html>
   <head>
		<script type="text/javascript" src="assets/js/external/jquery/jquery.js"></script>
       <script type="text/javascript" src="assets/js/jquery-ui.js"></script>
       <script type="text/javascript" src="assets/js/jquery-ui.min.js"></script>
       <link rel="stylesheet" type="text/css"
        href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" />
       
	   
	   <script type="text/javascript">
$(function() {
$('#Date').datepicker( {
changeMonth: true,
changeYear: true,
showButtonPanel: true,
dateFormat: 'yy MM ',
//minDate:'m', // restrict to show month greater than current month
onClose: function(dateText, inst) {
// set the date accordingly
var month = $("#ui-datepicker-div .ui-datepicker-month :selected").val();
var year = $("#ui-datepicker-div .ui-datepicker-year :selected").val();
$(this).datepicker('setDate', new Date(year, month, 1));
},

});
});
</script>
 
<style type="text/css">.ui-datepicker-calendar { display: none; }</style>

<body>
<?php
session_start();
 if (empty($_SESSION['username']) AND empty($_SESSION['passuser'])){
  echo "<link href='style.css' rel='stylesheet' type='text/css'>
 <center>Untuk mengakses modul, Anda harus login <br>";
  echo "<a href=../../index.php><b>LOGIN</b></a></center>";
}
else{
$aksi="modul/mod_air/aksi_air.php";
switch($_GET[act]){
  // Manajemen air
  default:
    echo "<h2>Curah Hujan </h2>
          <input type=button value='input data' 
          onclick=\"window.location.href='?module=air&act=input';\">
          <table border = 1>
          <tr><th>No</th><th>Tahun</th><th>Bulan</th><th>DAS</th><th>Curah Hujan</th><th>Jumlah Hari Basah</th><th>update</th></tr>"; 
    $tampil=mysql_query("SELECT id, YEAR(waktu) t ,MONTHNAME(waktu) m,ws,jenis,jumlah FROM keb_air ORDER BY waktu ASC");
    $no=1;
    while ($r=mysql_fetch_assoc($tampil)){
       echo "<tr><td>$no</td>
             <td>$r[t]</td>
			 <td>$r[m]</td>
			 <td>$r[ws]</td>
			 <td>$r[jenis]</td>
			 <td>$r[jumlah]</td>
             <td><a href='?module=air&act=editair&id=$r[id]'>update</a> | <a href='$aksi?module=air&act=hapus&id=$r[id]'>Hapus</a>
             </td></tr>";
      $no++;
    }
    echo "</table>";
      break;

  
  // Form input kebutuhan
  case "input":
    echo "<h2>Input Data Kebutuhan Air</h2>
          <form method=POST action='$aksi?module=air&act=input'>
          <table >
		  <tr><td>Waktu : <input id = 'Date'  name='waktu'></td></tr>
          <tr><td>WS : <select name='WS'>
				<option value = 'WS Berau Kelai' > WS Berau Kelai </option>
				<option value = 'WS Karangan' > WS Karangan </option>
				<option value = 'WS Kendilo' > WS Kendilo </option>
				<option value = 'WS Mahakam' > WS Mahakam </option>
			</select> </td></tr>
		  <tr><td>Jenis Kebutuhan : <select name='jenis'>
				<option value = 'Domestik' > Domestik </option>
				<option value = 'Irigasi' > Irigasi </option>
				<option value = 'Industri' > Industri </option>
			</select></td></tr>
		  <tr><td>Jumlah Kebutuhan : <input type=text name='jumlah'></td></tr>
          <tr><td colspan=2><input type=submit name=submit value=Simpan>
                            <input type=button value=Batal onclick=self.history.back()></td></tr>
          </table></form>";
     break;
	
	 
  
  // Form Edit air 
  case "editair":
    $edit=mysql_query("SELECT * FROM keb_air WHERE id='$_GET[id]'");
    $r=mysql_fetch_array($edit);

    echo "<h2>Update Data Kebutuhan</h2>
          <form method=POST action=$aksi?module=air&act=update>
          <input type=hidden name=id value='$r[id]'>
          <table>
		  <tr><td>Jumlah</td><td> : <input type=text name='jumlah' value='$r[jumlah]'></td></tr>";
    echo "<tr><td colspan=2><input type=submit value=Update>
                            <input type=button value=Batal onclick=self.history.back()></td></tr>
          </table></form>";
    break;

 
}	
}


?>
</body>
</html>
