<?php /* Smarty version Smarty-3.1.15, created on 2013-12-07 20:55:14
         compiled from "templates\sda\data-spb.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2188952a373b7218353-43407855%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a58a121bd0111c8c423e66553fe9f206d38d5af6' => 
    array (
      0 => 'templates\\sda\\data-spb.tpl',
      1 => 1386446111,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2188952a373b7218353-43407855',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_52a373b72e58d2_11880109',
  'variables' => 
  array (
    'judul' => 0,
    'dataspb' => 0,
    'spb' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52a373b72e58d2_11880109')) {function content_52a373b72e58d2_11880109($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

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
    <?php  $_smarty_tpl->tpl_vars['spb'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['spb']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['dataspb']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['spb']->key => $_smarty_tpl->tpl_vars['spb']->value) {
$_smarty_tpl->tpl_vars['spb']->_loop = true;
?>
    <tr>
    	<td><?php echo $_smarty_tpl->tpl_vars['spb']->value['kode_sistem'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['spb']->value['nama'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['spb']->value['kota'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['spb']->value['thn_pelaksanaan'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['spb']->value['normalisasi'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['spb']->value['pasanganbatu'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['spb']->value['beton'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['spb']->value['sheetpile'];?>
</td>
    </tr>
    <?php } ?>
    
    </table></div>
  </div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ('sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
