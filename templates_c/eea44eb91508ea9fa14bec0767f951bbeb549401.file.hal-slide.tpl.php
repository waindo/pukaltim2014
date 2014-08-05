<?php /* Smarty version Smarty-3.1.15, created on 2013-12-21 19:38:38
         compiled from "templates\sda\hal-slide.tpl" */ ?>
<?php /*%%SmartyHeaderCode:151352b5d605530b56-55652592%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eea44eb91508ea9fa14bec0767f951bbeb549401' => 
    array (
      0 => 'templates\\sda\\hal-slide.tpl',
      1 => 1387651114,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '151352b5d605530b56-55652592',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_52b5d6055ebde6_53149480',
  'variables' => 
  array (
    'judul' => 0,
    'gambar' => 0,
    'deskripsi' => 0,
    'images' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52b5d6055ebde6_53149480')) {function content_52b5d6055ebde6_53149480($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="row">
  <div class="span9">
    <div class="row content">
    <p style="border-bottom:1px dotted #CCC; padding-bottom:10px;"><a href="index.php">Home</a> / <?php echo $_smarty_tpl->tpl_vars['judul']->value;?>
</p>
    <h1><?php echo $_smarty_tpl->tpl_vars['judul']->value;?>
</h1>
    <img src="assets/slider/<?php echo $_smarty_tpl->tpl_vars['gambar']->value;?>
" align="middle" />
    <p><?php echo $_smarty_tpl->tpl_vars['deskripsi']->value;?>
</p>
 	
    <script language="javascript">
		document.write("<a href='http://www.facebook.com/share.php?u=" + document.URL + "' target='_blank'>");
	</script>
    
    <img src="<?php echo $_smarty_tpl->tpl_vars['images']->value;?>
/share_fb.png" /></a>
  </div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ('sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
