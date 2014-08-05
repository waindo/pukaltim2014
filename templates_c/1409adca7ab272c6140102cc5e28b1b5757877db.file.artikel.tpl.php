<?php /* Smarty version Smarty-3.1.15, created on 2013-12-21 22:03:50
         compiled from "templates\sda\artikel.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3245352996184671318-03280827%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1409adca7ab272c6140102cc5e28b1b5757877db' => 
    array (
      0 => 'templates\\sda\\artikel.tpl',
      1 => 1387659826,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3245352996184671318-03280827',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_52996184728a35_99552368',
  'variables' => 
  array (
    'arsipartikel' => 0,
    'artikel' => 0,
    'num' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52996184728a35_99552368')) {function content_52996184728a35_99552368($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'libs/php/smarty/plugins\\modifier.date_format.php';
if (!is_callable('smarty_modifier_truncate')) include 'libs/php/smarty/plugins\\modifier.truncate.php';
?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="row">
  <div class="span9">
    <div class="row content">
    <p style="border-bottom:1px dotted #CCC; padding-bottom:10px;"><a href="index.php">Home</a> / <a href="artikel.html">artikel</a></p>
    <?php  $_smarty_tpl->tpl_vars['artikel'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['artikel']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['arsipartikel']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['artikel']->key => $_smarty_tpl->tpl_vars['artikel']->value) {
$_smarty_tpl->tpl_vars['artikel']->_loop = true;
?>
    <div class="posttitle">
                     
       <h2><a href="artikel-<?php echo $_smarty_tpl->tpl_vars['artikel']->value['id_artikel'];?>
-<?php echo $_smarty_tpl->tpl_vars['artikel']->value['judul_seo'];?>
.html"><?php echo $_smarty_tpl->tpl_vars['artikel']->value['judul'];?>
</a></h2>
        <div class="postartikel">
                            	<ul>
                                	<li class="owner">Admin</li>
                                    <li class="date"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['artikel']->value['tanggal'],"%d %B %Y");?>
</li>
                                    <li class="tags"><?php echo $_smarty_tpl->tpl_vars['artikel']->value['tag'];?>
</li>
                                </ul>
                            </div>
       <div class="clear"></div>    
    </div>
    <div class=" row">
    <div class="entry-content">
    <img src="assets/foto_artikel/small_<?php echo $_smarty_tpl->tpl_vars['artikel']->value['gambar'];?>
" style="float:left; margin-right:10px;"/>
    <p><?php echo preg_replace('!<[^>]*?>!', ' ', smarty_modifier_truncate($_smarty_tpl->tpl_vars['artikel']->value['isi_artikel'],450));?>
 <a href="artikel-<?php echo $_smarty_tpl->tpl_vars['artikel']->value['id_artikel'];?>
-<?php echo $_smarty_tpl->tpl_vars['artikel']->value['judul_seo'];?>
.html">Baca Selengkapnya</a></p>
    </div>
    </div>
    <div class="clear"></div>
    <?php } ?>
   
    <div class="pagination">
      <ul>
      <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['num'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['num']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['num']['name'] = 'num';
$_smarty_tpl->tpl_vars['smarty']->value['section']['num']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['num']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['num']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['num']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['num']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['num']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['num']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['num']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['num']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['num']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['num']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['num']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['num']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['num']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['num']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['num']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['num']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['num']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['num']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['num']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['num']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['num']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['num']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['num']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['num']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['num']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['num']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['num']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['num']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['num']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['num']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['num']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['num']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['num']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['num']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['num']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['num']['total']);
?>
	  <?php if ($_smarty_tpl->tpl_vars['num']->value[$_smarty_tpl->getVariable('smarty')->value['section']['num']['index']]['url']=="yes") {?>
		<?php echo $_smarty_tpl->tpl_vars['num']->value[$_smarty_tpl->getVariable('smarty')->value['section']['num']['index']]['i'];?>

	  <?php } else { ?>
        <li><a href="halartikel-<?php echo $_smarty_tpl->tpl_vars['num']->value[$_smarty_tpl->getVariable('smarty')->value['section']['num']['index']]['i'];?>
.html"><?php echo $_smarty_tpl->tpl_vars['num']->value[$_smarty_tpl->getVariable('smarty')->value['section']['num']['index']]['i'];?>
</a></li>
      	<?php }?>
<?php endfor; endif; ?>
      </ul>
    </div>
    </div></div>
<?php echo $_smarty_tpl->getSubTemplate ('sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
