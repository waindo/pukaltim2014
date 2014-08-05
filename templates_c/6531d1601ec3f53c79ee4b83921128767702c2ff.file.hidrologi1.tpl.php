<?php /* Smarty version Smarty-3.1.15, created on 2014-04-05 05:47:50
         compiled from "templates\sda\hidrologi1.tpl" */ ?>
<?php /*%%SmartyHeaderCode:28768533e454f74e184-56148104%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6531d1601ec3f53c79ee4b83921128767702c2ff' => 
    array (
      0 => 'templates\\sda\\hidrologi1.tpl',
      1 => 1396669530,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28768533e454f74e184-56148104',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_533e454f953150_22326525',
  'variables' => 
  array (
    'datahidro' => 0,
    'hidro' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_533e454f953150_22326525')) {function content_533e454f953150_22326525($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header1.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="row">
  <div class="span9">
    <div class="row content">
    <p style="border-bottom:1px dotted #CCC; padding-bottom:10px;"><a href="index.php">Home</a>/ Data Prasarana SDA</p>
    <h1>Data Hidrologi SDA</h1>
    <h2>POS Hidrologi</h2>
	<div style="Width: 100%; overflow-x: scroll;">
 	<table border="1" class="gradienttable">
    <tr>
    	<th rowspan="2">Kode POS</th>
        <th rowspan="2">Nama POS Hidrologi</th>
        <th rowspan="2">DAS</th>
        <th rowspan="2">WS</th>
        <th colspan="4">Lokasi</th>
        <th rowspan="2">Tahun Bangun</th>
        <th rowspan="2">Jenis Sensor</th>
        <th colspan="2">Koordinat</th>
        <th rowspan="2">Elevasi (m)</th>
     </tr>
     <tr>
		<th>Lokasi</th>
     	<th>Desa</th>
        <th>Kecamatan</th>
        <th>Kabupaten</th>
        <th>X</th>
        <th>Y</th>
     </tr>
        
    <?php  $_smarty_tpl->tpl_vars['hidro'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['hidro']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['datahidro']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['hidro']->key => $_smarty_tpl->tpl_vars['hidro']->value) {
$_smarty_tpl->tpl_vars['hidro']->_loop = true;
?>
    <tr>
    	<td><?php echo $_smarty_tpl->tpl_vars['hidro']->value['id'];?>
</td>
        <td><a class="fancybox fancybox.ajax" href="xpos/rltm.php?do=<?php echo $_smarty_tpl->tpl_vars['hidro']->value['id'];?>
" data-fancybox-group="postel" title="<?php echo $_smarty_tpl->tpl_vars['hidro']->value['namasta'];?>
"><?php echo $_smarty_tpl->tpl_vars['hidro']->value['namasta'];?>
</a></td>
        <td><?php echo $_smarty_tpl->tpl_vars['hidro']->value['sungai'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['hidro']->value['wil_sungai'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['hidro']->value['lokasi'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['hidro']->value['desa'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['hidro']->value['kecamatan'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['hidro']->value['kabupaten'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['hidro']->value['tahun'];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['hidro']->value['type_alat'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['hidro']->value['pos_x'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['hidro']->value['pos_y'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['hidro']->value['pos_z'];?>
</td>
		</tr>
    <?php } ?>
    
    </table></div>
  </div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ('sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('footer1.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
