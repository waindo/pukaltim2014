{include file='header.tpl'}

<div class="row">
  <div class="span9">
    <div class="content" style="padding:15px 15px 0 15px">
        <p style="border-bottom:1px dotted #CCC; padding-bottom:10px;"><a href="index.php">Home</a> /<a href="kinerja.html"> Kegiatan</a> / {$pekerjaan}</p>
     <h2 style="background:#FF9; padding:2px 2px 2px 10px">Detail Pekerjaan BIDANG SUMBER DAYA AIR</h2>
     <table style="margin-left:10px;">
     <tr height="30px">
     	<td width="20%" style="font-size:14px;"><b>Program</b></td>
        <td style="font-size:14px;">: {$nama_program}</td>
     </tr>
     <tr height="30px">
     	<td width="15%" style="font-size:14px;"><b>Tahun</b></td>
        <td style="font-size:14px;">: {$tahun}</td>
     </tr>
     <tr height="30px">
     	<td width="15%" style="font-size:14px;"><b>Nama Pekerjaan</b></td>
        <td style="font-size:14px;">: {$pekerjaan}</td>
     </tr>
     <tr height="30px">
     	<td width="15%" style="font-size:14px;"><b>Lokasi</b></td>
        <td style="font-size:14px;">: {$lokasi}</td>
     </tr>
     <tr height="30px">
     	<td width="15%" style="font-size:14px;"><b>Rekanan</b></td>
        <td style="font-size:14px;">: {$rekanan}</td>
     </tr>
     <tr height="30px">
     	<td width="15%" style="font-size:14px;"><b>Nilai Kontrak</b></td>
        <td style="font-size:14px;">: Rp {$kontrak}</td>
     </tr>
     <tr height="30px">
     	<td width="15%" style="font-size:14px;"><b>Foto</b></td>
        <td style="font-size:14px;">: <img src="assets/foto_kegiatan/{$foto}" width="850px"></td>
     </tr>
     </table>
    <p style="font-size:14px;margin-top:15px;"><img src="{$images}/map-marker.png" /> <b>Peta Lokasi</b> :</p>
    </div>
</div>
{include file='sidebar.tpl'}
{include file='footer.tpl'}