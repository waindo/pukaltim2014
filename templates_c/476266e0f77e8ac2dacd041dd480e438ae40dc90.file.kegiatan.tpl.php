<?php /* Smarty version Smarty-3.1.15, created on 2013-11-17 17:54:53
         compiled from "templates\sda\kegiatan.tpl" */ ?>
<?php /*%%SmartyHeaderCode:203152a10f18852175-45103092%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '476266e0f77e8ac2dacd041dd480e438ae40dc90' => 
    array (
      0 => 'templates\\sda\\kegiatan.tpl',
      1 => 1390333027,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '203152a10f18852175-45103092',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_52a10f189280e8_76973104',
  'variables' => 
  array (
    'thn' => 0,
    'keg' => 0,
    'dataprogram' => 0,
    'program' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52a10f189280e8_76973104')) {function content_52a10f189280e8_76973104($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<script type="text/javascript">
function pilihtahun()
    {
    var tahun=(document.FormTahun.tahun.value);
    var kegiatan=(document.FormTahun.kegiatan.value);
    var menuju="kinerja-"+tahun+"-"+kegiatan+".html";
    location.href=menuju;
}
</script>

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
        <?php if ($_smarty_tpl->tpl_vars['thn']->value!='') {?>
        	<option value="<?php echo $_smarty_tpl->tpl_vars['thn']->value;?>
" selected><?php echo $_smarty_tpl->tpl_vars['thn']->value;?>
</option>
        <?php }?>
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
        <?php if ($_smarty_tpl->tpl_vars['keg']->value!='') {?>
        	<option value="<?php echo $_smarty_tpl->tpl_vars['keg']->value;?>
" selected><?php echo $_smarty_tpl->tpl_vars['keg']->value;?>
</option>
        <?php }?>
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
     <form class="form-horizontal" method="post" action="kinerja-<?php echo $_smarty_tpl->tpl_vars['thn']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['keg']->value;?>
.html">
    	<table width="100%" border="0">
			<tr>
        	<td width="80px" style="padding-bottom:10px;">Program</td>
            <td>
            <select name="program" class="m-wrap" style="width:70%;">
            	<option value="">-- Pilih Program --</option>
     			<?php  $_smarty_tpl->tpl_vars['program'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['program']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['dataprogram']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['program']->key => $_smarty_tpl->tpl_vars['program']->value) {
$_smarty_tpl->tpl_vars['program']->_loop = true;
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['program']->value['id_program'];?>
"><?php echo $_smarty_tpl->tpl_vars['program']->value['nama_program'];?>
</option>
                <?php } ?>
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
  <?php  $_smarty_tpl->tpl_vars['program'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['program']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['dataprogram']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['program']->key => $_smarty_tpl->tpl_vars['program']->value) {
$_smarty_tpl->tpl_vars['program']->_loop = true;
?>
    <tr>
    	<td width="2%"><?php echo $_smarty_tpl->tpl_vars['program']->value['no'];?>
</td>
    	<td width="10%"><?php echo $_smarty_tpl->tpl_vars['program']->value['kategori'];?>
</td>
        <td width="30%"><?php echo $_smarty_tpl->tpl_vars['program']->value['nama_program'];?>
</td>
        <td width="25%"><a href="detailkeg-<?php echo $_smarty_tpl->tpl_vars['program']->value['id_kegiatan'];?>
-<?php echo $_smarty_tpl->tpl_vars['program']->value['pekerjaan'];?>
.html"><?php echo $_smarty_tpl->tpl_vars['program']->value['pekerjaan'];?>
</a></td>
        <td width="15%"><?php echo $_smarty_tpl->tpl_vars['program']->value['lokasi'];?>
</td>
        <td width="15%"><?php echo $_smarty_tpl->tpl_vars['program']->value['rekanan'];?>
</td>
    </tr>
    
    <?php } ?></tbody>
  </table>
    
    </div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ('sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
