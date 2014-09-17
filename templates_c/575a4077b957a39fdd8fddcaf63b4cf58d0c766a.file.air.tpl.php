<?php /* Smarty version Smarty-3.1.15, created on 2014-09-16 05:48:42
         compiled from "templates\sda\air.tpl" */ ?>
<?php /*%%SmartyHeaderCode:27118541797e9b7a5c7-96670751%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '575a4077b957a39fdd8fddcaf63b4cf58d0c766a' => 
    array (
      0 => 'templates\\sda\\air.tpl',
      1 => 1410839320,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27118541797e9b7a5c7-96670751',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_541797e9ba16c8_05624661',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_541797e9ba16c8_05624661')) {function content_541797e9ba16c8_05624661($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="row">
  <div class="span9">
    <div class="row content">
    <p style="border-bottom:1px dotted #CCC; padding-bottom:10px;"><a href="index.php">Home</a>/ Neraca Air</p>
    <h1>Grafik Perbandingan </h1>
    <h2>Kebutuhan dan Ketersediaan Air</h2>
    <div align="center">
	</div>
	<div id="containerair" style="min-width: 400px; height: 400px; margin: 0 auto"></div>
  </div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ('sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
