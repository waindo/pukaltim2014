<?php /* Smarty version Smarty-3.1.15, created on 2013-11-09 23:39:50
         compiled from "templates\sda\data-airbaku-bendung.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2607552a32a022da056-91850338%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '414d498dc4077640fb2bf7b3e43ca3bdb2a7ea5b' => 
    array (
      0 => 'templates\\sda\\data-airbaku-bendung.tpl',
      1 => 1386459159,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2607552a32a022da056-91850338',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_52a32a023ce781_47377034',
  'variables' => 
  array (
    'judul' => 0,
    'dataairbaku' => 0,
    'airbaku' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52a32a023ce781_47377034')) {function content_52a32a023ce781_47377034($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

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
</td>
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
        <td><?php echo $_smarty_tpl->tpl_vars['airbaku']->value['lebar'];?>
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
