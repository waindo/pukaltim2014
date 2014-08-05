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
    	<th rowspan="2">Kode Bendungan</th>
        <th rowspan="2">Nama Bendungan</th>
        <th rowspan="2">Sungai</th>
        <th rowspan="2">DAS</th>
        <th rowspan="2">WS</th>
        <th colspan="3">Lokasi</th>
        <th rowspan="2">Tahun Dibangun</th>
        <th rowspan="2">Tahun Selesai Konstruksi</th>
        <th rowspan="2">Tahun Rehabilitasi</th>
        <th rowspan="2">Tipe Bendungan</th>
        <th rowspan="2">Tinggi Bendungan (m)</th>
        <th rowspan="2">Panjang Bendungan (m)</th>
        <th rowspan="2">Kapasitas Tampungan (m3)</th>
        <th rowspan="2">Luas Catcment Area (Ha)</th>
        <th rowspan="2">Pemanfaatan Air Baku (I/det)</th>
        <th rowspan="2">Pengelola</th>
        <th rowspan="2">Keterangan</th>
    </tr>
    <tr>
    	<th>Kabupaten/Kota</th>
        <th>Kecamatan</th>
        <th>Desa</th>
    </tr>
    
    {foreach from=$dataairbaku item='airbaku'}
    <tr>
    	<td>{$airbaku.kode_airbaku}</td>
        <td>{$airbaku.nama}</td>
        <td>{$airbaku.sungai}</td>
        <td>{$airbaku.das}</td>
        <td>{$airbaku.ws}</td>
        <td>{$airbaku.kota}</td>
        <td>{$airbaku.kecamatan}</td>
        <td>{$airbaku.desa}</td>
        <td>{$airbaku.thn_bangun}</td>
        <td>{$airbaku.thn_selesai}</td>
        <td>{$airbaku.thn_rehab}</td>
        <td>{$airbaku.tipe}</td>
        <td>{$airbaku.tinggi}</td>
        <td>{$airbaku.panjang}</td>
        <td>{$airbaku.kapasitas}</td>
        <td>{$airbaku.luas_catcment}</td>
        <td>{$airbaku.pemanfaatan}</td>
        <td>{$airbaku.pengelola}</td>
        <td>{$airbaku.keterangan}</td>
    </tr>
    {/foreach}
    
    
    </table></div>
  </div>
</div>
{include file='sidebar.tpl'}
{include file='footer.tpl'}