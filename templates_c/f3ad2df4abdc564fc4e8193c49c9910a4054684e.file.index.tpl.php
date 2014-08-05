<?php /* Smarty version Smarty-3.1.15, created on 2013-11-27 18:37:23
         compiled from "templates\krs\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:162805291ab65725b26-54716299%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f3ad2df4abdc564fc4e8193c49c9910a4054684e' => 
    array (
      0 => 'templates\\krs\\index.tpl',
      1 => 1385531818,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '162805291ab65725b26-54716299',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5291ab65c2bf48_18127560',
  'variables' => 
  array (
    'slider' => 0,
    'itemslider' => 0,
    'dataagenda' => 0,
    'entryagenda' => 0,
    'fototerbaru' => 0,
    'foto' => 0,
    'identitas_fb' => 0,
    'identitas_twitter' => 0,
    'databerita' => 0,
    'entryberita' => 0,
    'download' => 0,
    'c_download' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5291ab65c2bf48_18127560')) {function content_5291ab65c2bf48_18127560($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'libs/php/smarty/plugins\\modifier.truncate.php';
?>
<?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="wrapper row3">
  <div id="featured_slide">
    <dl class="slidedeck">
      <?php  $_smarty_tpl->tpl_vars['itemslider'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['itemslider']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['slider']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['itemslider']->key => $_smarty_tpl->tpl_vars['itemslider']->value) {
$_smarty_tpl->tpl_vars['itemslider']->_loop = true;
?>
      <dt><?php echo $_smarty_tpl->tpl_vars['itemslider']->value['judul'];?>
</dt>
      <dd><img src="assets/slider/<?php echo $_smarty_tpl->tpl_vars['itemslider']->value['gambar'];?>
"/></dd>
      <?php } ?>	
    </dl>
  </div>
</div>
<div class="wrapper row4">
  <div id="container" class="clear">
    <div id="homepage" class="clear">
      <div class="fl_left">
        <h2 class="title">Agenda Kebun Raya Unmul Samarinda</h2>
        <div id="hpage_quicklinks">
          <ul class="clear">
		  <?php  $_smarty_tpl->tpl_vars["entryagenda"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["entryagenda"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['dataagenda']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["entryagenda"]->key => $_smarty_tpl->tpl_vars["entryagenda"]->value) {
$_smarty_tpl->tpl_vars["entryagenda"]->_loop = true;
?>
            <li><a href="agenda-<?php echo $_smarty_tpl->tpl_vars['entryagenda']->value['id_agenda'];?>
-<?php echo $_smarty_tpl->tpl_vars['entryagenda']->value['tema_seo'];?>
.html"><?php echo $_smarty_tpl->tpl_vars['entryagenda']->value['tema'];?>
</a></li>
          <?php }
if (!$_smarty_tpl->tpl_vars["entryagenda"]->_loop) {
?>
		  Tidak ada judul
		  <?php } ?>
		  </ul>
        </div>
        <h2 class="title">Foto Kegiatan Terbaru</h2>
        <div id="hpage_gallery">
          <ul class="clear">
          <?php  $_smarty_tpl->tpl_vars["foto"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["foto"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['fototerbaru']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["foto"]->key => $_smarty_tpl->tpl_vars["foto"]->value) {
$_smarty_tpl->tpl_vars["foto"]->_loop = true;
?>
            <li><a href="assets/img_galeri/<?php echo $_smarty_tpl->tpl_vars['foto']->value['gbr_gallery'];?>
" rel="prettyPhoto[gallery]" title="<?php echo $_smarty_tpl->tpl_vars['foto']->value['jdl_gallery'];?>
"><img src="assets/img_galeri/kecil_<?php echo $_smarty_tpl->tpl_vars['foto']->value['gbr_gallery'];?>
" width="175"/></a></li>
          <?php } ?>
          </ul>
        </div>
        <h2 class="title">Join Kami di Social Network</h2>
        <div id="hpage_socialize">
          <ul>
            <li><span>Facebook:</span> <a href="<?php echo $_smarty_tpl->tpl_vars['identitas_fb']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['identitas_fb']->value;?>
</a></li>
            <li><span>Twitter:</span> <a href="<?php echo $_smarty_tpl->tpl_vars['identitas_twitter']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['identitas_twitter']->value;?>
</a></li>
          </ul>          
        </div>
        <h2 class="title" style="margin-top:10px;">Kelender</h2>
      	<div id="datepicker" style="width:100%"></div>
      </div>
      <div class="fl_right">
        <h2 class="title">Info Terkini</h2>
        <div id="hpage_latestnews">
          <ul>
          <?php  $_smarty_tpl->tpl_vars["entryberita"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["entryberita"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['databerita']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["entryberita"]->key => $_smarty_tpl->tpl_vars["entryberita"]->value) {
$_smarty_tpl->tpl_vars["entryberita"]->_loop = true;
?>
            <li>
              <h2><?php echo $_smarty_tpl->tpl_vars['entryberita']->value['judul'];?>
</h2>
              <p><?php echo $_smarty_tpl->tpl_vars['entryberita']->value['hari'];?>
,<?php echo $_smarty_tpl->tpl_vars['entryberita']->value['tanggal'];?>
 </p>
              <div class="imgl" style="margin-right:5px;"><img src="assets/foto_berita/small_<?php echo $_smarty_tpl->tpl_vars['entryberita']->value['gambar'];?>
"/></div>
              <p align="justify">
              <?php echo preg_replace('!<[^>]*?>!', ' ', smarty_modifier_truncate($_smarty_tpl->tpl_vars['entryberita']->value['isi_berita'],300));?>

              </p>
              <p class="readmore"><a href="post-<?php echo $_smarty_tpl->tpl_vars['entryberita']->value['id_berita'];?>
-<?php echo $_smarty_tpl->tpl_vars['entryberita']->value['judul_seo'];?>
.html">Baca Selengkapnya &raquo;</a></p>
            </li>
            
            <?php }
if (!$_smarty_tpl->tpl_vars["entryberita"]->_loop) {
?>
		    Tidak ada data
            
            <?php } ?>
            
          </ul>
        </div>
        <div id="hpage_specials" class="clear">
          <ul>
            <li>
              <h2 class="title">Virtual Tour</h2>
              <div class="box">
                <div class="imgholder"><img src="images/demo/160x160.gif" alt="" /></div>
                <p>Vestassapede et donec ut est liberos sus et eget sed eget. Quisqueta habitur augue magnisl magna phasellus sagittitor ant curabiturpis molesuada amet. Tricessem faucibulum sit sed eleifendisse accumsan justo in tor vel purus.</p>
                <p class="readmore"><a href="#">Take The Tour &raquo;</a></p>
              </div>
            </li>
            <li>
              <h2 class="title">Sporting Activities</h2>
              <div class="box">
                <p><strong>Jan 01:</strong> <a href="#">Rugby</a></p>
                <div class="imgholder"><img src="images/demo/160x80.gif" alt="" /></div>
                <p>Vestassapede et donec ut est liberos sus et eget sed eget.</p>
              </div>
              <div class="box">
                <p><strong>Jan 06:</strong> <a href="#">Volleyball</a></p>
                <div class="imgholder"><img src="images/demo/160x80.gif" alt="" /></div>
                <p>Vestassapede et donec ut est liberos sus et eget sed eget.</p>
              </div>
            </li>
            <li class="last">
              <h2 class="title">Download Data</h2>
              <div class="box">
              <?php  $_smarty_tpl->tpl_vars['c_download'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c_download']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['download']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c_download']->key => $_smarty_tpl->tpl_vars['c_download']->value) {
$_smarty_tpl->tpl_vars['c_download']->_loop = true;
?>
              <a href="unduh.php?file=<?php echo $_smarty_tpl->tpl_vars['c_download']->value['nama_file'];?>
">- <?php echo $_smarty_tpl->tpl_vars['c_download']->value['judul'];?>
</a> <br />
              <?php } ?>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <!-- ####################################################################################################### -->
  </div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
