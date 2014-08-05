<?php /* Smarty version Smarty-3.1.15, created on 2013-12-21 21:25:23
         compiled from "templates\sda\detailagenda.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8758529953fd0a7c50-29217561%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9bee127dc19174a4aa960391e79518387cb9d9df' => 
    array (
      0 => 'templates\\sda\\detailagenda.tpl',
      1 => 1385783512,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8758529953fd0a7c50-29217561',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_529953fd1204d9_85749657',
  'variables' => 
  array (
    'tema_agenda' => 0,
    'tempat_agenda' => 0,
    'jam_agenda' => 0,
    'pengirim_agenda' => 0,
    'isi_agenda' => 0,
    'beritalainnya' => 0,
    'beritalain' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_529953fd1204d9_85749657')) {function content_529953fd1204d9_85749657($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="row">
  <div class="span9">
    <div class="content">
    <p style="border-bottom:1px dotted #CCC; padding-bottom:10px;"><a href="index.php">Home</a> / <a href="agenda.html">Agenda</a> / <?php echo $_smarty_tpl->tpl_vars['tema_agenda']->value;?>
</p>
    <h1><?php echo $_smarty_tpl->tpl_vars['tema_agenda']->value;?>
</h1>
    <p><b>Tempat</b> : <?php echo $_smarty_tpl->tpl_vars['tempat_agenda']->value;?>
, <b>Jam</b> : <?php echo $_smarty_tpl->tpl_vars['jam_agenda']->value;?>
</p>
    <p><b>Dikirim Oleh</b> : <?php echo $_smarty_tpl->tpl_vars['pengirim_agenda']->value;?>
</p>
    <p><b>Tentang </b> : <?php echo $_smarty_tpl->tpl_vars['isi_agenda']->value;?>
</p>
    
            <h2>Agenda Lainnya</h2>
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
<?php echo $_smarty_tpl->getSubTemplate ('sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
