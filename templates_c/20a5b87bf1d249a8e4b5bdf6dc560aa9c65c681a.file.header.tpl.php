<?php /* Smarty version Smarty-3.1.15, created on 2013-11-24 08:41:54
         compiled from "templates\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5356528f2f73b76ec5-87364944%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '20a5b87bf1d249a8e4b5bdf6dc560aa9c65c681a' => 
    array (
      0 => 'templates\\header.tpl',
      1 => 1385278911,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5356528f2f73b76ec5-87364944',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_528f2f73b79217_86072778',
  'variables' => 
  array (
    'identitas_nama_website' => 0,
    'template' => 0,
    'style' => 0,
    'mainmenu' => 0,
    'itemmainmenu' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_528f2f73b79217_86072778')) {function content_528f2f73b79217_86072778($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="EN" lang="EN" dir="ltr">
<head profile="http://gmpg.org/xfn/11">
<title><?php echo $_smarty_tpl->tpl_vars['identitas_nama_website']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['template']->value;?>
</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta http-equiv="imagetoolbar" content="no" />
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
/layout.css" type="text/css" />
<script type="text/javascript" src="assets/scripts/jquery-1.4.1.min.js"></script>
<script type="text/javascript" src="assets/scripts/jquery-slidedeck.pack.lite.js"></script>
<script type="text/javascript">
$(document).ready(function () {
    $("a[rel^='prettyPhoto']").prettyPhoto({
        theme: 'dark_rounded'
    });
});
</script>
<link rel="stylesheet" href="assets/styles/prettyPhoto.css" type="text/css" />
<script type="text/javascript" src="assets/scripts/jquery-prettyPhoto.js"></script>
<!-- End Gallery Specific Elements -->
<link rel="stylesheet" href="assets/styles/3_column.css" type="text/css" />
</head>
<body id="top">
<div class="wrapper row1">
  <div id="header" class="clear">
    <div class="fl_left">
      <h1><a href="index.html">Education Time</a></h1>
      <p>Free CSS Website Template</p>
    </div>
    <form action="#" method="post" id="login">
      <fieldset>
        <legend>Student Login</legend>
        <input type="password" />
        <input type="text" />
        <div id="forgot">Need <a href="#">Help ?</a> or <a href="#">Forgot Your Details ?</a></div>
        <input type="image" src="assets/images/sign_in.gif" id="signin" alt="Sign In" />
      </fieldset>
    </form>
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper row2">
  <div id="topnav">
    <ul>
      <?php  $_smarty_tpl->tpl_vars['itemmainmenu'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['itemmainmenu']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['mainmenu']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['itemmainmenu']->key => $_smarty_tpl->tpl_vars['itemmainmenu']->value) {
$_smarty_tpl->tpl_vars['itemmainmenu']->_loop = true;
?>
      
      <li><a href="<?php echo $_smarty_tpl->tpl_vars['itemmainmenu']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['itemmainmenu']->value['nama_menu'];?>
</a></li>
      </ul>
      
      <?php } ?>
    </ul>
    <div  class="clear"></div>
  </div>
</div><?php }} ?>
