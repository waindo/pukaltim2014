
{include file='header.tpl'}
{literal}
<script type="text/javascript">
function pilihtahun()
    {
    var tahun=(document.FormTahun.tahun.value);
    var kegiatan=(document.FormTahun.kegiatan.value);
    var menuju="kinerja-"+tahun+"-"+kegiatan+".html";
    location.href=menuju;
}
</script>
{/literal}
<div class="row">
  <div class="span9">
    <div class="content" style="padding:10px 15px 0 15px;">
        <p style="border-bottom:1px dotted #CCC; padding-bottom:10px;"><a href="index.php">Home</a> / Kegiatan</p>
     <h2>Kinerja SDA</h2>
    <div style="border:1px solid #CCC; padding:20px 10px 10px 10px; margin-bottom:10px;">
     <form action="" method="post" name="FormTahun">
     <table>
     <tr>
     	<td width="90px">Pilih Tahun</td>
        <td>
        <select name="tahun" class="m-wrap" onchange="pilihtahun();" style="margin:5px 20px 0 20px;width:120px;">
        {if $thn != ""}
        	<option value="{$thn}" selected>{$thn}</option>
        {/if}
     <option value="">Pilih Tahun</option>
     <option value="2008">2008</option>
     <option value="2009">2009</option>
     <option value="2010">2010</option>
     <option value="2011">2011</option>
     <option value="2012">2012</option>
     <option value="2013">2013</option>
     <option value="2014">2014</option>
     </select></td>
     </tr>
      <tr>
     	<td width="90px">Pilih Kegiatan</td>
        <td>
        <select name="kegiatan" class="m-wrap" onchange="pilihtahun();" style="margin:5px 20px 0 20px;width:140px;">
        {if $keg != ""}
        	<option value="{$keg}" selected>{$keg}</option>
        {/if}
     <option value="">Pilih Kegiatan</option>
     <option value="konstruksi">Konstruksi</option>
     <option value="perencanaan">Perencanaan</option>
     <option value="">Semua</option>
     </select></td>
     </tr>
     </table>
     </form>
     </div>
          <div style="border:1px solid #CCC; padding:20px 10px 10px 10px; margin-bottom:10px;">
     <form class="form-horizontal" method="post" action="kinerja-{$thn}-{$keg}.html">
    	<table width="100%" border="0">
			<tr>
        	<td width="80px" style="padding-bottom:10px;">Program</td>
            <td>
            <select name="program" class="m-wrap" style="width:70%;">
            	<option value="">-- Pilih Program --</option>
     			{foreach from=$dataprogram item='program'}
                <option value="{$program.id_program}">{$program.nama_program}</option>
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
            <td><input type="submit" name="tampil" class="m-btn blue-stripe" style="width:120px" value="Tampilkan" /></td>
        </tr>
        </table>
     </form>
     </div>   
    <table class='display table table-bordered table-striped' id='tabel'>
     <thead>
    <tr>
    <th>No</th>
    <th>Kategori</th>
    <th>Progam</th>
    <th>Pekerjaan</th>
    <th>Lokasi</th>
    <th>Rekanan</th>
    </tr></thead><tbody>
  {foreach from=$dataprogram item='program'}
    <tr>
    	<td width="2%">{$program.no}</td>
    	<td width="10%">{$program.kategori}</td>
        <td width="30%">{$program.nama_program}</td>
        <td width="25%"><a href="detailkeg-{$program.id_kegiatan}-{$program.pekerjaan}.html">{$program.pekerjaan}</a></td>
        <td width="15%">{$program.lokasi}</td>
        <td width="15%">{$program.rekanan}</td>
    </tr>
    
    {/foreach}</tbody>
  </table>
    
    </div>
</div>
{include file='sidebar.tpl'}
{include file='footer.tpl'}