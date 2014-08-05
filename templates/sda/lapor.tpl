{include file='header.tpl'}
<div class="row">
  <div class="span9">
    <div class="row content">
    <p style="border-bottom:1px dotted #CCC; padding-bottom:10px;"><a href="index.php">Home</a>/ Informasi dari masyarakat</p>
    <h1>Pelaporan Bencana Banjir Online</h1>
    <h2>Silahkan Masukkan Informasi Anda</h2>
    <div align="center">
	<form name="form1" method="post" action="lapor.php">
	<table width="510"  align="left" cellpadding="1" cellspacing="1" >

    <tr bgcolor="#FFFFFF">
      <td height="40">Nama </td>
      <td>
      <input name="nama" type="text" id="nama" ></td>
    </tr>
    </tr>
    <tr bgcolor="#FFFFFF">
      <td height="100">Alamat </td>
      <td>
      <textarea name="alamat" type="text" id="alamat" cols = "45" rows ="6"> </textarea></td>
    </tr>
	<tr bgcolor="#FFFFFF">
      <td height="40">Jenis Kejadian </td>
      <td>
          <select name="jk" id="jk">
            <?php
			$cn=mysql_connect('localhost','root','') or die(mysql_error());
			mysql_select_db('sda_db',$cn) or die(mysql_error());
			$sql = "SELECT * FROM codes WHERE codesheads = 1 AND codescodes <> 0 ORDER BY codesdesc1 ASC";
			$rs = mysql_query($sql) or die(mysql_error());

			while($row = mysql_fetch_array($rs)){
			echo "<option value='$row["codescodes"]'>'$row["codesdesc1"]'</option>";
			}mysql_free_result($rs);

			?>

        </select></td>
    </tr>
    </tr>
    <tr bgcolor="#FFFFFF">
      <td height="140">Lokasi Kejadian </td>
      <td>
      <textarea name="lokasi" type="text" id="lokasi" cols="45" rows ="7"></textarea></td>
    </tr>
	<tr bgcolor="#FFFFFF">
      <td height="140">Deskripsi Kejadian </td>
      <td>
      <textarea name="des" type="text" id="des" cols ="45" rows="8"></textarea></td>
    </tr>
    <tr bgcolor="#FFFFFF">
      <td>&nbsp;</td>
      <td height="50"><input type="submit" name="Submit" value="Laporkan!"></td>
    </tr>
    </table></form></div>
  </div>
</div>
{include file='sidebar.tpl'}
{include file='footer.tpl'}