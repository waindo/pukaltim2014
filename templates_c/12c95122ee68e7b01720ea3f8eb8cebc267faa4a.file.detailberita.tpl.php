<?php /* Smarty version Smarty-3.1.15, created on 2013-11-09 20:34:21
         compiled from "templates\sda\detailberita.tpl" */ ?>
<?php /*%%SmartyHeaderCode:230315298d66da8b216-32627764%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '12c95122ee68e7b01720ea3f8eb8cebc267faa4a' => 
    array (
      0 => 'templates\\sda\\detailberita.tpl',
      1 => 1389485406,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '230315298d66da8b216-32627764',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5298d66db90dc8_49228607',
  'variables' => 
  array (
    'judul' => 0,
    'tgl' => 0,
    'tag' => 0,
    'gambar_berita' => 0,
    'isi_berita' => 0,
    'images' => 0,
    'beritalainnya' => 0,
    'beritalain' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5298d66db90dc8_49228607')) {function content_5298d66db90dc8_49228607($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'libs/php/smarty/plugins\\modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="row">
  <div class="span9">
    <div class="content" style="padding:15px 15px 0 15px">
        <p style="border-bottom:1px dotted #CCC; padding-bottom:10px;"><a href="index.php">Home</a> / <a href="berita.html">Berita</a> / <?php echo $_smarty_tpl->tpl_vars['judul']->value;?>
</p>
     
     <div class="posttitle">
     <div class="entry-utility">
      <div  class="date"> <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['tgl']->value,"%d");?>
 </div>
      <div  class="month"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['tgl']->value,"%b %Y");?>
</div>
     </div>                
       <h2><a href="single.html"><?php echo $_smarty_tpl->tpl_vars['judul']->value;?>
</a></h2>
       <div class="postoptions">
          <ul>
            <li class="owner"><a href="#" class="txthover">Admin</a></li>
            <li class="tags">
              <?php echo $_smarty_tpl->tpl_vars['tag']->value;?>

            </li>
          </ul>
       </div>
       <div class="clear"></div></div>
       <div class=" row">
       <div class="entry-content">  
        <img src="assets/foto_berita/<?php echo $_smarty_tpl->tpl_vars['gambar_berita']->value;?>
" style="float:left; margin-right:10px;"/>
        <p><?php echo $_smarty_tpl->tpl_vars['isi_berita']->value;?>
</p> 
        </div>
        </div>
        
    <script language="javascript">
		document.write("<a href='http://www.facebook.com/share.php?u=" + document.URL + "' target='_blank'>");
	</script>
    
    <img src="<?php echo $_smarty_tpl->tpl_vars['images']->value;?>
/share_fb.png" /></a>
  	<hr />
        <h2>Berita Lainnya</h2>
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
