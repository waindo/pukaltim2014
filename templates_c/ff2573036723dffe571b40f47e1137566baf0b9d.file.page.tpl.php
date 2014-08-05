<?php /* Smarty version Smarty-3.1.15, created on 2013-11-26 04:03:40
         compiled from "templates\krs\page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:323015291af6a6ecbe6-28087128%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ff2573036723dffe571b40f47e1137566baf0b9d' => 
    array (
      0 => 'templates\\krs\\page.tpl',
      1 => 1385435017,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '323015291af6a6ecbe6-28087128',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5291af6a7841b5_74141831',
  'variables' => 
  array (
    'judul_halaman_statis' => 0,
    'isi_halaman_statis' => 0,
    'beritalainnya' => 0,
    'beritalain' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5291af6a7841b5_74141831')) {function content_5291af6a7841b5_74141831($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="wrapper row4">
  <div id="container" class="clear">
    <div id="content">
    <p style="border-bottom:1px dotted #CCC; padding-bottom:10px;"><a href="index.php">Home</a> / <?php echo $_smarty_tpl->tpl_vars['judul_halaman_statis']->value;?>
</p>
    <h1><?php echo $_smarty_tpl->tpl_vars['judul_halaman_statis']->value;?>
</h1>
    <p><?php echo $_smarty_tpl->tpl_vars['isi_halaman_statis']->value;?>
</p>
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
