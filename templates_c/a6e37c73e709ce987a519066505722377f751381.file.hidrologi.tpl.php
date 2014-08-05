<?php /* Smarty version Smarty-3.1.15, created on 2014-08-05 09:24:41
         compiled from "templates\sda\hidrologi.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1651552b2fcda9fe3e8-23465491%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a6e37c73e709ce987a519066505722377f751381' => 
    array (
      0 => 'templates\\sda\\hidrologi.tpl',
      1 => 1403505757,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1651552b2fcda9fe3e8-23465491',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_52b2fcdacc29f5_05276559',
  'variables' => 
  array (
    'datahidro' => 0,
    'hidro' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52b2fcdacc29f5_05276559')) {function content_52b2fcdacc29f5_05276559($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="row">
  <div class="span9">
    <div class="row content">
    <p style="border-bottom:1px dotted #CCC; padding-bottom:10px;"><a href="index.php">Home</a>/ Data Prasarana SDA</p>
    <h1>Data Hidrologi SDA</h1>
    <h2>POS Hidrologi</h2>
    <div align="center">
 	<table border="1" class="gradienttable">
    <tr>
    	<th rowspan="2">Kode POS</th>
        <th rowspan="2">Nama POS Hidrologi</th>
        <th rowspan="2">DAS</th>
        <th rowspan="2">WS</th>
        <th colspan="3">Lokasi</th>
        <th rowspan="2">Tahun Bangun</th>
        <th rowspan="2">Tahun Rehabilitasi</th>
        <th colspan="2">Lokasi</th>
        <th rowspan="2">Elevasi (m)</th>
     </tr>
     <tr>
     	<th>Kabupaten/Kota</th>
        <th>Kecamatan</th>
        <th>Desa</th>
        <th>X</th>
        <th>Y</th>
     </tr>
        
    <?php  $_smarty_tpl->tpl_vars['hidro'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['hidro']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['datahidro']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['hidro']->key => $_smarty_tpl->tpl_vars['hidro']->value) {
$_smarty_tpl->tpl_vars['hidro']->_loop = true;
?>
    <tr>
    	<td><?php echo $_smarty_tpl->tpl_vars['hidro']->value['kode_pos'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['hidro']->value['nama_pos'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['hidro']->value['das'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['hidro']->value['ws'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['hidro']->value['kota'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['hidro']->value['kecamatan'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['hidro']->value['desa'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['hidro']->value['thn_bangun'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['hidro']->value['thn_rehab'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['hidro']->value['x'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['hidro']->value['y'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['hidro']->value['elevasi'];?>
</td>
     </tr>
    <?php } ?>
    
    </table></div>
  </div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ('sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
