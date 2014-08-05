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
    	<th rowspan="2">Kode Pengaman Pantai</th>
        <th rowspan="2">Nama Daerah Rawa</th>
        <th rowspan="2">Luas Daerah Rawa (Ha)</th>
        <th rowspan="2">Jenis Rawa</th>
        <th colspan="3">Lokasi</th>
        <th rowspan="2">Tahun Pelaksanaan</th>
        <th rowspan="2">Panjang Penanganan (m)</th>
        <th rowspan="2">Keterangan</th>
    </tr>
    <tr>
    	<th>Kabupaten/Kota</th>
        <th>Kecamatan</th>
        <th>Desa</th>
    </tr>
    
    {foreach from=$datarawapantai item='rawapantai'}
    <tr>
    	<td>{$rawapantai.kode_rawapantai}</td>
        <td>{$rawapantai.nama}</td>
        <td>{$rawapantai.luas_rawa}</td>
        <td>{$rawapantai.jenis_rawa}</td>
        <td>{$rawapantai.kota}</td>
        <td>{$rawapantai.kecamatan}</td>
        <td>{$rawapantai.desa}</td>
        <td>{$rawapantai.thn_Pelaksanaan}</td>
        <td>{$rawapantai.panjang}</td>
        <td>{$rawapantai.keterangan}</td>
    </tr>
    {/foreach}
    </table></div>
  </div>
</div>
{include file='sidebar.tpl'}
{include file='footer.tpl'}