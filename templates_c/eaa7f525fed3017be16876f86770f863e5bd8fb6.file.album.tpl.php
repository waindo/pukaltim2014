<?php /* Smarty version Smarty-3.1.15, created on 2013-11-09 20:23:46
         compiled from "templates\sda\album.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2594552ba014c607616-65992163%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eaa7f525fed3017be16876f86770f863e5bd8fb6' => 
    array (
      0 => 'templates\\sda\\album.tpl',
      1 => 1389485487,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2594552ba014c607616-65992163',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_52ba014c6d3b26_39649804',
  'variables' => 
  array (
    'album' => 0,
    'itemalbum' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52ba014c6d3b26_39649804')) {function content_52ba014c6d3b26_39649804($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="row">
  <div class="span9">
    <div class="row content" style="padding:15px 15px 0 15px">
    <p style="border-bottom:1px dotted #CCC; padding-bottom:10px;"><a href="index.php">Home</a> / Album Foto</p>
    <?php  $_smarty_tpl->tpl_vars['itemalbum'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['itemalbum']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['album']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['itemalbum']->key => $_smarty_tpl->tpl_vars['itemalbum']->value) {
$_smarty_tpl->tpl_vars['itemalbum']->_loop = true;
?>
    <div class="span2">
    <a href="album-<?php echo $_smarty_tpl->tpl_vars['itemalbum']->value['id_album'];?>
-<?php echo $_smarty_tpl->tpl_vars['itemalbum']->value['album_seo'];?>
.html"><img src="assets/img_album/kecil_<?php echo $_smarty_tpl->tpl_vars['itemalbum']->value['gbr_album'];?>
" width="150" style="padding:2px;box-shadow: 0 0 5px #bbb; border:1px solid #CCC;"/></a>
    <p align="center"><?php echo $_smarty_tpl->tpl_vars['itemalbum']->value['jdl_album'];?>
</p>
   	</div>
    <?php } ?>
    </div>
    <div class="clear"></div>
  </div>
<?php echo $_smarty_tpl->getSubTemplate ('sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
