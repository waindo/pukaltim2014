<?php /* Smarty version Smarty-3.1.15, created on 2013-11-13 21:48:32
         compiled from "templates\sda\data-polder.tpl" */ ?>
<?php /*%%SmartyHeaderCode:357352a376e9de4f21-04670438%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '98a4b4a8db52d27d7c24a744ea72ab2d34164bd3' => 
    array (
      0 => 'templates\\sda\\data-polder.tpl',
      1 => 1386453323,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '357352a376e9de4f21-04670438',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_52a376ea022ae6_95107943',
  'variables' => 
  array (
    'judul' => 0,
    'datapolder' => 0,
    'polder' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52a376ea022ae6_95107943')) {function content_52a376ea022ae6_95107943($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

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
    	<th rowspan="2">Kode Polder</th>
        <th rowspan="2">Nama Bendali</th>
        <th colspan="3">Lokasi</th>
        <th rowspan="2">Tahun Dibangun</th>
        <th rowspan="2">Tahun Selesai Konstruksi</th>
        <th rowspan="2">Tahun Rehabilitasi</th>
        <th rowspan="2">Luas Polder (m2)</th>
        <th rowspan="2">Kapasitas Tampungan (m3)</th>
        <th rowspan="2">Keterangan</th>
        </tr>
    <tr>
    	<th>Kabupaten/Kota</th>
        <th>Kecamatan</th>
        <th>Desa</th>
    </tr>
    
    <?php  $_smarty_tpl->tpl_vars['polder'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['polder']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['datapolder']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['polder']->key => $_smarty_tpl->tpl_vars['polder']->value) {
$_smarty_tpl->tpl_vars['polder']->_loop = true;
?>
    <tr>
    	<td><?php echo $_smarty_tpl->tpl_vars['polder']->value['kode_polder'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['polder']->value['nama'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['polder']->value['kota'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['polder']->value['kecamatan'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['polder']->value['desa'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['polder']->value['thn_bangun'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['polder']->value['thn_selesai'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['polder']->value['thn_rehab'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['polder']->value['luas'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['polder']->value['kapasitasi'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['polder']->value['keterangan'];?>
</td>
    </tr>
    <?php } ?>
    </table></div>
  </div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ('sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
