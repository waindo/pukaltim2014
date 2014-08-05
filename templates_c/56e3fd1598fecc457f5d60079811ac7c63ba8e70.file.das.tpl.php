<?php /* Smarty version Smarty-3.1.15, created on 2014-08-05 05:02:04
         compiled from "templates\sda\das.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1699952a39bd186b906-45122595%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '56e3fd1598fecc457f5d60079811ac7c63ba8e70' => 
    array (
      0 => 'templates\\sda\\das.tpl',
      1 => 1407207721,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1699952a39bd186b906-45122595',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_52a39bd1927110_46572396',
  'variables' => 
  array (
    'datadas' => 0,
    'das' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52a39bd1927110_46572396')) {function content_52a39bd1927110_46572396($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="row">
  <div class="span9">
    <div class="row content">
    <p style="border-bottom:1px dotted #CCC; padding-bottom:10px;"><a href="index.php">Home</a>/ Data Prasarana SDA</p>
    <h1>Data Hidrologi SDA</h1>
    <h2>Data Aliran Sungai</h2>
    <div align="center">
 	<table border="1" class="gradienttable">
    <tr>
    	<th>Kode DAS</th>
        <th>Nama xDAS</th>
        <th>Panjang DAS (Km2)</th>
        <th>Luas DAS (Km3)</th>
        </tr>
    <?php  $_smarty_tpl->tpl_vars['das'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['das']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['datadas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['das']->key => $_smarty_tpl->tpl_vars['das']->value) {
$_smarty_tpl->tpl_vars['das']->_loop = true;
?>
    <tr>
    	<td><?php echo $_smarty_tpl->tpl_vars['das']->value['kode_das'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['das']->value['nama'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['das']->value['panjang'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['das']->value['luas'];?>
</td>
     </tr>
    <?php } ?>
    
    </table></div>
  </div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ('sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
