<?php /* Smarty version Smarty-3.1.15, created on 2013-11-09 20:20:38
         compiled from "templates\sda\data-airbaku-bendungan.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1511552a3ad46855e42-87183265%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5245ec2dc29d28fef0b4786546a9f0f7eaa366ae' => 
    array (
      0 => 'templates\\sda\\data-airbaku-bendungan.tpl',
      1 => 1386459139,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1511552a3ad46855e42-87183265',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_52a3ad469a1735_11633360',
  'variables' => 
  array (
    'judul' => 0,
    'dataairbaku' => 0,
    'airbaku' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52a3ad469a1735_11633360')) {function content_52a3ad469a1735_11633360($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="row">
  <div class="span9">
    <div class="row content">
    <p style="border-bottom:1px dotted #CCC; padding-bottom:10px;"><a href="index.php">Home</a>/ Data Prasarana SDA</p>
    <h1>Data Prasarana SDA</h1>
    <h2><?php echo $_smarty_tpl->tpl_vars['judul']->value;?>
</h2>
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
    <?php  $_smarty_tpl->tpl_vars['airbaku'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['airbaku']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['dataairbaku']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['airbaku']->key => $_smarty_tpl->tpl_vars['airbaku']->value) {
$_smarty_tpl->tpl_vars['airbaku']->_loop = true;
?>
    <tr>
    	<td><?php echo $_smarty_tpl->tpl_vars['airbaku']->value['kode_airbaku'];?>
</td>
        <td><a href="assets/foto_booklet/<?php echo $_smarty_tpl->tpl_vars['airbaku']->value['booklet'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['airbaku']->value['nama'];?>
</a></td>
        <td><?php echo $_smarty_tpl->tpl_vars['airbaku']->value['sungai'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['airbaku']->value['das'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['airbaku']->value['ws'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['airbaku']->value['kota'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['airbaku']->value['kecamatan'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['airbaku']->value['desa'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['airbaku']->value['thn_bangun'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['airbaku']->value['thn_selesai'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['airbaku']->value['thn_rehab'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['airbaku']->value['tipe'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['airbaku']->value['tinggi'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['airbaku']->value['panjang'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['airbaku']->value['kapasitas'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['airbaku']->value['luas_catcment'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['airbaku']->value['pemanfaatan'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['airbaku']->value['pengelola'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['airbaku']->value['keterangan'];?>
</td>
    </tr>
    <?php } ?>
    </table></div>
  </div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ('sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
