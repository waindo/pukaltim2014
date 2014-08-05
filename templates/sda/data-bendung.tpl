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
    	<th rowspan="2">Kode Bendung</th>
        <th rowspan="2">Nama Bendung</th>
        <th rowspan="2">Sungai</th>
        <th rowspan="2">DAS</th>
        <th rowspan="2">WS</th>
        <th colspan="3">Lokasi</th>
        <th rowspan="2">Tahun Dibangun</th>
        <th rowspan="2">Tahun Selesai Konstruksi</th>
        <th rowspan="2">Tahun Rehabilitasi</th>
        <th rowspan="2">Tipe Bendung</th>
        <th rowspan="2">Tinggi Bendung (m)</th>
        <th rowspan="2">Lebar Bendung (m)</th>
        <th rowspan="2">Pemanfaatan Irigasi (Ha)</th>
        <th rowspan="2">Pengelola</th>
        <th rowspan="2">Keterangan</th>
    </tr>
    <tr>
    	<th>Kabupaten/Kota</th>
        <th>Kecamatan</th>
        <th>Desa</th>
    </tr>
    
    {foreach from=$databendungan item='bendungan'}
    <tr>
    	<td>{$bendungan.kode_bendung}</td>
        <td><a href="assets/foto_booklet/{$bendungan.booklet}" target="_blank">{$bendungan.nama}</a></td>
        <td>{$bendungan.sungai}</td>
        <td>{$bendungan.das}</td>
        <td>{$bendungan.ws}</td>
        <td>{$bendungan.kota}</td>
        <td>{$bendungan.kecamatan}</td>
        <td>{$bendungan.desa}</td>
        <td>{$bendungan.thn_bangun}</td>
        <td>{$bendungan.thn_selesai}</td>
        <td>{$bendungan.thn_rehab}</td>
        <td>{$bendungan.tipe}</td>
        <td>{$bendungan.tinggi}</td>
        <td>{$bendungan.lebar}</td>
        <td>{$bendungan.pemanfaatan}</td>
        <td>{$bendungan.pengelola}</td>
        <td>{$bendungan.keterangan}</td>
        </tr>
    {/foreach}
    
    </table></div>
  </div>
</div>
{include file='sidebar.tpl'}
{include file='footer.tpl'}