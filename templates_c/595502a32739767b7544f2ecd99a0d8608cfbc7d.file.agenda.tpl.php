<?php /* Smarty version Smarty-3.1.15, created on 2013-11-26 15:29:31
         compiled from "templates\krs\agenda.tpl" */ ?>
<?php /*%%SmartyHeaderCode:48905294ae7a8dcaa0-30565952%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '595502a32739767b7544f2ecd99a0d8608cfbc7d' => 
    array (
      0 => 'templates\\krs\\agenda.tpl',
      1 => 1385476167,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '48905294ae7a8dcaa0-30565952',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5294ae7a9f3828_24855877',
  'variables' => 
  array (
    'arsipagenda' => 0,
    'agenda' => 0,
    'num' => 0,
    'beritalainnya' => 0,
    'beritalain' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5294ae7a9f3828_24855877')) {function content_5294ae7a9f3828_24855877($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="wrapper row4">
  <div id="container" class="clear">
    <div id="content">
    <p style="border-bottom:1px dotted #CCC; padding-bottom:10px;"><a href="index.php">Home</a> / <a href="agenda.html">Agenda</a></p>
    <?php  $_smarty_tpl->tpl_vars['agenda'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['agenda']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['arsipagenda']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['agenda']->key => $_smarty_tpl->tpl_vars['agenda']->value) {
$_smarty_tpl->tpl_vars['agenda']->_loop = true;
?>
    <h1><a href="agenda-<?php echo $_smarty_tpl->tpl_vars['agenda']->value['id_agenda'];?>
-<?php echo $_smarty_tpl->tpl_vars['agenda']->value['tema_seo'];?>
.html"><?php echo $_smarty_tpl->tpl_vars['agenda']->value['tema'];?>
</a></h1>
    <p><?php echo $_smarty_tpl->tpl_vars['agenda']->value['isi_agenda'];?>
</p>
    <p style="border-bottom:1px solid #CCC; clear:left; padding-top:10px;"></p>
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
        <li><a href="halagenda-<?php echo $_smarty_tpl->tpl_vars['num']->value[$_smarty_tpl->getVariable('smarty')->value['section']['num']['index']]['i'];?>
.html"><?php echo $_smarty_tpl->tpl_vars['num']->value[$_smarty_tpl->getVariable('smarty')->value['section']['num']['index']]['i'];?>
</a></li>
      	<?php }?>
<?php endfor; endif; ?>
      </ul>
    </div>
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
