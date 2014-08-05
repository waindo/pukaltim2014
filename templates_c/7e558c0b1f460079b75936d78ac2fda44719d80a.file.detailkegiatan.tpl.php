<?php /* Smarty version Smarty-3.1.15, created on 2013-12-05 22:14:27
         compiled from "templates\sda\detailkegiatan.tpl" */ ?>
<?php /*%%SmartyHeaderCode:863652a0b0d56e0829-93834381%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7e558c0b1f460079b75936d78ac2fda44719d80a' => 
    array (
      0 => 'templates\\sda\\detailkegiatan.tpl',
      1 => 1386264514,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '863652a0b0d56e0829-93834381',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_52a0b0d576bf10_31286614',
  'variables' => 
  array (
    'datakegiatan' => 0,
    'd_kegiatan' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52a0b0d576bf10_31286614')) {function content_52a0b0d576bf10_31286614($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="row">
  <div class="span9">
    <div class="content">
        <p style="border-bottom:1px dotted #CCC; padding-bottom:10px;"><a href="index.php">Home</a> / Kegiatan</p>
    <table border="1" class="gradienttable">
    <tr>
    <th>Progam</th>
    <th>Pekerjaan</th>
    <th>Lokasi</th>
    <th>Rekanan</th>
    <th>Volume</th>
    </tr>
    <?php  $_smarty_tpl->tpl_vars['d_kegiatan'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['d_kegiatan']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['datakegiatan']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['d_kegiatan']->key => $_smarty_tpl->tpl_vars['d_kegiatan']->value) {
$_smarty_tpl->tpl_vars['d_kegiatan']->_loop = true;
?>
    <tr>
    	<td width="35%"><?php echo $_smarty_tpl->tpl_vars['d_kegiatan']->value['program'];?>
</td>
        <td width="30%"><a href="detailkeg-<?php echo $_smarty_tpl->tpl_vars['d_kegiatan']->value['id_kegiatan'];?>
-<?php echo $_smarty_tpl->tpl_vars['d_kegiatan']->value['pekerjaan'];?>
.html"><?php echo $_smarty_tpl->tpl_vars['d_kegiatan']->value['pekerjaan'];?>
</a></td>
        <td width="15%"><?php echo $_smarty_tpl->tpl_vars['d_kegiatan']->value['lokasi'];?>
</td>
        <td width="15%"><?php echo $_smarty_tpl->tpl_vars['d_kegiatan']->value['rekanan'];?>
</td>
        <td width="5%"><?php echo $_smarty_tpl->tpl_vars['d_kegiatan']->value['volume'];?>
</td>
    </tr>
    
    <?php } ?>
   </table>
    
    </div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ('sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
