<?php /* Smarty version Smarty-3.1.15, created on 2013-11-24 06:44:24
         compiled from "templates\detailberita.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1790952919238b01d03-21079457%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ca7de1ec3de4aa3ffaa58b1b2dbe80e6af9f6197' => 
    array (
      0 => 'templates\\detailberita.tpl',
      1 => 1385099659,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1790952919238b01d03-21079457',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'judul' => 0,
    'hari' => 0,
    'tgl' => 0,
    'isi_berita' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_52919238c132b2_28231334',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52919238c132b2_28231334')) {function content_52919238c132b2_28231334($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

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
      <h2><?php echo $_smarty_tpl->tpl_vars['judul']->value;?>
</h2>
      <p><?php echo $_smarty_tpl->tpl_vars['hari']->value;?>
, <?php echo $_smarty_tpl->tpl_vars['tgl']->value;?>
</p>
      <p align="justify"><?php echo $_smarty_tpl->tpl_vars['isi_berita']->value;?>
</p>
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
