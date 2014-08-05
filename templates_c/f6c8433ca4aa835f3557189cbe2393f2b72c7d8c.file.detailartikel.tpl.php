<?php /* Smarty version Smarty-3.1.15, created on 2013-12-21 21:29:53
         compiled from "templates\sda\detailartikel.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4945529d7403b183c0-89630022%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f6c8433ca4aa835f3557189cbe2393f2b72c7d8c' => 
    array (
      0 => 'templates\\sda\\detailartikel.tpl',
      1 => 1387657681,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4945529d7403b183c0-89630022',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_529d7403c595e9_77464575',
  'variables' => 
  array (
    'judul' => 0,
    'tgl' => 0,
    'tag' => 0,
    'gambar_berita' => 0,
    'isi_artikel' => 0,
    'images' => 0,
    'artikellainnya' => 0,
    'artikellain' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_529d7403c595e9_77464575')) {function content_529d7403c595e9_77464575($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'libs/php/smarty/plugins\\modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="row">
  <div class="span9">
    <div class="content">
        <p style="border-bottom:1px dotted #CCC; padding-bottom:10px;"><a href="index.php">Home</a> / <a href="artikel.html">Artikel</a> / <?php echo $_smarty_tpl->tpl_vars['judul']->value;?>
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
        <p><?php echo $_smarty_tpl->tpl_vars['isi_artikel']->value;?>
</p> 
        </div>
        </div>
        
    <script language="javascript">
		document.write("<a href='http://www.facebook.com/share.php?u=" + document.URL + "' target='_blank'>");
	</script>
    
    <img src="<?php echo $_smarty_tpl->tpl_vars['images']->value;?>
/share_fb.png" /></a>
        <h2>Artikel Lainnya</h2>
        <ul>
        <?php  $_smarty_tpl->tpl_vars['artikellain'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['artikellain']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['artikellainnya']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['artikellain']->key => $_smarty_tpl->tpl_vars['artikellain']->value) {
$_smarty_tpl->tpl_vars['artikellain']->_loop = true;
?>
          <li><a href="post-<?php echo $_smarty_tpl->tpl_vars['artikellain']->value['id_artikel'];?>
-<?php echo $_smarty_tpl->tpl_vars['artikellain']->value['judul_seo'];?>
.html"><?php echo $_smarty_tpl->tpl_vars['artikellain']->value['judul'];?>
</a></li>
        <?php } ?>
        </ul>    
    </div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ('sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
