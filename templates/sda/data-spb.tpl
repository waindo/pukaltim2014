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
    	<th rowspan="2">Kode Sistem</th>
        <th rowspan="2">Nama Sistem</th>
        <th rowspan="2">Kabupaten/Kota</th>
        <th rowspan="2">Tahun Pelaksanaan</th>
        <th colspan="4">Panjang Penanganan (m)</th>
        </tr>
    <tr>
    	<th>Normalisasi Sungai (m)</th>
        <th>Pasangan Batu (m)</th>
        <th>Beton (m)</th>
        <th>SheetPile (m)</th>
    </tr>
    {foreach from=$dataspb item='spb'}
    <tr>
    	<td>{$spb.kode_sistem}</td>
        <td>{$spb.nama}</td>
        <td>{$spb.kota}</td>
        <td>{$spb.thn_pelaksanaan}</td>
        <td>{$spb.normalisasi}</td>
        <td>{$spb.pasanganbatu}</td>
        <td>{$spb.beton}</td>
        <td>{$spb.sheetpile}</td>
    </tr>
    {/foreach}
    
    </table></div>
  </div>
</div>
{include file='sidebar.tpl'}
{include file='footer.tpl'}