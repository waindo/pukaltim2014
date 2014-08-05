<?php /* Smarty version Smarty-3.1.15, created on 2014-06-16 06:11:01
         compiled from "templates\sda\berita.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1620452993e8adc97d3-17050471%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ac02b7ee15cd472a5fd3a53a35cd7ca34921fbe9' => 
    array (
      0 => 'templates\\sda\\berita.tpl',
      1 => 1389485500,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1620452993e8adc97d3-17050471',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_52993e8ae90411_29090735',
  'variables' => 
  array (
    'arsipberita' => 0,
    'berita' => 0,
    'num' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52993e8ae90411_29090735')) {function content_52993e8ae90411_29090735($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'libs/php/smarty/plugins\\modifier.date_format.php';
if (!is_callable('smarty_modifier_truncate')) include 'libs/php/smarty/plugins\\modifier.truncate.php';
?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="row">
  <div class="span9">
    <div class="row content" style="padding:15px 15px 0 15px">
    <p style="border-bottom:1px dotted #CCC; padding-bottom:10px;"><a href="index.php">Home</a> / <a href="berita.html">Berita</a></p>
    <?php  $_smarty_tpl->tpl_vars['berita'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['berita']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['arsipberita']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['berita']->key => $_smarty_tpl->tpl_vars['berita']->value) {
$_smarty_tpl->tpl_vars['berita']->_loop = true;
?>
    <div class="posttitle">
     <div class="entry-utility">
      <div  class="date"> <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['berita']->value['tanggal'],"%d");?>
 </div>
      <div  class="month"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['berita']->value['tanggal'],"%b %Y");?>
</div>
     </div>                
       <h2><a href="single.html"><?php echo $_smarty_tpl->tpl_vars['berita']->value['judul'];?>
</a></h2>
       <div class="postoptions">
                            	<ul>
                                	<li class="owner"><a href="#" class="txthover">Admin</a></li>
                                    <li class="tags">
                                    <?php echo $_smarty_tpl->tpl_vars['berita']->value['tag'];?>

                                    </li>
                                </ul>
                            </div>
       <div class="clear"></div>    
    </div>
    <div class=" row">
    <div class="entry-content">
    <img src="assets/foto_berita/small_<?php echo $_smarty_tpl->tpl_vars['berita']->value['gambar'];?>
" style="float:left; margin-right:10px;"/>
    <p><?php echo preg_replace('!<[^>]*?>!', ' ', smarty_modifier_truncate($_smarty_tpl->tpl_vars['berita']->value['isi_berita'],450));?>
 <a href="post-<?php echo $_smarty_tpl->tpl_vars['berita']->value['id_berita'];?>
-<?php echo $_smarty_tpl->tpl_vars['berita']->value['judul_seo'];?>
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
        <li><a href="halberita-<?php echo $_smarty_tpl->tpl_vars['num']->value[$_smarty_tpl->getVariable('smarty')->value['section']['num']['index']]['i'];?>
.html"><?php echo $_smarty_tpl->tpl_vars['num']->value[$_smarty_tpl->getVariable('smarty')->value['section']['num']['index']]['i'];?>
</a></li>
      	<?php }?>
<?php endfor; endif; ?>
      </ul>
    </div>
    </div>
  </div>
<?php echo $_smarty_tpl->getSubTemplate ('sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
