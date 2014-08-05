<?php /* Smarty version Smarty-3.1.15, created on 2013-11-26 10:04:32
         compiled from "templates\krs\detailagenda.tpl" */ ?>
<?php /*%%SmartyHeaderCode:316815294638c6d49c6-71634180%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '631400e17fd94f02b73660deb304f4d1a7209503' => 
    array (
      0 => 'templates\\krs\\detailagenda.tpl',
      1 => 1385456665,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '316815294638c6d49c6-71634180',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5294638c71d830_45054448',
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
<?php if ($_valid && !is_callable('content_5294638c71d830_45054448')) {function content_5294638c71d830_45054448($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="wrapper row4">
  <div id="container" class="clear">
    <div id="content">
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
