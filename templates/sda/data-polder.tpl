{include file='header.tpl'}
<div class="row">
  <div class="span9">
    <div class="row content">
    <p style="border-bottom:1px dotted #CCC; padding-bottom:10px;"><a href="index.php">Home</a>/ Data Prasarana SDA</p>
    <h1>Data Prasarana SDA</h1>
    <h2>{$judul}</h2>
    <div style="Width: 100%; overflow-x: scroll;">
 	<table border="1" class="gradienttable">
    <tr>
    	<th rowspan="2">Kode Polder</th>
        <th rowspan="2">Nama Bendali</th>
        <th colspan="3">Lokasi</th>
        <th rowspan="2">Tahun Dibangun</th>
        <th rowspan="2">Tahun Selesai Konstruksi</th>
        <th rowspan="2">Tahun Rehabilitasi</th>
        <th rowspan="2">Luas Polder (m2)</th>
        <th rowspan="2">Kapasitas Tampungan (m3)</th>
        <th rowspan="2">Keterangan</th>
        </tr>
    <tr>
    	<th>Kabupaten/Kota</th>
        <th>Kecamatan</th>
        <th>Desa</th>
    </tr>
    
    {foreach from=$datapolder item='polder'}
    <tr>
    	<td>{$polder.kode_polder}</td>
        <td>{$polder.nama}</td>
        <td>{$polder.kota}</td>
        <td>{$polder.kecamatan}</td>
        <td>{$polder.desa}</td>
        <td>{$polder.thn_bangun}</td>
        <td>{$polder.thn_selesai}</td>
        <td>{$polder.thn_rehab}</td>
        <td>{$polder.luas}</td>
        <td>{$polder.kapasitasi}</td>
        <td>{$polder.keterangan}</td>
    </tr>
    {/foreach}
    </table></div>
  </div>
</div>
{include file='sidebar.tpl'}
{include file='footer.tpl'}