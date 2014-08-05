<?php /* Smarty version Smarty-3.1.15, created on 2013-12-05 22:15:45
         compiled from "templates\sda\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12324529feb32705ca6-58427398%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f9d9ae4360da8ba4066a3b2592f7803fd370fb39' => 
    array (
      0 => 'templates\\sda\\login.tpl',
      1 => 1386278136,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12324529feb32705ca6-58427398',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_529feb3273a226_11731710',
  'variables' => 
  array (
    'images' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_529feb3273a226_11731710')) {function content_529feb3273a226_11731710($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="row">
  <div class="span9">
    <div class="content">
        <p style="border-bottom:1px dotted #CCC; padding-bottom:10px;"><a href="index.php">Home</a> / Progres Kegiatan</p>
    <p>Silahkan login di menu sebelah kanan untuk mengisi progres kegiatan <img src="<?php echo $_smarty_tpl->tpl_vars['images']->value;?>
/arrow-right.png" /></p>
    </div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ('sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
