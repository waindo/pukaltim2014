<?php /* Smarty version Smarty-3.1.15, created on 2013-11-26 15:35:55
         compiled from "templates\krs\detailberita.tpl" */ ?>
<?php /*%%SmartyHeaderCode:76915292a2cbbb0826-48683696%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'efdd89e65c0c8d1d37b2ada0bac3613033cd5215' => 
    array (
      0 => 'templates\\krs\\detailberita.tpl',
      1 => 1385476551,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '76915292a2cbbb0826-48683696',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5292a2cbc6d017_05573204',
  'variables' => 
  array (
    'judul' => 0,
    'gambar_berita' => 0,
    'isi_berita' => 0,
    'beritalainnya' => 0,
    'beritalain' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5292a2cbc6d017_05573204')) {function content_5292a2cbc6d017_05573204($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="wrapper row4">
  <div id="container" class="clear">
    <div id="content">
    <p style="border-bottom:1px dotted #CCC; padding-bottom:10px;"><a href="index.php">Home</a> / <a href="berita.html">Berita</a> / <?php echo $_smarty_tpl->tpl_vars['judul']->value;?>
</p>
    <h1><?php echo $_smarty_tpl->tpl_vars['judul']->value;?>
</h1>
    <p align="justify"><img src="assets/foto_berita/<?php echo $_smarty_tpl->tpl_vars['gambar_berita']->value;?>
" style="float:left; margin-right:10px;"/><?php echo $_smarty_tpl->tpl_vars['isi_berita']->value;?>
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
