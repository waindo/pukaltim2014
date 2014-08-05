<?php /* Smarty version Smarty-3.1.15, created on 2014-08-05 08:48:40
         compiled from "templates\sda\page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:29164529ae1a045eed3-84325806%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9afaa5da1e8639c253b72ab7e320bfb35ddb904b' => 
    array (
      0 => 'templates\\sda\\page.tpl',
      1 => 1407143801,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29164529ae1a045eed3-84325806',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_529ae1a051a584_97812126',
  'variables' => 
  array (
    'judul_halaman_statis' => 0,
    'isi_halaman_statis' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_529ae1a051a584_97812126')) {function content_529ae1a051a584_97812126($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="row">
  <div class="span9">
    <div class="row content" style="padding:10px 15px 0 15px;">
    <p style="border-bottom:1px dotted #CCC; padding-bottom:10px;"><a href="index.php">Home</a> / <?php echo $_smarty_tpl->tpl_vars['judul_halaman_statis']->value;?>
</p>
    <h1><?php echo $_smarty_tpl->tpl_vars['judul_halaman_statis']->value;?>
</h1>
    <p><?php echo $_smarty_tpl->tpl_vars['isi_halaman_statis']->value;?>
</p>
 
  </div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ('sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
