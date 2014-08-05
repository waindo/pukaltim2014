<?php /* Smarty version Smarty-3.1.15, created on 2014-08-04 11:10:13
         compiled from "templates\sda\pustaka.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12829529f0796043e44-68865108%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ab08a30b022fc3177dca81dcc4517f686fb3812a' => 
    array (
      0 => 'templates\\sda\\pustaka.tpl',
      1 => 1403505733,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12829529f0796043e44-68865108',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_529f0796356e15_95714443',
  'variables' => 
  array (
    'download' => 0,
    'images' => 0,
    'd_download' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_529f0796356e15_95714443')) {function content_529f0796356e15_95714443($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'libs/php/smarty/plugins\\modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="row">
  <div class="span9">
    <div class="row content">
    <p style="border-bottom:1px dotted #CCC; padding-bottom:10px;"><a href="index.php">Home</a> / Pustaka</p>
    <?php  $_smarty_tpl->tpl_vars['d_download'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['d_download']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['download']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['d_download']->key => $_smarty_tpl->tpl_vars['d_download']->value) {
$_smarty_tpl->tpl_vars['d_download']->_loop = true;
?>
    <div class="posttitle">
                     
       <h2><img src="<?php echo $_smarty_tpl->tpl_vars['images']->value;?>
/pustaka.png" style="padding-right:8px;" /><a href="unduh.php?file=<?php echo $_smarty_tpl->tpl_vars['d_download']->value['nama_file'];?>
"><?php echo $_smarty_tpl->tpl_vars['d_download']->value['judul'];?>
</a></h2>
        <p style="margin:-20px 0px 0px 65px;padding-bottom:5px;font-size:10px;"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['d_download']->value['tgl_posting'],"%e %B %Y");?>
</p>
    </div>
    <div class=" row">
   
    </div>
    <div class="clear"></div>
    <?php } ?>
   
     </div>
  </div>
<?php echo $_smarty_tpl->getSubTemplate ('sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
