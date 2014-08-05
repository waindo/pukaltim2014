<?php /* Smarty version Smarty-3.1.15, created on 2013-11-26 04:47:06
         compiled from "templates\krs\album.tpl" */ ?>
<?php /*%%SmartyHeaderCode:174595292a546d9fc11-63870366%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '65ef0f02c0bc1db07f2b26c47ca1234f9425fc8c' => 
    array (
      0 => 'templates\\krs\\album.tpl',
      1 => 1385437624,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '174595292a546d9fc11-63870366',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5292a546e1f391_06142624',
  'variables' => 
  array (
    'album' => 0,
    'itemalbum' => 0,
    'beritalainnya' => 0,
    'beritalain' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5292a546e1f391_06142624')) {function content_5292a546e1f391_06142624($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="wrapper row4">
  <div id="container" class="clear">
    <div id="content">
    <p style="border-bottom:1px dotted #CCC; padding-bottom:10px;"><a href="index.php">Home</a> / Album Foto</p>
    <?php  $_smarty_tpl->tpl_vars['itemalbum'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['itemalbum']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['album']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['itemalbum']->key => $_smarty_tpl->tpl_vars['itemalbum']->value) {
$_smarty_tpl->tpl_vars['itemalbum']->_loop = true;
?>
    <a href="album-<?php echo $_smarty_tpl->tpl_vars['itemalbum']->value['id_album'];?>
-<?php echo $_smarty_tpl->tpl_vars['itemalbum']->value['album_seo'];?>
.html"><img src="assets/img_album/kecil_<?php echo $_smarty_tpl->tpl_vars['itemalbum']->value['gbr_album'];?>
" width="150" style="padding:3px; border:1px solid #CCC; margin-right:20px;"/></a>
    <?php } ?>
    </div>
    <div id="column">
      <div class="subnav">
        <h2>Info Lainnya</h2>
        <ul>
        <?php  $_smarty_tpl->tpl_vars['beritalain'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['beritalain']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['beritalainnya']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['beritalain']->key => $_smarty_tpl->tpl_vars['beritalain']->value) {
$_smarty_tpl->tpl_vars['beritalain']->_loop = true;
?>
          <li><a href="post-<?php echo $_smarty_tpl->tpl_vars['beritalain']->value['id_berita'];?>
-<?php echo $_smarty_tpl->tpl_vars['beritalain']->value['judul_seo'];?>
.html"><?php echo $_smarty_tpl->tpl_vars['beritalain']->value['judul'];?>
</a></li>
        <?php } ?>
        </ul>
      </div>
      </div>
    <div class="clear"></div>
  </div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
