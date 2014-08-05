<?php /* Smarty version Smarty-3.1.15, created on 2013-11-24 07:05:07
         compiled from "templates\page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8598529197133ec056-60170097%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a6cdc0dd54836ae2c701704d3b888273b6085f10' => 
    array (
      0 => 'templates\\page.tpl',
      1 => 1384919643,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8598529197133ec056-60170097',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'dataagenda' => 0,
    'entriagenda' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_529197134f6004_74869659',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_529197134f6004_74869659')) {function content_529197134f6004_74869659($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="wrapper row4">
  <div id="container" class="clear">
    <!-- ####################################################################################################### -->
    <?php  $_smarty_tpl->tpl_vars['entriagenda'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['entriagenda']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['dataagenda']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['entriagenda']->key => $_smarty_tpl->tpl_vars['entriagenda']->value) {
$_smarty_tpl->tpl_vars['entriagenda']->_loop = true;
?>
    <h1><?php echo $_smarty_tpl->tpl_vars['entriagenda']->value['tema'];?>
</h1>
    <?php } ?>
    <p>This is a W3C compliant free website template from <a href="http://www.os-templates.com/" title="Free Website Templates">OS Templates</a>. This template is distributed using a <a href="http://www.os-templates.com/template-terms">Website Template Licence</a>.</p>
    <p>You can use and modify the template for both personal and commercial use. You must keep all copyright information and credit links in the template and associated files. For more CSS templates visit <a href="http://www.os-templates.com/">Free Website Templates</a>.</p>
    <ul>
      <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
      <li>Etiam vel sapien et est adipiscing commodo.</li>
      <li>Duis pharetra eleifend sapien, id faucibus dolor rutrum et.</li>
      <li>Donec et dui dolor, in lacinia leo.</li>
      <li>Mauris posuere tellus ac purus adipiscing dapibus.</li>
    </ul>
    <p>Vestibulumaccumsan egestibulum eu justo convallis augue estas aenean elit intesque sed. Facilispede estibulum nulla orna nisl velit elit ac aliquat non tincidunt. Namjusto cras urna urnaretra lor urna neque sed quis orci nulla. Laoremut vitae doloreet condimentumst phasellentes dolor ut a ipsum id consectetus. Inpede cumst vitae ris tellentesque fring intesquet nibh fames nulla curabitudin.</p>
    <ol>
      <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
      <li>Etiam vel sapien et est adipiscing commodo.</li>
      <li>Duis pharetra eleifend sapien, id faucibus dolor rutrum et.</li>
      <li>Donec et dui dolor, in lacinia leo.</li>
      <li>Mauris posuere tellus ac purus adipiscing dapibus.</li>
    </ol>
    <!-- ####################################################################################################### -->
    <div class="clear"></div>
  </div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
