{include file='header1.tpl'}
<div class="row">
  <div class="span9">
    <div class="row content">
    <p style="border-bottom:1px dotted #CCC; padding-bottom:10px;"><a href="index.php">Home</a>/ Data Prasarana SDA</p>
    <h1>Data Hidrologi SDA</h1>
    <h2>POS Hidrologi</h2>
	<div style="Width: 100%; overflow-x: scroll;">
 	<table border="1" class="gradienttable">
    <tr>
    	<th rowspan="2">Kode POS</th>
        <th rowspan="2">Nama POS Hidrologi</th>
        <th rowspan="2">DAS</th>
        <th rowspan="2">WS</th>
        <th colspan="4">Lokasi</th>
        <th rowspan="2">Tahun Bangun</th>
        <th rowspan="2">Jenis Sensor</th>
        <th colspan="2">Koordinat</th>
        <th rowspan="2">Elevasi (m)</th>
     </tr>
     <tr>
		<th>Lokasi</th>
     	<th>Desa</th>
        <th>Kecamatan</th>
        <th>Kabupaten</th>
        <th>X</th>
        <th>Y</th>
     </tr>
        
    {foreach from=$datahidro item='hidro'}
    <tr>
    	<td>{$hidro.id}</td>
        <td><a class="fancybox fancybox.ajax" href="xpos/rltm.php?do={$hidro.id}" data-fancybox-group="postel" title="{$hidro.namasta}">{$hidro.namasta}</a></td>
        <td>{$hidro.sungai}</td>
        <td>{$hidro.wil_sungai}</td>
        <td>{$hidro.lokasi}</td>
        <td>{$hidro.desa}</td>
        <td>{$hidro.kecamatan}</td>
        <td>{$hidro.kabupaten}</td>
        <td>{$hidro.tahun}</td>
		<td>{$hidro.type_alat}</td>
        <td>{$hidro.pos_x}</td>
        <td>{$hidro.pos_y}</td>
        <td>{$hidro.pos_z}</td>
		</tr>
    {/foreach}
    
    </table></div>
  </div>
</div>
{include file='sidebar.tpl'}
{include file='footer1.tpl'}