{include file='header.tpl'}
<div class="row">
  <div class="span9">
    <div class="row content">
	
    <p style="border-bottom:1px dotted #CCC; padding-bottom:10px;"><a href="index.php">Home</a>/ Informasi dari masyarakat</p>
    <h1>Pelaporan Bencana Banjir Online</h1>
    <h2>Silahkan Masukkan Informasi Anda</h2>
	<form name="form1" method="post" action="act_lapor.php">
	<table border = "0" width="510"  align="left" cellpadding="1" cellspacing="1" >

    <tr bgcolor="#EEEEEE">
      <td>Nama</td>
      <td>
      <input name="nama" type="text" id="nama" maxlength="50" size="60"></td>
    </tr>
    <tr bgcolor="#EDFDFF">
      <td>Alamat</td>
      <td>
      <textarea name="alamat" type="text" id="alamat" maxlength="200" cols="45"> </textarea></td>
    </tr>
	<tr bgcolor="#EEEEEE">
      <td>Jenis Kejadian</td>
      <td>
		<input type="radio" name="jk" value="Aman">Aman<br>
		<input type="radio" name="jk" value="Banjir">Banjir<br>
		<input type="radio" name="jk" value="Tergenang">Tergenang 
		</td>
    </tr>
	<tr bgcolor="#EDFDFF">
      <td>Ketinggian Air</td>
      <td>
      <input type="radio" name="ktair" value="Kering">Kering<br>
		<input type="radio" name="ktair" value="0 - 20 cm">0 - 20 cm<br>
		<input type="radio" name="ktair" value="20 - 40 cm">20 - 40 cm<br>
		<input type="radio" name="ktair" value="40 - 60 cm">40 - 60 cm<br>
		<input type="radio" name="ktair" value="60 - 80 cm">60 - 80 cm<br>
		<input type="radio" name="ktair" value="80 - 100 cm">80 - 100 cm <br>
		<input type="radio" name="ktair" value="lebih dari 100 cm">lebih dari 100 cm
		</td>
	</tr>
	<tr bgcolor="#EEEEEE">
      <td>Kondisi Cuaca</td>
      <td>
      <input type="radio" name="cuaca" value="Hujan Ringan">Hujan Ringan<br>
		<input type="radio" name="cuaca" value="Hujan sedang">Hujan Sedang<br>
		<input type="radio" name="cuaca" value="Hujan Deras">Hujan Deras<br>
		<input type="radio" name="cuaca" value="Hujan Sangat Deras">Hujan Sangat Deras<br>
		<input type="radio" name="cuaca" value="Berawan">Berawan <br>
		<input type="radio" name="cuaca" value="Cerah ">Cerah
		</td>
	</tr>
	<tr bgcolor="#EDFDFF">
      <td>Situasi Lalu Lintas</td>
      <td>
      <input type="radio" name="lalin" value="Lancar">Lancar<br>
		<input type="radio" name="lalin" value="Tersendat">Tersendat <br>
		<input type="radio" name="lalin" value="Padat Merayap">Padat Merayap <br>
		<input type="radio" name="lalin" value="Macet Total">Macet Total
    </tr>
    <tr bgcolor="#EEEEEE">
      <td>Lokasi Kejadian</td>
      <td>
      <textarea name="lokasi" type="text" id="lokasi"  maxlength="200" cols="45"></textarea></td>
    </tr>
	<tr bgcolor="#EDFDFF">
      <td>Deskripsi Kejadian</td>
      <td>
      <textarea name="des" type="text" id="des"  maxlength="200" cols="45"></textarea></td>
    </tr>
    
    <tr bgcolor="#EEEEEE">
      <td>&nbsp;</td>
      <td><input type="submit" name="Submit" value="Laporkan !"></td>
    </tr>
    </table>
	</form>
	
	</div>
  </div>
</div>
{include file='sidebar.tpl'}
{include file='footer.tpl'}