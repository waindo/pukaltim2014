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
    	<th rowspan="2">Kode Bendali</th>
        <th rowspan="2">Nama Bendali</th>
        <th rowspan="2">Sungai</th>
        <th rowspan="2">DAS</th>
        <th rowspan="2">WS</th>
        <th colspan="3">Lokasi</th>
        <th rowspan="2">Tahun Dibangun</th>
        <th rowspan="2">Tahun Selesai Konstruksi</th>
        <th rowspan="2">Tahun Rehabilitasi</th>
        <th rowspan="2">Tipe Bendali</th>
        <th rowspan="2">Tinggi Bendali (m)</th>
        <th rowspan="2">Panjang Bendali (m)</th>
        <th rowspan="2">Kapasitas Tampungan (m3)</th>
        <th rowspan="2">Keterangan</th>
        </tr>
    <tr>
    	<th>Kabupaten/Kota</th>
        <th>Kecamatan</th>
        <th>Desa</th>
    </tr>
    {foreach from=$databendali item='bendali'}
    <tr>
    	<td>{$bendali.kode_bendali}</td>
        <td>{$bendali.nama}</td>
        <td>{$bendali.sungai}</td>
        <td>{$bendali.das}</td>
        <td>{$bendali.ws}</td>
        <td>{$bendali.kota}</td>
        <td>{$bendali.kecamatan}</td>
        <td>{$bendali.desa}</td>
        <td>{$bendali.thn_bangun}</td>
        <td>{$bendali.thn_selesai}</td>
        <td>{$bendali.thn_rehab}</td>
        <td>{$bendali.tipe}</td>
        <td>{$bendali.tinggi}</td>
        <td>{$bendali.panjang}</td>
        <td>{$bendali.kapasitasi}</td>
        <td>{$bendali.keterangan}</td>
    </tr>
    {/foreach}
    
    
    </table></div>
  </div>
</div>
{include file='sidebar.tpl'}
{include file='footer.tpl'}