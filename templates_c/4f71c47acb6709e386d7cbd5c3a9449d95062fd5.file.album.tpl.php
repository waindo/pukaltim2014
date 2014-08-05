<?php /* Smarty version Smarty-3.1.15, created on 2013-11-24 06:40:30
         compiled from "templates\album.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2975528f2f73b145d6-98817211%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4f71c47acb6709e386d7cbd5c3a9449d95062fd5' => 
    array (
      0 => 'templates\\album.tpl',
      1 => 1385271627,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2975528f2f73b145d6-98817211',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_528f2f73b544e3_42730763',
  'variables' => 
  array (
    'album' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_528f2f73b544e3_42730763')) {function content_528f2f73b544e3_42730763($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<script type="text/javascript">
$(document).ready(function () {
    $("a[rel^='prettyPhoto']").prettyPhoto({
        theme: 'dark_rounded'
    });
});
</script>
<link rel="stylesheet" href="styles/prettyPhoto.css" type="text/css" />
<script type="text/javascript" src="scripts/jquery-prettyPhoto.js"></script>
<!-- End Gallery Specific Elements -->
<div class="wrapper row4">
  <div id="container" class="clear">
    <!-- ####################################################################################################### -->
    <div id="gallery" class="clear">
      <div class="gallerycontainer clear">
        <div class="fl_left">
          <h2 class="title">Pilih Album</h2>
          <p>buat link daftar album disini</p>
        </div>
        <div class="fl_right">
          <ul>
          <?php  $_smarty_tpl->tpl_vars['c_album'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c_album']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['album']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c_album']->key => $_smarty_tpl->tpl_vars['c_album']->value) {
$_smarty_tpl->tpl_vars['c_album']->_loop = true;
?>
            <li><a href="assets/images/demo/440x215.gif" rel="prettyPhoto[gallery2]" title="Image 1"><img src="assets/images/demo/310x165.gif" alt="" /></a></li>
          <?php } ?>
          </ul>
        </div>
      </div>
    </div>
    <div class="clear"></div>
  </div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
