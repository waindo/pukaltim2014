<?php /* Smarty version Smarty-3.1.15, created on 2013-11-24 07:06:52
         compiled from "templates\berita.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20655291977c2a7383-93940217%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2246dc2bf41623b3dd50673cd0775b050318b046' => 
    array (
      0 => 'templates\\berita.tpl',
      1 => 1385103107,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20655291977c2a7383-93940217',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'arsipberita' => 0,
    'entriab' => 0,
    'num' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5291977c50b012_43446284',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5291977c50b012_43446284')) {function content_5291977c50b012_43446284($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'libs/php/smarty/plugins\\modifier.truncate.php';
?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="wrapper row4">
  <div id="container" class="clear">
    <!-- ####################################################################################################### -->
    <div id="left_column">
      <div class="holder">
        <h2 class="title">Quick Links</h2>
        <ul class="nostart">
          <li><a href="#">Academic departments</a></li>
          <li><a href="#">Alumni</a></li>
          <li><a href="#">Business &amp; Enterprise</a></li>
          <li><a href="#">Departments A-Z</a></li>
          <li><a href="#">Events</a></li>
          <li><a href="#">Graduate Courses</a></li>
          <li><a href="#">International Students</a></li>
          <li><a href="#">Job opportunities</a></li>
          <li><a href="#">Lifelong Learning</a></li>
          <li><a href="#">Maps and Directions</a></li>
          <li><a href="#">Online Courses</a></li>
          <li><a href="#">Parents</a></li>
          <li><a href="#">Postgraduate research</a></li>
          <li><a href="#">Postgraduate taught</a></li>
          <li><a href="#">Prospective Students</a></li>
          <li><a href="#">Research</a></li>
          <li><a href="#">Students</a></li>
          <li><a href="#">Teaching &amp; Learning</a></li>
          <li><a href="#">Undergraduate Courses</a></li>
          <li><a href="#">Videos</a></li>
          <li><a href="#">Visiting the University</a></li>
          <li><a href="#">What's On</a></li>
        </ul>
      </div>
      <div class="holder">
        <h2 class="title">Lorem ipsum dolor</h2>
        <div class="imgholder"><img src="assets/images/demo/190x90.gif" alt="" /></div>
        <div class="imgholder last"><img src="assets/images/demo/190x90.gif" alt="" /></div>
      </div>
    </div>
    <!-- ############ -->
    <div id="content">
      <?php  $_smarty_tpl->tpl_vars['entriab'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['entriab']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['arsipberita']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['entriab']->key => $_smarty_tpl->tpl_vars['entriab']->value) {
$_smarty_tpl->tpl_vars['entriab']->_loop = true;
?>
      <h2><?php echo $_smarty_tpl->tpl_vars['entriab']->value['judul'];?>
</h2>
      <p><?php echo $_smarty_tpl->tpl_vars['entriab']->value['hari'];?>
, <?php echo $_smarty_tpl->tpl_vars['entriab']->value['tanggal'];?>
</p>
      <p align="justify"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['entriab']->value['isi_berita'],300);?>
 ...<a href="berita-<?php echo $_smarty_tpl->tpl_vars['entriab']->value['id_berita'];?>
-<?php echo $_smarty_tpl->tpl_vars['entriab']->value['judul_seo'];?>
.html">Baca Selengkapnya</a></p>
      <?php } ?>
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
		<a href="berita.php?next=<?php echo $_smarty_tpl->tpl_vars['num']->value[$_smarty_tpl->getVariable('smarty')->value['section']['num']['index']]['i'];?>
"><?php echo $_smarty_tpl->tpl_vars['num']->value[$_smarty_tpl->getVariable('smarty')->value['section']['num']['index']]['i'];?>
</a>
	  <?php }?>
      <?php endfor; endif; ?>
    </div>
    <!-- ############ -->
    <div id="right_column">
      <div class="holder">
        <h2 class="title">Lorem ipsum dolor</h2>
        <p>Nuncsed sed conseque a at quismodo tris mauristibus sed habiturpiscinia sed.</p>
        <ul>
          <li><a href="#">Lorem ipsum dolor sit</a></li>
          <li>Etiam vel sapien et</li>
          <li><a href="#">Etiam vel sapien et</a></li>
        </ul>
        <p>Nuncsed sed conseque a at quismodo tris mauristibus sed habiturpiscinia sed. Condimentumsantincidunt dui mattis magna intesque purus orci augue lor nibh.</p>
        <p class="readmore"><a href="#">Continue Reading &raquo;</a></p>
      </div>
      <div class="holder">
        <h2 class="title">Lorem ipsum dolor</h2>
        <div class="imgholder"><img src="assets/images/demo/240x90.gif" alt="" /></div>
        <div class="imgholder"><img src="assets/images/demo/240x90.gif" alt="" /></div>
        <div class="imgholder last"><img src="assets/images/demo/240x90.gif" alt="" /></div>
      </div>
    </div>
    <!-- ####################################################################################################### -->
  </div>
</div>
<!-- ####################################################################################################### -->
<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
