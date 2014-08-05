{include file='header.tpl'}
<div class="row">
  <div class="span9">
    <div class="row content">
    <p style="border-bottom:1px dotted #CCC; padding-bottom:10px;"><a href="index.php">Home</a>/ Data Prasarana SDA</p>
    <h1>Data Hidrologi SDA</h1>
    <h2>Data Aliran Sungai</h2>
    <div align="center">
 	<table border="1" class="gradienttable">
    <tr>
    	<th>Kode DAS</th>
        <th>Nama xDAS</th>
        <th>Panjang DAS (Km2)</th>
        <th>Luas DAS (Km3)</th>
        </tr>
    {foreach from=$datadas item='das'}
    <tr>
    	<td>{$das.kode_das}</td>
        <td>{$das.nama}</td>
        <td>{$das.panjang}</td>
        <td>{$das.luas}</td>
     </tr>
    {/foreach}
    
    </table></div>
  </div>
</div>
{include file='sidebar.tpl'}
{include file='footer.tpl'}