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
    	<th rowspan="2">Kode Jaringan</th>
        <th rowspan="2">Nama Jaringan</th>
        <th rowspan="2">Lokasi (Kab/Kota)</th>
        <th rowspan="2">Luas Daerah (Ha)</th>
        <th rowspan="2">Tahun Pelaksanaan</th>
        <th colspan="2">Saluran Pembawa Primer</th>
        <th colspan="2">Saluran Pembawa Sekunder</th>
        <th rowspan="2">Saluran Pembuang(m)</th>
        <th rowspan="2">Bangunan Bagi Sadap (Buah)</th>
        <th rowspan="2">Bangunan Pelengkap (Buah)</th>
        <th rowspan="2">Keterangan</th>
    </tr>
    <tr>
    	<th>Tanah Primer</th>
        <th>Linning Primer</th>
        <th>Tanah Sekunder</th>
        <th>Linning Sekunder</th>
    </tr>
    {foreach from=$datairigasi item='irigasi'}
    <tr>
    	<td>{$irigasi.kode_jaringan}</td>
        <td><a href="assets/foto_booklet/{$irigasi.booklet_jaringan}" target="_blank">{$irigasi.nama_jaringan}</a></td>
        <td>{$irigasi.lokasi_jaringan}</td>
        <td>{$irigasi.luas_jaringan}</td>
        <td>{$irigasi.tahun}</td>
        <td>{$irigasi.tnh_primer}</td>
        <td>{$irigasi.inning_primer}</td>
        <td>{$irigasi.tnh_sekunder}</td>
        <td>{$irigasi.linning_sekunder}</td>
        <td>{$irigasi.sp}</td>
        <td>{$irigasi.bs}</td>
        <td>{$irigasi.bp}</td>
        <td>{$irigasi.keterangan}</td>
    </tr>
    {/foreach}
    
    
    </table></div>
  </div>
</div>
{include file='sidebar.tpl'}
{include file='footer.tpl'}