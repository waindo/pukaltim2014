{include file='header.tpl'}
{literal}
<script type="text/javascript">
function pilihbulan()
    {
    var bulan=(document.FormBulan.bulan.value);
    var menuju="progres-sda.php?bulan="+bulan+"";
    location.href=menuju;
}
</script>
{/literal}
<div class="row">
  <div class="span9">
    <div class="content" style="padding:15px 15px 0 15px">
        <p style="border-bottom:1px dotted #CCC; padding-bottom:10px;"><a href="index.php">Home</a> / Progres Kegiatan</p>
   <h2>Progres Kegiatan SDA</h2>
     <div style="border:1px solid #CCC; padding:20px 10px 10px 10px; margin-bottom:10px;">
     <form action="" method="post" name="FormBulan">
     <table>
     <tr>
     	<td>Pilih Bulan</td>
        <td>
        <select name="bulan" class="m-wrap" onchange="pilihbulan();" style="margin:5px 20px 0 20px;width:120px;">
     	{if $bln != ""}
        	<option value="{$bln}" selected>{$bln}</option>
        {/if}
     <option value="">Pilih Bulan</option>
     <option value="1">1</option>
     <option value="2">2</option>
     <option value="3">3</option>
     <option value="4">4</option>
     <option value="5">5</option>
     <option value="6">6</option>
     <option value="7">7</option>
     <option value="8">8</option>
     <option value="9">9</option>
     <option value="10">10</option>
     <option value="11">11</option>
     <option value="12">12</option>
     
     </select></td>
     </tr>
     </table>
     </form>
     </div>
          <div style="border:1px solid #CCC; padding:20px 10px 10px 10px; margin-bottom:10px;">
     <form class="form-horizontal" method="post" action="progres-sda.php?bulan={$bln}">
    	<table width="100%" border="0">
        <tr>
        	<td width="80px" style="padding-bottom:10px;">Program</td>
            <td>
            <select name="program" class="m-wrap" style="width:70%;">
            	<option value="">-- Pilih Program --</option>
     			{foreach from=$dataprogramberjalan item='programberjalan'}
                <option value="{$programberjalan.id_program}">{$programberjalan.nama_program}</option>
                {/foreach}
     		</select>
            </td>
        </tr>
        <tr>
        	<td width="80px" style="padding-bottom:10px;">Pekerjaan</td>
            <td><input type="text" name="pekerjaan" class="m-wrap" style="width:60%" placeholder="Nama Pekerjaan" /></td>
        </tr>
        <tr>
        	<td width="80px" style="padding-bottom:10px;">Lokasi</td>
            <td><input type="text" name="lokasi" class="m-wrap" style="width:30%" placeholder="Lokasi Pekerjaan" /></td>
        </tr>
        <tr>
        	<td width="80px" style="padding-bottom:10px;"></td>
            <td><input type="submit" name="tampil" class="m-btn green-stripe" style="width:120px" value="Tampilkan" /></td>
        </tr>
        </table>
     </form>
     </div>   
    <table border="1" class="gradienttable">
    <tr>
    <th rowspan="2">No</th>
    <th rowspan="2">Progam</th>
    <th rowspan="2">Pekerjaan</th>
    <th rowspan="2">Lokasi</th>
    <th rowspan="2">Rekanan</th>
    <th colspan="3">Progres Fisik</th>
    <th rowspan="2">Progres Keuangan</th>
    </tr>
    <tr>
    <th>Recana</th>
    <th>Realisasi</th>
    <th>Deviasi</th>
    </tr>
    {foreach from=$dataprogres item='progres'}
    <tr>
    	<td width="2%">{$progres.no}</td>
    	<td width="35%">{$progres.nama_program}</td>
        <td width="30%"><a href="detailkeg-{$progres.id_kegiatan}-{$progres.pekerjaan}.html">{$progres.pekerjaan}</a></td>
        <td width="15%">{$progres.lokasi}</td>
        <td width="15%">{$progres.rekanan}</td>
        <td width="5%">{$progres.rencana}</td>
        <td width="5%">{$progres.realisasi}</td>
        <td width="5%">{$progres.deviasi}</td>
        <td width="5%">{$progres.keuangan}</td>
    </tr>
    
    {/foreach}
   </table>
    
    </div>
</div>
{include file='sidebar.tpl'}
{include file='footer.tpl'}