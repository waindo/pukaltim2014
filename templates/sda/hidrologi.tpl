{include file='header.tpl'}
<div class="row">
  <div class="span9">
    <div class="row content">
    <p style="border-bottom:1px dotted #CCC; padding-bottom:10px;"><a href="index.php">Home</a>/ Data Prasarana SDA</p>
    <h1>Data Hidrologi SDA</h1>
    <h2>POS Hidrologi</h2>
    <div align="center">
 	<table border="1" class="gradienttable">
    <tr>
    	<th rowspan="2">Kode POS</th>
        <th rowspan="2">Nama POS Hidrologi</th>
        <th rowspan="2">DAS</th>
        <th rowspan="2">WS</th>
        <th colspan="3">Lokasi</th>
        <th rowspan="2">Tahun Bangun</th>
        <th rowspan="2">Tahun Rehabilitasi</th>
        <th colspan="2">Lokasi</th>
        <th rowspan="2">Elevasi (m)</th>
     </tr>
     <tr>
     	<th>Kabupaten/Kota</th>
        <th>Kecamatan</th>
        <th>Desa</th>
        <th>X</th>
        <th>Y</th>
     </tr>
        
    {foreach from=$datahidro item='hidro'}
    <tr>
    	<td>{$hidro.kode_pos}</td>
        <td>{$hidro.nama_pos}</td>
        <td>{$hidro.das}</td>
        <td>{$hidro.ws}</td>
        <td>{$hidro.kota}</td>
        <td>{$hidro.kecamatan}</td>
        <td>{$hidro.desa}</td>
        <td>{$hidro.thn_bangun}</td>
        <td>{$hidro.thn_rehab}</td>
        <td>{$hidro.x}</td>
        <td>{$hidro.y}</td>
        <td>{$hidro.elevasi}</td>
     </tr>
    {/foreach}
    
    </table></div>
  </div>
</div>
{include file='sidebar.tpl'}
{include file='footer.tpl'}